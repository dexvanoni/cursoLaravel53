<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
  public function create(){
    return view('admin.client.client');
  }

  public  function store(Request $request)
  {
    return $request->get('value');
  }
}
