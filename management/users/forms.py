
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.models import User
from django import forms
from . import models


class CreateUserForm(UserCreationForm):
    email = forms.EmailField()
    # contact = forms.CharField(max_length=10)
    class Meta:
        model = User
        fields = ['username', 'email', 'password1', 'password2']
        # field = '__all__' to fill allthe fields

class UserUpdateForm(forms.ModelForm):
    class Meta:
        model = User
        fields = ['username', 'email']
       

class ProfileUpdateForm(forms.ModelForm):
    class Meta:
        model = models.Profile
        fields = ['phone','address','profile_img']