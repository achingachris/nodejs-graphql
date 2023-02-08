<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporter extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'company_name', 'num_of_trucks', 'company_tin_number', 'bsns_specialization', 'route'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
