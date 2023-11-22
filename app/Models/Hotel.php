<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'star_counter',
        'address',
        'province_id',
        'image_path',
        'description',
        'user_id'
    ];
public function province(){
    return $this->belongsTo(Province::class);
}
public function admins(){
    return $this->hasMany(User::class);
}
public function types(){
    return $this->hasMany(Type::class);
}
}
