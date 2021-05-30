<?php

namespace App\Http\Controllers;

use App\committees;
use App\contents;
use App\Persons_Coms;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class personsComsController extends Controller
{
    public $data;
    public function __construct()
    {
        $s=new sys();
        $this->data=$s->DashboardData();
        
    }

    public function index($committees_id)
    {
        $committee=committees::with(['persons'])->find($committees_id);
        $this->data= array_merge($this->data,['committee'=>$committee]);
    
        return view('persons_coms.index')->with($this->data);
    }


    public function create($committees_id)
    {
        $committee=committees::with(['persons'])->find($committees_id);
        $this->data= array_merge($this->data,['committee'=>$committee]);
        return view('persons_coms.create')->with($this->data);
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Persons_Coms::create($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }



    public function edit($id)
    {
        $persons_com = Persons_Coms::findOrFail($id);

        return view('persons_coms.edit', compact('persons_com'))->with($this->data);
    }

    
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $persons_com = Persons_Coms::findOrFail($id);
        $persons_com->update($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }


    public function destroy($id)
    {
        Persons_Coms::destroy($id);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }
}
