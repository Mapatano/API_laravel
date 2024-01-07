<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Model\Customer;


class Invoice extends Model
{
    use HasFactory;

    public function Customers() {
        return $this->BelongsTo(Customer::class);
   
   
       }
}
