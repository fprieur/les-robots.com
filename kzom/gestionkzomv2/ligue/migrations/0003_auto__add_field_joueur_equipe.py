# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding field 'Joueur.equipe'
        db.add_column('ligue_joueur', 'equipe',
                      self.gf('django.db.models.fields.related.ForeignKey')(related_name='joueurs', null=True, to=orm['ligue.Equipe']),
                      keep_default=False)


    def backwards(self, orm):
        # Deleting field 'Joueur.equipe'
        db.delete_column('ligue_joueur', 'equipe_id')


    models = {
        'ligue.equipe': {
            'Meta': {'object_name': 'Equipe'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        },
        'ligue.joueur': {
            'Meta': {'object_name': 'Joueur'},
            'date_naissance': ('django.db.models.fields.DateField', [], {'null': 'True'}),
            'equipe': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'joueurs'", 'null': 'True', 'to': "orm['ligue.Equipe']"}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'prenom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        }
    }

    complete_apps = ['ligue']