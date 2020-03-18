<?php

namespace Tests\Setup\TestModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package Tests\Setup\TestModels
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property integer $user_id
 *
 * @property User $user
 */
class Post extends Model
{
    /**
     * @var array
     */
    public $fillable = [
        'name',
        'description',
        'content',
        'user_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
