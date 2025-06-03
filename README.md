# 🎴 YOOtheme Flip Card Element

A custom 3D Flip Card element for [YOOtheme Pro](https://yootheme.com/pro), built to allow flexible front/back content using UIkit and custom styles.

---

## 📁 Folder Structure

yootheme-flip-card-element/
├── element.json # YOOtheme element config
├── element.php # PHP logic to inject CSS
├── template.php # Flip card HTML template
└── css/
└── assets.css # Custom styles for flip effect

---

## 🚀 How to Use

1. **Copy the Folder**

   Copy the `yootheme-flip-card-element` folder into your custom elements directory in your YOOtheme-based Joomla/WordPress project:
   
/templates/YOUR_TEMPLATE_NAME/custom/elements/

2. **Flip Card HTML Structure**

In `template.php`:

```php
<div class="flip-card">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <!-- Front Content -->
        </div>
        <div class="flip-card-back">
            <!-- Back Content -->
        </div>
    </div>
</div>


CSS Styling

Located in css/assets.css:

.flip-card {
    background-color: transparent;
    width: 300px;
    height: 200px;
    perspective: 1000px;
}

.flip-card-inner {
    transition: transform 0.6s;
    transform-style: preserve-3d;
    position: relative;
    width: 100%;
    height: 100%;
}

.flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
    backface-visibility: hidden;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.flip-card-back {
    transform: rotateY(180deg);
}

Register the Styles with PHP

In element.php, styles are added using YOOtheme's Metadata service:
<?php

namespace YOOtheme;

use YOOtheme\Path;
use YOOtheme\Metadata;

return [
    'transforms' => [
        'render' => function ($node) {
            $metadata = app(Metadata::class);
            $metadata->set('style:flipcard-css', [
                'href' => Path::get(__DIR__ . '/css/assets.css'),
            ]);
            return true;
        },
    ],
];
Import PHP Logic

In element.json:
"@import": "./element.php"

🛠 Requirements
YOOtheme Pro (latest version)
WordPress
UIkit (included with YOOtheme)


Created by @duniaharga.
