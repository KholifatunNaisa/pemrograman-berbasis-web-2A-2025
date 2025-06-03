<?php
$artikel = [
    1 => [
        'judul' => 'ARTIKEL 1',
        'tanggal' => '30-05-2024',
        'gambar' => 'download (1).jpeg',
        'refleksi' => [
            "Bagaimana kita menyikapi dan menghadapi tantangan tersebut akan sangat memengaruhi kesuksesan kita di masa depan. Tantangan akademik adalah 
                hal yang paling umum dirasakan mahasiswa. Beban tugas, jadwal kuliah yang padat, dan ujian yang ketat sering kali 
                membuat mahasiswa merasa tertekan. Untuk menghadapinya, manajemen waktu menjadi kunci utama. Mahasiswa perlu membuat 
                jadwal belajar yang teratur, memprioritaskan tugas yang penting, dan tidak menunda pekerjaan. Selain itu, aktif bertanya 
                kepada dosen dan berdiskusi dengan teman sekelas juga dapat membantu memahami materi dengan lebih baik. 
                Bagi mahasiswa yang merantau, adaptasi dengan lingkungan baru bisa menjadi tantangan tersendiri. Mereka harus beradaptasi
                dengan budaya, makanan, hingga sistem pembelajaran yang mungkin berbeda dengan pengalaman sebelumnya. Untuk mengatasi hal ini, 
                mahasiswa perlu membuka diri dan berusaha menjalin pertemanan sebanyak mungkin. Bergabung dengan organisasi atau komunitas di 
                kampus juga bisa membantu mereka merasa lebih diterima dan terhubung.",
            "Mengejar prestasi akademik tanpa mengabaikan kehidupan 
                sosial adalah hal yang menantang. Mahasiswa sering kali dihadapkan pada pilihan antara belajar atau bersosialisasi dengan teman. 
                Solusinya adalah dengan menciptakan keseimbangan. Mengatur waktu untuk belajar dan bersosialisasi secara seimbang akan membantu 
                mengurangi stres dan meningkatkan kualitas hidup. Biaya kuliah dan kebutuhan hidup yang tinggi menjadi tantangan finansial bagi 
                banyak mahasiswa. Beberapa mahasiswa harus mencari pekerjaan paruh waktu untuk mencukupi kebutuhan sehari-hari. Manajemen keuangan 
                yang baik sangat penting dalam hal ini. Membuat anggaran bulanan, menabung, dan mencari beasiswa atau bantuan keuangan bisa menjadi 
                solusi untuk menghadapi tantangan finansial. Tekanan akademik, ekspektasi keluarga, dan berbagai masalah pribadi dapat memengaruhi 
                kesehatan mental mahasiswa. Mengabaikan kesehatan mental dapat berdampak buruk pada kinerja akademik dan kehidupan pribadi. 
                Oleh karena itu, penting bagi mahasiswa untuk mengenali tanda-tanda stres dan kelelahan. Berbicara dengan teman, keluarga, 
                atau konselor kampus bisa membantu meringankan beban mental yang dirasakan. Menghadapi tantangan di dunia perkuliahan membutuhkan 
                ketangguhan dan kemampuan beradaptasi. Mahasiswa perlu mengembangkan keterampilan manajemen waktu, kemampuan bersosialisasi, serta menjaga 
                kesehatan mental dan fisik. Dengan pendekatan yang tepat, tantangan-tantangan tersebut bukan hanya menjadi halangan, tetapi juga menjadi 
                peluang untuk tumbuh dan berkembang menjadi pribadi yang lebih kuat dan mandiri.",
        ],
        'kutipan' => [
            "Mempertahankan semangat kuliah bukanlah tugas yang mudah, tetapi dengan komitmen, disiplin, dan ketekunan, setiap mahasiswa dapat mengatasi 
                tantangan yang dihadapi dan mencapai potensi maksimal dalam perjalanan akademik mereka. Tetaplah fokus pada tujuan Anda, dan jangan pernah 
                ragu untuk mencari dukungan dan bantuan saat diperlukan.",
        ],
        'sumber' => 'https://stabn-sriwijaya.ac.id/?mnu=berita&id=369&tipe=Artikel'
    ],
    2 => [
        'judul' => 'ARTIKEL 2',
        'tanggal' => '02-08-2022',
        'gambar' => 'download.jpeg',
        'refleksi' => [
            "Dunia perkuliahan adalah fase kehidupan yang penuh dengan tantangan dan peluang. Bagi banyak mahasiswa, masa kuliah bukan hanya tentang mengejar 
                gelar akademik, tetapi juga tentang membentuk karakter, mengasah keterampilan, dan mempersiapkan diri menghadapi dunia kerja. Tantangan yang dihadapi 
                dalam perkuliahan bisa datang dari berbagai aspek, mulai dari akademik hingga kehidupan sosial. Beban tugas yang berat, jadwal kuliah yang padat, 
                dan tuntutan untuk berprestasi sering kali membuat mahasiswa merasa tertekan. Untuk mengatasinya, manajemen waktu dan kemampuan beradaptasi menjadi kunci 
                utama. Mahasiswa perlu menyusun jadwal yang teratur, memprioritaskan tugas, dan tidak ragu untuk berdiskusi dengan dosen atau teman sekelas guna memahami 
                materi dengan lebih baik. Selain itu, bagi mahasiswa yang merantau, adaptasi dengan lingkungan baru dan keterlibatan dalam komunitas kampus dapat membantu 
                mengurangi rasa kesepian dan meningkatkan rasa keterhubungan.",
            "Di sisi lain, mahasiswa yang aktif dalam organisasi menghadapi tantangan dalam membagi waktu antara akademik dan kegiatan non-akademik. Kegiatan organisasi 
                memberikan banyak manfaat, seperti keterampilan kepemimpinan dan kerja tim, tetapi jika tidak dikelola dengan baik, dapat mengganggu pencapaian akademik. 
                Oleh karena itu, penting bagi mahasiswa untuk membuat prioritas berdasarkan tingkat urgensi dan tenggat waktu. Membuat jadwal harian yang seimbang antara kuliah, 
                belajar, dan organisasi dapat membantu mengurangi stres dan meningkatkan produktivitas. Belajar mengatakan tidak pada kegiatan yang kurang penting serta berkomunikasi 
                dengan baik kepada rekan organisasi dan dosen juga merupakan keterampilan yang perlu dikembangkan. Dengan pendekatan yang tepat, mahasiswa tidak hanya akan sukses dalam 
                akademik tetapi juga mampu tumbuh dan berkembang melalui pengalaman organisasi.",
        ],
        'kutipan' => [
            "Tentukanlah kegiatan yang benar-benar menjadi prioritas anda. Kuliah atau organisasi? Jawabannya ada pada diri anda sendiri. Kembali lagi pada tujuan utama Anda kuliah 
                atau ikut organisasi. Tidak ada yang salah jika Anda ingin memprioritaskan salah satunya. Sejatinya, tujuan utama seorang mahasiswa adalah untuk kuliah dan lulus tepat waktu.",
        ],
        'sumber' => 'https://stieww.ac.id/news/tips-membagi-waktu-kuliah-dan-organisasi'
    ]
];

