<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $table = 'visitors';
    protected $primaryKey = 'id';

    protected $fillable = [
      'visitorName',
      'contactNo',
      'nric',
    ];

    // return $this->belongsTo(VisitorLogModel::class);

    public function visitorlogs()
    {
        return $this->hasMany(VisitorLogModel::class);
    }

}
