<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_info extends Model
{
    protected $table = 'contact_info';
    protected $fillable = ['name', 'phone', 'subject', 'message', 'email'];
    use HasFactory;
}