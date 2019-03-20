<?php

namespace App\Filters;


class InProcessFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('in_process', $value);
    }
}