# -*- encoding: utf-8 -*-

from django.conf.urls import patterns, include, url

urlpatterns = patterns('ligue.views',
    url(r'^equipes/(?P<id>\d+)$', 'equipe_detail', name="equipe"),
    url(r'^equipes/', 'equipes', name="equipes"),
    url(r'^equipesjson/', 'equipesjson', name="equipesjson"),
)