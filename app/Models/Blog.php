<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'blog_title',
        'blog_description',
        'blog_image',
        'blog_create_by',

    ];

    public function getBlogImageAttribute($value)
    {

        if ($value) {


            return \Storage::disk('blog')->url($value);
        }
        return $value;

    }
}
