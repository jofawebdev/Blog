from django.shortcuts import render, get_object_or_404
from django.contrib.auth.mixins import LoginRequiredMixin, UserPassesTestMixin
from django.contrib.auth.models import User
from django.views.generic import ListView, DetailView, CreateView, UpdateView, DeleteView
from .models import Post, Category


# Helper function to get sidebar data
def get_sidebar_context():
    recent_posts = Post.objects.order_by('-date_posted')[:5]
    categories = Category.objects.all()
    return {
        'recent_posts': recent_posts,
        'categories': categories
    }


def home(request):
    context = {
        'posts': Post.objects.all()
        **get_sidebar_context() # Include sidebar data
    }
    return render(request, 'blog/home.html', context)



class PostListView(ListView):
    model = Post
    template_name = 'blog/home.html' # <app>/<model>_<viewtype>.html
    context_object_name = 'posts'
    ordering = ['-date_posted']
    paginate_by = 5


    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context.update(get_sidebar_context()) # Add sidebar data
        return context


class UserPostListView(ListView):
    model = Post
    template_name = 'blog/user_posts.html' # <app>/<model>_<viewtype>.html
    context_object_name = 'posts'
    paginate_by = 5


    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context.update(get_sidebar_context()) # Add sidebar data
        return context
    

    def get_queryset(self):
        user = get_object_or_404(User, username=self.kwargs.get('username'))
        return Post.objects.filter(author=user).order_by('-date_posted')



class PostDetailView(DetailView):
    model = Post


    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context.update(get_sidebar_context()) # Add sidebar data
        return context



class PostCreateView(LoginRequiredMixin, CreateView):
    model = Post
    fields = ['title', 'content']

    def form_valid(self, form):
        form.instance.author = self.request.user
        return super().form_valid(form)
    
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context.update(get_sidebar_context()) # Add sidebar data
        return context
    


class PostUpdateView(LoginRequiredMixin, UserPassesTestMixin, UpdateView):
    model = Post
    fields = ['title', 'content']

    def form_valid(self, form):
        form.instance.author = self.request.user
        return super().form_valid(form)
    

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context.update(get_sidebar_context()) # Add sidebar data
        return context
    
    
    def test_func(self):
        post = self.get_object()
        if self.request.user == post.author:
            return True
        return False
    


class PostDeleteView(LoginRequiredMixin, UserPassesTestMixin, DeleteView):
    model = Post
    success_url = '/'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context.update(get_sidebar_context()) # Add sidebar data
        return context

    def test_func(self):
        post = self.get_object()
        if self.request.user == post.author:
            return True
        return False
    



class CategoryPostListView(ListView):
    model = Post
    template_name = 'blog/category_posts.html'
    context_object_name = 'posts'
    paginate_by = 5

    
    def get_queryset(self):
        category = get_object_or_404(Category, name=self.kwargs.get('category_name'))
        return Post.objects.filter(category=category).order_by('-date_posted')
    

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context.update(get_sidebar_context())
        context['category_name'] = self.kwargs.get('category_name')
        return context


def about(request):
    return render(request, 'blog/about.html', {'title': 'About'})