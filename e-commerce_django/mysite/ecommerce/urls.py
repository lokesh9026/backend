from django.urls import path, include
from . import views
from django.contrib.auth import  views as auth_views
from .forms import LoginForm


urlpatterns = [
    path('', views.HomeView.as_view(), name='home'),
    path('accounts/login/', auth_views.LoginView.as_view(authentication_form=LoginForm)),
    path('accounts/', include('django.contrib.auth.urls')),
    path('signuppage/', views.SignupView.as_view(), name='signup-page'),
    path('about/', views.AboutPageView.as_view(), name='about-page'),
    path('categorypage/<str:category>/', views.CategoryPageView.as_view(), name='category-page'),
    path('productdetail/<str:category>/<slug:slug>/', views.ProductDetilView.as_view(), name='product-detail'),
    path('cart/', views.cartPage, name='cart-page'),
    path('contactUs/', views.ContactUsView.as_view(), name='contactUs-page'),
    path('buynow/<str:category>/<slug:slug>/', views.buynow, name='buy-now'),
    path('addtocart/<str:category>/<slug:slug>/', views.addtocart, name='add-to-cart'),
]
