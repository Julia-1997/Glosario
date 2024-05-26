<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //Deja que se haga un insert de estos campos
    protected $fillable = [
        'term',
        'definition',
        'description',
        'meaning',
        'example',
        'more_information',
        'reference_id',
        'image_id'
    ];


    //No deja que se haga un insert de estos campos
    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];

    /**
     * Relación 1 a 1 con la tabla images
     */
    public function imagen()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    /**
     * Relación 1:N con la tabla references
     */
    public function referencia(){
        return $this -> belongsTo(Reference::class, 'reference_id');
    }

    /**
     * Relación N:M con la tabla categories
     */
    public function categoria(){
        return $this -> belongsToMany(Category::class);
    }


}
