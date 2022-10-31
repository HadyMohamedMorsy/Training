<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_attachment extends Model
{
    use HasFactory;

        protected $fillable = ['file_name' , 'invoice_id'];
        

    public function section(){

       return $this->belongsTo(sections::class);
    }

    public function invoice(){

       return $this->belongsTo(Invoices::class);
    }

}
