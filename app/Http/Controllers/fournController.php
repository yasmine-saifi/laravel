<?php

namespace App\Http\Controllers;

use App\Models\Fornisseur;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class fournController extends Controller
{

    public function index()
    {
        //$fornisseurs = DB::table('fornisseurs')->get();

        //return view('fornisseurs', ['fornisseurs' => $fornisseurs,]);
        

    }
    public function index2()
    {
        $fournisseur_aga = DB::table('fornisseurs')
        ->where('ville', 'agadir')
        ->get();
        //villes
        $villes = DB::table('fornisseurs')->distinct()->pluck('ville');


        return view('fornisseurs_agadir', [
            'fournisseur_aga' => $fournisseur_aga,
            'villes'=>$villes,

     ]);
        

    }
    public function forn_home(){
        return view('fornisseur.fornisseurhome');
    }

    public function new_insert(){
        //show insert and update and delete
        $fornisseurs = DB::table('fornisseurs')->get();

        return view('fornisseur.insert', ['fornisseurs' => $fornisseurs]);
    }
    public function new_list(){
        //show list des fornisseur
        $fornisseurss = DB::table('fornisseurs')->get();

        return view('fornisseur.list', ['fornisseurss' => $fornisseurss]);
    }

    public function new_list_noms_ville()
    {
        $fournisseur_noms_villes = DB::table('fornisseurs')
        ->get();
        //villes
        $columns = [];
        foreach($fournisseur_noms_villes as $forn){
            $columns[]=[
                'nom'=>$forn->nom,
                'ville'=>$forn->ville,
            ];
        }


        return view('fornisseur.noms_villes',['columns'=> $columns]);
    }

    public function new_agadir()
    {
        $fournisseur_aga = DB::table('fornisseurs')
        ->where('ville', 'agadir')
        ->get();

        return view('fornisseur.agadir', [
            'fournisseur_aga' => $fournisseur_aga,

     ]);
        

    }

    public function new_villes()
    {
        //villes
        $villes = DB::table('fornisseurs')->distinct()->pluck('ville');


        return view('fornisseur.villes', ['villes'=>$villes]);
    }
        









    //////////////////////////////////////////////////////////////////
    public function create(){
        return view('addforn');
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            'nom'=>'required',
            'ville'=>'required',

        ]);
        $fournisseur=Fornisseur::create($data);
        return redirect(route('fornisseurs'));
        /*
        DB::table('fornisseurs')->insert([
            ['nom' => 'copag', 'ville' => 'taroudant'],
            ['nom' => 'central', 'ville' => 'agadir'],
            ['nom' => 'sidi ali', 'ville' => 'agadir'],
        ]);

        return redirect(route('fornisseurs'));
        */

    }
    

    //show
    public function show(Fornisseur $fornisseur){
        return view('show',['fornisseur'=>$fornisseur]);
    }


    //edit n update
    public function edit(Fornisseur $fornisseur){
        return view('edit_forn',['fornisseur'=>$fornisseur]);
    }
    public function update(Request $request,Fornisseur $fornisseur){
        $new=$request->validate([
            'nom'=>'required',
            'ville'=>'required',
        ]);
        $fornisseur->update($new);
        return redirect(route('fornisseurs'));
    }

    public function destroy(Fornisseur $fornisseur){
        $fornisseur->delete();
        return redirect(route('fornisseurs'));
    }


}
