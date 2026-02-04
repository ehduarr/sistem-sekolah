<?php
namespace App\Controllers;

class StudentController
{
    
    public function index() : void
    {
        echo "<h1>Daftar Siswa</h1>";
        echo '<p>Menampilkan daftar siswa</p>';
    }

    public function create(): void
    {
        echo "<h1>Tambah Siswa</h1>";
        echo '<p>Menampilkan form tambah siswa</p>';
    }

    public function show(string $id): void
    {
        echo "<h1>Detail Siswa</h1>";
        echo '<p>Menampilkan detail siswa ID: {$id}</p>';
    }

}