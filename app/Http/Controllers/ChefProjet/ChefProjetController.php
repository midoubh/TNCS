<?php

namespace App\Http\Controllers\ChefProjet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projets;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ChefProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Gate::denies('manage-projets')){
            abort(code: 403);
        }
         $arr['projets'] = Projets::all();
        return view('ChefProjets.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ar1['users'] = DB::table('users') 
        ->where('role_id', '=', 2)->get();
        return view('ChefProjets.create')->with($ar1);           
                      
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Projets $Projets)
    {
       
        $Projets->team_id = $request->team_id ;
        $Projets->user_id = $request->user_id ;
        $Projets->libelle = $request->libelle ;
        $Projets->date_deb = $request->date_deb ;
        $Projets->date_prev_fin = $request->date_prev_fin ;
       $Projets->save();
       return redirect()->route('chef.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Projets $projets)
    {
        $arr['projets'] = $projets;
       
        return view('ChefProjets.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Projets $projets)
    {
        
        $projets->user_id = $request->user_id ;
        $projets->team_id = $request->team_id ;
        $projets->libelle = $request->libelle ;
        $projets->date_deb = $request->date_deb ;
        $projets->date_prev_fin = $request->date_prev_fin ;
        $projets->save();
       return redirect()->route('chef.index')->with('success', 'L\'auteur a bien été mis à jour !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Projets::destroy($id);
       return redirect()->route('chef.index');
    }
}
