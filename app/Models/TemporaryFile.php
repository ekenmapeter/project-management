<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryFile extends Model

{
        use HasFactory;


    /**

     * The attributes that are mass assignable.

     *

     * @var array

    */

    public $fillable = [
        'id',
        'user_id',
        'folder', 
        'filename', 
        'timestamps',
        'updated_at'
    ];
}