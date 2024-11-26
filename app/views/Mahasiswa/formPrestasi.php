<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Prestasi</title>
    <link href="../../../public/css/output.css" rel="stylesheet" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    </style>
  </head>
  <body class="font-[poppins]">
    <!-- sidebar -->
    <aside
      id="default-sidebar"
      class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
      aria-label="Sidebar"
    >
      <div class="h-full px-3 py-4 overflow-y-auto bg-[#132145]">
        <ul class="space-y-2 font-medium">
          <li>
            <div
              class="flex items-center justify-center text-4xl p-4 text-white rounded-lg"
            >
              <span class="ms-3 font-bold">ArchieveIT</span>
            </div>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center p-2 mt-10 text-white rounded-lg hover:bg-[#3063C559]"
            >
              <span class="flex-1 ms-3 whitespace-nowrap">Beranda</span>
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center p-2 text-[#FEC01A] rounded-lg bg-[#3063C559]"
            >
              <span class="flex-1 ms-3 whitespace-nowrap">Form Prestasi</span>
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]"
            >
              <span class="flex-1 ms-3 whitespace-nowrap">Prestasi Saya</span>
            </a>
          </li>
          <li>
            <a
              href="#"
              class="flex items-center p-2 text-white rounded-lg hover:bg-[#3063C559]"
            >
              <span class="flex-1 ms-3 whitespace-nowrap">Lihat Profil</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <div class="sm:ml-64 bg-blue-50">
      <!-- profil -->
      <section class="flex justify-end p-8">
        <p class="font-bold">Haikal Muhammad Rafli</p>
      </section>

      <!-- tambah prestasi -->
      <section class="flex-col justify-start pl-6">
        <p class="font-bold text-3xl">Tambah prestasi</p>
      </section>

      <!-- form -->
      <section class="relative p-6">
        <!-- Static parent -->
        <div class="absolute ml-8 py-2 px-4 rounded-lg text-white bg-[#F99D1C]">
          Data Kompetisi
        </div>
        <div
          class="static mt-5 p-6 bg-white border-2 rounded-lg border-[#FEC01A] space-y-2"
        >
          <!-- kategori -->
          <label for="nama" class="block text-gray-700 font-medium mt-6"
            >Kategori Prestasi <span class="text-red-600">*</span></label
          >
          <select
            class="border rounded-lg px-2 py-1 w-1/3 bg-white shadow-gray-400 shadow-sm"
          >
            <option>Sains</option>
            <option>Sains</option>
            <option>Sains</option>
          </select>

          <!-- tingkatan -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >Tingkatan Kompetisi <span class="text-red-600">*</span></label
          >
          <select
            class="border rounded-lg px-2 py-1 w-1/3 bg-white shadow-gray-400 shadow-sm"
          >
            <option>Nasional</option>
            <option>Internasional</option>
          </select>

          <!-- nama kompetisi -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >Nama Kompetisi <span class="text-red-600">*</span></label
          >
          <input
            type="text"
            placeholder="Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam Perguruan Tinggi"
            class="placeholder-black border rounded-lg px-2 py-1 w-full bg-white shadow-gray-400 shadow-sm"
          />

          <!-- tanggal mulai -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >tanggal Mulai Kompetisi <span class="text-red-600">*</span></label
          >
          <input
            type="date"
            class="placeholder-black border rounded-lg px-2 py-1 w-1/6 bg-white shadow-gray-400 shadow-sm"
          />

          <!-- tanggal selesai -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >tanggal Selesai Kompetisi
            <span class="text-red-600">*</span></label
          >
          <input
            type="date"
            class="placeholder-black border rounded-lg px-2 py-1 w-1/6 bg-white shadow-gray-400 shadow-sm"
          />

          <!-- penyelenggara -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >Penyelenggara Kompetisi <span class="text-red-600">*</span></label
          >
          <select
            class="border rounded-lg px-2 py-1 w-1/3 bg-white shadow-gray-400 shadow-sm"
          >
            <option>Pemerintah</option>
            <option>Kampus</option>
          </select>

          <!-- tempat kompetisi -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >Tempat Kompetisi <span class="text-red-600">*</span></label
          >
          <input
            type="text"
            placeholder="Jakarta"
            class="placeholder-black border rounded-lg px-2 py-1 w-full bg-white shadow-gray-400 shadow-sm"
          />

          <!-- juara -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >Juara <span class="text-red-600">*</span></label
          >
          <select
            class="border rounded-lg px-2 py-1 w-1/3 bg-white shadow-gray-400 shadow-sm"
          >
            <option>Juara 1 / Medali Emas</option>
            <option>Juara 2 / Medali Perak</option>
            <option>Juara 3 / Medali Perunggu</option>
          </select>

          <!-- surat tugas -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >File Surat Tugas <span class="text-red-600">*</span></label
          >
          <div class="flex items-center">
            <label
              class="flex flex-row items-center justify-center w-full bg-white border rounded-lg shadow-gray-400 shadow-sm space-x-10"
            >
              <div class="flex flex-col items-center justify-center">
                <p class="mb-2 text-sm font-semibold">
                  Seret & lepas atau telusuri
                </p>
                <p class="text-xs text-gray-500">
                  Ekstensi (.jpg,.jpeg,.png,.pdf,.docx)
                </p>
              </div>
              <div class="flex flex-col items-start py-6 space-y-1">
                <div
                  class="flex flex-row justify-center items-center space-x-2"
                >
                  <p class="bg-[#FEC01A8F] py-1 px-14 rounded-xl">Pilih File</p>
                  <p class="text-xs">suratTugas.pdf</p>
                </div>
                <p class="text-xs text-gray-500">maksimal ukuran : 5mb</p>
              </div>
              <input type="file" class="hidden" />
            </label>
          </div>

          <!-- foto -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >File Foto Juara <span class="text-red-600">*</span></label
          >
          <div class="flex items-center">
            <label
              class="flex flex-row items-center justify-center w-full bg-white border rounded-lg shadow-gray-400 shadow-sm space-x-10"
            >
              <div class="flex flex-col items-center justify-center">
                <p class="mb-2 text-sm font-semibold">
                  Seret & lepas atau telusuri
                </p>
                <p class="text-xs text-gray-500">
                  Ekstensi (.jpg,.jpeg,.png,.pdf,.docx)
                </p>
              </div>
              <div class="flex flex-col items-start py-6 space-y-1">
                <div
                  class="flex flex-row justify-center items-center space-x-2"
                >
                  <p class="bg-[#FEC01A8F] py-1 px-14 rounded-xl">Pilih File</p>
                  <p class="text-xs">juara.pdf</p>
                </div>
                <p class="text-xs text-gray-500">maksimal ukuran : 5mb</p>
              </div>
              <input type="file" class="hidden" />
            </label>
          </div>

          <!-- sertif -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >File Sertifikat <span class="text-red-600">*</span></label
          >
          <div class="flex items-center">
            <label
              class="flex flex-row items-center justify-center w-full bg-white border rounded-lg shadow-gray-400 shadow-sm space-x-10"
            >
              <div class="flex flex-col items-center justify-center">
                <p class="mb-2 text-sm font-semibold">
                  Seret & lepas atau telusuri
                </p>
                <p class="text-xs text-gray-500">
                  Ekstensi (.jpg,.jpeg,.png,.pdf,.docx)
                </p>
              </div>
              <div class="flex flex-col items-start py-6 space-y-1">
                <div
                  class="flex flex-row justify-center items-center space-x-2"
                >
                  <p class="bg-[#FEC01A8F] py-1 px-14 rounded-xl">Pilih File</p>
                  <p class="text-xs">sertifikat.pdf</p>
                </div>
                <p class="text-xs text-gray-500">maksimal ukuran : 5mb</p>
              </div>
              <input type="file" class="hidden" />
            </label>
          </div>

          <!-- proposal -->
          <label for="nama" class="block text-gray-700 font-medium pt-6"
            >File Proposal <span class="text-red-600">*</span></label
          >
          <div class="flex items-center">
            <label
              class="flex flex-row items-center justify-center w-full bg-white border rounded-lg shadow-gray-400 shadow-sm space-x-10"
            >
              <div class="flex flex-col items-center justify-center">
                <p class="mb-2 text-sm font-semibold">
                  Seret & lepas atau telusuri
                </p>
                <p class="text-xs text-gray-500">
                  Ekstensi (.jpg,.jpeg,.png,.pdf,.docx)
                </p>
              </div>
              <div class="flex flex-col items-start py-6 space-y-1">
                <div
                  class="flex flex-row justify-center items-center space-x-2"
                >
                  <p class="bg-[#FEC01A8F] py-1 px-14 rounded-xl">Pilih File</p>
                  <p class="text-xs">tidak ada file yang dipilih</p>
                </div>
                <p class="text-xs text-gray-500">maksimal ukuran : 5mb</p>
              </div>
              <input type="file" class="hidden" />
            </label>
          </div>
        </div>
      </section>

      <!-- Data Mahasiswa -->
      <section class="relative p-6">
        <!-- Static parent -->
        <div class="absolute ml-8 py-2 px-4 rounded-lg text-white bg-[#F99D1C]">
          Data Mahasiswa
        </div>
        <div
          class="static mt-5 p-6 bg-white border-2 rounded-lg border-[#FEC01A] space-y-2"
        >
          <!-- tabel -->
          <div class="mt-6 overflow-x-auto bg-white shadow-md rounded-2xl">
            <table class="min-w-full">
              <thead>
                <tr>
                  <th
                    class="w-1/12 py-2 px-4 bg-white font-semibold text-left border border-blue-950"
                  >
                    No
                  </th>
                  <th
                    class="w-1/5 py-2 px-4 bg-white font-semibold text-left border border-blue-950"
                  >
                    NIM
                  </th>
                  <th
                    class="w-auto py-2 px-4 bg-white font-semibold text-left border border-blue-950"
                  >
                    Mahasiswa
                  </th>
                  <th
                    class="w-auto py-2 px-4 bg-white font-semibold text-left border border-blue-950"
                  >
                    Peran
                  </th>
                  <th
                    class="w-1/12 py-2 px-4 bg-white font-semibold text-left border border-blue-950"
                  >
                    Hapus
                  </th>
                </tr>
              </thead>
              <tbody>
                <!-- Row 1 -->
                <tr>
                  <td class="py-2 px-4 border border-blue-950">1</td>
                  <td class="py-2 px-4 border border-blue-950">
                    <select class="w-full border rounded px-2 py-1">
                      <option value="2021001">2341720001</option>
                      <option value="2021002">2341720002</option>
                      <option value="2021003">2341720003</option>
                    </select>
                  </td>
                  <td class="py-2 px-4 border border-blue-950">Haikal</td>
                  <td class="py-2 px-4 border border-blue-950">
                    <select class="w-full border rounded px-2 py-1">
                      <option value="Ketua">Ketua</option>
                      <option value="Anggota">Anggota</option>
                    </select>
                  </td>
                  <td class="py-2 px-4 border border-blue-950 text-center">
                    <button
                      class="text-red-500 hover:text-red-700 font-semibold"
                    >
                      Hapus
                    </button>
                  </td>
                </tr>
                <!-- Row 2 -->
                <tr>
                  <td class="py-2 px-4 border border-blue-950">2</td>
                  <td class="py-2 px-4 border border-blue-950">
                    <select class="w-full border rounded px-2 py-1">
                      <option value="2021001">2341720001</option>
                      <option value="2021002">2341720002</option>
                      <option value="2021003">2341720003</option>
                    </select>
                  </td>
                  <td class="py-2 px-4 border border-blue-950">Restu</td>
                  <td class="py-2 px-4 border border-blue-950">
                    <select class="w-full border rounded px-2 py-1">
                      <option value="Anggota">Anggota</option>
                      <option value="Ketua">Ketua</option>
                    </select>
                  </td>
                  <td class="py-2 px-4 border border-blue-950 text-center">
                    <button
                      class="text-red-500 hover:text-red-700 font-semibold"
                    >
                      Hapus
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- btn tambah -->
           <section class="justify-center p-4">
            <a href="">
                <button class="py-2 px-6 text-white bg-[#132145] rounded-lg">+ Tambah Mahasiswa</button>
            </a>
           </section>
        </div>
      </section>

      <!-- data pembimbing -->
      <section class="relative p-6">
        <!-- Static parent -->
        <div class="absolute ml-8 py-2 px-4 rounded-lg text-white bg-[#F99D1C]">
          Data Pembimbing
        </div>
        <div
          class="static mt-5 p-6 bg-white border-2 rounded-lg border-[#FEC01A] space-y-2"
        >
        <!-- tabel -->
          <div class="mt-6 overflow-x-auto bg-white shadow-md rounded-2xl">
            <table class="min-w-full table-auto ">
              <thead>
                <tr>
                  <th
                    class="w-1/12 py-2 px-4 bg-white font-semibold text-left border border-blue-950"
                  >
                    No
                  </th>
                  <th
                    class="w-1/3 py-2 px-4 bg-white font-semibold text-left border border-blue-950"
                  >
                    Pembimbing
                  </th>
                  <th
                    class="w-auto py-2 px-4 bg-white font-semibold text-left border border-blue-950"
                  >
                    NIP
                  </th>
                  <th
                    class="w-1/3 py-2 px-4 bg-white font-semibold text-left border border-blue-950"
                  >
                    Peran Pembimbing
                  </th>
                  <th
                    class="w-1/12 py-2 px-4 bg-white font-semibold text-left border border-blue-950"
                  >
                    HAPUS
                  </th>
                </tr>
              </thead>
              <tbody>
                <!-- Row 1 -->
                <tr>
                  <td class="py-2 px-4 border border-blue-950">1</td>
                  <td class="py-2 px-4 border border-blue-950">
                    <select class="w-full border rounded px-2 py-1">
                      <option value="2021001">Dimas Wahyu Wibowo, S.T., M.T.</option>
                      <option value="2021002">Dimas Wahyu Wibowo, S.T., M.T.</option>
                      <option value="2021003">Dimas Wahyu Wibowo, S.T., M.T.</option>
                    </select>
                  </td>
                  <td class="py-2 px-4 border border-blue-950">198406102008121004</td>
                  <td class="py-2 px-4 border border-blue-950">
                    <select class="w-full border rounded px-2 py-1">
                      <option>Melakukan pembinaan kegiatan mahasiswa di bidang akademik (PA) dan kemahasiswaan (BEM, Maperwa, dan lain-lain)</option>
                      <option>Melakukan pembinaan kegiatan mahasiswa di bidang akademik (PA) dan kemahasiswaan (BEM, Maperwa, dan lain-lain)</option>
                    </select>
                  </td>
                  <td class="py-2 px-4 border border-blue-950 text-center">
                    <button
                      class="text-red-500 hover:text-red-700 font-semibold"
                    >
                      Hapus
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- btn tambah -->
           <section class="justify-center p-4">
            <a href="">
                <button class="py-2 px-6 text-white bg-[#132145] rounded-lg">+ Tambah Pembimbing</button>
            </a>
           </section>
    </div>
    </section>
    </div>
  </body>
</html>
