<?php 
echo "<b>Benua Asia</b>";
$negara = array(
    array('Indonesia', 'Jakarta', 'Bandung', 'Bekasi', 'Garut', 'Banten'),
    array('Singapura', 'Marina East', 'Newton', 'Novena', 'Rochor', 'River Valley'),
    array('Thailand','Lampang', 'Kamphaeng Phet', 'Mae Hong Son', 'Lamphun', 'Nan')
);

?>

<ul>
    <?php foreach ($negara as $key => $value): ?>
    <li>Negara <?= $value[0] ?> dengan Kota <?= $value[1].
    ', '.$value[2].', '.$value[3].', '.$value[4].', '.$value[5] ?></li>
    <?php endforeach ?>
</ul>

<?php 
echo "<b>Benua Afrika</b>";
$negara = array(
    array('Mesir','Aswan', 'Akhmim', 'Banha', 'Al Fayyum', 'Bani Suwayf'),
    array('Namibia', 'Gobabis', 'Grootfontein', 'Mariental', 'Karibib', 'Okahandja'),
    array('Kongo','Bandundu', 'Katanga', 'Kinshasa', 'Maniema', 'Bas-Congo')
);

?>

<ul>
    <?php foreach ($negara as $key => $value): ?>
    <li>Negara <?= $value[0] ?> dengan Kota <?= $value[1].
    ', '.$value[2].', '.$value[3].', '.$value[4].', '.$value[5] ?></li>
    <?php endforeach ?>
</ul>

<?php 
echo "<b>Benua Australia</b>";
$negara = array(
    array('Australia Utara','Darwin', 'Alice Springs', 'Katherine', 'Palmerston', 'Brisbane'),
    array('Australia Barat', 'Perth', 'Albany', 'Broome', 'Bunbury', 'Geraldton'),
    array('New South Wales','Sydney', 'Armidale', 'Bathurst', 'Dubbo', 'Broken Hill')
);

?>

<ul>
    <?php foreach ($negara as $key => $value): ?>
    <li>Negara <?= $value[0] ?> dengan Kota <?= $value[1].
    ', '.$value[2].', '.$value[3].', '.$value[4].', '.$value[5] ?></li>
    <?php endforeach ?>
</ul>

<?php 
echo "<b>Benua Eropa</b>";
$negara = array(
    array('Denmark','Kopenhagena', 'Odense', 'Aarhus', 'Vejle', 'Herning'),
    array('Swedia','Perth', 'Albany', 'Broome', 'Bunbury', 'Geraldton'),
    array('Islandia','Reykjavik', 'Akureyri', 'Húsavík', 'Vík í Mýrdal', 'Seyðisfjörður')
);

?>

<ul>
    <?php foreach ($negara as $key => $value): ?>
    <li>Negara <?= $value[0] ?> dengan Kota <?= $value[1].
    ', '.$value[2].', '.$value[3].', '.$value[4].', '.$value[5] ?></li>
    <?php endforeach ?>
</ul>

