<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'priority',
    ];

    public function employee() {
        return $this -> belongsTo(Employee::class); //per ogni task c'è un solo employee
    }

    public function tasks() {
        return $this -> belongsToMany(Type::class);
    }
}
