from django.db import models

class Saison(models.Model):
    nom = models.CharField(null=True , max_length=255)

    def __unicode__(self):
        return "%s" % (self.nom)

class Division(models.Model):
    nom = models.CharField(null=True , max_length=255)
    saison = models.ForeignKey(Saison, null=True, related_name="saison")

    def __unicode__(self):
        return "%s %s" % (self.nom + ' - ', self.saison)

class Equipe(models.Model):
    nom = models.CharField(null=True , max_length=255)
    division = models.ForeignKey(Division, null=True, related_name="division")

    def __unicode__(self):
        return "%s %s" % (self.nom + ' - ', self.division.saison)

class Classement(models.Model):
    pass

class Horaire(models.Model):
    pass

class Arbitre(models.Model):
    nom = models.CharField(null=True, max_length=255)
    prenom = models.CharField(null=True, max_length=255)

    def __unicode__(self):
        return "%s" % (self.prenom + ' ' + self.nom)


class Marqueur(models.Model):
    nom = models.CharField(null=True, max_length=255)
    prenom = models.CharField(null=True, max_length=255)

    def __unicode__(self):
        return "%s" % (self.prenom + ' ' + self.nom)

class Partie(models.Model):
    lieu = models.CharField(null=True, default="Gymnase Charles Lemoine", max_length=255)
    heure = models.DateTimeField()
    receveurs = models.ForeignKey(Equipe, null=True, related_name='receveurs')
    visiteurs = models.ForeignKey(Equipe, null=True, related_name='visiteurs')
    arbitres = models.ForeignKey(Arbitre, null=True, related_name='arbitres')
    marqueurs = models.ForeignKey(Marqueur, null=True, related_name='marqueurs')

class Joueur(models.Model):
    nom = models.CharField(null=True, max_length=255)
    prenom = models.CharField(null=True, max_length=255)
    date_naissance = models.DateField(null=True)
    numero_chandail = models.CharField(null=True, max_length=255)
    equipe  = models.ForeignKey(Equipe, null=True, related_name='joueurs')

    def __unicode__(self):
        return "%s %s" % (self.nom.capitalize(), self.prenom.capitalize())

class Alignement(models.Model):
    joueur = models.ForeignKey(Joueur, null=True, related_name='joueurs_alignement')
    partie = models.ForeignKey(Partie, null=True, related_name='partie_joueur')


class But(models.Model):
    PERIODE_MATCH = (
        ('1', '1e'),
        ('1', '2e'),
        ('1', '3e'),
    )
    partie = models.ForeignKey(Partie, null=True, related_name='partie_but')
    equipe = models.ForeignKey(Equipe, null=True, related_name='equipe_but')
    buteur = models.ForeignKey(Joueur, null=True, related_name='buteur')
    passeur = models.ForeignKey(Joueur, null=True, related_name='passeur')
    temps = models.TimeField(null=True);
    periode = models.CharField(null=True, max_length = 5, choices=PERIODE_MATCH)

class Penalite(models.Model):
    TYPE_PENALITE = (
        ('AC', 'AC'),
        ('BE', 'BE'),
        ('SF', 'SF'),
    )
    description = models.CharField(max_length=2, choices=TYPE_PENALITE)
    partie = models.ForeignKey(Partie, null=True, related_name='partie_penalite')

    def __unicode__(self):
        return "%s %s" % (self.nom.description)

class Suspension(models.Model):
    pass

class Reglement(models.Model):
    pass
