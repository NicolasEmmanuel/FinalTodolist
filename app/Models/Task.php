<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['texte' , 'etat', 'user_id'];

    //Enregistrer une clé étrangère dans la table : 'Todos' appartient à 'User'
    public function user(){
        return $this->belongsTo(User::class);
    }
}
