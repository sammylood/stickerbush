<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StickerbushController extends Controller
{
    /**
     * Controller de la page d'accueil
     */
   public function index(){
        return view('index');
    }

    /**
     * Controller de la page à propos
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Controller de la page de blogue
     */
    public function articles()
    {
        return view('articles');
    }

    /**
     * Controller de la page de contact
     */
    public function contact()
    {
        return view('contact');
    }

    public function contactForm(Request $request) //Request donne toutes les données envoyés dans la requete post
    {
        //return $request; //Pour voir l'objet au complet
        // return $request->name; // Pour voir juste le nom

        // print_r($_POST); //Pour tester le contenu du tableau envoyé en post par le formulaire de la page contact
        // return view('contact');
        //Laravel transform les tableaux associatifs et les transforme en objet

        return view('contact', ['data' => $request]); //Envoie le contenu de request vers la page contact. Le mot data a été choisi par nous
    }
}
