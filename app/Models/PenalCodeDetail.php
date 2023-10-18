<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenalCodeDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function title(){
        return $this->belongsTo(Title::class,'parent_id');
    }
}
