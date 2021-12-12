from .models import Post
from django.contrib import messages
from django.forms.forms import Form
from .form import SignUpForm,LoginForm,PostForm
from django.contrib.auth.models import Group, User
from django.shortcuts import render,HttpResponseRedirect
from django.contrib.auth import authenticate,login,logout


# Create your views here.
def home(request):
    post=Post.objects.all()
    return render(request,'home.html',{'post':post})

def dashboard (request):

    if request.user.is_authenticated:
     
    #  print(request.user.groups.all())
     group = ""
     for i in request.user.groups.all():
         group = i
     print(group)
     print(request.user)
     if str(group) == "student":
         post=Post.objects.all()
     elif str(group) == "mentor":
         print("ds")
         post=Post.objects.filter(mentor = request.user)
     else:
         post=Post.objects.all()
    #  print(type(post))
     
    #  for i in post:
    #      if i.mentor == "Ankur Raj":
            
     
     return render (request,'dashboard.html',{'post':post})
    else:
        return HttpResponseRedirect('/login/')

        
def user_signup(request):
   if request.method =='POST':
       form=SignUpForm(request.POST)
       if form.is_valid():
           messages.success(request,'Congratulation Signed up Successfully')
          
           user=form.save()
           group=form.cleaned_data['Category']
           b=['student']
           print(group)
    
           if group==b:
            group=Group.objects.get(name='student')
           else:
               group=Group.objects.get(name='mentor')
           user.groups.add(group)
       return HttpResponseRedirect('/login/')

   else:
     form= SignUpForm()
   return render(request,'login.html',{'form':form})
          
#    else:
#      form= SignUpForm()
#    return render(request,'login.html',{'form':form})


def user_login(request):
    if not request.user.is_authenticated:
        if request.method =='POST':
            form=LoginForm(request=request,data=request.POST)
            if form.is_valid():
                uname=form.cleaned_data['username']
                upass=form.cleaned_data['password']
                user=authenticate(username=uname,password=upass)
                if user is not None:
                    login(request,user)
                    messages.success(request,'Hello '+uname.capitalize()+'!!You are logged in successfully.')
                    return HttpResponseRedirect('/dashboard/')
        else:
            form=LoginForm()
        #     return render (request,'login.html',{'form':form})
        # form=LoginForm()
        return render(request,'login.html',{'form':form})
    else:
        return HttpResponseRedirect('/dashboard/') 



def user_logout(request):
    logout(request)
    return render(request,'home.html') 

def add_post(request):
    if request.user.is_authenticated:
        if request.method=='POST':
          form=PostForm(request.POST)
          if form.is_valid():
              crs=form.cleaned_data['course']
              des=form.cleaned_data['desc']
              mtr=form.cleaned_data['mentor']
              pst=Post(course=crs,desc=des,mentor=mtr)
              pst.save()
              form=PostForm()
              return HttpResponseRedirect('/dashboard/')
        else:
             form=PostForm()
        return render(request,'add_post.html',{'form':form})
    else:
          return HttpResponseRedirect('/login/')

def delete_post(request,id):
    
    #    return(request,'dashboard.html')
    # else:
    #     return(request,'/login/')
  if request.user.is_authenticated:
    if request.method=='POST':
        pi=Post.objects.get(pk=id)
        pi.delete()
        return HttpResponseRedirect('/dashboard/')
    else:
      return HttpResponseRedirect("/login/")

def follow_post(request,id):
    
    #    return(request,'dashboard.html')
    # else:
    #     return(request,'/login/')
  if request.user.is_authenticated:
    if request.method=='POST':
        pi=Post.objects.get(pk=id)
        print(pi)
        pi.delete()
        students = pi.student
        if students:
            students += "," + str(request.user)
        else:
            students = str(request.user)
        pst = Post(course=pi.course,desc=pi.desc,mentor=pi.mentor,student=students)
        pst.save()
        
        print(pi.course)
        # pi.update(student = "kansihk")
        return HttpResponseRedirect('/dashboard/')
    else:
      return HttpResponseRedirect("/login/")


def update_post(request,id):
    if request.user.is_authenticated:
        if request.method == 'POST':
            pi=Post.objects.get(pk=id)
            print(pi)
            form=PostForm(request.POST,instance=pi)
            if form.is_valid():
                form.save()
                return HttpResponseRedirect('/dashboard/')
        else:
            pi=Post.objects.get(pk=id)
            print(pi)
            form=PostForm(instance=pi)
        return render (request,'update.html',{'form':form})
    else:
        return HttpResponseRedirect('/login/')
