
from re import template
from django.urls import path
from django.contrib.auth import views as auth_views
from .import views

urlpatterns = [
  
    path('',auth_views.LoginView.as_view(template_name="users/login.html"),name="user-login" ),
    path('logout',auth_views.LogoutView.as_view(template_name="users/logout.html"),name="user-logout" ),
    path ('profile',views.ProfileView , name = 'user-profile'),
    path ('register',views.RegisterView, name = 'user-register'),
    path ('profile-update',views.ProfileUpdate, name = 'profile-update'),
    

]
