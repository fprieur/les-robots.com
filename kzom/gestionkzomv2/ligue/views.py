from django.shortcuts import render

from django.core import serializers
from django.http import HttpResponse

from ligue.models import Equipe

def equipe_detail(request, id):
    equipe = Equipe.objects.get(id=id)
    c = {
        'equipe': equipe,
    }
    return render(request, "ligue/equipe_detail.html", c)

def equipes(request):
    equipes = Equipe.objects.all()
    c = {
        'equipes': equipes,
    }
    return render(request, "ligue/equipes.html", c)

def equipesjson(request):
	equipes= Equipe.objects.all()
	equipes = serializers.serialize('json', equipes)
	return HttpResponse(equipes, mimetype='application/json')