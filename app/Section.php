<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = "sections";

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
        "name", "class_id",
    ];

    /**
     * Table all field cast.
     *
     * @var array
     */
    protected $casts = [
        "name"     => "string",
        "class_id" => "integer",
    ];
}
