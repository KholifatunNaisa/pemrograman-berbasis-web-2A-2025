<?php
$hasil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['reset'])) {
        $hasil = ""; 
    }
    elseif (
        !empty($_POST['bahasa']) &&
        !empty($_POST['pengalaman']) &&
        !empty($_POST['software']) &&
        !empty($_POST['os']) &&
        !empty($_POST['tingkat'])
    ) {
        $bahasa = $_POST['bahasa'];
        $pengalaman = htmlspecialchars(string: $_POST['pengalaman']);
        $software = $_POST['software'];
        $os = $_POST['os'];
        $tingkat = $_POST['tingkat'];

        $hasil .= "<div class='bg-white p-6 rounded-lg shadow-lg'>";
        $hasil .= "<h2 class='text-xl font-bold mb-4 text-center'>Hasil Input</h2>";
        $hasil .= "<table class='w-full border border-gray-700 mb-4'>";
        $hasil .= "<tr><th class='border px-4 py-2 bg-red-100'>Bahasa Pemrograman</th><td class='border px-4 py-2'>" . implode(', ', $bahasa) . "</td></tr>";
        $hasil .= "<tr><th class='border px-4 py-2 bg-red-100'>Pengalaman</th><td class='border px-4 py-2'>" . nl2br($pengalaman) . "</td></tr>";
        $hasil .= "<tr><th class='border px-4 py-2 bg-red-100'>Software</th><td class='border px-4 py-2'>" . implode(', ', $software) . "</td></tr>";
        $hasil .= "<tr><th class='border px-4 py-2 bg-red-100'>Sistem Operasi</th><td class='border px-4 py-2'>$os</td></tr>";
        $hasil .= "<tr><th class='border px-4 py-2 bg-red-100'>Tingkat PHP</th><td class='border px-4 py-2'>$tingkat</td></tr>";
        $hasil .= "</table>";

        $hasil .= "<p><strong>Anda memilih sistem operasi:</strong> $os</p>";
        $hasil .= "<p><strong>Pengalaman proyek pribadi Anda:</strong> $pengalaman</p>";

        if (count(value: $bahasa) > 2) {
            $hasil .= "<p class='text-green-600 font-semibold'>Anda cukup berpengalaman dalam pemrograman!</p>";
        }

        $hasil .= "</div>";
    } else {
        $hasil .= "<p class='text-red-600 font-semibold'>Semua input wajib diisi!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Pribadi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-100 font-sans">

    <div class="max-w-auto p-6 bg-red-50 shadow-lg rounded-lg mb-8">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-4">
                <img src="Untitled design (1).png" alt="gambar" class="rounded-full h-20 w-20 object-cover border-2 border-amber-200">
                <h1 class="text-3xl font-bold text-red-400 px-4">PROFIL PRIBADI</h1>
            </div>
            <div class="space-x-2">
                <a href="halaman1.php" class="hover:underline hover:text-red-600 rounded-full bg-red-100 text-red-500 px-4 py-2">PROFIL</a>
                <a href="halaman2.php" class="hover:underline hover:text-red-600 rounded-full bg-red-100 text-red-500 px-4 py-2">PENGALAMAN KULIAH</a>
                <a href="halaman3.php" class="hover:underline hover:text-red-600 rounded-full bg-red-100 text-red-500 px-4 py-2">BLOG PRIBADI</a>
            </div>
        </div>
    </div>

    <div class="flex justify-center my-10">
        <table class="border border-gray-300 text-left w-fit bg-white shadow-lg rounded-lg">
            <tr class="bg-red-200">
                <th class="p-4 border-2 border-gray-300">NAMA</th>
                <td class="p-4 border-2 border-gray-300">KHOLIFATUN NAISA</td>
            </tr>
            <tr>
                <th class="p-4 border-2 border-gray-300 bg-red-300">ALAMAT</th>
                <td class="p-4 border-2 border-gray-300 bg-red-300">SUMENEP</td>
            </tr>
            <tr class="bg-red-200">
                <th class="p-4 border-2 border-gray-300">TEMPAT, TANGGAL LAHIR</th>
                <td class="p-4 border-2 border-gray-300">SUMENEP, 17 JULI 2006</td>
            </tr>
            <tr>
                <th class="p-4 border-2 border-gray-300 bg-red-300">NOMOR HP</th>
                <td class="p-4 border-2 border-gray-300 bg-red-300">085933713420</td>
            </tr>
            <tr class="bg-red-200">
                <th class="p-4 border-2 border-gray-300">EMAIL</th>
                <td class="p-4 border-2 border-gray-300">naisahifa@gmail.com</td>
            </tr>
        </table>
    </div>

    <form action="" method="post" class="space-y-8 max-w-3xl mx-auto mb-12 bg-white p-6 rounded-lg shadow-lg">
        <div class="flex flex-col">
            <label class="font-semibold mb-2">Bahasa pemrograman yang dikuasai :</label>
            <div class="space-y-1">
                <label><input type="checkbox" name="bahasa[]" value="Python" class="mr-1"> Python</label><br>
                <label><input type="checkbox" name="bahasa[]" value="PHP" class="mr-1"> PHP</label><br>
                <label><input type="checkbox" name="bahasa[]" value="JavaScript" class="mr-1"> JavaScript</label><br>
                <label><input type="checkbox" name="bahasa[]" value="C++" class="mr-1"> C++</label><br>
                <label><input type="checkbox" name="bahasa[]" value="Java" class="mr-1"> Java</label>
            </div>
        </div>

        <div class="flex flex-col">
            <label class="font-semibold mb-2">Penjelasan pengalaman proyek pribadi :</label>
            <textarea name="pengalaman" rows="5" class="p-2 border border-gray-300 rounded-lg bg-red-50" placeholder="Ceritakan proyek pribadi Anda..."></textarea>
        </div>

        <div class="flex flex-col">
            <label class="font-semibold mb-2">Software yang digunakan :</label>
            <div class="space-y-1">
                <label><input type="checkbox" name="software[]" value="VS Code" class="mr-1"> VS Code</label><br>
                <label><input type="checkbox" name="software[]" value="XAMPP" class="mr-1"> XAMPP</label><br>
                <label><input type="checkbox" name="software[]" value="Git" class="mr-1"> Git</label><br>
                <label><input type="checkbox" name="software[]" value="Postman" class="mr-1"> Postman</label>
            </div>
        </div>

        <div class="flex flex-col">
            <label class="font-semibold mb-2">Sistem Operasi yang digunakan :</label>
            <div class="space-y-1">
                <label><input type="radio" name="os" value="Windows" class="mr-1"> Windows</label><br>
                <label><input type="radio" name="os" value="Linux" class="mr-1"> Linux</label><br>
                <label><input type="radio" name="os" value="Mac" class="mr-1"> Mac</label>
            </div>
        </div>

        <div class="flex flex-col">
            <label class="font-semibold mb-2">Tingkat Penguasaan PHP:</label>
            <select name="tingkat" class="p-2 border border-gray-300 rounded-lg bg-white">
                <option value="">-- Pilih Tingkat --</option>
                <option value="Pemula">Pemula</option>
                <option value="Menengah">Menengah</option>
                <option value="Mahir">Mahir</option>
            </select>
        </div>

        <div class="flex space-x-4 justify-center pt-4">
            <button type="submit" class="bg-amber-600 text-white px-6 py-2 rounded-full">Kirim</button>
            <button type="submit" name="reset" class="bg-gray-400 text-white px-6 py-2 rounded-full">Reset</button>
        </div>
    </form>

    <div class="max-w-3xl mx-auto mb-10">
        <?= $hasil ?>
    </div>

</body>
</html>
