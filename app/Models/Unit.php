<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';
    protected $primaryKey = 'id';

    protected $visible = ['id'];

    protected $fillable = [
      'blockNo',
      'unitNo',
      'occupantName',
      'contactNumber'
    ];

    public function visitorlogs()
    {
        return $this->hasMany(VisitorLogModel::class);
    }

}
