<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class halaqts extends Model
{
    use HasFactory;
    protected $fillable = [
        'masaqat_id',
        'name',
    ];

    public function section()
    {
      return $this->belongsTo(Masaqats::class);

    }
}
