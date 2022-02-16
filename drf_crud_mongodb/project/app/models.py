from re import M
from django.db import models

# Create your models here.
class Student(models.Model):
    name = models.CharField(max_length=30)
    roll = models.IntegerField()
    city = models.CharField(max_length=30)
    age = models.CharField(max_length=20,null=True)