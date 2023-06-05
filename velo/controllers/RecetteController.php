<?php

namespace controllers;


use models\RecetteModel;

class RecetteController
{
    public function recettePage()
    {

        $idpersonnel = $_SESSION["id"];
        $recette = new RecetteModel();
        $totalDay = $recette->findAllByDay();
        $totalMounth = $recette->findAllByMonth($idpersonnel);
        $totalYear = $recette->findAllByYEAR($idpersonnel);
        $totalbysaler = $recette->findAllByYearBySaler();
        $totalbysalerMounth = $recette->findAllByMonthBySaler();

        $page = "views/recette.phtml";
        require_once "views/base.phtml";
    }
}
