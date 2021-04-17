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
      'exitDate'
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

}
