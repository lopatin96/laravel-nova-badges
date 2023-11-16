<?php

namespace Atin\LaravelNovaBadges\Traits;

trait HasNovaBadges
{
    public function scopeNewModel($query, int $hoursToDetect = 3)
    {
        $query->where('created_at', '>=', now()->subHours($hoursToDetect));
    }
}