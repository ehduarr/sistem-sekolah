<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>

    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header Start -->
    <header class="bg-blue-500 text-white text-2xl p-4">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a class="font-bold" href="/students">Sistem Sekolah</a>
            <a class="py-2 px-4 bg-white text-blue-500 hover:bg-gray-200 rounded-lg" href="/students/create">+ Tambah
                Siswa</a>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main Start -->
    <main class="grow container mx-auto ">
        <div class="mt-8 space-y-4">
            <!-- Card Header Start -->
            <div class="bg-white shadow p-4 rounded-lg">
                <h1 class="font-bold text-2xl">Edit Siswa</h1>
                <p>Melakukan perubahan data siswa yang terdaftar</p>
            </div>
            <!-- Card Header End -->

            <!-- Card Content Start -->
            <div class="bg-white rounded-lg shadow mt-8">
                <form class="p-4 grid grid-cols-2 gap-4" action="">
                    <div class="space-y-2">
                        <label class="font-bold block" for="name">Nama</label>
                        <input class="px-4 py-2 border rounded-lg w-full" type="text" name="name" id="name"
                            placeholder="Masukkan Nama">
                    </div>
                    <div class="space-y-2">
                        <label class="font-bold block" for="nis">NIS</label>
                        <input class="px-4 py-2 border rounded-lg w-full" type="text" name="nis" id="nis"
                            placeholder="Masukkan NIS">
                    </div>
                    <div class="space-y-2">
                        <label class="font-bold block" for="class">Kelas</label>
                        <input class="px-4 py-2 border rounded-lg w-full" type="text" name="class" id="class"
                            placeholder="Masukkan Kelas">
                    </div>

                    <div class="space-y-2">
                        <label class="font-bold block" for="phone_number">No. Telepon</label>
                        <input class="px-4 py-2 border rounded-lg w-full" type="text" name="phone_number"
                            id="phone_number" placeholder="Masukkan Nomor Telepon">
                    </div>
                    <div class="flex justify-end gap-4 col-span-2">
                        <a href="/students" class="px-4 py-2 rounded-lg bg-gray-100">Kembali</a>
                        <button class="px-4 py-2 rounded-lg bg-blue-500 text-white" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- Card Content End -->
        </div>
    </main>
    <!-- Main End -->

    <!-- Footer Start -->
    <footer class="bg-gray-800 text-white p-4 text-center">
        2026 - SMK Kristen Immanuel Pontianak - Sistem Sekolah
    </footer>
    <!-- Footer End -->
</body>

</html>