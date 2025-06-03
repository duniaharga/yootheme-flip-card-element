
<?php

$el = $this->el('div', [
    'class' => 'example2-wrapper',
]);

// frontendtitle
$title = $this->el('h1', [
    'class' => [
        'el-title'
    ],
]);

// Contentin examp
$content = $this->el('div', [
    'class' => [
        'el-content'
    ],
]);

?>


<?= $el($props, $attrs) ?>
<div class="card">
<div class="card-side front">
    <?php if ($props['frontendtitle']): ?>
    <?= $title($props, $props['frontendtitle']) ?>
    <?php endif; ?>
    <?php if ($props['frontendcontent']): ?>
    <?= $content($props, $props['frontendcontent']) ?>
    <?php endif; ?>
    </div>
    <div class="card-side back">
    <?php if ($props['backendtitle']): ?>
    <?= $title($props, $props['backendtitle']) ?>
    <?php endif; ?>
    <?php if ($props['backendcontent']): ?>
    <?= $content($props, $props['backendcontent']) ?>
    <?php endif; ?>
    </div>
    </div>

<?= $el->end() ?>
