<?PHP

use App\links;
use App\settings;
use App\Sub_Contents;

function process_link($id){
    $link=links::with(['links'])->find($id);
    if(filter_var($link->code_content,FILTER_VALIDATE_URL)){
        return $link->code_content;
    }elseif ($link->code_content=='!link' || $link->links->count()>0) {
        return 'javascript:void(0)';
    }else{
        return route('content',$link->code_content);
    }

}
function settings(){
    return settings::find(1);
}

