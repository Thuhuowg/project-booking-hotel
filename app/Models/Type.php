<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'quantity',
        'person_number',
        'description',
        'price',
        'price_sale',
        'hotel_id'
    ];
public function hotel(){
    return $this->belongsTo(Hotel::class);
}
}
