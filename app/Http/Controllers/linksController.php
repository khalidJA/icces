<?php

namespace App\Http\Controllers;

use App\links;
use App\menus;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class linksController extends Controller
{
    public $data;
    public function __construct()
    {
        $s=new sys();
        $this->data=$s->DashboardData();
        
    }

    public function index($type,$id=0)
    {
      
        switch ($type) {
            case 'navbar':
              $this->data=array_merge($this->data,['is_navbar'=>1,'type_link'=>$type,'id'=>$id]);

              $links=links::where(['is_navbar'=>1])->get();
                break;
            case 'sub_links':
              
              $this->data=array_merge($this->data,['type_link'=>$type,'id'=>$id,'parent_link'=>links::find($id)]);

              $links=links::where(['links_id'=>$id])->get();
                break;
            case 'menus':
              
              $this->data=array_merge($this->data,['menu'=>menus::find($id),'id'=>$id,'type_link'=>$type]);

              $links=links::where(['menus_id'=>$id])->get();
                break;
            
            default:
                # code...
                break;
        }

        return view('links.index', compact('links'))->with($this->data);
    }


    public function create($type,$id=0)
    {

        switch ($type) {
            case 'navbar':
              $this->data=array_merge($this->data,['is_navbar'=>1]);
                break;
            case 'sub_links':
              $this->data=array_merge($this->data,['parent_link'=>links::find($id)]);
                break;
            case 'menus':
              $this->data=array_merge($this->data,['menu'=>menus::find($id)]);
                break;
            
            default:
                # code...
                break;
        }
        return view('links.create')->with($this->data);
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        $requestData['is_active']=$request->is_active=='on'?1:0;
        links::create($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }



    public function edit($id)
    {
        $link = links::findOrFail($id);
$this->data['parent_link']=links::find($link->links_id);
        return view('links.edit', compact('link'))->with($this->data);
    }

    
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        $requestData['is_active']=$request->is_active=='on'?1:0;
        $link = links::findOrFail($id);
        $link->update($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }


    public function destroy($id)
    {
        links::destroy($id);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }
}
