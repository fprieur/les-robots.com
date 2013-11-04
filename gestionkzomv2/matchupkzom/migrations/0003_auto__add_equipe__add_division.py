# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'Equipe'
        db.create_table(u'matchupkzom_equipe', (
            ('id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('nom', self.gf('django.db.models.fields.CharField')(max_length=255, null=True)),
            ('division', self.gf('django.db.models.fields.related.ForeignKey')(related_name='division', null=True, to=orm['matchupkzom.Division'])),
        ))
        db.send_create_signal(u'matchupkzom', ['Equipe'])

        # Adding model 'Division'
        db.create_table(u'matchupkzom_division', (
            ('id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('nom', self.gf('django.db.models.fields.CharField')(max_length=255, null=True)),
            ('saison', self.gf('django.db.models.fields.related.ForeignKey')(related_name='saison', null=True, to=orm['matchupkzom.Saison'])),
        ))
        db.send_create_signal(u'matchupkzom', ['Division'])


    def backwards(self, orm):
        # Deleting model 'Equipe'
        db.delete_table(u'matchupkzom_equipe')

        # Deleting model 'Division'
        db.delete_table(u'matchupkzom_division')


    models = {
        u'matchupkzom.division': {
            'Meta': {'object_name': 'Division'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'saison': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'saison'", 'null': 'True', 'to': u"orm['matchupkzom.Saison']"})
        },
        u'matchupkzom.equipe': {
            'Meta': {'object_name': 'Equipe'},
            'division': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'division'", 'null': 'True', 'to': u"orm['matchupkzom.Division']"}),
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        },
        u'matchupkzom.plagehoraire': {
            'Meta': {'object_name': 'PlageHoraire'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'jourSoir': ('django.db.models.fields.CharField', [], {'max_length': '255'})
        },
        u'matchupkzom.saison': {
            'Meta': {'object_name': 'Saison'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        }
    }

    complete_apps = ['matchupkzom']