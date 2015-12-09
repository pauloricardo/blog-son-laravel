<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 20/10/2015
 * Time: 16:13
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    public $fillable = [
        'name'
    ];

    public function posts(){
        return $this->belongsToMany('\App\Models\Post','tags_posts');
    }
}