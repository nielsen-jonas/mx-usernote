index script
<hr>
Dynamic request "<?= WEBSITE_URL ?>/dynamic/{type}/{id}":
<ul>
<?php foreach($_REQUEST as $key => $val): ?>
	<li>Key: <?= $key ?>, Value: <?= $val ?></li>
<?php endforeach; ?>
</ul>