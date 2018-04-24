<?php

$navbar =
    [
        [
            'title' => 'Events',
            'link' => URL::route('events.index'),
        ],
        [
            'title' => 'Users',
            'link' => URL::route('users.index'),
        ],
        [
            'title' => 'Games',
            'link' => URL::route('application-usage.index'),
        ],
        [
            'Info',
            $info,
        ],
        [
            'Extras',
            [
                [
                    'title' => 'Live Dashboard',
                    'link' => URL::route('dashboard.index'),
                ],
                [
                    'title' => 'Achievements',
                    'link' => URL::route('achievements.index'),
                ],
                [
                    'title' => 'User Achievements',
                    'link' => URL::route('user-achievements.index'),
                ],
                [
                    'title' => 'LANs',
                    'link' => URL::route('lans.index'),
                ],
                [
                    'title' => 'Roles',
                    'link' => URL::route('roles.index'),
                ],
                [
                    'title' => 'User Roles',
                    'link' => URL::route('user-roles.index'),
                ],
                [
                    'title' => 'Event Types',
                    'link' => URL::route('event-types.index'),
                ],
            ],
        ],
        [
            'Links',
            $links,
        ],
    ];

echo Navbar::create(Navbar::NAVBAR_TOP)->withBrand('<img src="'.asset('img/GreenLANLogo_official.svg').'" width="55" height="48" alt="GreenLAN">')
    ->withContent(
        Navigation::links($navbar)
    )
    ->withContent(View::make('layouts/default/auth'));
