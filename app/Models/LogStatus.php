<?php

namespace App\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogStatus extends Model
{
    use HasFactory, Uuid, SoftDeletes;
    protected $keyType = 'string';
    protected $table = 'log_status';

    public $incrementing = false;

    protected $fillable = [
        'on',
    ];
}
