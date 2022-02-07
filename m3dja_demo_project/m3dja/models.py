# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey and OneToOneField has `on_delete` set to the desired behavior
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from re import M
from django.db import models

class Users(models.Model):
    id = models.BigAutoField(primary_key=True)
    user_id = models.IntegerField(blank=True, null=True)
    user_type = models.CharField(max_length=255, blank=True, null=True)
    first_name = models.CharField(max_length=255, blank=True, null=True)
    last_name = models.CharField(max_length=255, blank=True, null=True)
    email_address = models.CharField(max_length=255, blank=True, null=True)
    password = models.CharField(max_length=255)
    contact = models.CharField(max_length=255, blank=True, null=True)
    nationality = models.CharField(max_length=255, blank=True, null=True)
    dob = models.DateField(blank=True, null=True)
    languages = models.TextField(blank=True, null=True)
    height = models.CharField(max_length=255, blank=True, null=True)
    weight = models.CharField(max_length=255, blank=True, null=True)
    gender = models.CharField(max_length=255, blank=True, null=True)
    year_of_experince = models.CharField(max_length=255, blank=True, null=True)
    allow_promotion = models.IntegerField(blank=True, null=True)
    identification = models.CharField(max_length=255, blank=True, null=True)
    business_doc = models.CharField(max_length=255, blank=True, null=True)
    director_doc = models.CharField(max_length=255, blank=True, null=True)
    facebooklink = models.CharField(db_column='facebookLink', max_length=255, blank=True, null=True)  # Field name made lowercase.
    twitterlink = models.CharField(db_column='twitterLink', max_length=255, blank=True, null=True)  # Field name made lowercase.
    instagramlink = models.CharField(db_column='instagramLink', max_length=255, blank=True, null=True)  # Field name made lowercase.
    uniquekey = models.CharField(db_column='uniqueKey', max_length=255, blank=True, null=True)  # Field name made lowercase.
    terms = models.IntegerField()
    slug = models.CharField(max_length=255,  blank=True, null=True)
    status = models.IntegerField(blank=True, null=True)
    created_at = models.DateTimeField(  blank=True, null=True)
    updated_at = models.DateTimeField(blank=True, null=True)
 
    class Meta:
        managed = False
        db_table = 'users'

    def __str__(self):
        return self.first_name

class Video(models.Model):
    name= models.CharField(max_length=500)
    videofile= models.FileField(upload_to='videos/', null=True, verbose_name="")

    def __str__(self):
        return self.name + ": " + str(self.videofile)

class AddVideo(models.Model):
    video_name = models.CharField(max_length=50)
    duration = models.CharField(max_length=50)
    
    language_choices = (
    ('eng','English'),
    ('hin', 'Hindi'),
  
)
    language = models.CharField(max_length=6, choices=language_choices)

    application_choices = (
    ('one','One'),
    ('two', 'Two'),
  
)
    application_sub = models.CharField(max_length=6, choices=application_choices)

    workout_choices = (
    ('one','One'),
    ('two', 'Two'),
  
)
    workout_type = models.CharField(max_length=6, choices=workout_choices)

    intensity_choices = (
    ('one','One'),
    ('two', 'Two'),
  
)
    intensity = models.CharField(max_length=6, choices=intensity_choices)

    level_choices = (
    ('one','One'),
    ('two', 'Two'),
  
)
    addition_info = models.CharField(max_length=150)
    video = models.FileField(upload_to="videos/")
    video_teaser= models.FileField(upload_to="videosteaser/")
    profile_image = models.ImageField(upload_to="profileimages/")
    title_image= models.ImageField(upload_to="titleimages/")


    # def __str__(self):
    #     return self.video_name


