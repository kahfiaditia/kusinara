<?php

namespace Database\Seeders;

use App\Models\BlogModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('blog')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $blog = [
            [
                'image' => 'lenong.jpeg',
                'title' => 'Pencak Silat Betawi',
                'deskripsi' => '<p style="text-align: justify;">"Silat Betawi merupakan kejeniusan lokal yang mewarnai sejarah Jakarta."</p>
                <p style="text-align: justify;">Pencak silat telah ditetapkan sebagai salah satu warisan budaya tak benda dunia dari Indonesia oleh Organisasi Pendidikan, Ilmu Pengetahuan, dan Kebudayaan Perserikatan Bangsa-Bangsa (UNESCO) di Kolombia, 9-14 Desember 2019. Status tersebut diberikan karena pencak silat, termasuk silat Betawi dalam kelompok alirannya, dinilai memiliki akar tradisi yang kuat, terutama dalam dua aspek, yaitu bela diri dan mental-spiritual. Dilansir dari lembagakebudayaanbetawi.org, sejarah silat betawi tidak terlepas dari sejarah perkembangan dan dinamika kota Jakarta. Sejak masih bernama Batavia, kota ini sudah menjadi kota kosmopolitan yang merupakan tempat pertemuan berbagai ragam budaya dan suku bangsa.</p>
                <p style="text-align: justify;">Selain menjadi produk sosial yang mengakar dalam kehidupan sehari-hari, silat Betawi juga dijadikan sebagai alat perjuangan masyarakat dalam perjuangan meraih kemerdekaan. Para jawara saat itu berjuang bersama untuk memerdekakan bangsa Indonesia menggunakan keahlian pencak silat yang mereka miliki. Masyarakat Betawi menyebutnya sebagai &ldquo;maen pukulan&rdquo;. Pada saat itu, para jawara lebih banyak menggunakan permainan otot. Namun, seiring berjalannya waktu, maen pukulan Betawi mengalami evolusi.</p>
                <p style="text-align: justify;">Masyarakat Betawi yang tinggal di wilayah Jakarta Barat adalah salah satu suku bangsa yang memiliki banyak warisan silat bela diri, salah satunya yang terkenal adalah silat sekojor yang berasal dari daerah Joglo. Silat bela diri sekojor tidak bisa dilihat sebelah mata, karena sudah ada sejak jaman Belanda. Silat sekojor ada sejak 1828 yang dibawa oleh Kumpi Potol. Dia memiliki anak bernama Kong Nyaih yang meneruskan silat tersebut sejak 1901.</p>
                <p style="text-align: justify;">Kong Nyaih sudah menguasai maen pukulan (bahasa Betawi) sekojor di usia 8 tahun. Beranjak remaja, ilmu silat dia semakin meningkat. Ilmu itu didapat dari mimpi dan ditambah dengan kreativitasnya sehingga tercipta silat yang mengacu pada gerakan pukulan lurus yang oleh orang Betawi disebut dengan sekojor. Adapun jurus yang dikembangkan adalah jalan lurus, gibas, pacul, sembat, bandut, kontek besi, dan kepro. Selain itu, ditambah dengan jurus lima dan jurus tiga. Dia memiliki tiga anak lelaki, yakni Baum, Iyan, Aryanto, serta satu anak perempuan. Ketiga anak lelakinya tidak ada yang mengikuti jejak Koh Nyai, mereka lebih senang mendalami agama. Oleh karena itu, dia menurunkan ilmu silat sekojor kepada murid-muridnya. Pada 1991 dia meninggal, dan ilmu silat sekojor diteruskan oleh beberapa muridnya, antara lain G.J Nawi, Kong Simah, Kong Sadi Benjol, Baba Akel, Baba Abet, dan Baba Amir. Nama yang disebutkan terakhir, yakni Baba Amir merupakan salah satu penerus dan sekaligus guru besar silat sekojor dari Joglo, Jakarta Barat yang masih aktif.</p>
                <p style="text-align: justify;">Pada tahun 1991 Kong Nyaih meninggal dan diteruskan beberapa muridnya anatara lain G.J Nawi, Kong Simah, Kong Sadi Benjol, Baba Akel, Baba Abet, dan Baba Amir. Baba Amir sampai sekarang masih aktif nan silat dia tergolong unik dan cukup menguras tenaga, namun banyak kaum hawa yang menyukai silat sekojor. Ada beberapa jurus yang khas dan unik, seperti jurus lima kurung dan langkah segitiga.</p>
                <p style="text-align: justify;">Sanggar sekojor sudah mendapat banyak piagam dan prestasi, baik di tingkat propinsi, kota, kecamatan, maupun kelurahan. Upaya pelestarian tradisi silat sekojor yang dilakukan oleh pemerintah yakni sering mengadakan festival silat se-Jakarta Barat, mengadakan pertunjukkan silat, pelatihan, pembinaan, dan bantuan dana fasilitas.</p>
                <p style="text-align: justify;">&nbsp;</p>
                <h2 style="text-align: center;"><strong>Video Silat Sekojor</strong></h2>
                <p style="text-align: center;">Melalui video ini kami abadikan salah satu aksi Seni Silat Betawi Sekojor sebagai bentuk dukungan kami dalam berbagai event kebudayaan, mari saksikan aksi kami !!</p>
                <p style="text-align: center;">&nbsp;</p>
                <p><iframe title="YouTube video player" src="https://www.youtube.com/embed/VGVqxTo3SxE?si=vY19PhtmUrLnn0Td" width="100%" height="740" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>',
                'aktif' => 1,
                'user_create' => 1,
            ],
            [
                'image' => 'palang_pintu.jpeg',
                'title' => 'Palang Pintu',
                'deskripsi' => '<p style="text-align: justify;"><em>"Bagi masyarakat Betawi, tradisi ini melambangkan besarnya perlindungan orang tua terhadap putrinya sebelum dipinang. Sedangkan bagi pihak laki-laki, Palang Pintu dapat menunjukkan kesungguhannya yang akan membangun rumah tangga bersama perempuan pilihannya."</em></p>
                <p style="text-align: justify;">Palang Pintu merupakan tradisi yang menjadi bagian dari upacara pernikahan masyarakat Betawi. Palang pintu menggabungkan seni beladiri dengan seni sastra pantun. Dalam tradisi ini, jawara yang bertindak sebagai perwakilan mempelai laki-laki dan perempuan akan saling menunjukan kemampuan memperagakan gerakan silat dan melontarkan pantun satu sama lain. Setelah menunjukkan beberapa gerakan silat dan saling berbalas pantun, baru rombongan mempelai pria bisa masuk ke area rumah mempelai perempuan untuk melanjutkan prosesi pernikahan.</p>
                <p style="text-align: justify;">Tradisi palang pintu menyimbolkan ujian yang harus dilalui mempelai laki-laki untuk meminang pihak perempuan. Jawara dari daerah asal laki-laki harus bisa mengalahkan jawara yang berasal dari daerah tempat tinggal perempuan. Hal ini sesuai dengan pelaksanaannya di mana rombongan mempelai laki-laki harus melewati hadangan tantangan yang diberikan oleh pihak perempuan. Sementara itu, berbalas pantun dimaknai sebagai manifestasi dari diplomasi. Palang Pintu juga berfungsi untuk mendekatan hubungan antarkampung dan antarkeluarga.</p>
                <p style="text-align: justify;">Palang pintu berasal dari kata palang (penghalang) dan pintu. Palang pintu bisa diartikan sebagai penghalang saat akan memasuki rumah, yang biasanya terletak di dekat pintu. Sesuai namanya, maka fungsi dari ritual ini adalah menghalangi rombongan calon mempelai laki-laki yang akan masuk ke rumah calon mempelai perempuan. Namun, penghalang di sini bukan bermaksud untuk menghentikan, ya! Melainkan berupa ujian untuk mengetahui sejauh mana tekad sang calon pengantin.</p>
                <p style="text-align: justify;">Dalam tradisi Palang Pintu, calon mempelai laki-laki harus beradu pantun dengan keluarga dari calon mempelai perempuan. Hal ini menjadi simbol bahwa sebagai sosok yang akan menjadi kepala rumah tangga, laki-laki harus memiliki kepiawaian dalam berdiplomasi.</p>
                <p style="text-align: justify;">Selain itu, sang calon mempelai laki-laki juga akan ditantang dalam adu bela diri karena nantinya ia akan menjadi pelindung bagi keluarga. Selain kemampuan berdiplomasi dan bela diri, calon mempelai laki-laki juga wajib memiliki kemampuan mengaji.</p>
                <p style="text-align: justify;">Seiring perkembangan zaman, ritual Palang Pintu tidak lagi dilakukan langsung oleh sang calon mempelai laki-laki. Perannya digantikan oleh jawara perwakilan. Begitupun dengan Sang Palang Pintu yang akan diwakili oleh jawara yang telah ditunjuk keluarga pihak perempuan. Pada pelaksanaannya, kedua pihak jawara akan saling berhadapan di depan gerbang atau area sebelum memasuki pintu rumah calon mempelai perempuan.</p>
                <p style="text-align: justify;">Selain jawara dari kedua belah pihak, beberapa orang akan mendampingi ritual Palang Pintu, seperti pembaca Sholawat dustur, pembaca sike (ayat Al-quran), dan tim musik. Untuk selanjutnya, tim musik inilah, yang umumnya memainkan alat musik tradisional rebana ketimpring. Mereka siap mengiringi perjalanan rombongan calon mempelai laki-laki hingga tiba di lokasi Palang Pintu yang telah ditentukan.</p>
                <p style="text-align: justify;">Properti lain yang disiapkan dalam pelaksanaan ritual Palang Pintu adalah kembang kelapa yang merupakan perlambang bahwa sang calon kepala keluarga harus bersikap seperti tanaman kelapa, yang setiap bagiannya (dari pucuk daun hingga akar) bisa memberikan manfaat bagi keluarga maupun masyarakat.</p>
                <p style="text-align: justify;">Walaupun identik dengan acara pernikahan adat Betawi, ritual Palang Pintu kadang juga dilakukan saat penerimaan tamu negara dan peresmian kantor. Sebagai upaya sosialisasi dan menjaga kelestarian budaya, ritual ini juga kerap ditampilkan dalam Festival Budaya Betawi. Yuk, terus kita jaga kekayaan budaya Indonesia.</p>
                <p style="text-align: justify;">&nbsp;</p>
                <h2 style="text-align: center;"><strong>Video Palang Pintu</strong></h2>
                <p style="text-align: center;">Melalui video ini kami abadikan aksi palang pintu kami sebagai komitmen kami untuk terus melestarikan Tradisi &amp; Budaya, mari saksikan keseruan kami !!</p>
                <p style="text-align: center;">&nbsp;</p>
                <p><iframe title="YouTube video player" src="https://www.youtube.com/embed/42ZhB1qrENo?si=biej7WEdQ5OrJXxc" width="100%" height="740" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>',
                'aktif' => 1,
                'user_create' => 1,
            ],
            [
                'image' => 'silat.png',
                'title' => 'Lenong Betawi',
                'deskripsi' => '<p style="text-align: justify;">"Lenong adalah kesenian teater tradisional, atau sandiwara rakyat Betawi yang dibawakan dalam dialek Betawi, berasal dari Jakarta."</p>
                <p style="text-align: justify;">Kesenian tradisional ini diiringi musik gambang kromong dengan alat musik, seperti gambang, kromong, gong, kendang, kempor, suling, dan kecrek, serta alat musik unsur Tionghoa, seperti tehyan, kongahyan, dan sukong. Lakon atau skenario lenong umumnya mengandung pesan moral, seperti menolong yang lemah, serta membenci kerakusan dan perbuatan tercela. Adapun bahasa yang digunakan dalam lenong adalah Melayu atau dialek Betawi. Lenong berkembang sejak akhir abad ke-19 atau awal abad ke-20. Kesenian tersebut merupakan adaptasi dari masyarakat Betawi atas kesenian serupa seperti "komedi bangsawan" dan "teater stambul" yang sudah ada saat itu.</p>
                <p style="text-align: justify;">Lakon lenong berkembang dari lawakan tanpa alur cerita yang dirangkai, hingga pertunjukan semalam suntuk dengan lakon panjang dan utuh. Mulanya, kesenian ini dipertunjukkan dengan mengamen dari kampung ke kampung. Pertunjukan ini diadakan di udara terbuka tanpa panggung. Ketika pertunjukan berlangsung, salah seorang aktor atau aktris mengitari penonton sambil meminta sumbangan sukarela. Selanjutnya, lenong mulai dipertunjukkan atas permintaan pelanggan dalam acara di panggung hajatan, seperti resepsi pernikahan. Baru di awal kemerdekaan, teater rakyat ini murni menjadi tontonan panggung.</p>
                <p style="text-align: justify;">Setelah sempat mengalami masa sulit, pada 1970-an kesenian lenong yang dimodifikasi mulai dipentaskan secara rutin di panggung Taman Ismail Marzuki, Jakarta. Selain menggunakan unsur teater modern dalam plot dan tata panggungnya, lenong yang direvitalisasi tersebut menjadi berdurasi dua atau tiga jam, dan tidak lagi semalam suntuk. Selain silat, kehidupan masyarakat Betawi tak bisa dilepaskan dari kesenian lenong. Ya, tontonan yang kerap menyuguhkan cerita rakyat lengkap dengan bumbu-bumbu komedi itu masih menjadi hiburan masyarakat Betawi. Salah satu sanggar yang masih menggeluti teater sandiwara rakyat Betawi itu yakni Sanggar Sekojor Lima Kurung.</p>
                <p style="text-align: justify;">Ketua Sanggar Sekojor Lima Kurung, Bang Kimung menyatakan tradisi budaya Betawi tak hanya soal mengedepankan jawara atau jagoan silat, tapi juga mengapresiasi bentuk ekspresi. Seperti halnya lenong. Ia menyebut, bahkan tak setengah-setengah dalam mengajarkan seni lenong kepada murid-muridnya.</p>
                <p style="text-align: justify;">Berbeda halnya dengan teater yang mempunyai naskah, para pelakon lenong Betawi tak memiliki naskah atau plot sehingga bisa diimprovisasi kapan saja. Lenong dibagi menjadi dua, yakni lenong denes dan lenong preman. Lenong denes lebih menekankan pada cerita-cerita tentang kerajaan dan lingkungan bangsawan. Sementara, lenong preman lebih mengisahkan tentang cerita pahlawan Betawi seperti Si Pitung.</p>
                <p style="text-align: justify;">Bang Kimung menyatakan dari awal dibentuknya sanggar, yakni pada 11 Maret tahun 2011 hingga saat ini Sanggar Sekojor Lima Kurung telah mempunyai delapan album lenong. Menariknya, menurut Bang Kimung, di antara semua sanggar di Jakarta, hanya Sanggar Sekojor Lima Kurung yang mempunyai album lenong. Beberapa album lenongnya diantaranya Album Benda Pusaka dan Sorban Merah. Bang Kimung mengaku bahwa sanggar sering sekali menggali cerita-cerita zaman terdahulu dari sesepuh di daerah Joglo yang bernama Engkong Jaelani.</p>
                <p style="text-align: justify;">Tak ayal, piagam penghargaan atas lenong preman dari Kementerian Pendidikan dan Kebudayaan (Kemdikbud), Lembaga Kebudayaan Betawi, serta Dinas Kebudayaan Suku Dinas Kota Administrasi Jakarta Barat pernah disabetnya.</p>
                <p style="text-align: justify;">&nbsp;</p>
                <h2 style="text-align: center;"><strong>Video Lenong Sekojor</strong></h2>
                <p style="text-align: center;">Melalui video ini kami abadikan salah satu aksi pertunjukan lenong Sekojor sebagai upaya melestarikan seni teater Betawi tempo dulu, mari saksikan aksi kami !!</p>
                <p style="text-align: justify;"><iframe title="YouTube video player" src="https://www.youtube.com/embed/Ql1d7WBoWeU?si=Xldb0824kWIPToV5" width="100%" height="740px" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>',
                'aktif' => 1,
                'user_create' => 1,
            ],
        ];

        foreach ($blog as $key => $value) {
            BlogModel::create($value);
        }
    }
}
