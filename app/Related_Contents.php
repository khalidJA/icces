<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Related_Contents extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'related_contents';

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
    protected $fillable = ['title','contents_id'];

    
/**
 * Get the user that owns the Related_Contents
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function contents(): BelongsTo
{
    return $this->belongsTo(contents::class);
}


}
