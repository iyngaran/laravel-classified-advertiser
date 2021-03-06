<?php


namespace Iyngaran\Advertiser\Search\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostedBy implements Filter
{
    public static function apply(Builder $builder, $value): Builder
    {
        return $builder->where('posted_by', $value);
    }
}
