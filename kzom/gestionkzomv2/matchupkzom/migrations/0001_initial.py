# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'Saison'
        db.create_table(u'matchupkzom_saison', (
            ('id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('nom', self.gf('django.db.models.fields.CharField')(max_length=255, null=True)),
        ))
        db.send_create_signal(u'matchupkzom', ['Saison'])


    def backwards(self, orm):
        # Deleting model 'Saison'
        db.delete_table(u'matchupkzom_saison')


    models = {
        u'matchupkzom.saison': {
            'Meta': {'object_name': 'Saison'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'})
        }
    }

    complete_apps = ['matchupkzom']