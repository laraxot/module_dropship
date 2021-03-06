<?php

namespace Modules\Dropship\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot
 * @package Modules\Blog\Models
 */
abstract class BaseMorphPivot extends MorphPivot
{
    use Updater;

    /**
     * @var array
     */
    protected $appends = [];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $incrementing = true;
    /**
     * @var bool
     */
    public $timestamps = true;
    //protected $attributes = ['related_type' => 'cuisine_cat'];
    /**
     * @var string[]
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
       // 'published_at',
    ];
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'related_type',
        'auth_user_id', //in amenity no, in rating si
        'note',
    ];
}
