<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
      'visitor_id',
      'unit_id',
      'entryDate',
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    /*
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
    */
}
