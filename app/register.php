<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'register';

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
    protected $fillable = ['name','email','country','work_place','phone','gender','certi','image','file','title',
    'abstract','is_attenders','is_reviewers','is_author','active_code','is_active'];

    
}
