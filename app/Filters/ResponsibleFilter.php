<?php
/**
 * Created by PhpStorm.
 * User: Good way
 * Date: 20-Mar-19
 * Time: 06:08
 */

namespace App\Filters;


class ResponsibleFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('responsible', 'like', '%'.$value.'%');
    }
}