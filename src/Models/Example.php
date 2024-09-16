<?php

namespace Mak\Example\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Example extends Model
{
    use SoftDeletes;

    protected $table = 'examples';
    protected $guarded = [];

    public static $title = 'Примеры';
    public static $system = true;
}
