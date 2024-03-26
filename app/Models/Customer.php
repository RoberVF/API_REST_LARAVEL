<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function invoices(){
        // Para cada cliente varias invoices
        return $this -> hasMany(Invoice::class);
    }
}
