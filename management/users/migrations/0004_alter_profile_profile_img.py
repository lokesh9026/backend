# Generated by Django 4.0.2 on 2022-02-09 12:50

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('users', '0003_alter_profile_profile_img'),
    ]

    operations = [
        migrations.AlterField(
            model_name='profile',
            name='profile_img',
            field=models.ImageField(default='profile_images/default.png', upload_to='profile_images'),
        ),
    ]
