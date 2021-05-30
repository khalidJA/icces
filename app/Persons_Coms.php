<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Persons_Coms extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'persons_coms';

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
    protected $fillable = ['name','work_place','country','committees_id'];

    /**
     * Get the user that owns the Persons_Coms
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function committees(): BelongsTo
    {
        return $this->belongsTo(committees::class);
    }
}
