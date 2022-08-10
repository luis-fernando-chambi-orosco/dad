
from .views import Get_Post_APIView
from django.urls import path
urlpatterns = [
    path('rest/', Get_Post_APIView, name="productos_api"),
]