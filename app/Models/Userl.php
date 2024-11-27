<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Userl extends Authenticatable
{
    use Notifiable;

    protected $table = 'userls'; // Ensure this matches your table name

    // Add the fillable property
    protected $fillable = [
        'email', // Add email to the fillable array
        'password', // Include other attributes you want to be mass assignable
        // Add any other fields you want to allow mass assignment
    ];
}