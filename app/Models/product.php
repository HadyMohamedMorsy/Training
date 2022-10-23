<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'section_id' ,'Description'];   

    public function section(){

       return $this->belongsTo(sections::class);
    }
}
