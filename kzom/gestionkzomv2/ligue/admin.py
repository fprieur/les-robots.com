from django.contrib import admin

from ligue.models import *

class DivisionAdmin(admin.ModelAdmin):
    list_display = ('nom', 'saison')

class JoueurInline(admin.TabularInline):
    model = Joueur
    extra = 3

class ButInline(admin.TabularInline):
	model = But
	extra = 1

class PenaliteInline(admin.TabularInline):
	model = Penalite
	extra = 1

class AlignementInline(admin.TabularInline):
	model = Alignement
	extra = 1

class EquipeAdmin(admin.ModelAdmin):
    list_display = ('nom', 'division')
    list_filter = ('division__nom',)
    inlines = [JoueurInline]

class JoueurAdmin(admin.ModelAdmin):
    list_display = ('nom', 'prenom','equipe', 'numero_chandail')
    list_filter = ('equipe__nom','equipe__division')
    search_fields = ('nom', 'prenom',)

class PartieAdmin(admin.ModelAdmin):
	list_display = ('lieu', 'heure', 'receveurs', 'visiteurs', 'arbitres', 'marqueurs')
	inlines = [AlignementInline, ButInline, PenaliteInline]

admin.site.register(Arbitre)
admin.site.register(Marqueur)
admin.site.register(Saison)
admin.site.register(Partie, PartieAdmin)
admin.site.register(Penalite)
admin.site.register(But)
admin.site.register(Classement)
admin.site.register(Horaire)
admin.site.register(Suspension)
admin.site.register(Reglement)
admin.site.register(Division, DivisionAdmin)
admin.site.register(Equipe, EquipeAdmin)
admin.site.register(Joueur, JoueurAdmin)