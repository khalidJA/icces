<?php

namespace App\Http\Controllers;

use App\contents;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Related_Contents;
use Illuminate\Http\Request;

class relatedContentsController extends Controller
{
    public $data;
    public function __construct()
    {
        $s=new sys();
        $this->data=$s->DashboardData();
        
    }

    public function index($content_id)
    {
        $content=contents::with(['related_contents'])->find($content_id);
        $this->data= array_merge($this->data,['content'=>$content]);

        return view('related_contents.index')->with($this->data);
    }


    public function create($content_id)
    {
        $content=contents::with(['related_contents'])->find($content_id);
        $this->data= array_merge($this->data,['content'=>$content]);
        return view('related_contents.create')->with($this->data);
    }


    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Related_Contents::create($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }



    public function edit($id)
    {
        $related_content = Related_Contents::findOrFail($id);
        $content=contents::with(['related_contents'])->find($related_content->contents_id);
        $this->data= array_merge($this->data,['content'=>$content]);
        return view('related_contents.edit', compact('related_content'))->with($this->data);
    }

    
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $related_content = Related_Contents::findOrFail($id);
        $related_content->update($requestData);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }


    public function destroy($id)
    {
        Related_Contents::destroy($id);
 notify()->success('Operation Completed Successfully  ⚡️');
        return redirect()->back();
    }
}
