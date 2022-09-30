<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    public function connection(){
        return $this -> hasMany(Relation::class);
    }

    public function cities(){
        return $this -> belongsToMany(City::class);
    }
}
