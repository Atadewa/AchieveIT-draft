<?php
class Mahasiswa extends Controller
{
    public function index()
    {
        $this->checkRole("Mahasiswa");
        $data['mhs'] = $this->model('MahasiswaModel')->getMahasiswaByNim($_SESSION['user']['nim']);
        if (isset($_POST['keyword']) && isset($_POST['limit']) && isset($_POST['year'])) {
            $data['prestasi'] = $this->model("PrestasiModel")->printPrestasiUmum($_POST['keyword'], $_POST['limit'], $_POST['year']);
        } else {
            $data['prestasi'] = $this->model("PrestasiModel")->printPrestasiUmum();
        }

        $this->view('Mahasiswa/index', $data);
    }

    public function prestasiSaya()
    {
        $this->checkRole("Mahasiswa");
        $data = [
            'kategori' => $this->model("KategoriModel")->getKategori(),
            'tingkatKompetisi' => $this->model("TingkatKompetisiModel")->getTingkatKompetisi(),
            'prestasi' => $this->model("PrestasiModel")->getPrestasiByNim($_SESSION['user']['nim'])
        ];

        $this->view('Mahasiswa/prestasiSaya', $data);
    }

    public function profil()
    {
        $this->checkRole("Mahasiswa");
        $this->view('Mahasiswa/profilMahasiswa');

    }

    public function create()
    {
        $this->checkRole("Admin", "Super Admin");
        $data['prodi'] = $this->model("ProdiModel")->getAllProdi();
        $this->view("Admin/Mahasiswa/create", $data);
    }

    public function store()
    {
        $this->checkRole("Admin", "Super Admin");
        if (isset($_POST['submit'])) {
            $data = [
                'id_prodi' => htmlspecialchars($_POST['id_prodi']),
                'nim' => htmlspecialchars($_POST['nim']),
                'nama' => htmlspecialchars($_POST['nama']),
                'tempat_lahir' => htmlspecialchars($_POST['tempat_lahir']),
                'tanggal_lahir' => htmlspecialchars($_POST['tanggal_lahir']),
                'agama' => htmlspecialchars($_POST['agama']),
                'jenis_kelamin' => htmlspecialchars($_POST['jenis_kelamin']),
                'no_telepon' => htmlspecialchars($_POST['no_telepon']),
                'email' => htmlspecialchars($_POST['email']),
                'password' => htmlspecialchars($_POST['password'])
            ];
            $isSuccess =  $this->model("MahasiswaModel")->store($data);
            if ($isSuccess) {
                Flasher::setFlash("Tambahkan", "Data berhasil ditambahkan", "success", "Mahasiswa/listMhs");
            } else {
                Flasher::setFlash("Tambahkan", "Data gagal ditambahkan", "error", "Mahasiswa/listMhs");
            }
        }
        header("location:" . BASEURL . "/Mahasiswa/create");
    }

    public function edit($id_mahasiswa)
    {
        $this->checkRole("Admin", "Super Admin");
        $data['mahasiswa'] = $this->model("MahasiswaModel")->getMahasiswaById($id_mahasiswa);
        $data['prodi'] = $this->model("ProdiModel")->getAllProdi();
        $this->view("Admin/Mahasiswa/edit", $data);
    }

    public function delete($id_mahasiswa)
    {
        $this->checkRole("Admin", "Super Admin");
        $id = htmlspecialchars($id_mahasiswa);
        
        Flasher::setFlash("Hapus", "Apakah anda yakin ingin menghapus data ini?", "warning", "Mahasiswa/deleting/" . $id);

        header('location:' . BASEURL . '/Mahasiswa/listMhs');
    }

    public function deleting($id)
    {
        $this->checkRole("Admin", "Super Admin");
        $isSuccess =  $this->model("MahasiswaModel")->delete($id);

        if ($isSuccess) {
            Flasher::setFlash("Hapus", "Data berhasil dihapus", "success");
        } else {
            Flasher::setFlash("Hapus", "Data gagal dihapus", "error");
        }
        header('location:' . BASEURL . '/Mahasiswa/listMhs');
    }

    public function update()
    {
        $this->checkRole("Admin", "Super Admin");
        if (isset($_POST['submit'])) {
            $data = [
                'id_prodi' => htmlspecialchars($_POST['id_prodi']),
                'nim' => htmlspecialchars($_POST['nim']),
                'nama' => htmlspecialchars($_POST['nama']),
                'tempat_lahir' => htmlspecialchars($_POST['tempat_lahir']),
                'tanggal_lahir' => htmlspecialchars($_POST['tanggal_lahir']),
                'agama' => htmlspecialchars($_POST['agama']),
                'jenis_kelamin' => htmlspecialchars($_POST['jenis_kelamin']),
                'no_telepon' => htmlspecialchars($_POST['no_telepon']),
                'email' => htmlspecialchars($_POST['email']),
                'password' => htmlspecialchars($_POST['password']),
                'id_mahasiswa' => htmlspecialchars($_POST['id_mahasiswa'])
            ];
            $isSuccess =  $this->model("MahasiswaModel")->update($data);
            if ($isSuccess) {
                Flasher::setFlash("Perbarui", "Data berhasil diperbarui", "success", "Mahasiswa/listMhs");
            } else {
                Flasher::setFlash("Perbarui", "Data gagal diperbarui", "error", "Mahasiswa/listMhs");
            }
        }
        header("location:" . BASEURL . "/Mahasiswa/edit/" . $_POST['id_mahasiswa']);
    }

    public function listMhs()
    {
        $this->checkRole("Admin", "Super Admin");
        $data['mhs'] = $this->model("MahasiswaModel")->getAllDataMahasiswa();
        $data['prodi'] = $this->model("ProdiModel")->getAllProdi();
        $data['peranMhs'] = $this->model("PeranMahasiswaModel")->getPeranMhs();
        $this->view("Admin/Mahasiswa/index", $data);
    }

    public function show($id_mahasiswa)
    {
        $this->checkRole("Admin", "Super Admin");
        $data = $this->model("MahasiswaModel")->getMahasiswaById($id_mahasiswa);
        $this->view("Admin/Mahasiswa/show", $data);
    }

    public function getSelectedMahasiswa()
    {
        $this->checkRole("Admin", "Super Admin", "Mahasiswa");

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nim = htmlspecialchars($_POST['nim']);

            $data = [
                'selectedMahasiswa' => $this->model("MahasiswaModel")->getMahasiswaByNim($nim)
            ];

            echo json_encode($data);
        }
    }
}
?>