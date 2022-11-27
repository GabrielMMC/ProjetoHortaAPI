<?php

namespace App\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Moisture extends Model
{
    use HasFactory, Uuid, SoftDeletes;
    protected $keyType = 'string';
    protected $table = 'moistures';

    public $incrementing = false;

    protected $fillable = [
        'moisture',
    ];
}
