from django.db import models

class Saison(models.Model):
    nom = models.CharField(null=True , max_length=255)

    def __unicode__(self):
        return "%s" % (self.nom)

class PlageHoraire(models.Model):
	CHOIX_JOUR_SOIR = (
    	('jour', 'jour'),
    	('soir', 'soir'),
	)
	jourSoir = models.CharField(max_length=255, choices=CHOIX_JOUR_SOIR)

	def __unicode__(self):
		return "%s" % (self.jourSoir)

class Division(models.Model):
    nom = models.CharField(null=True , max_length=255)
    saison = models.ForeignKey(Saison, null=True, related_name="saison")

    def __unicode__(self):
        return "%s %s" % (self.nom + ' - ', self.saison)

class Semaine(models.Model):
	nom = models.CharField(null=True , max_length=255)
	plageHoraire = models.ForeignKey(PlageHoraire, null=True, related_name="plageHoraire")

	def __unicode__(self):
		return "%s %s" % (self.nom + ' - ', self.plageHoraire)

class Equipe(models.Model):
    nom = models.CharField(null=True , max_length=255)
    division = models.ForeignKey(Division, null=True, related_name="division")

    def __unicode__(self):
        return "%s - %s" % (self.nom, self.division.saison)