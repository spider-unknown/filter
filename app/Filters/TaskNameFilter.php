<?php
/**
 * Created by PhpStorm.
 * User: Good way
 * Date: 20-Mar-19
 * Time: 06:00
 */

namespace App\Filters;


class TaskNameFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('task', 'like', '%'.$value.'%');
    }
}