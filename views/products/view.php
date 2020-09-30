<div class="col-md-12">
    <h2>Продукты</h2>
    <?php /** @var \app\models\Product $products */
    foreach ($products as $product): ?>
        <p><?= $product->title?> Price: <?= $product->price ?> Category: <?= $product->category->title ?></p>
    <?php endforeach; ?>
</div>