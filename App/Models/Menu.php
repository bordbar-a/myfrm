<?php

namespace App\Models;

use App\Models\Contract\BaseModel;

class Menu extends BaseModel
{
    public static $table_fields = array(
        'id',
        'title',
        'url',
        'parent_id',
        'order',
        'status',
    );
    public static $table = 'menu';
}

