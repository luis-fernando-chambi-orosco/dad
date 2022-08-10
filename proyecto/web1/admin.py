from django.contrib import admin
from .models import categoriaprod,producto
# Register your models here.
class catalogoadminx(admin.ModelAdmin):
	readonly_fields=('create','update')
admin.site.register(categoriaprod,catalogoadminx)
admin.site.register(producto)