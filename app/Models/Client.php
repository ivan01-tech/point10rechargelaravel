<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasFactory;
    public $table="client";

    public $fillable=[
        "id_utilisateur",
        "ville",
        "email",
        "date",
        "passeword",
    ];
    
    public function utilisateur(){
        return $this->belongsTo(Utilisateur::class);
    }
    public function commandeForfait(){
        return $this->hasMany(CommandeForfait::class,"client_id");
    }
}
