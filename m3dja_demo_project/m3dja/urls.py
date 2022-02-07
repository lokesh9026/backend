from re import template
from django.urls import path

from m3dja.models import AddVideo
from . import views
from django.contrib.auth import views as auth_views
from django.views.generic import TemplateView



urlpatterns = [
    
    path('', auth_views.LoginView.as_view(), name='login'),
    path('signup/', views.SingnupView.as_view() , name = "signup"),
    
    # path('dashboard/<int:pk>/', views.DashboardView , name = "dashboard"),
    path('dashboard/', views.DashboardView , name = "dashboard"),
    path('password_reset/', auth_views.PasswordResetView.as_view(template_name='m3dja/password_reset.html'), name='password_reset'),
    path('dashboard2/', views.suggestionApi, name = "suggestionapi"),
    path('adduser', views.AddUsers.as_view() , name="adduser"),
    path('deleteuser/<int:pk>/', views.DeleteView.as_view() , name="deleteuser"),
    path('edituser/<int:pk>/', views.ProfileEditView.as_view() , name="edit_user"),

    path('video/', views.showvideo , name = "video"),
    path('video2/', views.Home.as_view() , name = "video2"),
    # path('password_reset/', views.password_reset_request, name='password_reset'),
    # path('add/', views.AddView.as_view(), name='add-video'),
    path('add/', views.AddView, name='add-video'),

    path('video3/', views.view_all , name = "video3"),

]