<?php

return [
    'dependencies' => [
        'invokables' => [
            App\Action\PingAction::class => App\Action\PingAction::class,
        ],
        'factories' => [
            App\Action\HomePageAction::class => App\Factory\HomePageFactory::class,
            App\Action\AboutPageAction::class => App\Factory\AboutPageFactory::class,
            Zend\Expressive\Application::class => Zend\Expressive\Container\ApplicationFactory::class,
        ]
    ]
];
