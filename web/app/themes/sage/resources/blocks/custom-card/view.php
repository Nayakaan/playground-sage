<?php
$title = $attributes['title'] ?? '';
$description = $attributes['description'] ?? '';
?>

<div class="custom-card">
  <?php if ($title): ?>
    <h3 class="custom-card__title"><?= esc_html($title) ?></h3>
  <?php endif; ?>
  <?php if ($description): ?>
    <p class="custom-card__desc"><?= esc_html($description) ?></p>
  <?php endif; ?>
</div>
