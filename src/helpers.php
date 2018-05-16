<?php
if (!function_exists('store_asset')) {
    /**
     * @param $path
     *
     * @return string
     */
    function store_asset($path)
    {
        return asset($path, config('laravel-store.secure'));
    }
}