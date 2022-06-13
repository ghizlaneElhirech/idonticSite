<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitor extends Model
{
    
    use HasFactory;
    protected $fillable = ['full_name' , 'email' , ' sujet' , 'message' , 'image' ];
    
    
       public function types()
    {
        return $this->belongsTo('App\VisitorType', 'type_id');
    }
}
