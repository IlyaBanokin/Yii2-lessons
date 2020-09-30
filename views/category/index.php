<div class="col-md-12">
    <h2>Связи моделей</h2>
    <?php /** @var \app\models\Category $categories */
    foreach ($categories as $category): ?>
        <h3><?= $category->title ?></h3>
        <hr>
    <?php foreach ($category->products as $product): ?>

            <p><?= $product->title; ?></p>
    <?php endforeach; ?>
    <?php endforeach; ?>
</div>