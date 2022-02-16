from rest_framework import serializers

from .models import Student


# Serializers define the API representation.
class StudentSerializer(serializers.ModelSerializer):
    
    class Meta:
        model = Student
        fields = '__all__'