from cProfile import Profile
from django.dispatch import receiver
from django.shortcuts import redirect, render
from django.contrib.auth.forms import UserCreationForm
from .forms import CreateUserForm, ProfileUpdateForm, UserUpdateForm
from django.contrib.auth.models import User
# Create your views here.

def RegisterView(request):
    if request.method == 'POST':
        form = CreateUserForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('user-login')
    else :
        form = CreateUserForm()
    return render(request,'users/register.html',{"form":form})

def ProfileView(request):
    return render(request,'users/profile.html')

def ProfileUpdate(request):
    if request.method == 'POST':
        user_form = UserUpdateForm(request.POST, instance=request.user)
        print(request.user)
        profile_form = ProfileUpdateForm(
            request.POST, request.FILES, instance=request.user.profile)
        print(request.FILES)
        if user_form.is_valid() and profile_form.is_valid():
            user_form.save()
            profile_form.save()
            return redirect('user-profile')
    else:
        user_form = UserUpdateForm(instance=request.user)
        profile_form = ProfileUpdateForm(instance=request.user.profile)

    context = {
        "user_form ":user_form,
        "profile_form":profile_form,
    }
    return render(request,'users/profile_update.html',context)