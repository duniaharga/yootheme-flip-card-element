<?php

namespace YOOtheme;

use YOOtheme\Path;
use YOOtheme\Metadata;

return [
    'transforms' => [
        'render' => function ($node) {
            $metadata = app(Metadata::class);
            $metadata->set('style:example2-css', [
                'href' => Path::get(__DIR__ . '/css/assets.css'),
            ]);
            return true;
        },
    ],
];
