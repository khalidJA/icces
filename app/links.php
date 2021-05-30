<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class links extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'links';

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
    protected $fillable = ['title','content','code_content','links_id','menus_id','is_navbar','is_active','order_link'];

    public function contents(): BelongsTo
    {
        return $this->belongsTo(contents::class);
    }
    public function menus(): BelongsTo
    {
        return $this->belongsTo(menus::class);
    }
    public function links(): HasMany
    {
        return $this->hasMany(links::class);
    }
}
