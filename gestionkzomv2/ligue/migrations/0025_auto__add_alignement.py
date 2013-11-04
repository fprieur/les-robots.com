# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'Alignement'
        db.create_table(u'ligue_alignement', (
            ('id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('joueur', self.gf('django.db.models.fields.related.ForeignKey')(related_name='joueurs_alignement', null=True, to=orm['ligue.Joueur'])),
            ('partie', self.gf('django.db.models.fields.related.ForeignKey')(related_name='partie_joueur', null=True, to=orm['ligue.Partie'])),
        ))
        db.send_create_signal(u'ligue', ['Alignement'])


    def backwards(self, orm):
        # Deleting model 'Alignement'
        db.delete_table(u'ligue_alignement')


    models = {
        u'ligue.alignement': {
            'Meta': {'object_name': 'Alignement'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'joueur': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'joueurs_alignement'", 'null': 'True', 'to': u"orm['ligue.Joueur']"}),
            'partie': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'partie_joueur'", 'null': 'True', 'to': u"orm['ligue.Partie']"})
        },
        u'ligue.but': {
            'Meta': {'object_name': 'But'},
            'buteur': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'buteur'", 'null': 'True', 'to': u"orm['ligue.Joueur']"}),
            'equipe': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'equipe_but'", 'null': 'True', 'to': u"orm['ligue.Equipe']"}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'partie': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'partie_but'", 'null': 'True', 'to': u"orm['ligue.Partie']"}),
            'passeur': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'passeur'", 'null': 'True', 'to': u"orm['ligue.Joueur']"}),
            'periode': ('django.db.models.fields.CharField', [], {'max_length': '5', 'null': 'True'}),
            'temps': ('django.db.models.fields.TimeField', [], {'null': 'True'})
        },
        u'ligue.classement': {
            'Meta': {'object_name': 'Classement'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'})
        },
        u'ligue.division': {
            'Meta': {'object_name': 'Division'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'saison': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'saison'", 'null': 'True', 'to': u"orm['ligue.Saison']"})
        },
        u'ligue.equipe': {
            'Meta': {'object_name': 'Equipe'},
            'division': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'division'", 'null': 'True', 'to': u"orm['ligue.Division']"}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        },
        u'ligue.horaire': {
            'Meta': {'object_name': 'Horaire'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'})
        },
        u'ligue.joueur': {
            'Meta': {'object_name': 'Joueur'},
            'date_naissance': ('django.db.models.fields.DateField', [], {'null': 'True'}),
            'equipe': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'joueurs'", 'null': 'True', 'to': u"orm['ligue.Equipe']"}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'numero_chandail': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'prenom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        },
        u'ligue.partie': {
            'Meta': {'object_name': 'Partie'},
            'heure': ('django.db.models.fields.DateTimeField', [], {}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'lieu': ('django.db.models.fields.CharField', [], {'default': "'Gymnase Charles Lemoine'", 'max_length': '255', 'null': 'True'}),
            'receveurs': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'receveurs'", 'null': 'True', 'to': u"orm['ligue.Equipe']"}),
            'visiteurs': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'visiteurs'", 'null': 'True', 'to': u"orm['ligue.Equipe']"})
        },
        u'ligue.penalite': {
            'Meta': {'object_name': 'Penalite'},
            'description': ('django.db.models.fields.CharField', [], {'max_length': '2'}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'partie': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'partie_penalite'", 'null': 'True', 'to': u"orm['ligue.Partie']"})
        },
        u'ligue.reglement': {
            'Meta': {'object_name': 'Reglement'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'})
        },
        u'ligue.saison': {
            'Meta': {'object_name': 'Saison'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        },
        u'ligue.suspension': {
            'Meta': {'object_name': 'Suspension'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'})
        }
    }

    complete_apps = ['ligue']