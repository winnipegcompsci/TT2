<?php
$class = 'alert alert-info alert-dismissable';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="<?= h($class) ?>"><i class="icon fa fa-info"></i><?= h($message) ?></div>
