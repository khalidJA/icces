<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\register;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public $data;
    public function __construct()
    {
        $s=new sys();
        $this->data=$s->DashboardData();
        
    }

    public function index()
    {
      $register = register::all();
        return view('register.index', compact('register'))->with($this->data);
    }


    public function create()
    {
        return view('register.create')->with($this->data);
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        register::create($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }



    public function edit($id)
    {
        $register = register::findOrFail($id);

        return view('register.edit', compact('register'))->with($this->data);
    }

    
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $register = register::findOrFail($id);
        $register->update($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }


    public function destroy($id)
    {
        register::destroy($id);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }
}
