from django import forms
from django.contrib.auth.forms import AuthenticationForm, UserCreationForm, UsernameField
from django.contrib.auth.models import User
from django.forms import widgets
from .models import Post
from django.utils.translation import gettext,gettext_lazy as _

# class SignUpForm(UserCreationForm):
#  password1=forms.CharField(label='Password',
#  widget=forms.PasswordInput(attrs={'class':'form-control'}))
#  password2=forms.CharField(label='Confirm Password',
#  widget=forms.PasswordInput(attrs={'class':'form-control'}))
#  class Meta:
#      model=User
#      fields=['username','first_name','last_name','email']
#      labels={'first_name':'First Name' ,'last Name':'Last Name','email':'Email'}
#      widgets={'username':forms.TextInput(attrs={'class':'form-control'}), 
#      'first_name':forms.TimeInput (attrs={'class':'form-control'}),
#       'last_name':forms.TimeInput (attrs={'class':'form-control'}),
#     'email':forms.TimeInput (attrs={'class':'form-control'})
#     }

class SignUpForm(UserCreationForm):
 password1=forms.CharField(label='Password',
 widget=forms.PasswordInput(attrs={'class':'form-control'}))
 password2=forms.CharField(label='Confirm Password',
 widget=forms.PasswordInput(attrs={'class':'form-control'}))

#  group=forms.CharField(label='group',
#  widget=forms.TextInput(attrs={'class':'form-control'}))
 FAVORITE_COLORS_CHOICES = [
        ('mentor', 'Mentor'),
        ('student', 'Student'),
       
    ]
 Category = forms.MultipleChoiceField(
        required=False,
        widget=forms.CheckboxSelectMultiple,
        choices=FAVORITE_COLORS_CHOICES,
    )

 class Meta:
     model=User
     fields=['username','first_name','last_name','email',]
     labels={'first_name':'First Name' ,'last Name':'Last Name','email':'Email'}
     widgets={'username':forms.TextInput(attrs={'class':'form-control'}), 
     'first_name':forms.TimeInput (attrs={'class':'form-control'}),
      'last_name':forms.TimeInput (attrs={'class':'form-control'}),
    'email':forms.TimeInput (attrs={'class':'form-control'})
    }



class LoginForm(AuthenticationForm):
    username=UsernameField(widget=forms.TextInput(attrs={'autofocus':True,'class':'form-control'}))
    password=forms.CharField(label=_('Password'),strip=False,
    widget=forms.PasswordInput(attrs={'autocomplete':'current-password',
    'class':'form-control'}))

class PostForm(forms.ModelForm):
     class Meta:
         model=Post
         fields=['course','desc','mentor']
         labels={'course':'Course','desc':'Course Description','mentor':'Mentor'}
         widgets={'course':forms.TextInput(attrs={'class':'form-control'}),
         'desc':forms.TextInput(attrs={'class':'form-control'}),
         'mentor':forms.TextInput(attrs={'class':'form-control'})
         }