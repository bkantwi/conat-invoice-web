<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;

    protected $fillable = [
        'sename',
        'semail',
        'sephone',
        'seaddress',
        'selogo',
        'rename',
        'remail',
        'rephone',
        'readdress',
        'payment_method',
        'item',
        'amount',
        'cost',
    ];
}
