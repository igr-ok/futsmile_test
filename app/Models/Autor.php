<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Autor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    protected $table = 'autors';
        

    public function hasPosts(){
        return $this->hasMany(Post::class, 'autor_id', 'id');
    }

    public function userHave(){
        return $this->belongsTo('App\Models\Usersm', 'id');
        //return $this->belongsTo(Usersm::class);

    }


}
