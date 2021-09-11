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
 $Benua = [
    'Benua' => ['Benua Asia', 'Benua Afrika', 'Benua Australia', 'Benua Eropa'],
 ];
 echo  "<pre>";
 print_r($Benua);

 $Benua = [
    'Benua Asia' => ['Indonesia', 'Singapura', 'Thailand'],
    'Kota Indonesia' => ['Jakarta', 'Bandung', 'Bekasi', 'Garut', 'Banten'],
    'Kota Singapura' => ['Marina East', 'Newton', 'Novena', 'Rochor', 'River Valley'],
    'Kota Thailand' => ['Lampang', 'Kamphaeng Phet', 'Mae Hong Son', 'Lamphun', 'Nan'],
    
];

echo  "<pre>";
print_r($Benua);

 $Benua = [
    'Benua Afrika' => ['Mesir', 'Namibia','Kongo'],
    'Kota Mesir' => ['Aswan', 'Akhmim', 'Banha', 'Al Fayyum', 'Bani Suwayf'],
    'Kota Namibia' => ['Gobabis', 'Grootfontein', 'Mariental', 'Karibib', 'Okahandja'],
    'Kota Kongo' => ['Bandundu', 'Katanga', 'Kinshasa', 'Maniema', 'Bas-Congo.'],
    
];

echo  "<pre>";
print_r($Benua);

$Benua = [
    'Benua Australia' => ['Australia Utara', 'Australia Barat','New South Wales'],
    'Kota Australia Utara' => ['Darwin', 'Alice Springs', 'Katherine', 'Palmerston'],
    'Kota Australia Barat' => ['Perth', 'Albany', 'Broome', 'Bunbury', 'Geraldton'],
    'Kota New South Wales' => ['Sydney', 'Armidale', 'Bathurst', 'Dubbo', 'Broken Hill'],
    
];

echo  "<pre>";
print_r($Benua);

$Benua = [
    'Benua Eropa' => ['Denmark', 'Islandia','Swedia'],
    'Kota Denmark' => ['Kopenhagena', 'Odense', 'Aarhus', 'Vejle', 'Herning'],
    'Kota Islandia' => ['Reykjavik', 'Akureyri', 'Húsavík', 'Vík í Mýrdal', 'Seyðisfjörður'],
    'Kota Swedia' => ['Uppsala', 'Visby', 'Falun', 'Lulea', 'Karlstad'],
    
];

echo  "<pre>";
print_r($Benua);


?>
</body>
</html>