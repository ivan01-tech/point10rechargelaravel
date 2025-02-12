<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taille extends Model
{
    use HasFactory;
    public $table="taille";

    public function forfait(){
        return $this->hasMany(Forfait::class);
    }
}
