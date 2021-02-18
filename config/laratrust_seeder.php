<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'graduates' => 'c,r,u,d',
            'imates' => 'c,r,u,d',
            'jobs' => 'c,r,u,d',
            'profiles' => 'c,r,u,d'
        ],
        'prisonadministrator' => [
            'imates' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'rehabadministrator' => [
            'graduates' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'social_affairs' => [
            'graduates' => 'r,u',
            'imates' => 'r,u',
            'jobs' => 'r,u,d',
            'profile' => 'r,u'
        ],
        'jobpost' => [
            'jobs' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
