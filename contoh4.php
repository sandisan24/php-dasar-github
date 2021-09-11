<?php 
$negara = array(
    array('Benua Asia', 'Indonesia', 'Jakarta', 'Bandung', 'Bekasi', 'Garut', 'Banten',
          'Singapura', 'Marina East', 'Newton', 'Novena', 'Rochor', 'River Valley',
          'Thailand','Lampang', 'Kamphaeng Phet', 'Mae Hong Son', 'Lamphun', 'Nan'),

    array('Mesir','Aswan', 'Akhmim', 'Banha', 'Al Fayyum', 'Bani Suwayf',
          'Namibia', 'Gobabis', 'Grootfontein', 'Mariental', 'Karibib', 'Okahandja',
          'Kongo','Bandundu', 'Katanga', 'Kinshasa', 'Maniema', 'Bas-Congo'),

    array('Australia Utara','Darwin', 'Alice Springs', 'Katherine', 'Palmerston', 'Brisbane',
          'Australia Barat', 'Perth', 'Albany', 'Broome', 'Bunbury', 'Geraldton',
          'New South Wales','Sydney', 'Armidale', 'Bathurst', 'Dubbo', 'Broken Hill'),

    array('Denmark','Kopenhagena', 'Odense', 'Aarhus', 'Vejle', 'Herning',
          'Swedia','Perth', 'Albany', 'Broome', 'Bunbury', 'Geraldton',
          'Islandia','Reykjavik', 'Akureyri', 'Húsavík', 'Vík í Mýrdal', 'Seyðisfjörður'),
);

?>

<ul>
    <?php foreach ($negara as $key => $value): ?>
    <li>Negara - Negara di <?= $value[0] ?> Adalah <?= $value[1].
    ', '.$value[2].', '.$value[3].', '.$value[4].', '.$value[5] ?></li>
    <?php endforeach ?>
</ul>