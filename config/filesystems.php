<?php

// Solo se cambia lo que difiere de la configuración por defecto de Laravel.
return [

    'disks' => [

        // El sitio no entrega archivos de storage: sin las rutas storage/{path} que Laravel 12 agrega por defecto
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => false,
            'throw' => false,
            'report' => false,
        ],

    ],

];
