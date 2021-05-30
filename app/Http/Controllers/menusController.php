<?php

namespace App\Http\Controllers;

use App\menus;
use App\contents;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sidebar;

class menusController extends Controller
{
    public $data;
    public function __construct()
    {
        $s=new sys();
        $this->data=$s->DashboardData();
        
    }

    public function index($contents_id)
    {
    
        $content=contents::with(['menus'])->find($contents_id);
        $this->data= array_merge($this->data,['content'=>$content]);
        return view('menus.index')->with($this->data);
    }


    public function create($contents_id)
    {
        $content=contents::with(['menus'])->find($contents_id);
        $this->data= array_merge($this->data,['content'=>$content]);
        return view('menus.create')->with($this->data);
    }


    public function store(Request $request)
    {
      
        $requestData = $request->all();
        $requestData['is_active']=$request->is_active=='on'?1:0;
      $m=  menus::create($requestData);
      if($requestData['contents_id']==3)
      sidebar::create(['menus_id'=>$m->id,'order_content'=>$requestData['order_menu']]);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }



    public function edit($id)
    {
        $menu = menus::findOrFail($id);
        $content=contents::with(['menus'])->find(menus::find($id)->contents_id);
        $this->data= array_merge($this->data,['content'=>$content]);
        return view('menus.edit', compact('menu'))->with($this->data);
    }

    
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $menu = menus::findOrFail($id);
        $requestData['is_active']=$request->is_active=='on'?1:0;
        $menu->update($requestData);
        if($requestData['contents_id']==3)
        sidebar::where(['menus_id'=>$menu->id])->update(['order_content'=>$requestData['order_menu']]);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }


    public function destroy($id)
    {
        menus::destroy($id);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }
}
