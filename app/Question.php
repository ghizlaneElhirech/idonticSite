<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
 
class Question extends Model
{ 
    use HasTranslations,HasFactory;
    protected $fillable = ['question' , 'reply'];
    public $translatable = ['question' , 'reply'];
}
 