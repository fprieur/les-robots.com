# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'Equipe'
        db.create_table('ligue_equipe', (
            ('id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
        ))
        db.send_create_signal('ligue', ['Equipe'])

        # Adding model 'Joueur'
        db.create_table('ligue_joueur', (
            ('id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
        ))
        db.send_create_signal('ligue', ['Joueur'])


    def backwards(self, orm):
        # Deleting model 'Equipe'
        db.delete_table('ligue_equipe')

        # Deleting model 'Joueur'
        db.delete_table('ligue_joueur')


    models = {
        'ligue.equipe': {
            'Meta': {'object_name': 'Equipe'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'})
        },
        'ligue.joueur': {
            'Meta': {'object_name': 'Joueur'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'})
        }
    }

    complete_apps = ['ligue']