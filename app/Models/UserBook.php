<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBook extends Model
{
    use HasFactory;


    protected $guarded = ['id' , 'created_at', 'updated_at'];

    public function mobil()
    {
        return $this->belongsTo(mobil::class);
    }


}
