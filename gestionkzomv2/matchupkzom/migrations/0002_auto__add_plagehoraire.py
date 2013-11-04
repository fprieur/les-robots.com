# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'PlageHoraire'
        db.create_table(u'matchupkzom_plagehoraire', (
            ('id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('jourSoir', self.gf('django.db.models.fields.CharField')(max_length=255)),
        ))
        db.send_create_signal(u'matchupkzom', ['PlageHoraire'])


    def backwards(self, orm):
        # Deleting model 'PlageHoraire'
        db.delete_table(u'matchupkzom_plagehoraire')


    models = {
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