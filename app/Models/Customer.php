<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Invoice;

class Customer extends Model
{
    use HasFactory;

public function Invoices() {
     return $this->hasMany(Invoice::class);


    }
}
