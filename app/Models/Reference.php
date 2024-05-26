<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    //Deja que se haga un insert de estos campos
    protected $fillable = [
        'title',
        'author',
        'date',
        'link'
    ];


    //No deja que se haga un insert de estos campos
    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];

    /**
     * Relación 1:N con la tabla articles
     */
    public function articles(){
        return $this -> belongsTo(Article::class);
    }

}
