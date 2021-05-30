<?php

namespace App\Http\Controllers;

use App\sidebar;
use App\contents;

use App\Sub_Contents;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class subContentsController extends Controller
{
    public $data;
    public function __construct()
    {
        $s=new sys();
        $this->data=$s->DashboardData();
        
    }

    public function index($contents_id)
    {

     

      $content=contents::with(['related_contents','sub_contents'])->find($contents_id);
      $this->data= array_merge($this->data,['content'=>$content]);
        return view('sub_contents.index')->with($this->data);
    }


    public function create($contents_id)
    {
        $content=contents::with(['related_contents','sub_contents'])->find($contents_id);
        $this->data= array_merge($this->data,['content'=>$content]);
        return view('sub_contents.create')->with($this->data);
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        $requestData['is_active']=$request->is_active=='on'?1:0;
      $s=  Sub_Contents::create($requestData);
      if($requestData['contents_id']==3)
        sidebar::create(['sub_contents_id'=>$s->id,'order_content'=>$requestData['order_content']]);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }



    public function edit($id)
    {
        $content=contents::with(['related_contents','sub_contents'])->find(Sub_Contents::find($id)->contents_id);
        $this->data= array_merge($this->data,['content'=>$content]);
        $sub_content = Sub_Contents::findOrFail($id);

        return view('sub_contents.edit', compact('sub_content'))->with($this->data);
    }

    
    public function update(Request $request, $id)
    {

        
        $requestData = $request->all();
        $requestData['is_active']=$request->is_active=='on'?1:0;
        $sub_content = Sub_Contents::findOrFail($id);
        $sub_content->update($requestData);
        if($requestData['contents_id']==3)
        sidebar::where(['sub_contents_id'=>$sub_content->id])->update(['order_content'=>$requestData['order_content']]);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }


    public function destroy($id)
    {
        Sub_Contents::destroy($id);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }
}
