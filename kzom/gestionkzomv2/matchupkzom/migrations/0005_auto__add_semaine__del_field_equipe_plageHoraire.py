# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'Semaine'
        db.create_table(u'matchupkzom_semaine', (
            ('id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('nom', self.gf('django.db.models.fields.CharField')(max_length=255, null=True)),
            ('plageHoraire', self.gf('django.db.models.fields.related.ForeignKey')(related_name='plageHoraire', null=True, to=orm['matchupkzom.PlageHoraire'])),
        ))
        db.send_create_signal(u'matchupkzom', ['Semaine'])

        # Deleting field 'Equipe.plageHoraire'
        db.delete_column(u'matchupkzom_equipe', 'plageHoraire_id')


    def backwards(self, orm):
        # Deleting model 'Semaine'
        db.delete_table(u'matchupkzom_semaine')

        # Adding field 'Equipe.plageHoraire'
        db.add_column(u'matchupkzom_equipe', 'plageHoraire',
                      self.gf('django.db.models.fields.related.ForeignKey')(related_name='plage_hor_equipe', null=True, to=orm['matchupkzom.PlageHoraire']),
                      keep_default=False)


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
        },
        u'matchupkzom.semaine': {
            'Meta': {'object_name': 'Semaine'},
            'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'nom': ('django.db.models.fields.CharField', [], {'max_length': '255', 'null': 'True'}),
            'plageHoraire': ('django.db.models.fields.related.ForeignKey', [], {'related_name': "'plageHoraire'", 'null': 'True', 'to': u"orm['matchupkzom.PlageHoraire']"})
        }
    }

    complete_apps = ['matchupkzom']