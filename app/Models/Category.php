<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Deja que se haga un insert de estos campos
    protected $fillable = [
        'name',
    ];
    
    
    //No deja que se haga un insert de estos campos
    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];
       
    /**
    * Relación N:M con la tabla articles
    */
    public function articles(){
        return $this -> belongsToMany(Article::class);
    }
}
