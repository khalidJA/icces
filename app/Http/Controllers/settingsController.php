<?php

namespace App\Http\Controllers;

use App\contents;
use App\settings;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class settingsController extends Controller
{
    public $data;
    public function __construct()
    {
        $s=new sys();
        $this->data=$s->DashboardData();
        
    }

    public function index()
    {
      $settings = settings::all();
        return view('settings.index', compact('settings'))->with($this->data);
    }


    public function create()
    {
        return view('settings.create')->with($this->data);
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        settings::create($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }



    public function edit($id)
    {
      
        $setting = settings::findOrFail($id);

        return view('settings.edit', compact('setting'))->with($this->data);
    }

    
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $setting = settings::findOrFail($id);
        $setting->update($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }


    public function destroy($id)
    {
        settings::destroy($id);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }
}
