<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

trait Filterable {

    /**
     * Filter a result set.
     *
     * @param Builder $builder
     * @param QueryFilters $filters
     * @return Builder
     */
    public function scopeFilter(Builder $builder, QueryFilters $filters) {
        return $filters->apply($builder);
    }

}