<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DanaModel;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;


class DanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $users = new DanaModel;
        $users->name = Input::get('name');
        $users->surname = Input::get('surname');
        $users->username = Input::get('username');
        $users->email = Input::get('email');
        $users->password = Input::get('password');
    

        $users->save();

        return view('post');
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
    public function edit($id)
    {
        $edit = DanaModel::find($id);
        return view('edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $elovset = DanaModel::find($id);
        $elovset->name = $request->Input('name');
        $elovset->surname = $request->Input('surname');
        $elovset->username = $request->Input('username');
        $elovset->save();

        return redirect('/showall');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DanaModel::find($id);
        $delete->delete();

        return Redirect::to('/showall')->with('deletemsg', 'This user has been deleted!!!');
        

    }


    public function register(){

        return view('/register');
    }

    public function showAll(){
        $select = DanaModel::get();
        return view('showall', compact('select'));


    }
}
