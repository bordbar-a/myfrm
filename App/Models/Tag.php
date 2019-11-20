<?php

namespace App\Models;

use App\Models\Contract\BaseModel;

class Tag extends BaseModel
{
    public static $table_fields = array(
        'id',
        'title',
        'slug'
    );
    public static $table = 'tags';
}

