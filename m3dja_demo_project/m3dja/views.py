from re import template
from django.shortcuts import render ,redirect
from django.contrib.auth import logout
from django.views.generic.edit import CreateView
from django.views.generic.list import ListView
from m3dja import form
from .import models
from django.contrib.auth.decorators import login_required
from django.core.paginator import Paginator
from django.contrib.auth.mixins import LoginRequiredMixin,UserPassesTestMixin
from django.views.generic.edit import DeleteView,UpdateView
from django.urls import reverse_lazy
from django.views import View
from django.contrib.auth.forms import AuthenticationForm
from django.contrib.auth import authenticate, login
from django.contrib import messages


# # Create your views here.
# def Login(request):
#     if request.method == 'POST':
  
#         # AuthenticationForm_can_also_be_used__
  
#         username = request.POST['username']
#         password = request.POST['password']
#         user = authenticate(request, username = username, password = password)
#         if user is not None:
#             form = login(request, user)
#             messages.success(request, f' wecome {username} !!')
#             return redirect('dashboard')
#         else:
#             messages.info(request, f'account done not exit plz sign in')
#     form = AuthenticationForm()
#     return render(request, 'm3dja/login.html', {'form':form, 'title':'log in'})


def logoutPage(request):
    logout(request)
    return redirect("home")

class SingnupView(CreateView):
    template_name = 'm3dja/signup.html'
    success_url = '/'
    
    form_class = form.SignupForm

@login_required(login_url="login")
def DashboardView(request):
    if "search" in request.GET:
        search = request.GET.get('search', "")
        multi_users = Q(Q(first_name__icontains=search) | Q(last_name__icontains=search) | Q(email_address__icontains=search))
        users = models.Users.objects.filter(multi_users)
    else:
        users = models.Users.objects.all()
    context = {
        "users":users
    }
    return render (request , "m3dja/dashboard.html" ,context)


# def DashboardView(request):
#     data = models.Users.objects.all()
#     page = Paginator(data,5)
#     page_list = request.GET.get("page")
#     users = page.get_page(page_list)
#     context = {
#         "users":users
#     }
#     return render (request , "m3dja/dashboard.html" ,context)


import json
from django.http import JsonResponse
from django.db.models import Q

def suggestionApi(request):
    if 'term' in request.GET:
        search = request.GET.get('term')
        print(search)
        qs = models.Users.objects.filter(Q(first_name__icontains=search))[0:10]
        # print(list(qs.values()))
        # print(json.dumps(list(qs.values()), cls = DjangoJSONEncoder))
        titles = list()
        for product in qs:
            titles.append(product.first_name)
        print(titles)
    return JsonResponse(titles, safe=False)    

class AddUsers(CreateView):
    # form_class = form.AdduserForm
    model= models.Users
    fields = ['first_name','last_name','password','terms' ,'slug',"contact","email_address","user_type"]
    template_name = 'm3dja/adduser.html'
    success_url = '/dashboard/'

    def form_valid(self, form):
    
        form.save()
        return super(AddUsers, self).form_valid(form)


class DeleteView(LoginRequiredMixin, DeleteView):
    model = models.Users
    template_name = 'm3dja/user_delete.html'
    success_url = "/dashboard/"


class ProfileEditView(LoginRequiredMixin, UpdateView):
    model = models.Users
    fields = ['first_name','last_name','password','terms' ,'slug',"contact","email_address","user_type"]
    template_name = 'm3dja/profile_edit.html'
    # success_url = '/dashboards/'

    def get_success_url(self):
        pk = self.kwargs['pk']
        return reverse_lazy('dashboards', kwargs={'pk': pk})


from django.shortcuts import render
from .models import AddVideo, Video
from .form import VideoForm

def showvideo(request):
    lastvideo= Video.objects.last()
    videofile= lastvideo.videofile
    form= VideoForm(request.POST or None, request.FILES or None)
    if form.is_valid():
        form.save()
    
    context= {'videofile': videofile,
              'form': form
             }
 
    return render(request, 'm3dja/videos.html', context)
      
from django.views.generic.list import ListView
from django.views import View, generic

class Home(generic.ListView):
    template_name = 'm3dja/videos2.html'
    model = Video
    context_object_name = "category"

# from django.shortcuts import render, reverse
# from .models import AddVideo
# class AddView(CreateView):
# 	model = AddVideo
# 	fields = "__all__"
# 	template_name = 'm3dja/add_video.html'

# 	def get_success_url(self):
# 		return reverse('add-video', kwargs={'pk': self.object.pk})

def AddView(request):
    if request.method == "POST":
        name = request.POST.get("video_name")
        duration = request.POST.get("duration")
        language= request.POST.get("lang")
        workout_type = request.POST.get("workout")
        application_sub= request.POST.get("app_sub")
        intensity = request.POST.get("intensity")
        video = request.POST.get("uploadvideo")
        video_teaser = request.POST.get("videoteaser")
        profile_image = request.POST.get("profileimg")
        title_image = request.POST.get("titleimg")
       
        print(duration,name,language,title_image)
        video_teaser = request.POST.get("videoteaser")
        data = AddVideo(video_name=name,duration=duration,language=language,workout_type=workout_type,application_sub=application_sub,intensity=intensity,video=video,video_teaser=video_teaser,profile_image=profile_image,title_image=title_image)
        data.save()
    return render(request, "m3dja/add_video.html")


def view_all(request):
    category = AddVideo.objects.all()
    return render (request,"m3dja/videos3.html",{"category":category})