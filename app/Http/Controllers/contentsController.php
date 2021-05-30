<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\contents;
use Illuminate\Http\Request;

class contentsController extends Controller
{

public $data;
    public function __construct()
    {
        $s=new sys();
        $this->data=$s->DashboardData();
        
    }
    public function index()
    {
        
      $contents = contents::all();
        return view('contents.index', compact('contents'))->with($this->data);
    }


    public function create()
    {
        return view('contents.create')->with($this->data);
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        contents::create($requestData);
        notify()->success('Operation Completed Successfully  ⚡️'); 
        return redirect()->back();
    }



    public function edit($id)
    {
        $content = contents::findOrFail($id);

        return view('contents.edit', compact('content'))->with($this->data);
    }

    
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $content = contents::findOrFail($id);
        $content->update($requestData);
        notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }


    public function destroy($id)
    {
        contents::destroy($id);
        notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }
}
