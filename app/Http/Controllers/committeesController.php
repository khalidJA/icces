<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\committees;
use Illuminate\Http\Request;

class committeesController extends Controller
{
    public $data;
    public function __construct()
    {
        $s=new sys();
        $this->data=$s->DashboardData();
        
    }

    public function index()
    {
      $committees = committees::all();
        return view('committees.index', compact('committees'))->with($this->data);
    }


    public function create()
    {
        return view('committees.create')->with($this->data);
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        committees::create($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }



    public function edit($id)
    {
        $committee = committees::findOrFail($id);

        return view('committees.edit', compact('committee'))->with($this->data);
    }

    
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $committee = committees::findOrFail($id);
        $committee->update($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }


    public function destroy($id)
    {
        committees::destroy($id);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }
}
