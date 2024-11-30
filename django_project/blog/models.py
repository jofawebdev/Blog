from django.db import models
from django.utils import timezone
from django.contrib.auth.models import User
from django.urls import reverse



class Category(models.Model):
    name = models.CharField(max_length=100, unique=True)

    def __str__(self):
        return self.name


class Post(models.Model):
    title = models.CharField(max_length=100)
    content = models.TextField()
    date_posted = models.DateTimeField(default=timezone.now)
    author = models.ForeignKey(User, on_delete=models.CASCADE)
    category = models.ForeignKey(Category, on_delete=models.SET_NULL, null=True, blank=True)


    def __str__(self):
        return self.title
    

    def get_absolute_url(self):
        return reverse('post-detail', kwargs={'pk': self.pk})
    


class Skill(models.Model):
    name = models.CharField(max_length=100)
    description = models.TextField(blank=True)
    proficiency = models.IntegerField(default=1) # 1-10 scale


    def __str__(self):
        return self.name



class Testimonial(models.Model):
    author = models.CharField(max_length=100)
    content = models.TextField()
    date_posted = models.DateTimeField(auto_now_add=True)


    def __str__(self):
        return f"{self.author} - {self.content[:50]}"

