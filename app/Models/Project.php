<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model

{
        use HasFactory;


    /**

     * The attributes that are mass assignable.

     *

     * @var array

    */

    public $fillable = [
        'id', 
        'projecttitle', 
        'awardeddate', 
        'statelocated', 
        'contractor', 
        'supervisor',
        'division', 
        'coordinator', 
        'state',
        'objectives', 
        'percentcompleted', 
        'retention', 
        'completiondate',
        'completedate'
    ];
}