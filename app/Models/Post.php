<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

protected $guarded=[];
    CONST PUBLISHED = 1;
    CONST PENDING = 2;
    CONST DRAFT = 3;
    CONST ARCHIVE = 4;

    public function setPostSlugAttribute($value)
    {
        $this->attributes['post_slug'] = preg_replace('/\s+/','-',$value);
    }
    public static function getPostsStatus()
    {
        return [
            self::PUBLISHED => 'انتشار یافته ',
            self::DRAFT => 'ذخیره شده',
            self::ARCHIVE => 'آرشیو شده',
            self::PENDING => 'در حال بررسی '
        ];
    }

    public function postusers()
    {
        $this->belongsTo(User::class,'post_author');
    }
}
