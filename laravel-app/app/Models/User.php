<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'role'];

    public function articles() {
        return $this->hasMany(Article::class);
    }

    public function feedback() {
        return $this->hasMany(Feedback::class);
    }

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }
}
