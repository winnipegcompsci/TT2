<?php
$class = 'alert alert-warning alert-dismissable';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="<?= h($class) ?>"><?= h($message) ?></div>
