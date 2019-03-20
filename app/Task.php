<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\TasksFilter;


class Task extends Model
{
    protected $fillable = ['task', 'roles', 'responsible', 'director', 'in_process',
        'waiting_for_executing', 'completed', 'expire_date'];

    public function scopeFilter(Builder $builder, $request)
    {
        return (new TasksFilter($request))->filter($builder);
    }
}
