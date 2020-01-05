<?php

namespace Netsells\GeoScope\Traits;

use Illuminate\Database\Eloquent\Builder;
use Netsells\GeoScope\BuilderScopes\EloquentBuilderScope;
use Netsells\GeoScope\Exceptions\InvalidConfigException;

trait GeoScopeTrait
{
    /**
     * @param Builder $query
     * @param float $lat
     * @param float $long
     * @param float $distance
     * @param null $configOption
     * @return mixed
     * @throws InvalidConfigException
     */
    public function scopeWithinDistanceOf(
        Builder $query,
        float $lat,
        float $long,
        float $distance,
        $configOption = null
    ) {
        return app(EloquentBuilderScope::class, [
            'query' => $query,
            'configOption' => $configOption,
        ])->withinDistanceOf($lat, $long, $distance);
    }

    /**
     * @param Builder $query
     * @param float $lat
     * @param float $long
     * @param float $distance
     * @param null $configOption
     * @return mixed
     * @throws InvalidConfigException
     */
    public function scopeOrWithinDistanceOf(
        Builder $query,
        float $lat,
        float $long,
        float $distance,
        $configOption = null
    ) {
        return app(EloquentBuilderScope::class, [
            'query' => $query,
            'configOption' => $configOption,
        ])->orWithinDistanceOf($lat, $long, $distance);
    }
}
