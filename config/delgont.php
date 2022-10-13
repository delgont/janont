<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Route prefix for accessing the admin panel for dlegont cms -- default dashboard
    |--------------------------------------------------------------------------
    */
    'route_prefix' => 'dashboard',

     /*
    |--------------------------------------------------------------------------
    | The middlewares that protect access to the admin dashboard.
    | By default it uses web, and auth:admin
    | The auth:admin is asumed you use the lad dashboard package
    |
    | 'middlewares' => ['web', 'auth:admin'],
    |--------------------------------------------------------------------------
    */
    'middlewares' => ['web', 'auth'],

    /*
    |--------------------------------------------------------------------------
    | The layout to be extended for the pagman dashboard.
    | The layout must have the sections ---- title, content
    |--------------------------------------------------------------------------
    */
    'layout' => 'lad::core.layouts.master'



];