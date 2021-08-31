<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = "students";

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
        "name", "class_id", "section_id", "phone", "gmail", "gender",
    ];

    /**
     * Table all field cast.
     *
     * @var array
     */
    protected $casts = [
        "name"       => "string",
        "class_id"   => "integer",
        "section_id" => "integer",
        "phone"      => "string",
        "gmail"      => "string",
        "gender"     => "integer",
    ];
}
