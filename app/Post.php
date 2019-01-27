<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'img_user', 'first_name_user', 'last_name_user', 'img', 'description', 'stars',
    ];
}
