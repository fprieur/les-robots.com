# -*- encoding: utf-8 -*-

from django.conf.urls import patterns, include, url

# Uncomment the next two lines to enable the admin:
from django.contrib import admin
admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    url(r'^$', 'gestionkzomv2.views.home', name='home'),
    # url(r'^gestionkzomv2/', include('gestionkzomv2.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    url(r'^admin/', include(admin.site.urls)),

    #Pour la ligue
    url(r'^', include('ligue.urls')),

    #Pour les matchups
    url(r'^', include('matchupkzom.urls')),
)

