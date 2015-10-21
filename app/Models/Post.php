<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'user_id', 'titulo', 'conteudo'
    ];

    public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }

    public function comentarios(){
        return $this->hasMany(\App\Models\Comment::class);
    }
    public function tags(){
        return $this->belongsToMany('\App\Models\Tag','tags_posts');
    }
}
