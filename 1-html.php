<?php

$shoes = [
    [
        'name'  => 'Heracles air max ++',
        'price' => 120.50,
        'stock' => 12,
    ],
    [
        'name'  => 'Zeus de chantier',
        'price' => 115.32,
        'stock' => 75,
    ],
    [
        'name'  => 'Hermes ultra fast',
        'price' => 75,
        'stock' => 5,
    ],
    [
        'name'  => 'Poseidon étanches',
        'price' => 58.25,
        'stock' => 40,
    ],
    [
        'name'  => 'Hadès méga-dark',
        'price' => 55.12,
        'stock' => 32,
    ],
];

foreach ($shoes as $shoe) {
    ?>

    <table>
        <th>Noms</th>
        <th>Prix</th>
        <th>Prix si soldé</th>
        <th>Quantité</th>
        <th>Produit</th>
        <tr style="color:<?php
                if ($shoe['stock']< 20) {
                    echo 'red';
                } ?>">
            <td><?= $shoe['name'] ?></td>
            <td><?= $shoe['price']; ?> €</td>
            <td> <?php
    if ($shoe['price'] > 100) {
        $newPrice = sales($shoe['price'], 10);
        echo "$newPrice €";
    } else {
        echo $shoe['price'];
        echo "€";
    } ?></td>
            <td><?= $shoe['stock'] ?></td>
            <td><a href="2-superglobales.php?stock=<?php echo $shoe['stock']; ?>
"><?= $shoe['name']; ?></a></td>
        </tr>
    </table>
    <?php
}

function sales(float $price, float $discount)
{
    return number_format(($price - ($price * $discount)/100), 2, ",", " ");
}
