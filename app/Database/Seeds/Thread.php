<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Thread extends Seeder
{
    // Jalankan lewat terminal dengan perintah 'php spark db:seed Thread' (tanpa tanda petik)

    public function run()
    {
        $data = [
            [
                'judul'     => 'Antimateri',
                'gambar'    => 'https://cdn.idntimes.com/content-images/community/2019/07/dfslkj1444411323-23ef8ade8f7b78b049060665603ffeb3_600x400.jpg',
                'isi'       => 'Dalam fisika modern, antimateri didefinisikan sebagai materi yang tersusun dari antipartikel (atau "pasangan") partikel yang sesuai dari materi "biasa". Sejumlah kecil antipartikel dihasilkan setiap hari pada akselerator partikel—dengan total produksi hanya beberapa nanogram (ng)—antimateri juga terbentuk dalam proses alami seperti tabrakan sinar kosmik dan beberapa jenis peluruhan radioaktif, tetapi hanya sebagian kecil dari antimateri yang berhasil diikat bersama dalam percobaan untuk membentuk antiatom. Tidak ada antimateri dalam jumlah makroskopik yang pernah dibuat karena biaya yang sangat mahal serta kesulitan produksi dan penanganan.

Secara teoretis, sebuah partikel dan anti-partikelnya (misalnya, proton dan antiproton) memiliki massa yang sama, tetapi muatan listriknya berlawanan, dan memiliki perbedaan bilangan kuantum, misalnya proton bermuatan positif sedangkan antiproton bermuatan negatif.',
                'tanggal'   => Time::now('Asia/Jakarta', 'id_ID'),
            ],
            [
                'judul'     => 'Kuantum',
                'gambar'    => 'https://www.itb.ac.id/files/dokumentasi/1649426478-era-kuantum.jpeg',
                'isi'       => 'Dalam fisika, kuantum (jamak: kuanta) adalah jumlah minimum dari setiap entitas fisika (sifat fisika) yang terlibat dalam suatu interaksi. Gagasan mendasar bahwa sifat fisika dapat "dikuantisasi" disebut sebagai "hipotesis kuantisasi". Ini berarti bahwa besarnya sifat fisika hanya dapat mengambil nilai diskrit yang terdiri dari kelipatan bilangan bulat dari satu kuantum.

Misalnya, foton adalah kuantum tunggal cahaya (atau bentuk lain dari radiasi elektromagnetik). Demikian pula, energi ikatan elektron dalam atom dikuantisasi dan hanya ada dalam nilai diskrit tertentu. (Memang, atom dan materi pada umumnya stabil karena elektron hanya bisa ada pada tingkat energi diskrit dalam atom.) Kuantisasi adalah salah satu dasar dari fisika mekanika kuantum yang lebih luas. Kuantisasi energi dan pengaruhnya terhadap cara energi dan materi berinteraksi (kuantum elektrodinamika) adalah bagian dari kerangka dasar dalam memahami dan menggambarkan alam.',
                'tanggal'   => Time::now('Asia/Makassar', 'id_ID'),
            ],
            [
                'judul'     => 'Multisemesta',
                'gambar'    => 'https://static.wikia.nocookie.net/marveldatabase/images/5/5d/Mirror_Dimension_from_Doctor_Strange_%28film%29_001.jpg/revision/latest?cb=20180427164334',
                'isi'       => 'Multisemesta, jagat majemuk, atau multiversum adalah hipotesis berupa kemungkinan adanya beberapa kumpulan alam semesta termasuk alam semesta tempat kita tinggal. Bersama-sama, alam semesta ini terdiri dari segala sesuatu yang ada: keseluruhan ruang, waktu, materi, energi dan hukum fisika serta konstanta yang menggambarkannya.

Alam semesta lain (selain alam semesta kita) yang bermacam-macam di dalam multisemesta disebut "alam semesta paralel", "alam semesta lain", atau "alam semesta alternatif (altversum)".',
                'tanggal'   => Time::now('Asia/Jayapura', 'id_ID'),
            ],
            [
                'judul'     => 'Lubang Hitam',
                'gambar'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Black_hole_-_Messier_87.jpg/1200px-Black_hole_-_Messier_87.jpg',
                'isi'       => 'Lubang hitam (bahasa Inggris: black hole) adalah bagian dari ruang waktu yang merupakan gravitasi paling kuat, bahkan cahaya tidak bisa kabur. Teori relativitas umum memprediksi bahwa butuh massa besar untuk menciptakan sebuah lubang hitam yang berada di ruang waktu. Di sekitar lubang hitam ada permukaan yang disebut horizon peristiwa. Objek ini disebut "hitam" karena menyerap apapun yang berada disekitarnya dan tidak dapat kembali lagi, bahkan cahaya. Secara teoritis, lubang hitam dapat memiliki ukuran sebesar apapun, dari mikroskopik sampai ke ukuran alam raya yang dapat diamati. Teori medan kuantum dalam ruang-waktu melengkung memprediksi bahwa horizon peristiwa memancarkan radiasi disekitarnya dengan suhu yang terbatas. Suhu ini berbanding lurus dengan massa lubang hitam, sehingga sulit untuk diamati lubang hitam bermassa bintang atau lebih. Lubang hitam terbagi menjadi 4: lubang hitam bermassa menengah, lubang hitam primordial, lubang hitam bintang, dan lubang hitam supermasif yang sering kali ada di pusat suatu galaksi.',
                'tanggal'   => Time::now('Asia/Jakarta', 'id_ID'),
            ],
            [
                'judul'     => 'Luar Angkasa',
                'gambar'    => 'https://asset-a.grid.id//crop/0x0:0x0/700x465/photo/2018/07/16/1509522954.jpg',
                'isi'       => 'Luar angkasa atau angkasa luar atau antariksa (juga disebut sebagai angkasa), merujuk pada bagian yang relatif kosong dari Jagad Raya, di luar atmosfer dari benda "celestial". Istilah luar angkasa digunakan untuk membedakannya dengan ruang udara dan lokasi "terestrial".

Karena atmosfer Bumi tidak memiliki batas yang jelas, namun terdiri dari lapisan yang secara bertahap semakin menipis dengan naiknya ketinggian, tidak ada batasan yang jelas antara atmosfer dan angkasa. Ketinggian 100 kilometer atau 62 mil ditetapkan oleh Fédération Aéronautique Internationale merupakan definisi yang paling banyak diterima sebagai batasan antara atmosfer dan angkasa.

Di Amerika Serikat, seseorang yang berada di atas ketinggian 80 km ditetapkan sebagai astronaut. 120 km (75 mil atau 400.000 kaki) menandai batasan di mana efek atmosfer menjadi jelas sewaktu proses memasuki kembali atmosfer (re-entry).',
                'tanggal'   => Time::now('Asia/Makassar', 'id_ID'),
            ],
            [
                'judul'     => 'Stasiun Luar Angkasa Internasional',
                'gambar'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/The_station_pictured_from_the_SpaceX_Crew_Dragon_5.jpg/1200px-The_station_pictured_from_the_SpaceX_Crew_Dragon_5.jpg',
                'isi'       => 'Stasiun Luar Angkasa Internasional (bahasa Inggris: International Space Station disingkat ISS) adalah sebuah stasiun luar angkasa modular yang terletak di orbit bumi rendah. ISS merupakan proyek gabungan multinasional yang melibatkan lima badan antariksa, mereka adalah NASA (Amerika Serikat), Roscosmos (Rusia), JAXA (Jepang), CSA (Kanada), dan ESA (Uni Eropa). Kepemilikan dan penggunaan ISS ditetapkan oleh perjanjian dan kesepakatan antar pemerintah. Stasiun ini berfungsi sebagai laboratorium penelitian gravitasi mikro dan lingkungan luar angkasa, yang mana penelitian ilmiah ini mencakupi bidang astrobiologi, astronomi, meteorologi, fisika, dan bidang lainnya. ISS cocok untuk menguji sistem dan peralatan pesawat ruang angkasa yang diperlukan untuk kemungkinan misi jangka panjang ke Bulan dan Mars kelak di masa depan.',
                'tanggal'   => Time::now('Asia/Jayapura', 'id_ID'),
            ],
            [
                'judul'     => 'Foton',
                'gambar'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Lasers.jpeg/1200px-Lasers.jpeg',
                'isi'       => 'Foton adalah partikel elementer dalam fenomena elektromagnetik. Biasanya foton dianggap sebagai pembawa radiasi elektromagnetik, seperti cahaya, gelombang radio, dan Sinar-X. Foton juga dapat diartikan sebagai energi terkuantisasi. Foton berbeda dengan partikel elementer lain seperti elektron dan quark, karena ia tidak bermassa dan dalam ruang vakum foton selalu bergerak dengan kecepatan cahaya, c. Foton memiliki baik sifat gelombang maupun partikel ("dualisme gelombang-partikel").',
                'tanggal'   => Time::now('Asia/Jakarta', 'id_ID'),
            ],
            [
                'judul'     => 'Gravitasi',
                'gambar'    => 'https://asset.kompas.com/crops/wE95yBIsGOAybErUzyal6AFgjeI=/61x1:901x561/750x500/data/photo/2021/08/18/611d0e50a619a.jpg',
                'isi'       => 'Gravitasi atau gravitas (dari bahasa Latin gravitas, berarti "berat"), adalah fenomena alam di mana semua hal yang memiliki massa atau energi di alam semesta—termasuk planet, bintang, galaksi, dan bahkan cahaya—saling tarik-menarik satu sama lain. Di bumi, gravitasi menyebabkan benda fisik memiliki berat, gravitasi Bulan menyebabkan air laut pasang laut, dan gravitasi matahari mengakibatkan planet dan beragam objek lainnya berada pada orbitnya masing-masing tata surya. Gaya gravitasi dari materi di ruang angkasa yang ada di alam semesta menyebabkan materi tersebut mulai berkumpul, membentuk bintang dan menyebabkan bintang-bintang tersebut berkumpul membentuk galaksi sehingga dapat dikatakan struktur berskala besar dalam alam semesta diciptakan oleh gravitasi. Gravitasi memiliki bentang nilai tak terbatas. Walaupun demikian, efeknya akan semakin melemah seiring suatu objek berjarak semakin jauh.',
                'tanggal'   => Time::now('Asia/Makassar', 'id_ID'),
            ],
            [
                'judul'     => 'Teori Relativitas',
                'gambar'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Spacetime_lattice_analogy.svg/1200px-Spacetime_lattice_analogy.svg.png',
                'isi'       => 'Teori relativitas adalah teori yang membahas mengenai kecepatan dan percepatan yang diukur secara berbeda melalui kerangka acuan. Konsep dasar dari teori relativitas disusun oleh Albert Einstein menjadi dua jenis, yaitu teori relativitas khusus dan teori relativitas umum. Kedua teori ini diciptakan untuk menjelaskan bahwa gelombang elektromagnetik tidak sesuai dengan teori gerakan Newton. Gelombang elektromagnetik dibuktikan bergerak pada kecepatan yang konstan, tanpa dipengaruhi gerakan sang pengamat. Inti pemikiran dari kedua teori ini adalah bahwa dua pengamat yang bergerak relatif terhadap masing-masing akan mendapatkan waktu dan interval ruang yang berbeda untuk kejadian yang sama, tetapi isi hukum fisika akan terlihat sama oleh keduanya.',
                'tanggal'   => Time::now('Asia/Jayapura', 'id_ID'),
            ],
        ];

        $this->db->table('thread')->insertBatch($data);
    }
}
