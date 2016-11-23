<?php

return array(

    'url' => 'http://myproject.local',

    'timezone' => 'UTC',

    'key' => '25HjFjhdyILsHWZJN5IGPJgxqeOxzciC',

    'providers' => append_config( array(

        /* Uncomment for use in development */
        'Way\Generators\GeneratorsServiceProvider', // Generators
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider', // IDE Helpers

        )
    ),

);