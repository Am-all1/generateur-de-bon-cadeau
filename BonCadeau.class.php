<?php


class BonCadeau
{
    public float $montant;
    public string $nomBeneficiaire;
    public string $prenomBeneficiaire;
    public string $nomAcheteur;
    public string $prenomAcheteur;
    public string $mois;
    public string $annee;
    public string $numBonCadeau;
    public float $dateLimite;


    public function __construct($nomBeneficiaire, $prenomBeneficiaire, $nomAcheteur, $prenomAcheteur, $mois, $annee)

    {
        $this->nomBeneficiaire = $nomBeneficiaire;
        $this->prenomBeneficiaire = $prenomBeneficiaire;
        $this->nomAcheteur = $nomAcheteur;
        $this->prenomAcheteur = $prenomAcheteur;
        $this->mois = $mois;
        $this->annee = $annee;
    }


    public function affichage()
    {
        return "<h2>Voici votre bon cadeau<h2>

    <p> Nom du beneficiaire : " . $this->nomBeneficiaire . "<p>
    <p> Prenom du beneficiaire : " . $this->prenomBeneficiaire . "<p>
    <p> Nom de l'acheteur: " . $this->nomAcheteur . "<p>
    <p> Prenom de l'acheteur: : " . $this->prenomAcheteur . "<p>
    <p> Mois d'achat : " . $this->mois . "<p>
    <p> Année d'achat : " . $this->annee . "<p>
    <p>" . $this->numeroBonDeCommande() . "<p>";
    }


    public function numeroBonDeCommande()

    {
        return
            $this->mois . $this->annee . random_int(10, 99);
    }


    // public function numeroAleatoire()

    // {

    //     $min = 10;
    //     $max = 99;

    //     echo rand($min, $max);
    // }
}
