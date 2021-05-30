<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contact';

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
    protected $fillable = ['name','email','msg','subject','agent','is_readed'];

    
}
