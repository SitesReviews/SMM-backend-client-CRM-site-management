<?php

namespace App\Services\Server;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class CategoryService
{
    function list(): Collection
    {
        return Cache::rememberForever('categories', function () {
            return (new BaseApiService())->categories();
        });
    }
}
