<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public $data;
    public function __construct()
    {
        $s=new sys();
        $this->data=$s->DashboardData();
        
    }

    public function index()
    {
      $contact = contact::all();
        return view('contact.index', compact('contact'))->with($this->data);
    }


    public function create()
    {
        return view('contact.create')->with($this->data);
    }


  
function show($id){
    
    $contact = contact::findOrFail($id);

    return view('contact.show', compact('contact'))->with($this->data);
}

    public function edit($id)
    {
        $contact = contact::findOrFail($id);

        return view('contact.edit', compact('contact'))->with($this->data);
    }

    
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $contact = contact::findOrFail($id);
        $contact->update($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }


    public function destroy($id)
    {
        contact::destroy($id);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }
}
