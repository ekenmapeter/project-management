<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Report extends Model

{
        use HasFactory,Sortable;


    /**

     * The attributes that are mass assignable.

     *

     * @var array

    */
    protected $table = 'reports';

     public $sortable = [
        'id', 
        'visitdate', 
        'selectproject', 
        'projectlocation', 
        'percentcompletion', 
        'challenges',
        'recommendations', 
        'docfile', 
        'supervisordivistion',
        'socialimpact', 
        'zonalcomment'
    ];

    protected $fillable = [
        'id', 
        'visitdate', 
        'selectproject', 
        'projectlocation', 
        'percentcompletion', 
        'challenges',
        'recommendations', 
        'docfile', 
        'supervisordivistion',
        'socialimpact', 
        'zonalcomment'
    ];
}