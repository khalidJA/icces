<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'settings';

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
    protected $fillable = ['name','author','description','keywords','title','about','logo','date_conf'];

    
}
