<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sistem Pencatatan Prestasi Mahasiswa</title>
  <link href="../../../public/css/output.css" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>
</head>

<body class="font-[poppins]">
  <section class="relative bg-cover bg-center h-min-screen"
    style="background-image: url('../../../public/img/gedung-jti.png');">
    <div class="absolute inset-0 bg-[#5c71a6d4] bg-opacity-80"></div>
    <nav class="text-white p-4 container mx-auto flex justify-between items-center relative z-10 px-8 py-8">
      <div class="navbar-text flex justify-between gap-6">
        <img src="../../../public/img/logo-polinema-jti.png" alt="logo" />
        <h1 class="font-extrabold text-4xl">AchieveIt</h1>
      </div>
      <div class="navbar-button flex right-0 text-[16px]">
        <a href="<?=BASEURL;?>" class="text-white hover:underline py-2 mx-2">Beranda</a>
        <a href="#fitur-utama" class="text-white hover:underline py-2 mx-2">Fitur Utama</a>
        <a href="#daftar-prestasi" class="text-white hover:underline py-2 mx-2 flex-shrink-0">Daftar Prestasi</a>
        <a href="<?=BASEURL;?>/Home/login">
          <button class="border-spacing-2 bg-white text-blue-500 rounded-lg py-2 mx-2 w-24 h-10">
            Masuk
          </button>
        </a>
      </div>
    </nav>

    <section id="selamat-datang" class="relative text-justify flex justify-items-start items-center">
      <div class="p-10 mt-20 ml-10">
        <h1 class="text-white text-7xl mb-2 font-bold">Selamat Datang di</h1>
        <h1 class="text-[#FEC01A] text-7xl mb-2 font-bold">AchieveIt!</h1>
        <p class="max-w-3xl m-0 text-white text-[18px]">
          AchieveIt adalah Lorem ipsum dolor sit amet, consectetur adipisicing
          elit, sed do eiusmod tempor inicilabore et dolore magna aliqua. ut
          enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi
          ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Exceptur sint occaecat cupidatat non proident, sunt in
          culpa qui officia desereutn.
        </p>
        <a href="<?=BASEURL;?>/Home/login">
          <button class="border-spacing-2 bg-white text-blue-500 rounded-lg py-2 mt-8 w-24 h-10">
            Masuk
          </button>
        </a>
      </div>
    </section>
  </section>

  <section id="fitur-utama" class="py-32 bg-blue-50 grid grid-rows-3 grid-flow-col gap-x-10 gap-y-24 px-28">
    <div class="bg-white p-4 rounded-lg shadow-sm flex flex-col items-center text-center">
      Manajemen Prestasi<br> Mahasiswa JTI
    </div>

    <div class="bg-white p-4 rounded-lg shadow-sm flex flex-col items-center text-center">
      Perankingan Mahasiswa<br> JTI Berprestasi
    </div>

    <div class="grid grid-rows-subgrid gap-1 row-span-2">
      <div class="row-start-2 flex flex-col items-center text-center">
        <h2 class="text-2xl font-bold text-[#132145] mb-4 bg-[#FEC01A] rounded-lg px-4 py-1 ">Fitur Utama Kami</h2>
        <p class="text-[#132145] mt-2 ">
          <span class="font-semibold">Archieve IT</span> dirancang khusus untuk membantu<br>
          pengelolaan dan pelaporan prestasi<br> mahasiswa secara terstruktur dan efisien.
        </p>
      </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-sm flex flex-col items-center text-center">
      Laporan Prestasi<br> Mahasiswa JTI
    </div>

    <div class="bg-white p-4 rounded-lg shadow-sm flex flex-col items-center text-center">
      Riwayat atau Daftar<br> Prestasi Mahasiswa JTI
    </div>

    <div class="bg-white p-4 rounded-lg shadow-sm flex flex-col items-center text-center">
      Analisis Prestasi<br> Mahasiswa JTI
    </div>

    </div>
  </section>

  <section id="daftar-prestasi" class="bg-[#132145D4] flex items-center justify-center min-h-screen">
    <div class="">
      <div class="row-start-2 flex flex-col items-center text-center">
        <h2 class="text-center text-2xl font-bold text-[#132145] mb-4 bg-[#FEC01A] rounded-lg px-4 py-1 ">Daftar
          Mahasiswa JTI Berprestasi</h2>
        <p class="text-center text-white text-[16px]"><span class="font-bold">Achieve IT</span> menghadirkan daftar
          mahasiswa berprestasi dari Jurusan Teknologi Informasi yang tersusun <br>
          berdasarkan capaian dan poin prestasi mereka. Daftar ini memberikan apresiasi kepada mahasiswa dengan <br>
          pencapaian tertinggi, sekaligus menginspirasi rekan lainnya untuk terus aktif dan unggul di berbagai bidang
          <br>
          kompetisi.
        </p>
      </div>

      <!-- dari Components -->
    <section id="daftar-prestasi" class="">
      <div class="p-5 mb-10 ">
        <div class="flex justify-between">
          <div class="flex">
            <form id="formFilter" action="<?=BASEURL;?>/#daftar-prestasi" method="POST">
              <input
              type="text"
              id="cari-mhs"
              placeholder="Cari mahasiswa berdasarkan nama/NIM"
              class="bg-white w-96 p-2 rounded-md border shadow-md"
              name="keyword"
              />
              <button type="submit" name="submit" class="mt-4 w-full bg-blue-800 text-white py-2 rounded-lg hover:bg-blue-900">Submit</button>
            </form>
          </div>
          <div class="flex right-0">
            <div class="flex items-center mr-3">
              <span class="">Lihat</span>
              <form id="formFilter" action="<?=BASEURL;?>/#daftar-prestasi" method="POST">
                <select name="limit" onchange="submitForm()"
                class="mx-2 border rounded-lg px-2 py-1 text-sm bg-white shadow-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                <option value="10" selected>10</option>
                <option value="20">20</option>
                <option value="50">50</option>
              </select>
            </form>

            <script>
              function submitForm() {
                document.getElementById("formFilter").submit();
              }
            </script>

              <span class="">entri</span>
            </div>
            <div class="flex items-center mx-10">
              <select
                class="right-0 mx-2 border rounded-lg px-2 py-1 text-sm bg-white shadow-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
                <option value="2023-2024">2023</option>
                <option value="2024-2025">2024</option>
                <option value="2022-2023">2022</option>
              </select>
            </div>
          </div>
        </div>

        <div class="mt-10 overflow-x-auto bg-white shadow-md rounded-2xl">
          <table class="min-w-full bg-white">
            <thead>
              <tr>
                <th
                  class="py-2 px-4 bg-blue-950 text-white font-semibold text-left border border-blue-950"
                >
                  RANKING
                </th>
                <th
                  class="py-2 px-4 bg-blue-950 text-white font-semibold text-left border border-blue-950"
                >
                  NIM
                </th>
                <th
                  class="py-2 px-4 bg-blue-950 text-white font-semibold text-left border border-blue-950"
                >
                  NAMA MAHASISWA
                </th>
                <th
                  class="py-2 px-4 bg-blue-950 text-white font-semibold text-left border border-blue-950"
                >
                  PRODI
                </th>
                <th
                  class="py-2 px-4 bg-blue-950 text-white font-semibold text-left border border-blue-950"
                >
                  TOTAL POIN
                </th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              <?php
              
              // Looping data mahasiswa ke dalam tabel
              $rank = 1;
              foreach ($data['prestasi'] as $mahasiswa) { 
                  echo "<tr>";
                  echo "<td class='py-2 px-4 border border-blue-950'>$rank</td>";
                  echo "<td class='py-2 px-4 border border-blue-950'>{$mahasiswa['nim']}</td>";
                  echo "<td class='py-2 px-4 border border-blue-950'>{$mahasiswa['nama']}</td>";
                  echo "<td class='py-2 px-4 border border-blue-950'>{$mahasiswa['nama_prodi']}</td>";
                  echo "<td class='py-2 px-4 border border-blue-950'>{$mahasiswa['total_poin']}</td>";
                  echo "</tr>";
                  $rank++;
              }
              
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
      <!-- //php include __DIR__ . '/../../components/DaftarMahasiswaBerprestasi.php';  -->
    </div>
  </section>

  <section class="p-28">
    <div class="bg-[#FEC01A] rounded-lg container mx-auto flex justify-between items-center relative z-10 px-8 py-4">
      <div class="flex justify-between gap-6">
        <h1 class="font-extrabold text-2xl">Ingin Mengakses Fitur Lainnya?</h1>
      </div>

      <div class="flex right-0 text-[16px]">
        <a href="<?=BASEURL;?>/Home/login">
          <button class="border-spacing-2 bg-white text-blue-500 rounded-lg py-2 mx-2 w-24 h-10">
            Masuk
          </button>
        </a>
      </div>
    </div>
  </section>
