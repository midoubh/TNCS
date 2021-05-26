<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        if( Gate::denies('manage-users')){
            abort(code: 403);
        }
        
        $arr['users'] = User::all();
        return view('Admin.user.index')->with($arr);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,User $User)
    {
        $User->name = $request->name ;
        $User->email = $request->email ;
        $User->password = $request->password ;
        $User->role_id = $request->role_id ;
        $User->matricule_fiscale = $request->matricule_fiscale ;
       $User->save();
       return redirect()->route('user.index');
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
    public function edit(User $User)
    {
        $arr['user'] = $User;
       
        return view('Admin.user.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $User)
    {
        $User->name = $request->name ;
        $User->email = $request->email ;
        $User->password = $request->password ;
        $User->role_id = $request->role_id ;
        $User->Matricule_Fiscale = $request->Matricule_Fiscale ;
       $User->save();
       return redirect()->route('user.index')->with('success', 'L\'auteur a bien été mis à jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       User::destroy($id);
       return redirect()->route('Admin.user.index');
    }
}
