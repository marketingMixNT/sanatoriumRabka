<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Slide extends Model
{
    use HasFactory;
    use HasTranslations;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'alt',
        'heading',
        'text',
        'link',
        'button_text',
        'sort',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'alt' => 'array',
        'heading' => 'array',
        'text' => 'array',
        'button_text' => 'array',
    ];

    public $translatable = [
        'alt','heading','text','button_text'
    ];
}
