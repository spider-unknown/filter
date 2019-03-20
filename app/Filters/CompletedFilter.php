<?php
/**
 * Created by PhpStorm.
 * User: Good way
 * Date: 20-Mar-19
 * Time: 06:11
 */

namespace App\Filters;


class CompletedFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('completed', $value);
    }
}