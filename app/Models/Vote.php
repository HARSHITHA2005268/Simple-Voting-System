<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function candidate()
{
    return $this->belongsTo(Candidate::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

}
