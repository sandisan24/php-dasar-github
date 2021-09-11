<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Analisis</title>
</head>
<body>
 <center><h2> TUGAS ANALISIS </h2></center>

 <?php
 $benua = [
    'Benua Asia' => ['Indonesia' => ['Jakarta', 'Bandung', 'Bekasi', 'Garut', 'Banten'],
                     'Singapura' => ['Marina East', 'Newton', 'Novena', 'Rochor', 'River Valley'],
                     'Thailand' => ['Lampang', 'Kamphaeng Phet', 'Mae Hong Son', 'Lamphun', 'Nan']],

    'Benua Afrika' => ['Mesir' => ['Aswan', 'Akhmim', 'Banha', 'Al Fayyum', 'Bani Suwayf'],
                       'Namibia' => ['Gobabis', 'Grootfontein', 'Mariental', 'Karibib', 'Okahandja'],
                       'Kongo' => ['Bandundu', 'Katanga', 'Kinshasa', 'Maniema', 'Bas-Congo.']],

    'Benua Australia' => ['Australia Utara' => ['Darwin', 'Alice Springs', 'Katherine', 'Palmerston'],
                          'Australia Barat' => ['Perth', 'Albany', 'Broome', 'Bunbury', 'Geraldton'],
                          'New South Wales' => ['Sydney', 'Armidale', 'Bathurst', 'Dubbo', 'Broken Hill']],

    'Benua Eropa' => ['Denmark' => ['Kopenhagena', 'Odense', 'Aarhus', 'Vejle', 'Herning'],
                      'Swedia' => ['Perth', 'Albany', 'Broome', 'Bunbury', 'Geraldton'],
                      'Islandia' => ['Reykjavik', 'Akureyri', 'Húsavík', 'Vík í Mýrdal', 'Seyðisfjörður']],
];
echo  "<pre>";
print_r($benua);

?>