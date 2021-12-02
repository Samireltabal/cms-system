<?php
    return [
        // Package Version
      'version'             => 'v0.0.1-Alpha',
        // Routes Prefix
      'prefix'              => 'api/cms',
        // Secure Middleware ex: ['admin']
      'admin_middleware' => ['api', 'role:' . env('ADMIN_ROLE', 'admin')],
       // General middleware
      'middleware'          =>  ['api']
    ];
