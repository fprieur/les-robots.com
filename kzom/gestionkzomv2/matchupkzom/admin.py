from django.contrib import admin

from matchupkzom.models import *

class EquipeAdmin(admin.ModelAdmin):
	list_display = ('nom', 'division') 

class EquipeInline(admin.TabularInline):
	model = Equipe
	extra = 1

class DivisionAdmin(admin.ModelAdmin):
	inlines = [EquipeInline]

admin.site.register(Saison)
admin.site.register(Semaine)
admin.site.register(PlageHoraire)
admin.site.register(Division, DivisionAdmin)
admin.site.register(Equipe, EquipeAdmin)