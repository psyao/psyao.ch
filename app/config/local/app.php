<?php

return array(

    'debug'     => true,
    'providers' => append_config(
        [
            'Way\Generators\GeneratorsServiceProvider',
            'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
            'Barryvdh\Debugbar\ServiceProvider',
        ]
    )

);
