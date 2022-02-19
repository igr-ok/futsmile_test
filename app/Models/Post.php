<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    protected $table = 'posts';
    

    public function hasAutor(){
        return $this->belongsTo(Autor::class, 'autor_id', 'id');
    }
}
