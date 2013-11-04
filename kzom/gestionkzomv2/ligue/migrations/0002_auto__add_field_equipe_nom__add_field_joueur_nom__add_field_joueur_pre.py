# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding field 'Equipe.nom'
        db.add_column('ligue_equipe', 'nom',
                      self.gf('django.db.models.fields.CharField')(max_length=255, null=True),
                      keep_default=False)

        # Adding field 'Joueur.nom'
        db.add_column('ligue_joueur', 'nom',
                      self.gf('django.db.models.fields.CharField')(max_length=255, null=True),
                      keep_default=False)

        # Adding field 'Joueur.prenom'
        db.add_column('ligue_joueur', 'prenom',
                      self.gf('django.db.models.fields.CharField')(max_length=255, null=True),
                      keep_default=False)

        # Adding field 'Joueur.date_naissance'
        db.add_column('ligue_joueur', 'date_naissance',
                      self.gf('django.db.models.fields.DateField')(null=True),
                      keep_default=False)


    def backwards(self, orm):
        # Deleting field 'Equipe.nom'
        db.delete_column('ligue_equipe', 'nom')

        # Deleting field 'Joueur.nom'
        db.delete_column('ligue_joueur', 'nom')

        # Deleting field 'Joueur.prenom'
        db.delete_column('ligue_joueur', 'prenom')

        # Deleting field 'Joueur.date_naissance'
        db.delete_column('ligue_joueur', 'date_naissance')


    models = {
        'ligue.equipe': {
            'Meta': {'object_name': 'Equipe'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        },
        'ligue.joueur': {
            'Meta': {'object_name': 'Joueur'},
            'date_naissance': ('django.db.models.fields.DateField', [], {'null': 'True'}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'prenom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        }
    }

    complete_apps = ['ligue']