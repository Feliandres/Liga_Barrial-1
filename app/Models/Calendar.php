<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    static $rules = [
		'match_calendar' => 'required',
		'local_team_name' => 'required',
		'visit_team_name' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['presidentaso','visit_team_name','local_team_name','match_calendar'];

    // RELACIÓN DE UNO A MUCHOS
    public function matches()
    {
        return $this->belongsTo(PresidentAso::class);
    }
}
