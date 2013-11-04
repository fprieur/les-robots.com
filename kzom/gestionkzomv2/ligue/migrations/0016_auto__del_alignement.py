# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Deleting model 'Alignement'
        db.delete_table(u'ligue_alignement')

        # Removing M2M table for field joueurs on 'Alignement'
        db.delete_table('ligue_alignement_joueurs')


    def backwards(self, orm):
        # Adding model 'Alignement'
        db.create_table(u'ligue_alignement', (
            ('id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
        ))
        db.send_create_signal(u'ligue', ['Alignement'])

        # Adding M2M table for field joueurs on 'Alignement'
        db.create_table(u'ligue_alignement_joueurs', (
            ('id', models.AutoField(verbose_name='ID', primary_key=True, auto_created=True)),
            ('alignement', models.ForeignKey(orm[u'ligue.alignement'], null=False)),
            ('joueur', models.ForeignKey(orm[u'ligue.joueur'], null=False))
        ))
        db.create_unique(u'ligue_alignement_joueurs', ['alignement_id', 'joueur_id'])


    models = {
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
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'})
        },
        u'ligue.saison': {
            'Meta': {'object_name': 'Saison'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        }
    }

    complete_apps = ['ligue']