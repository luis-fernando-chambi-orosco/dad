from email.policy import default
from django.db import models
# Create your models here.
class categoriaprod(models.Model):
	nombre=models.CharField(max_length=50)
	create=models.DateTimeField(auto_now_add=True)
	update=models.DateTimeField(auto_now_add=True)
	class Meta:
		verbose_name='categoria'
		verbose_name_plural='categorias'
	def __str__(self):
		return self.nombre
class producto(models.Model):
	nombre=models.CharField(max_length=50)
	imagen=models.ImageField(upload_to='catalogo',null=True,blank=True,default="{% static 'images/sinimagen.jpg'%}")#crea una carpeta con la img referente(upload_to='servicios')
	precio=models.FloatField()
	categorias=models.ForeignKey(categoriaprod, on_delete=models.CASCADE)
	class Meta:
		verbose_name='producto'
		verbose_name_plural='productos'
	def __str__(self):
		return self.nombre