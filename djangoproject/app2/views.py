from django.contrib.auth import authenticate,login,logout
from django.forms.forms import Form
from django.shortcuts import render,HttpResponseRedirect
from .form import SignUpForm,LoginForm,PostForm
from django.contrib import messages
from .models import Post


# Create your views here.
def home(request):
    post=Post.objects.all()
    return render(request,'home.html',{'post':post})

def dashboard (request):

    if request.user.is_authenticated:
     post=Post.objects.all()
     return render (request,'dashboard.html',{'post':post})
    else:
        return HttpResponseRedirect('/login/')
def user_signup(request):
   if request.method =='POST':
       form=SignUpForm(request.POST)
       if form.is_valid():
           messages.success(request,'Congratulation Signedup Successfully!!')
           form.save()
   else:
     form= SignUpForm
   return render(request,'login.html',{'form':form})



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
                    messages.success(request,'Login successfully!!')
                    return HttpResponseRedirect('/dashboard/')
        else:
            form=LoginForm()
            return render (request,'login.html',{'form':form})
        form=LoginForm()
        return render(request,'login.html',{'form':form})
    else:
        return HttpResponseRedirect('/dashboard/') 


def user_logout(request):
    logout(request)
    return render(request,'home.html') 

# def add_post(request):
#     if request.user.is_authenticated:
#         if request.method=='POST':
#           form=PostForm(request.POST)
#           if form.is_valid():
#               crs=form.cleaned_data['course']
#               des=form.cleaned_data['desc']
#               mtr=form.cleaned_data['mentor']
#               pst=Post(course=crs,desc=des,mentor=mtr)
#               pst.save()
#               form=PostForm()
#           return render(request,'add_post.html')
#         else:
#             form=PostForm()
#             return render(request,'add_post.html',{'form':form})
#     else:

#         return HttpResponseRedirect('/login/')

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
          return render(request,'add_post.html')
        else:
            form=PostForm()
            return render(request,'add_post.html',{'form':form})
    else:

        return HttpResponseRedirect('/login/')

def delete_post(request,id):
    if request.user.is_authenticated:
       return(request,'dashboard.html')
    else:
        return(request,'/login/')

# def update_post(request):
#     return(request,'update.html')
