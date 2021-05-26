<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'team_id', 'user_id', 'libelle','date_deb','date_prev_fin',
    ];

  

    
   
    
}
