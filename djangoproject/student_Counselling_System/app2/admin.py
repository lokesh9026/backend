from django.contrib import admin
from .models import Post
# Register your models here.
@admin.register(Post)
class PostModelAdmin(admin.ModelAdmin):
    list_display=['id','course','desc','created_at','is_active','mentor',"student"]