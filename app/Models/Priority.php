<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model {
    use HasFactory;

    protected $fillable = [
        'lvl',
        'name',
    ];

    public function tasks() {
        return $this->belongsToMany(Task::class);
    }
}
