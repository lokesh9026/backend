from django.db import models

# Create your models here.
class Post(models.Model):
    course=models.CharField(max_length=70)
    desc=models.TextField()
    is_active=models.BooleanField(default=True)
    created_at=models.DateTimeField(auto_now_add=True)
    mentor=models.CharField(max_length=20)
    student=models.CharField(max_length=20,null=True)

