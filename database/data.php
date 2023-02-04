<?php

return [
    "courses" => [
        [
            "id"            => 1,
            "name"          => "HTML Beyond the basics",
            "category_id"   => 1,
            "slug"          => "html-basics",
            "description"          => "Master HTML5",
            "duration"         => 2,
            "level"         => "Advanced",

            "gradient"         => ["purple","indigo"]
        ],
        [
            "id"        => 2,
            "name"      => "CSS Basics",
            "category_id"   => 2,
            "slug"      => "css-basics",
            "description"      => "Master CSS3",
            "duration"         => 3,
            "level"         => "Beginer",
            "gradient"         => ["fuchsia","pink"]
        ],
        [
            "id" => 3,
            "name"  => "PHP Basics",
            "category_id"   => 3,
            "slug"  => "php-basics",
            "description" => "Master PHP",
            "duration"         => 4,
            "level"         => "Intermidiate",
            "gradient" => ["blue","cyan"]

        ]

        ],
    "categories" => [
        [
            "id" => 1,
            "name" => "HTML",
            "slug" => "html"
        ],
           [
            "id" => 2,
            "name" => "CSS",
            "slug" => "css"
           ],
              [
            "id" => 3,
            "name" => "PHP",
            "slug" => "php"
        ]
    ]
];
