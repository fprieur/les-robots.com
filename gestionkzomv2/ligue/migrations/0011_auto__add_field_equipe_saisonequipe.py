# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding field 'Equipe.saisonequipe'
        db.add_column('ligue_equipe', 'saisonequipe',
                      self.gf('django.db.models.fields.related.ForeignKey')(related_name='saisonequipe', null=True, to=orm['ligue.Saison']),
                      keep_default=False)


    def backwards(self, orm):
        # Deleting field 'Equipe.saisonequipe'
        db.delete_column('ligue_equipe', 'saisonequipe_id')


    models = {
        'ligue.division': {
            'Meta': {'object_name': 'Division'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'saison': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'saison'", 'null': 'True', 'to': "orm['ligue.Saison']"})
        },
        'ligue.equipe': {
            'Meta': {'object_name': 'Equipe'},
            'division': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'division'", 'null': 'True', 'to': "orm['ligue.Division']"}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'saisonequipe': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'saisonequipe'", 'null': 'True', 'to': "orm['ligue.Saison']"})
        },
        'ligue.joueur': {
            'Meta': {'object_name': 'Joueur'},
            'date_naissance': ('django.db.models.fields.DateField', [], {'null': 'True'}),
            'equipe': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'joueurs'", 'null': 'True', 'to': "orm['ligue.Equipe']"}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'prenom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        },
        'ligue.partie': {
            'Meta': {'object_name': 'Partie'},
            'heure': ('django.db.models.fields.DateTimeField', [], {}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'lieu': ('django.db.models.fields.CharField', [], {'default': "'Gymnase Charles Lemoine'", 'max_length': '255', 'null': 'True'}),
            'receveurs': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'receveurs'", 'null': 'True', 'to': "orm['ligue.Equipe']"}),
            'visiteurs': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'visiteurs'", 'null': 'True', 'to': "orm['ligue.Equipe']"})
        },
        'ligue.saison': {
            'Meta': {'object_name': 'Saison'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        }
    }

    complete_apps = ['ligue']