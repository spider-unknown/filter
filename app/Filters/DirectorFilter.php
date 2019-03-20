<?php
/**
 * Created by PhpStorm.
 * User: Good way
 * Date: 20-Mar-19
 * Time: 06:09
 */

namespace App\Filters;


class DirectorFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('director', 'like', '%'.$value.'%');
    }
}