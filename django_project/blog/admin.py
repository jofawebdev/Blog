from django.contrib import admin
from .models import Post, Category, Skill, Testimonial

admin.site.register(Category)

admin.site.register(Skill)

admin.site.register(Testimonial)


# Customize Post model admin interface
@admin.register(Post)
class PostAdmin(admin.ModelAdmin):
    list_display = ('title', 'author', 'date_posted', 'category')
    list_filter = ('date_posted', 'category')
    search_fields = ('title', 'content', 'author__username')