from cProfile import label
from django import forms
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.models import User

from m3dja.models import Users,Video



class SignupForm(UserCreationForm):
	email = forms.EmailField(required=True)

	class Meta:
		model = User
		fields = ("username", "email", "password1", "password2")

def __init__(self, *args, **kwargs):
        super(SignupForm, self).__init__(*args, **kwargs)
        self.fields["username"].widget.attrs['class'] = 'form-control'
        self.fields["username"].label = "Enter Username"

        self.fields["first_name"].widget.attrs['class'] = 'form-control'
        self.fields["first_name"].label = "Enter First Name"

        self.fields["last_name"].widget.attrs['class'] = 'form-control'
        self.fields["last_name"].label = "Enter Last Name"
        
        self.fields["email"].widget.attrs['class'] = 'form-control'
        self.fields["email"].label = "Enter Email"
        
        self.fields["password1"].widget.attrs['class'] = 'form-control'
        self.fields["password1"].label = "Enter Password"
        
        self.fields["password2"].widget.attrs['class'] = 'form-control'
        self.fields["password2"].label = "Confirm Password"


def save(self, commit=True):
	user = super(SignupForm, self).save(commit=False)
	user.email = self.cleaned_data['email']
	if commit:
		user.save()
	return user

class AdduserForm(forms.ModelForm):
        class Meta:
                model = Users
                fields = ["first_name","last_name","email_address","contact"]

class VideoForm(forms.ModelForm):
    class Meta:
        model= Video
        fields= ["name", "videofile"]
