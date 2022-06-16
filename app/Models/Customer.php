<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Customer extends Model
{
    use HasFactory, HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table = 'customers';
    protected $fillable = ['name', 'birth_date', 'address', 'phone', 'email'];
}
