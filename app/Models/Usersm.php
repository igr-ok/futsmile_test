<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usersm extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    protected $table = 'usersms';

    public function autorHave(){
        return $this->hasOne('App\Models\Autor', 'id');
        //return $this->hasOne(Autor::class);// vozmojno spaset foreign

    }    

    
}
