<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\HasTeams;


class Project extends Model
{
    use HasFactory;
    use HasTeams;

    public function client()
    {
    	return $this->belongsTo('User');
    }


}
