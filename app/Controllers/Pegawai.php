<?php

namespace App\Controllers;

class Pegawai extends BaseController
{
    public function index()
    {
        $data = [
            "no" => 1,
            "active" => "pegawai",
            "title" => "Caliana Employee | Data Pegawai"
        ];
        return view('pegawai/pegawai', $data);
    }

    public function kehadiran()
    {
        $data = [
            "active" => "kehadiran",
            "title" => "Caliana Employee | Data Kehadiran"
        ];
        return view("pegawai/kehadiran", $data);
    }

    public function timeOff()
    {
        $data = [
            "active" => "timeoff",
            "title" => "Caliana Employee | Data Time Off"
        ];
        return view("pegawai/timeoff", $data);
    }

    public function schedule()
    {
        $data = [
            "active" => "schedule",
            "title" => "Caliana Employee | Data Jadwal Pegawai",
        ];
        return view("pegawai/schedule", $data);
    }

    public function addPegawai()
    {
        $data = [
            "title" => "Caliana Employee | Tambah Data Diri",
            "active" => "tambah-pegawai"
        ];
        return view("pegawai/addPegawai/addPegawaiPage1", $data);
    }

    public function addPegawai2()
    {
        $data = [
            "title" => "Caliana Employee | Tambah Data Kepegawaian",
            "active" => "tambah-pegawai"
        ];
        return view("pegawai/addPegawai/addPegawaiPage2", $data);
    }

    public function addPegawai3()
    {
        $data = [
            "title" => "Caliana Employee | Tambah Data Penggajian",
            "active" => "tambah-pegawai"
        ];
        return view("pegawai/addPegawai/addPegawaiPage3", $data);
    }

    public function editPegawai()
    {
        $data = [
            "title" => "Caliana Employee | Edit Data Diri",
            "active" => "editPegawai",
            "activelist" => "data-diri"
        ];
        return view("pegawai/edit/edit-pegawai", $data);
    }

    public function editPegawai2()
    {
        $data = [
            "title" => "Caliana Employee | Edit Data Kepegawaian",
            "active" => "editPegawai",
            "activelist" => "data-kepegawaian"
        ];
        return view("pegawai/edit/edit-kepegawaian", $data);
    }

    public function editPegawai3()
    {
        $data = [
            "title" => "Caliana Employee | Edit Data Penggajian",
            "active" => "editPegawai",
            "activelist" => "data-penggajian"
        ];
        return view("pegawai/edit/edit-penggajian", $data);
    }

    public function detailKehadiran()
    {
        $data = [
            "active" => "detailKehadiran",
            "title" => "Caliana Employee | Detail Kehadiran",
        ];
        return view("pegawai/detail/detailKehadiran", $data);
    }

    public function detailTimeoff()
    {
        $data = [
            "title" => "Detail Time-Off",
            "active" => "detail-timeoff",
        ];
        return view("pegawai/detail/detailTimeoff", $data);
    }

    public function detailPegawai()
    {
        $data = [
            "title" => "Caliana Employee | Detail Data Diri",
            "active" => "detailPegawai",
            "activelist" => "data-diri"
        ];

        return view("pegawai/detail/detailPegawai", $data);
    }

    public function detailPegawai2()
    {
        $data = [
            "title" => "Caliana Employee | Detail Data Kepegawaian",
            "active" => "detailPegawai",
            "activelist" => "data-kepegawaian",
        ];

        return view("pegawai/detail/dataKepegawaian", $data);
    }

    public function detailPegawai3()
    {
        $data = [
            "title" => "Caliana Employee | Detail Data Penggajian",
            "active" => "detailPegawai",
            "activelist" => "data-penggajian",
        ];

        return view("pegawai/detail/dataPenggajian", $data);
    }

    public function detailSchedule()
    {
        $data = [
            "title" => "Caliana Employee | Detail Schedule",
            "active" => "detailSchedule",
        ];
        return view("pegawai/detail/detailSchedule", $data);
    }

    // DETAIL DASHBOARD PEGAWAI
    public function detailDashboard()
    {

        $data = [
            "title" => "Caliana Employee | Detail Dashboard",
            "active" => "detailDashboard"
        ];

        return view("pegawai/detail/detailDashboard", $data);
    }

    public function custom()
    {
        $year = (int)date("Y") - 20 + 20;
        $data = [
            "tanggal" => date("Y F d"),
            "tahun" => $year,
            "hari" => date("Y F d"),
            "title" => "Caliana Employee | Tambah Schedule",
            "active" => "addSchedule",
            // "tgl" => $thisDate,
        ];

        return view("pegawai/addPegawai/addSchedule", $data);
    }

    public function create()
    {
        return view('pegawai/edit_pegawai');
    }
    public function detail()
    {
        return view('pegawai/detail_pegawai');
    }

    public function infosaya1()
    {
        $data = [
            "title" => "Caliana Employee | Profil & Akun",
            "active" => "profil-akun",
            "activelist" => "profil-akun",
        ];
        return view('info-saya/akun_profil', $data);
    }
    public function infosaya2()
    {
        $data = [
            "title" => "Caliana Employee | Pengaturan",
            "active" => "pengaturan",
            "activelist" => "pengaturan",
        ];

        return view('info-saya/pengaturan_umum');
    }
    public function infosaya3()
    {
        return view('info-saya/keamanan');
    }
    public function reviewPegawai()
    {
        $data = [
            "title" => "Caliana Employee | Review Tambah Data",
            "active" => "tambah-pegawai",
        ];

        return view('pegawai/addPegawai/addPegawaiReview', $data);
    }
}
