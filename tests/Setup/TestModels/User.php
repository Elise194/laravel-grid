<?php

namespace Tests\Setup\TestModels;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package Tests\Setup\TestModels
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 *
 * @property Post[] $posts
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
