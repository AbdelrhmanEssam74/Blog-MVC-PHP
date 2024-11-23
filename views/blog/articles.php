<h1>Article Details</h1>

<?php
/** @var BlogController $params */
foreach ($params as $key => $param):
    ?>
    <p><strong><?= $key ?>:</strong> <?= htmlspecialchars($param, ENT_QUOTES, 'UTF-8') ?></p>
<?php
endforeach;