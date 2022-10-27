<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoices_Details extends Model
{
    use HasFactory;

    protected $fillable = ['id_invoice', 'invoice_number' , 'product' , 'id_sec' , 'status' , 'value_status' , 'note' , 'user'];


    public function section(){

       return $this->belongsTo(sections::class);
    }
}
