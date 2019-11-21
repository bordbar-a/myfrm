<?php

namespace App\Models;

use App\Models\Contract\BaseModel;

class Option extends BaseModel
{
    public static $table_fields = array(
        'id',
        'key',
        'value',
        'category',
    );
    public static $table = 'options';
}

