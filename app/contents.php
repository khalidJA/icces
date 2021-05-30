<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class contents extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contents';

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
    protected $fillable = ['title'];

    
/**
 * Get all of the comments for the contents
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function related_contents(): HasMany
{
    return $this->hasMany(related_contents::class);
}
public function sub_contents(): HasMany
{
    return $this->hasMany(sub_contents::class);
}
public function menus(): HasMany
{
    return $this->hasMany(menus::class);
}

}
