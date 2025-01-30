<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    // Specify the table name (optional if follows convention)
    protected $table = 'teams';

    // Define fillable fields for mass assignment
    protected $fillable = [
        'name',
        'team_logo',
        'overview',
        'team_image',
        'manager_name',
        'manager_image',
        'home_kit_image',
        'away_kit_image',
        'year',
        'stadium_name',
        'division',
    ];
}

