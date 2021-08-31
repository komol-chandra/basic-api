<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = "student_classes";

    /**
     * Table primary key name.
     *
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * Table other fields name.
     *
     * @var array
     */
    protected $fillable = [
        "name",
    ];

    /**
     * Table all field cast.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
    ];

}
