<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'founded', 'description'];
    // optional
    /*

    protected $timestamps = false;
    protected $dateFormat = 'h:m:s';
    */

    public function carmodels()
    {
        return $this->hasMany(CarModel::class);
    }

    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id', //FK on CarModel
            'model_id' //FK on Engine
        );
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
