<?php

// Element
$el = $this->el('div', [
    'class' => [
        'example-element'
    ],
]);



// Grid
$grid = $this->el('ul', [
    'class' => [
        'uk-child-width-1-{grid_columns}',
    ],
    'uk-grid' => true,
]);

?>


<div class="card"> 
    <div class="card-side front">
<?php if ($props['frontendtitle'] != '') : ?>
    <?php
        $frontend_title_el = $this->el($props['title_element'], [
            'class' => [
                'el-title',
              
                "uk-{$props['title_style']}",
                'uk-text-{title_color} {@!title_color: background}',
            ],
        ]);
    ?>
    <?= $frontend_title_el($props, $props['frontendtitle']) ?>
<?php endif; ?>
    </div>
<div class="card-side back">
<?php if ($props['frontendcontent']) : ?>
    <?php
        // Define which values are real HTML elements (not classes)
        $html_tags = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];

        // Determine the tag: use content_style if it's a tag, otherwise fallback to content_element or 'div'
        $tag = in_array($props['content_style'], $html_tags)
            ? $props['content_style']
            : ($props['content_element'] ?: 'div');

        // Build class list (only if content_style is NOT a tag)
        $classes = [];

        if (!in_array($props['content_style'], $html_tags) && !empty($props['content_style'])) {
            $classes[] = $props['content_style'];
        }

        // Apply content color (except for 'background' or empty)
        if (!in_array($props['content_color'], ['background', ''])) {
            $classes[] = "uk-text-{$props['content_color']}";
        }

        // Apply alignment if checked
        if (!empty($props['content_align'])) {
            $classes[] = 'uk-text-left';
        }

        // Render the element with dynamic tag and classes
        echo $this->el($tag, [
            'class' => $classes,
        ], $props['frontendcontent']);
    ?>
<?php endif; ?>
    </div>
</div>




<?php if ($props['backendtitle'] != '') : ?>
<?= $props['backendtitle']; ?> </br>
<?php endif; ?>
<?php if ($props['backendcontent'] != '') : ?>
<?= $props['backendcontent']; ?> </br>
<?php endif; ?>



    <?= $grid($props) ?>
        <?php foreach ($children as $child) : ?>
        <li><?= $builder->render($child, ['element' => $props]) ?></li>
        <?php endforeach ?>
    <?= $grid->end() ?>

<?= $el->end() ?>
