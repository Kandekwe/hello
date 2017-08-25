<?php foreach ($shop as $product): ?>

    <p><br><b><?= $product->Nameshop ?> <b></p>
    <?php foreach ($product ->getItems() as $items): ?>
        
    <ul>
        <li><?= $items->itemname ?> </li>
        <li><?= $items->itemprice ?></li>
        
    </ul>
    <?php endforeach; ?>
<?php endforeach; ?>
