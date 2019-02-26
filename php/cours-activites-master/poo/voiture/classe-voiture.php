<?php
class Voiture
{
    public $vitesse;
    public $trajet;
    public $force_frein;
    public $temps_trajet;

    public function Rouler($trajet, $vitesse)
    {
        $temps_trajet = $trajet / $vitesse;
        return $temps_trajet;
    }
    public function Freiner($force_frein, $trajet)
    {
        echo "Ok";
    }
    public function Arreter()
    {
        echo "Arreter";
    }
}
$vehicule = new Voiture();
echo $vehicule -> Rouler(750, 90);
echo $vehicule -> Arreter();
