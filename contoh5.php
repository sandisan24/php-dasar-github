<center><h1>Kampus STT Bandung</h1></center>

<?php
$mahasiswaJSON = '{
  "1":{
    "NIM": 11124561,
    "Nama": "Fani Ramadanti",
    "Umur": "16 Tahun",
    "Email": "fanny@gmail.com"
  },
  "2":{
    "NIM": 12124562,
    "Nama": "Ruslan Ramadhan",
    "Umur": "17 Tahun",
    "Email": "lann123@gmail.com"
  },
  "3":{
    "NIM": 13124563,
    "Nama": "Syifa Fitriani",
    "Umur": "17 Tahun",
    "Email": "Syifa@gmail.com"
  },
  "4":{
    "NIM": 14124564,
    "Nama": "Sandi Suryadi",
    "Umur": "18 Tahun",
    "Email": "Sansan@gmail.com"
  },
  "5":{
    "NIM": 15124565,
    "Nama": "Fitria Amelia",
    "Umur": "16 Tahun",
    "Email": "fitria27@gmail.com"
  }
}';

$listmahasiswa = json_decode($mahasiswaJSON);
echo "<b>1. DANNY INDRA GUNAWAN</b> <p>";
foreach ($listmahasiswa as $key => $san) {
  echo "NIM: {$san->NIM} <br>";
  echo "Nama Mahasiswa: {$san->Nama} <br>";
  echo "Umur: {$san->Umur} <br>";
  echo "Email: {$san->Email} <p>";
}

$mahasiswaJSON2 = '{
    "1":{
      "NIM": 21124561,
      "Nama": "Azka",
      "Umur": "16 Tahun",
      "Email": "Aka123@gmail.com"
    },
    "2":{
      "NIM": 22124562,
      "Nama": "Amel Putri",
      "Umur": "17 Tahun",
      "Email": "amelputri@gmail.com"
    },
    "3":{
      "NIM": 23124563,
      "Nama": "Diaz Fachruu",
      "Umur": "18 Tahun",
      "Email": "Diaz11@gmail.com"
    },
    "4":{
      "NIM": 24124564,
      "Nama": "Riski Pebiawan",
      "Umur": "16 Tahun",
      "Email": "Kiki@gmail.com"
    },
    "5":{
      "NIM": 25124565,
      "Nama": "Nazwan",
      "Umur": "17 Tahun",
      "Email": "Zwan24@gmail.com"
    }
  }';

  $listmahasiswa = json_decode($mahasiswaJSON2);
echo "<b>2. MUHAMMAD SABAR</b> <p>";
foreach ($listmahasiswa as $key => $san) {
  echo "NIM: {$san->NIM} <br>";
  echo "Nama Mahasiswa: {$san->Nama} <br>";
  echo "Umur: {$san->Umur} <br>";
  echo "Email: {$san->Email} <p>";
}

$mahasiswaJSON3 = '{
    "1":{
      "NIM": 31124561,
      "Nama": "Jojo Susanto",
      "Umur": "17 Tahun",
      "Email": "Jojo@gmail.com"
    },
    "2":{
      "NIM": 32124562,
      "Nama": "Aditya Riman",
      "Umur": "17 Tahun",
      "Email": "Rimen@gmail.com"
    },
    "3":{
      "NIM": 33124563,
      "Nama": "Rehan Permana",
      "Umur": "18 Tahun",
      "Email": "Rehanpermana@gmail.com"
    },
    "4":{
      "NIM": 34124564,
      "Nama": "Adi Chandra",
      "Umur": "17 Tahun",
      "Email": "Adi@gmail.com"
    },
    "5":{
      "NIM": 35124565,
      "Nama": "Fajar Muhammad",
      "Umur": "18 Tahun",
      "Email": "Fajarmuhammad@gmail.com"
    }
  }';

  $listmahasiswa = json_decode($mahasiswaJSON3);
echo "<b>3. TARSINAH SUMARNI</b> <p>";
foreach ($listmahasiswa as $key => $san) {
  echo "NIM: {$san->NIM} <br>";
  echo "Nama Mahasiswa: {$san->Nama} <br>";
  echo "Umur: {$san->Umur} <br>";
  echo "Email: {$san->Email} <p>";
}

$mahasiswaJSON4 = '{
    "1":{
      "NIM": 41124561,
      "Nama": "Anisa Fitriani",
      "Umur": "16 Tahun",
      "Email": "Nisa1223@gmail.com"
    },
    "2":{
      "NIM": 42124562,
      "Nama": "Edo Dwi",
      "Umur": "19 Tahun",
      "Email": "Edodwii@gmail.com"
    },
    "3":{
      "NIM": 43124563,
      "Nama": "Palah Sahrul Mubarok",
      "Umur": "18 Tahun",
      "Email": "Palah260@gmail.com"
    },
    "4":{
      "NIM": 44124564,
      "Nama": "Muhammad Akbar",
      "Umur": "17 Tahun",
      "Email": "Akbar@gmail.com"
    },
    "5":{
      "NIM": 45124565,
      "Nama": "Ikbal Firmansyah",
      "Umur": "17 Tahun",
      "Email": "Ikbal2@gmail.com"
    }
  }';

  $listmahasiswa = json_decode($mahasiswaJSON4);
echo "<b>4. SAEPUDIN</b> <p>";
foreach ($listmahasiswa as $key => $san) {
  echo "NIM: {$san->NIM} <br>";
  echo "Nama Mahasiswa: {$san->Nama} <br>";
  echo "Umur: {$san->Umur} <br>";
  echo "Email: {$san->Email} <p>";
}