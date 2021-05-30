<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class committees extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'committees';

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
     * Get all of the comments for the committees
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function persons(): HasMany
    {
        return $this->hasMany(Persons_Coms::class);
    }
}
