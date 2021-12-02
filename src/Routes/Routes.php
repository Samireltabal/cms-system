<?php

    Route::get('/', function (){
        return CmsSystem::ping();
    });
