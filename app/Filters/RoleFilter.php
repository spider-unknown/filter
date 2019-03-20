<?php

namespace App\Filters;


class RoleFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('roles', 'like', '%' .$value. '%');
    }
}