<?php
$class = 'alert alert-warning alert-dismissable';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="<?= h($class) ?>"><i class="icon fa fa-warning"></i><?= h($message) ?></div>
