<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];
    /**
     * @var array
     */

    protected $fillable = ['user_id', 'post_id', 'parent_id', 'body'];
    /**
     * @return string
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return string
    */
    
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}