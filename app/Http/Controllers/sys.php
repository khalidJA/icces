<?php

namespace App\Http\Controllers;

use App\links;
use App\menus;
use App\contact;
use App\sidebar;
use App\contents;
use App\register;
use App\Sub_Contents;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\CompleteRegister;
use Illuminate\Support\Facades\Mail;

class sys extends Controller
{


    function search(Request $request){
$data=[];
               $data['links_founded']=links::where('title','like','%'.$request->keyword.'%')->orWhere('content','like','%'.$request->keyword.'%')->get();
               $data['contents_founded']=Sub_Contents::where('title','like','%'.$request->keyword.'%')->orWhere('content','like','%'.$request->keyword.'%')->get();
               $data['keyword']=$request->q;
               $data=array_merge($this->TemplateData(),$data);
        return view('home.search')->with($data);
    }

    public function storeContact(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required','email'],
            'subject' => ['required'],
            'msg' => ['required'],
        ]);
        $requestData = $request->all();
        $requestData['agent']=$request->server('HTTP_USER_AGENT');
        $requestData['is_readed']=0;
        contact::create($requestData);

        return view('home.success_contact')->with($this->TemplateData());
    }

    function Contact(){
        $data=$this->TemplateData();
    return view('home.contact')->with($data);
    }
function join(){
    $data=$this->TemplateData();
    return view('home.register')->with($data);
}

    function OneContent ($id){

$data=array_merge($this->TemplateData(),['link'=>links::with(['links'])->where('code_content',$id)->first()]);
        return view('home.single')->with($data);

     
    }
  
 

function Sidebar(){
return sidebar::with(['menus.links','contents'])->get();



}


function Middle(){

}

 function TemplateData(){

  return  [
        'nav'=>links::where(['is_navbar'=>1])->with(['links'])->get(),
        'sidebar'=>$this->Sidebar(),
        'footer'=>menus::with(['links.links'])->where(['contents_id'=>4])->get(),
        'middle'=>Sub_Contents::where(['contents_id'=>2])->get(),
        
    ];
}


function Home(){

    return view('home.index')->with($this->TemplateData());
}


function active($code,$email){

$success=0;
$check=register::where(['email'=>$email,'active_code'=>$code])->get();
if($check->count()==1){
    $success=1;
    if($check[0]->is_active==0)
    {
        
        $msg='The e-mail has been activated successfully. We will contact you via e-mail if required'; 
    register::where(['email'=>$email,'active_code'=>$code])->update(['is_active'=>1]); 
    }else{
return redirect('/');
    }
  
}else{
    $success=0;
    $msg='You followed the wrong link Please make sure that you entered a valid URL';
}
return view('home.active_reigster')->with(['msg'=>$msg,'success'=>$success]);
}


function validateRegister(Request $request){

    $rules = [
        'work_place' => 'required',
        'name' => 'required',
        'email' => 'required|email|unique:register',
  
    ];



    $customMessages = [
        'work_place.required' => 'The Work Place Field is Required ',
        'name.required' => 'The Name is Required ',
        'email.required' => 'The Email Address is Required ',
        'email.unique' => 'this email address alrady taken ',
      
    ];


    if($request->hasFile('image')){
        $rules['image']='image';
        $customMessages['image.image']='Personal Image File Invalid';
        }
    if($request->hasFile('file') && isset($request->is_author)){
        $rules['file']='required|mimes:pdf|max:7000';
        $rules['title']='required';
        $rules['abstract']='required';
        $customMessages['title.required']='Paper Title Required';
        $customMessages['abstract.required']='Paper Abstract Required';
        $customMessages['file.required']='Paper File Required';
        $customMessages['file.mimes']='Paper File Invalid,Choose';
        $customMessages['file.max']='Paper File Size Too Big';
        }

   return $request->validate( $rules, $customMessages);



}

    function reg(Request $request){
      
       if(!isset($request->is_reviewers) && !isset($request->is_author) && !isset($request->is_attenders))
       {
         
           return redirect()->back()->withErrors(['type_person'=>"Please specify the type of participation for the user"]);
       }

       $this->validateRegister($request);

       if($request->hasFile('image')){
        $image = $request->file('image');
        $destinationPath = public_path('/reg/'); 
               
                  $profileImage = Str::random(32) . "." . $image->getClientOriginalExtension();
                  $image->move($destinationPath, $profileImage);
                  $requestData['image']=$profileImage;
        }
       if($request->hasFile('file')){
        $paper = $request->file('file');
        $destinationPath = public_path('/papers/'); 
               
                  $pfile = Str::random(32) . "." . $paper->getClientOriginalExtension();
                  $paper->move($destinationPath, $pfile);
                  $requestData['file']=$pfile;
        }
$requestData=$request->all();
$requestData['is_author']=$request->is_author=='on'?1:0;
$requestData['is_attenders']=$request->is_attenders=='on'?1:0;
$requestData['is_reviewers']=$request->is_reviewers=='on'?1:0;
if ($request->is_author!='on') {
    $requestData['title']=null;
    $requestData['abstract']=null;
    $requestData['file']=null;


}
$requestData['active_code']=strtolower(Str::random(32));



register::create($requestData);

Mail::to($requestData['email'])->send(new CompleteRegister($requestData));

return redirect()->back();

    }
function DashboardData(){

return [

    'main_contents'=>contents::all()
];

}
function Dashaboard(){
 
    return view('layouts.control')->with($this->DashboardData());
}
    

 function DashboardDataRelated($related_data,$content_id){

$sc=new subContentsController;
$m=new menusController;
$l=new linksController;

switch (strtolower($related_data)) {
    case 'sub_contents':
       return   $sc->index($content_id);
        break;
    case 'menus':
       return   $m->index($content_id);
        break;
    case 'links'://navbar
       return   $l->index('navbar');
        break;
    
    default:
        # code...
        break;
}

    return;
}
}
