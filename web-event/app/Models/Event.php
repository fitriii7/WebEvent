<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = "event";
    protected $fillable = [
        'id',
        'title',
        'event_type',
        'event_oragnizer',
        'category',
        'location',
        'start_time',
        'end_time',
        'image',
        'event_summ',
        'event_desc',
        'capacity',
        'price',
        'status',
        'author',
    ];
}
