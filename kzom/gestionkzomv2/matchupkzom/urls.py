# -*- encoding: utf-8 -*-

from django.conf.urls import patterns, include, url

urlpatterns = patterns('matchupkzom.views',
    url(r'^matchup/creer_calendrier_aleatoire/', 'creer_calendrier_aleatoire', name="creer_calendrier_aleatoire"),
)