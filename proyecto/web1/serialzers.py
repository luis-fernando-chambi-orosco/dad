
from rest_framework import serializers
from .models import producto

class productoSerealizer(serializers.ModelSerializer):
	class Meta:
		model=producto
		fields = ['nombre',"precio","categorias"]