<?php

namespace App\Models;

use App\Models\Contract\BaseModel;

class File extends BaseModel
{
    public static $table_fields = array(
        'id',
        'type',
        'title',
        'category_id',
        'price',
        'description',
        'thumb',
        'link',
        'likes',
        'updated_at',
        'created_at',
    );
    public static $table = 'files';
}

