<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        $pagina = "Home";
        $css = strtolower($pagina);
        $active = $css;
        return view('home', ['pagina' => $pagina, 'css' => $css, 'active' => $active]);
    }

    public function showActies()
    {
        $pagina = "Acties";
        $css = strtolower($pagina);
        $active = $css;

        // Pad naar JSON file opslaan in variabele
        $jsonFile = database_path('modals.json');

        // Checken of bestand bestaat
        if(!file_exists($jsonFile)) {
            return 'JSON file niet gevonden: ' . $jsonFile;
        }

        // Inhoud inlezen
        $json = file_get_contents($jsonFile);

        // Terug zetten naar array in PHP
        $modalData = json_decode($json);

        // Dump (uitcommenten als het werkt ;-)
//        dd($modalData);
        return view('acties', ['pagina' =>$pagina, 'css' => $css, 'active' => $active, 'modals' => $modalData]);
    }

    public function showGame()
    {
        $pagina = "VR-Game";
        $css = strtolower($pagina);
        $active = $css;
        return view('game', ['pagina' =>$pagina, 'css' => $css, 'active' => $active]);
    }

    public function showReportages()
    {
        $pagina = "Reportages";
        $css = strtolower($pagina);
        $active = $css;
        return view('reportages', ['pagina' => $pagina, 'css' => $css, 'active' => $active]);
    }

    public function showContact()
    {
        $pagina = "Contact";
        $css = strtolower($pagina);
        $active = $css;
        return view('contact', ['pagina' =>$pagina, 'css' => $css, 'active' => $active]);
    }
}
