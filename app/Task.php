<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'completed',
        'description',
        'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }

    public function incomplete()
    {
        $this->update(['completed' => false]);
    }
}
