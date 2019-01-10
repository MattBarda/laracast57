<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * array of values that you are able to change in controller by calling
     * Project::create(['title', 'description])
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
