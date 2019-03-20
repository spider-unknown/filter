<?php
/**
 * Created by PhpStorm.
 * User: Good way
 * Date: 20-Mar-19
 * Time: 04:54
 */

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class TasksFilter extends AbstractFilter
{
    protected $filters = [
        'role' => RoleFilter::class,
        'in_process' => InProcessFilter::class,
        'task' => TaskNameFilter::class,
        'completed' => CompletedFilter::class,
        'director' => DirectorFilter::class,
        'responsible' => ResponsibleFilter::class,
        'expire_date' => ExpireDateFilter::class,
    ];
}