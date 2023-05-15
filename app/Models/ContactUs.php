<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    // protected $table = 'contact_us';
    use HasFactory;

   /* protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'services',
        'message',
        'preferred_date',
        'preferred_time',
        'email'
    ];*/
    
    // protected $timestamp = false;

    protected $guarded = ['id', '_token', 'created_at', 'updated_at'];
 
}
