from csv import list_dialects
from django.contrib import admin
from .import models
# Register your models here.
# admin.site.register(models.Users)
@admin.register(models.Users)
class UsersAdmin(admin.ModelAdmin):
    list_display = ['first_name',"last_name"]

@admin.register(models.Video)
class VideoAdmin(admin.ModelAdmin):
    list_display = ['name',"videofile"]

admin.site.register(models.AddVideo)