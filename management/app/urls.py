from django.urls import path
from . import views

urlpatterns = [
    # path('i/', views.index, name='index'),
    path('index/', views.index, name='dashboard-index'),
    path ('product/',views.product, name = 'dashboard-product'),
    path ('product/delete/<int:pk>',views.delete_product, name = 'dashboard-delete-product'),
    path ('product/edit/<int:pk>',views.update_product, name = 'update-product'),
    path ('staff/',views.staff, name = 'staff-dashboard'),
    
    path ('staff/detail/<int:pk>',views.staffdetail, name = 'staff-detail'),
    path('order/', views.order, name='dashboard-order'),
]