//mengambil nilai parameter dari id kemudian yan dikirim melalui metode get, jika tidak isi id dengan null 
$id = $_GET['id'] ?? null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog Pribadi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-100 font-sans">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center text-red-700 mb-6">BLOG PRIBADI</h1>
        <div class="space-x-2 flex justify-center mb-3">
            <a href="halaman1.php" class="hover:underline hover:text-red-600 rounded-full bg-red-200 text-red-500 px-4 py-2">PROFIL</a>
            <a href="halaman2.php" class="hover:underline hover:text-red-600 rounded-full bg-red-200 text-red-500 px-4 py-2">PENGALAMAN KULIAH</a>
            <a href="halaman3.php" class="hover:underline hover:text-red-600 rounded-full bg-red-200 text-red-500 px-4 py-2">BLOG PRIBADI</a>
        </div>

        <?php if (!$id): ?>
            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-semibold mb-4">Daftar Artikel</h2>
                <ul class="list-disc list-inside space-y-2">
                    <?php foreach ($artikel as $key => $value): ?>
                        <li>
                            <a href="?id=<?= $key ?>" class="text-red-500 hover:underline">
                                <?= $value['judul'] ?> (<?= $value['tanggal'] ?>)
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php elseif (isset($artikel[$id])): ?>
            <?php
                //mengambil data artikel berdasarkan id
                $data = $artikel[$id];
                //rand untuk memilih angka acak dari indeks kutipan
                $kutipan = $data['kutipan'][rand(0, count($data['kutipan']) - 1)];
            ?>
            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-2xl font-bold text-red-700 text-center mb-2"><?= $data['judul'] ?></h2>
                <p class="text-sm text-center text-gray-500 mb-6"><em>Tanggal: <?= $data['tanggal'] ?></em></p>
                <img src="<?= $data['gambar'] ?>" alt="gambar" class="w-full rounded shadow mb-6">

                <?php foreach ($data['refleksi'] as $paragraf): ?>
                    <p class="text-justify text-gray-700 leading-relaxed mb-4"><?= $paragraf ?></p>
                <?php endforeach; ?>

                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 my-6 rounded">
                    <strong class="block font-semibold mb-2">Kutipan Inspiratif:</strong>
                    <p class="italic text-justify"><?= $kutipan ?></p>
                </div>

                <p class="mb-4">
                    <a href="<?= $data['sumber'] ?>" class="text-blue-600 underline hover:text-blue-800" target="_blank">
                        Klik link ini untuk membaca selengkapnya
                    </a>
                </p>

                <a href="halaman3.php" class="inline-block mt-4 px-4 py-2 bg-red-600 text-white rounded-full hover:bg-red-700 transition">
                    Kembali ke daftar artikel
                </a>
            </div>
        <?php else: ?>
            <p class="text-red-600">Artikel tidak ditemukan. <a href="blogpribadi.php" class="text-blue-600 underline">Kembali</a></p>
        <?php endif; ?>
    </div>
</body>
</html>
