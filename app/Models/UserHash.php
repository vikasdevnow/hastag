<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\hashComments;
use App\Models\hashLikes;

class UserHash extends Model {

    public function users() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function comments() {
        return $this->hasMany(hashComments::class, 'user_hash_id', 'id');
    }

    public function likes() {
        return $this->hasMany(hashLikes::class, 'user_hash_id', 'id');
    }

    protected $table = 'user_hash';

}
