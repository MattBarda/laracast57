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
        'description',
        'owner_id'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        $this->tasks()->create($task);
    }
}
