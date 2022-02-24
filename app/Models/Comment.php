<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'parent_id',
        'user_id',
    ];

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function childs()
    {
        return $this->hasMany(self::class, 'parent_id')->whereNotNull('parent_id');
    }

    public function getHasChildsAttribute(): bool
    {
        return $this->childs()->count() > 0;
    }
}
