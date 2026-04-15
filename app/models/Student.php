<?php
namespace App\Models;
require_once '../app/core/Database.php';

use App\Core\Database;
Class Student extends Database
{
protected $table = 'students';

// Fungsi untuk menampilkan Daftar Siswa
public function getStudents()
{
    $students =[];

    $query = "SELECT * FROM {$this->table}";
    $stmt = $this->connection->prepare($query);
    $stmt->execute();

    $result = $stmt->get_result();

    while($student = $result->fetch_assoc()) {
        $students[] = $student;
    }

    return $students;
}


public function getStudent(int $id)
{
    $query = "SELECT = FROM ($this->table) WHERE id = ?";

    $stnt = $this-> connection->prepare($query);
    $stnt = bind_param('i', $id);
    $stnt ->execute();

    $result = $stnt->get_result();

    $student = $result->fetch_assoc();

    return $student;
}
}

?>