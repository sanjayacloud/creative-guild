<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'first_name', 'last_name', 'phone', 'email', 'profile_picture', 'bio'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function album()
    {
        return $this->hasMany(Album::class, 'photographer_id', 'id');
    }
}
