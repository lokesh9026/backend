
from django import forms
from .import models
from django import forms

class ProductForm(forms.ModelForm):
    class Meta:
        model = models.Product
        fields = ['name','quantity','category']

class OrderForm(forms.ModelForm):
    class Meta:
        model = models.Order
        fields = ['product','order_quantity']