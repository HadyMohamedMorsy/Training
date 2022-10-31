<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoices_Details extends Model
{
    use HasFactory;

    protected $fillable = ['invoice_id', 'section_id'];


    public function section(){

       return $this->belongsTo(sections::class , 'section_id');
    }

    public function invoice(){

       return $this->belongsTo(Invoices::class , 'invoice_id');
    }


    
}
