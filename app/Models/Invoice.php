<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function customer(){
        //Para cada invoice un cliente
        return $this -> belongsTo(Customer::class);
    }
}
