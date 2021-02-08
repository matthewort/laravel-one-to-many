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

    public function employee() { //le funzioni devono coincidere? Ad es. perché employee e non employees?
        return $this -> belongsTo(Employee::class); //per ogni task c'è un solo employee
    }

    public function types() {
        return $this -> belongsToMany(Type::class);
    }
}
