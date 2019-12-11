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
        return view('acties', ['pagina' =>$pagina, 'css' => $css, 'active' => $active]);
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
