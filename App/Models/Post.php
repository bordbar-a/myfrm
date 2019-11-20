<?php

namespace App\Models;

use App\Models\Contract\BaseModel;

class Post extends BaseModel
{
    public static $table_fields = array(
        'id',
        'title',
        'content',
        'category_id',
        'thumb_image',
        'image',
        'updated_at',
        'created_at',
    );
    public static $table = 'posts';
}

