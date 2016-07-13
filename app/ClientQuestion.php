<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientQuestion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'client_questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'phone',
        'ip_address',
        'question'
    ];
}
