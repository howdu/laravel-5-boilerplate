<?php

/*
|--------------------------------------------------------------------------
| Detect Active Route
|--------------------------------------------------------------------------
|
| Compare given route with current route and return output if they match.
|
*/
if (! function_exists('is_active_route')) {
    function is_active_route($route, $output = "active")
    {
        if (Route::currentRouteName() == $route) return $output;
    }
}

/*
|--------------------------------------------------------------------------
| Detect Active Routes
|--------------------------------------------------------------------------
|
| Compare given routes with current route and return output if they match.
|
*/
if (! function_exists('are_active_routes')) {
    function are_active_routes(Array $routes, $output = "active")
    {
        foreach ($routes as $route)
        {
            if (Route::currentRouteName() == $route) return $output;
        }

    }
}