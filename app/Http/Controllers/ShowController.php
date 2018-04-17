<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function view($id, $name)
    {
        return ['id' => $id, 'name' => $name];
    }

    public function view2($id, $name)
    {
    	return view('welcome', ['id' => $id, 'name' => $name]);
    }

}