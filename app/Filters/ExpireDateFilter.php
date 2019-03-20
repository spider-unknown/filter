<?php
/**
 * Created by PhpStorm.
 * User: Good way
 * Date: 20-Mar-19
 * Time: 06:21
 */

namespace App\Filters;


class ExpireDateFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('expire_date', $value);
    }
}