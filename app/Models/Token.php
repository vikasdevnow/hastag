<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Illuminate\Database\Eloquent\Model;

class Token extends Model {

    /**
     * Statically generate a new UUID4 value and just return the string.
     *
     * @return string
     */
    public static function generate() {
        $uuid4 = Uuid::uuid4();
        return $uuid4->toString();
    }

}
