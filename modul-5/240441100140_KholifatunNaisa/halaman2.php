<?php
$pengalamanKuliah = [
    [
        "tahun" => "2024",
        "bulan" => "Agustus",
        "judul" => "Mulai Kuliah",
        "deskripsi" => "Memulai perkuliahan di semester 1."
    ],
    [
        "tahun" => "2025",
        "bulan" => "Januari",
        "judul" => "Mengikuti Organisasi",
        "deskripsi" => "Aktif di Himpunan Mahasiswa Sistem Informasi."
    ],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Pengalaman Kuliah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 p-6">

    <h1 class="text-3xl font-bold text-center text-red-400 mb-5">Timeline Pengalaman Kuliah</h1>
    <div class="max-w-xl mx-auto mt-10 flex justify-between p-2">
        <a href="halaman1.php" class="hover:underline hover:text-red-600 bg-red-100 text-red-500 py-2 px-6 rounded-full transition">PROFIL</a>
        <a href="halaman2.php" class="hover:underline hover:text-red-600 bg-red-100 text-red-500 py-2 px-6 rounded-full transition">PENGALAMAN KULIAH</a>
        <a href="halaman3.php" class="hover:underline hover:text-red-600 bg-red-100 text-red-500 py-2 px-6 rounded-full transition">BLOG PRIBADI</a>
    </div>

    <div class="relative max-w-xl mx-auto pl-6 border-l-4 border-red-500">
        <?php foreach ($pengalamanKuliah as $item) : ?>
            <div class="relative bg-white rounded-lg shadow p-5 mb-6">
                <div class="absolute -left-3 top-5 w-4 h-4 bg-red-400 border-4 border-white rounded-full"></div>

                <div class="text-red-600 font-bold"><?= htmlspecialchars($item['tahun']) ?></div>
                <?php if (isset($item['bulan'])) : ?>
                    <div class="text-sm text-gray-600 mb-1"><?= htmlspecialchars($item['bulan']) ?></div>
                <?php endif; ?>
                <div class="text-lg font-semibold mb-2"><?= htmlspecialchars($item['judul']) ?></div>
                <div class="text-gray-700 leading-relaxed"><?= htmlspecialchars($item['deskripsi']) ?></div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>