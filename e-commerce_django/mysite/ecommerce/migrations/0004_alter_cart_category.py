# Generated by Django 4.0.1 on 2022-01-17 08:15

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('ecommerce', '0003_alter_homedecor_slug_cart'),
    ]

    operations = [
        migrations.AlterField(
            model_name='cart',
            name='category',
            field=models.CharField(max_length=100, null=True),
        ),
    ]
