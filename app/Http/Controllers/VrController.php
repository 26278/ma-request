<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VrController extends Controller 
{
    public function showVr() {
        $pagina = "Vr"
        $css = strtolower($pagina);
        $active = $css;
        return view('Vr', ['pagina' => $pagina, 'css' => $css, 'active' => $active]);
    }
}