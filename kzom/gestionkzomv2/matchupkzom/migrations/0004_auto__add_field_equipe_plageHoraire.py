# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding field 'Equipe.plageHoraire'
        db.add_column(u'matchupkzom_equipe', 'plageHoraire',
                      self.gf('django.db.models.fields.related.ForeignKey')(related_name='plage_hor_equipe', null=True, to=orm['matchupkzom.PlageHoraire']),
                      keep_default=False)


    def backwards(self, orm):
        # Deleting field 'Equipe.plageHoraire'
        db.delete_column(u'matchupkzom_equipe', 'plageHoraire_id')


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
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'plageHoraire': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'plage_hor_equipe'", 'null': 'True', 'to': u"orm['matchupkzom.PlageHoraire']"})
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