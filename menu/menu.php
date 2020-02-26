<?php

return [ // ul
    [ // a
        'link' => 'https://google.com',
        'name' => 'Google',
        'visible' => true,
    ],
    [ // a
        'link' => 'https://bing.com',
        'name' => 'Bing',
        'visible' => false,
    ],
    [ // a
        'link' => 'https//aol.com',
        'name' => 'Aol',
        'visible' => true,
        'menu' => [ // ul
            [ // a
                'link' => 'https://lycos.fr',
                'name' => 'Lycos',
                'visible' => true,
                'menu' => [ // a
                    [
                        'link' => 'http://duckduckgo.com',
                        'name' => 'Duck Duck Go',
                        'visible' => true
                    ]
                ]
            ]
        ]
    ]
];
