<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable  = ['title', 'photographer_id', 'description', 'feature_img', 'date', 'featured', 'default'];

    protected $hidden = [
        'default',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function photographer()
    {
        return $this->belongsTo(Photographer::class, 'photographer_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     */
    public function photo()
    {
        return $this->hasMany(Photo::class, 'album_id', 'id');
    }
}
