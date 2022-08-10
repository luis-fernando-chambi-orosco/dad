
from django.shortcuts import render
from .models import producto, categoriaprod
from rest_framework.views import APIView
from rest_framework.decorators import api_view
from rest_framework.response import Response
from .serialzers import productoSerealizer
# Create your views here.


def plantilla_acercade(request):
    return render(request, "Quienes_somos.html")


def plantilla_inicio(request):
    cat = producto.objects.all()
    return render(request, "inicio.html", {"inicio": cat})

def plantilla_productos(request):
    catal = producto.objects.all()
    return render(request, "producto.html", {"catalogo": catal})


def categoriaid(request, categid):
    catgid = categoriaprod.objects.get(id=categid)
    cat = producto.objects.filter(catg=catgid)
    return render(request, "producto.html", {"catalogo": catgid, "categor": cat})


def plantilla_compromisos(request):
    return render(request, "compromisos.html")


def plantilla_contactanos(request):
    return render(request, "contactanos.html")




@api_view(['GET', 'POST'])
def Get_Post_APIView(request):
    if request.method == 'GET':
        get = producto.objects.all()
        get_serializer = productoSerealizer(get, many=True)
        return Response(get_serializer.data)
    elif request.method == 'POST':
        post_serializer = productoSerealizer(data=request.data)
        if post_serializer.is_valid():
            post_serializer.save()
            return Response(post_serializer)
        return Response(post_serializer.errors)
