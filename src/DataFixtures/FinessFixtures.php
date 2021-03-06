<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Finess;
use App\Entity\Strain;

class FinessFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $finess =new Finess();
        $finess->setEtablissement('EHPAD Clos des Bénédictins');
        $finess->setAdresse('6 Enclos des Bénédictins');
        $finess->setCodePostal('18000');
        $finess->setVille('Bourges');
        $finess->setFiness('180000259');
        $finess->setCoordinates('2.3858678,47.0867662');
        $manager->persist($finess);
        $this->addReference('180000259', $finess);
            
        $finess =new Finess();
        $finess->setEtablissement('EHPAD Les Cinq Rivières');
        $finess->setAdresse('25 bis rue Gay Lussac');
        $finess->setCodePostal('18100');
        $finess->setVille('Vierzon');
        $finess->setFiness('180007239');
        $finess->setCoordinates('2.0691421,47.2217489');
        $manager->persist($finess);
        $this->addReference('180007239', $finess);

        $finess =new Finess();
        $finess->setEtablissement('EHPAD Val de lEure');
        $finess->setAdresse('1 rue Georges Brassens');
        $finess->setCodePostal('28000');
        $finess->setVille('Chartes');
        $finess->setFiness('280504168');
        $finess->setCoordinates('1.4953135,48.4376841');
        $manager->persist($finess);
        $this->addReference('280504168', $finess);

        $finess =new Finess();
        $finess->setEtablissement('EHPAD Korian La Roseraie');
        $finess->setAdresse('8 Av du Général Leclerc');
        $finess->setCodePostal('28100');
        $finess->setVille('Dreux');
        $finess->setFiness('280505009');
        $finess->setCoordinates('1.3732572,48.7394832');
        $manager->persist($finess);
        $this->addReference('280505009', $finess);

        $finess =new Finess();
        $finess->setEtablissement('CALME');
        $finess->setAdresse('Moulin de Monjouvin');
        $finess->setCodePostal('28120');
        $finess->setVille('ILLIERS COMBRAY');
        $finess->setFiness('280506015');
        $finess->setCoordinates('1.2444186,48.2994963');
        $manager->persist($finess);
        $this->addReference('280506015', $finess);

        $finess =new Finess();
        $finess->setEtablissement('EHPAD Gaston Chargé');
        $finess->setAdresse('Avenue des Termelles');
        $finess->setCodePostal('37160');
        $finess->setVille('Abilly');
        $finess->setFiness('370000598');
        $finess->setCoordinates('0.7260646,46.9390792');
        $manager->persist($finess);
        $this->addReference('370000598', $finess);

        $finess =new Finess();
        $finess->setEtablissement('EHPAD Korian Le petit Castel');
        $finess->setAdresse('9 rue du Mail de la Papoterie');
        $finess->setCodePostal('37170');
        $finess->setVille('CHAMBRAY LES TOURS');
        $finess->setFiness('370103681');
        $finess->setCoordinates('0.70286,47.33537');
        $manager->persist($finess);
        $this->addReference('370103681', $finess);

        $finess =new Finess();
        $finess->setEtablissement('ADAPEI - FAM La Bellangerie');
        $finess->setAdresse('La Bellangerie');
        $finess->setCodePostal('37210');
        $finess->setVille('Vouvray');
        $finess->setFiness('370011314');
        $finess->setCoordinates('0.7746737,47.4300463');
        $manager->persist($finess);
        $this->addReference('370011314', $finess);

        $manager->flush();
    }
}
