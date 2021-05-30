<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sidebar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sidebar';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['menus_id','sub_contents_id','order_content'];

function menus(){
    return $this->belongsTo(menus::class,'menus_id');
}
function contents(){
    return $this->belongsTo(Sub_Contents::class,'sub_contents_id');
}

    
}
