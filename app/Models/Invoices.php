<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;

    protected $fillable = ['invoice_number', 'invoice_Date' ,'due_date' , 'section_id' , 'product' , 'amount_Collection' , 'amount_Commission' , 'value_vat' , 'total' , 'rate_value', 'status' , 'value_status' , 'note' , 'payment_Date' , 'user'];   

    public function section(){

       return $this->belongsTo(sections::class , 'section_id');
    }

}
