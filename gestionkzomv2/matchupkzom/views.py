from django.shortcuts import render

from matchupkzom.models import Equipe

import random	

def creer_calendrier_aleatoire(request):
	equipesAmicale = Equipe.objects.filter(division='2')
	equipesMaison = Equipe.objects.filter(division='1')
	mylist = [ ( equipesAmicale[random.randint(0,equipesAmicale.count()-1)].nom, equipesAmicale[random.randint(0,equipesAmicale.count()-1)].nom  ) for k in range(10) ]
	c = {
        'equipesAmicale': equipesAmicale,
        'equipesMaison': equipesMaison,
        'matchups': mylist,
        'range': range(1,13),
    }
	return render(request, "matchupkzom/creer_calendrier_aleatoire.html", c)