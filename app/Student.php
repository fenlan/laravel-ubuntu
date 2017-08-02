<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected function getDateFormat()
    {

        return time();
    }

    protected function asDateTime($value)
    {

        return $value;
    }
}
