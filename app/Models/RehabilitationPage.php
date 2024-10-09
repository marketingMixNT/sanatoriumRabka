<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class RehabilitationPage extends Model
{
    use HasFactory;
    use HasTranslations;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_desc',
        'banner_img',
        'page_title',
        'slug',
        'heading',
        'content',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'page_title' => 'array',
        'slug' => 'array',
        'heading' => 'array',
        'content' => 'array',
    ];

    public $translatable = [
        'meta_title',
        'meta_desc',
        'page_title',
        'slug',
        'heading',
        'content'
    ];
}
