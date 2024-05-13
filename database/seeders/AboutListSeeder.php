<?php

namespace Database\Seeders;

use App\Models\AboutModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('about')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $about = [
            [
                'image' => 'about-1.png',
                'title' => 'Profile Sanggar Sekojor Lima Kurung',
                'deskripsi' => '<p style="text-align: justify;">"Perkumpulan organisasi masyarakat yang mewadahi para pelaku seni untuk mengembangkan dan melestarikan tradisi dan budaya Betawi, dengan harapan seni tradisi dan budaya Betawi dapat di kenal luas di masyarakat serta tidak tergerus zaman di era globalisasi"</p>
                <p style="text-align: justify;">Pada mulanya di tahun 1928 Kong Nyaih bin Potol selaku guru silat sudah mulai aktif mengajarkan ilmu beladiri kepada para pemuda dikawasan Joglo Jakarta Barat. Kong Nyaih sendiri merupakan salah satu dari beberapa tokoh silat di kawasan tersebut diantara yang lain adalah Kong Jenti bin Adam, Baba Sa Adih bin Jenti, Baba Siman bin H. Nasan, H. Djidi bin Asil, Kong Muhammad dan Bang Midan. Kong Nyaih sendiri lahir pada tahun 1901 dan merupakan orang asli pribumi dikawasan Joglo itu sendiri. Dari silat yang diajarkan kong nyaih itulah yang saat ini di kenal dengan nama &ldquo;Silat Sekojor Lima Kurung&rdquo; serta menjadi cikal bakal Sanggar Sekojor sampai sekarang ini dengan mempertahankan nilai-nilai tradisi dan budaya Betawi dari masa itu.</p>
                <p style="text-align: justify;">Pada tahun 1980 Baba Amir mulai belajar silat kepada Kong Nyaih sampai dengan tahun 1981, yang pada masa itu belajar ilmu silat secara sembunyi-sembunyi dan tidak untuk di publikasi seperti sekarang ini. Kemudian pada tahun 1983 Baba Amir melanjutkan pembelajarannya kepada Baba Sa adih bin Jenti dimana pengajaran tersebut juga masih di bawah pengawasan Kong Nyaih sendiri, hingga pada tahun 1986 Baba Amir menyelesaikan pembelajarannya dari Baba Sa adih bin Jenti.</p>
                <p style="text-align: justify;">Pada tahun 2002 Baba Amir mulai mengajarkan ilmu silatnya itu kepada beberapa pemuda di kawasan Joglo Jakarta Barat, diantara para pemuda itu adalah Bang Marwan, Bang Irwan, Bang Dalih Daglog, Bang Eman, dan Bang Ipung yang mana mereka dikenal sebagai murid Baba Amir angkatan pertama, kemudian Baba Amir lanjut mengajarkan silat di tahun 2005 dengan beberapa pemuda diantaranya Bang Kimung, Bang Herman, Bang Bahrudin, Bang Sadelih, dan Bang Irpan yang saat ini mereka di kenal sebagai murid Baba Amir angkatan kedua. Pada tahun-tahun ini juga murid-murid Baba Amir yang di pimpin Bang Kimung mulai mengenalkan ilmu silatnya ke khalayak publik yang di kenal dengan ilmu silat "Sekojor Lima Kurung".</p>
                <p style="text-align: justify;">Setelah angkatan kedua ini Baba Amir cukup lama vakum, hingga pada tahun 2010 Baba Amir mulai membuka pengajaran kembali ke beberapa pemuda diantaranya Bang Hadi, Bang Totong, Bang Oril, Bang Bayu, Bang Rangga dan lain-lain karena memang pada saat itu murid baba Amir cukup banyak, hingga tahun 2011 masuklah beberapa pemuda lainnya diantaranya Bang Sahlan, Bang Pantek, Bang Doni, Bang Doni Arpas, Bang Adam, dan Bang Sidik sampai tahun 2013 (menyelesaikan pengajarannya) mereka dikenal sebagai murid Baba Amir angkatan ketiga. Seiring berjalannya waktu di tahun ini juga pada tanggal 11 Maret 2011, atas persetujuan dan restu Baba Amir akhirnya di bakukanlah perkumpulan tersebut menjadi sebuah sanggar yang namanya di ambil dari nama silat itu sendiri bernama "Sanggar Sekojor".</p>
                <p style="text-align: justify;">Disamping murid-murid Baba Amir eksis mengenalkan Silat Sekojor-nya kepada masyarakat luas, pada tahun 2013 Baba Amir masih tetap istiqomah melakukan pengajaran ke beberapa pemuda lainnya diantaranya Bang Imam, Bang Rangga, Mia, Bang Pa-i, Bang Fadli, Bang Alam, Bang Rafli dan yang lainnya. Hingga sampai pada hari ini mereka telah mendapatkan izin dan restu Baba Amir serta mandat untuk terus melanjutkan dan melestarikan "Silat Sekojor Lima Kurung", yang pada saat ini Bang Pantek ditunjuk sebagai ketua pengajar Silat Sekojor Lima Kurung sendiri di bawah pengawasan langsung Baba Amir.</p>
                <p style="text-align: justify;">Dari perjuangan itulah Baba Amir berhasil mempertahankan, mengembangkan serta melestarikan Silat Sekojor sampai saat ini, yang pada mulanya hanya mengajarkan Silat Sekojor ke beberapa pemuda saja, namun seiring waktu berjalan murid-murid baba amir pun kian bertambah sehingga menjadi sebuah Sanggar seni dan tradisi budaya Betawi yang saat ini Sangar Sekojor telah mengantongi izin resmi berbadan hukum dari Akte Notaris INA ROSIANA, SH. S.K Menteri Kehakiman &amp; HAM RI No. C-723 HT.03.02-Th.2002 Tgl 27 Maret 2002 NOTARIS PASAR MODAL NO: 726/PM/STTD-N/2004. LKB No Pend. 032 11 02 09 B 16. Dan sampai riwayat ini di buat pada tanggal 14 Januari 2021 Sanggar Sekojor telah banyak berkontribusi dan turut berpartisipasi dalam melestarikan Seni dan Tradisi Budaya Betawi di bawah naungan lembaga-lembaga resmi pemerintahan seperti LKB (Lembaga Kebudayaan Betawi), dan Dinas Pariwisata dan Kebudayaan DKI Jakarta serta telah banyak menyumbangkan prestasi-prestasi dalam bidang Seni Lenong Preman Betawi, Palang Pintu, Gambang Kromong dan Seni Silat Tradisi di berbagai event dan perlombaan baik itu tingkat daerah maupun provinsi.</p>
                <p style="text-align: justify;">Harapan kami adalah dengan adanya Sanggar Sekojor ini dapat menjadi wadah silaturahmi bagi para pelaku-pelaku seni budaya Betawi seperti lenong, ondel-ondel, dan gambang kromong agar dapat terus mengembangkan dan melestarikan Budaya dan tradisi Betawi agar tetap eksis di tengah era globalisasi saat ini, demikian riwayat ini kami sampaikan semoga dapat menjadi motivasi yang membangun untuk kita semua dalam melestarikan Budaya Bangsa.</p>',
                'user_create' => 1,
            ],
        ];

        foreach ($about as $key => $value) {
            AboutModel::create($value);
        }
    }
}
