from re import I
from sre_constants import CATEGORY
from tabnanny import verbose
from unicodedata import category
from django.db import models
from django.contrib.auth.models import User

# Create your models here.
CATEGORY = (
    ('Stationay','Stationay'),
    ('Electronics','Electronics'),
    ('Food','Food'),
)
class Product(models.Model):
    name = models.CharField(max_length=30)
    quantity = models.PositiveIntegerField()
    category = models.CharField(max_length=50,choices=CATEGORY,null=True)

    def __str__(self):
            return f'{self.name}'

    class Meta:
        verbose_name_plural = 'Product'

class Order(models.Model):
    product = models.ForeignKey(Product, on_delete=models.CASCADE, null=True)
    staff = models.ForeignKey(User, on_delete=models.CASCADE, null=True)
    order_quantity = models.PositiveIntegerField(null=True)
    date = models.DateTimeField( auto_now_add = True)
    
    def __str__(self):
        return f'{self.product} ordered by {self.staff.username}'