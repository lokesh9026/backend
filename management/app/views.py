from cProfile import Profile
from multiprocessing import context
from django.shortcuts import redirect, render
from django.contrib.auth.decorators import login_required
from . import models
from django.contrib.auth.models import User
from . import models
from . import forms
from django.contrib import messages

# Create your views here.
@login_required
def index(request):
    product = models.Product.objects.all()
    product_count = product.count()
    order = models.Order.objects.all()
    order_count = order.count()
    customer = User.objects.all()
    print(customer)
    customer_count = customer.count()

    if request.method == 'POST':
        form = forms.OrderForm(request.POST)
        if form.is_valid():
            instance = form.save(commit=False)
            instance.staff = request.user
            instance.save()
            return redirect ('dashboard-index')
    else:
        form = forms.OrderForm()
    

    context = {
        "product":product,
        "order":order,
        "order_count":order_count,
        "product_count" : product_count,
        'form':form,
        "customer_count":customer_count

    }
    return render ( request,"index.html",context)

def product(request):
    items = models.Product.objects.all()
    order = models.Order.objects.all()
    if request.method == 'POST':
        form = forms.ProductForm(request.POST)
        if form.is_valid():
            print("hi")
            form.save()
            product_name = form.cleaned_data.get('name')
            messages.success(request,f'{product_name} has been added')
            return redirect ("dashboard-product")
    else :
        form = forms.ProductForm()
    context = {
        "items":items,
        "form":form,
        "order":order,
    }
    return render(request , "product.html",context)

def delete_product(request,pk):
    item = models.Product.objects.get(id=pk)
    if request.method == 'POST':
        item.delete()
        return redirect ('dashboard-product')
    return render (request, 'dashboard-product-delete.html')

def update_product(request,pk):
    item = models.Product.objects.get(id=pk)
    if request.method == 'POST':
        form = forms.ProductForm(request.POST,instance=item)
        if form.is_valid():
            form.save()
        return redirect ('dashboard-product')
    else:
        form = forms.ProductForm(instance=item)
    return render (request,'product_update.html',{"form":form})



def staff(request):
    workers = User.objects.all()
    context = {
        'workers':workers,
     }
    return render (request,'staff.html',context)

def staffdetail(request,pk):
    detail = User.objects.get(id=pk)
    context = {
        'customers':detail,
     }
    return render (request,'staff_detail.html',context)

def order(request):
    order = models.Order.objects.all()
    context = {
        "order":order
    }
    return render (request,'order.html',context)
