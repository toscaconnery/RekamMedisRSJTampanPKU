<?php 
header('Content-Type: application/pdf');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body style="">

<h2 align="center" style="font-size:100%">RENCANA TINDAKAN KEPERAWATAN<br>KLIEN DENGAN GANGGUAN PERSEPSI SENSORI : HALUSINASI</h2>

<table style="font-size: 70%;">
    <tbody>
      <tr>
        <td class="contain" width="20%" style="padding:-0.2%">
          Tanggal Pengkajian 
        </td>    
        <td class="contain" style="padding:-0.2%">  
          : {{$tanggal_pengkajian}}
        </td>                
      </tr>      
      <tr>
        <td class="contain" style="padding:-0.2%">
          Jam Pengkajian 
        </td>    
        <td class="contain" style="padding:-0.2%">  
          : {{$jam_pengkajian}}
        </td>                
      </tr>
      <tr>
        <td class="contain" style="padding:-0.2%">
          Ruangan
        </td>    
        <td class="contain" style="padding:-0.2%">  
          : {{$ruangan}}
        </td>                
      </tr>
      <tr>
        <td class="contain" style="padding:-0.2%">
          Diagnosa Medis
        </td>    
        <td class="contain" style="padding:-0.2%">  
          : {{$diagnosa_medis}}
        </td>                
      </tr>
    </tbody>
  </table>


<table>
  <thead>
    <tr>
     <th class="box-c" width="8%" rowspan="2">Tgl</th>
     <th class="box-c" width="8%" rowspan="2">No Dx</th> 
     <th class="box-c" width="20%" rowspan="2">Dx Keperawatan</th> 
     <th class="box-c" width="64%" colspan="3">Perencanaan</th>  
    </tr>
    <tr>
      <th class="box-c" width="16%">Tujuan</th>
      <th class="box-c" width="20%">Kriteria Evaluasi</th>
      <th class="box-c" width="27%">Intervensi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="box-top"><br></td>
      <td class="box-top"></td>
      <td class="box-top"></td>
      <td class="box-top"></td>
      <td class="box-top"></td>
      <td class="box-top"></td>
    </tr>

    <tr>
      <td class="box-top">{{$tanggal_1}}</td>
      <td class="box-top">{{$nodx_1}}</td>
      <td class="box-top">
        {{$dxk_1}} b.d<br>
        halusinasi(lihat/dengar/ penghidu/raba/kecap)
      </td>
      <td class="box-top">
        TUM: {{$t1}}<br>
        TUK 1:<br>
        Klien dapat membina hubungan saling percaya
      </td>
      <td class="box-top">
        1. Setelah {{$k1}} X interaksi klien menunjukkan tanda-tanda percaya kepada perawat:
        <br>
        <ul>
          <li>Ekspresi wajah bersahabat.</li>
          <li>Menunjukkan rasa senang.</li>
          <li>Ada kontak mata.</li>
          <li>Mau berjabat tangan.</li>
          <li>Mau menyebutkan nama.</li>
          <li>Mau menjawab salam.</li>
          <li>Mau duduk berdampingan dengan perawat.</li>
          <li>Bersedia mengungkapkan masalah yang dihadapi</li>
        </ul>
      </td>
      <td class="box-top">
        1. Bina hubungan saling percaya dengan menggunakan prinsip komunikasi terapeutik:<br>
        <ul>
          <li>Sapa klien dengan ramah baik verbal maupun non verbal</li>
          <li>Perkenakan nama, nama panggilan dan tujuan perawat berkenalan</li>
          <li>Tanyakan nama lengkap dan nama panggilan yang disukai klien</li>
          <li>Buat kontrak yang jelas</li>
          <li>Tunjukkan sikap jujur dan menepati janji setiap kali interaksi</li>
          <li>Tunjukkan sikap empati dan menerima apa adanya</li>
          <li>Beri perhatian kepada klien dan perhatikan kebutuhan dasar klien</li>
          <li>Tanyakan perasaan klien dan masalah yang dihadapi klien</li>
          <li>Dengarkan dengan penuh perhatian ekspresi perasaan klien</li>
        </ul>
      </td>
    </tr>

    <tr>
      <td class="box-top">{{$tanggal_2}}</td>
      <td class="box-top">{{$nodx_2}}</td>
      <td class="box-top">{{$dxk_2}}</td>
      <td class="box-top">
        TUK 2:<br>
        Klien dapat mengenal halusinasinya
      </td>
      <td class="box-top">
        2. Setelah {{$k2}} X interaksi klien menyebutkan:<br>
        <ul>
          <li>Isi</li>
          <li>Waktu</li>
          <li>Frekuensi</li>
          <li>Situasi dan kondisi yang menimbulkan halusinasi</li>
        </ul>
      </td>
      <td class="box-top">
        2.1. Adakan kontak sering dan singkat secara bertahap<br>
        2.2. Observasi tingkah laku klien terkait dengan halusinasinya (* dengar/ lihat/ penghidu/ raba/ kecap), jika menemukan klien yang sedang halusinasi:<br>
        <ul>
          <li>Tanyakan apakah klien mengalami sesuatu (halusinasi dengar/ lihat/ penghidu/ raba/ kecap)</li>
          <li>Jika klien menjawab ya, tanyakan apa yang sedang dialaminya</li>
          <li>Katakan bahwa <b>perawat percaya</b> klien mengalami hal tersebut, namun perawat sendiri tidak mengalaminya ( dengan nada bersahabat tanpa menuduh atau menghakimi)</li>
          <li>Katakan bahwa ada klien lain yang mengalami hal yang sama.</li>
          <li>Katakan bahwa ada klien laiin yang mengalami hal yang sama.</li>
        </ul>
        Jika klien tidak sedang berhalusinasi klarifikasi tentang adanya pengalaman halusinasi, diskusikan dengan klien:<br>
        <ul>
          <li>Isi, waktu dan frekuensi terjadinya halusinasi ( pagi, siang, sore, malam atau sering dan kadang-kadang )</li>
          <li>Situasi dan kondisi yang menimbulkan atau tidak menimbulkan halusinasi</li>
        </ul>
      </td>
    </tr>

    <tr>
      <td class="box-top">{{$tanggal_2b}}</td>
      <td class="box-top">{{$nodx_2b}}</td>
      <td class="box-top">{{$dxk_2b}}</td>
      <td class="box-top"></td>
      <td class="box-top">
        2. Setelah {{$k2b}} X interaksi klien menyatakan perasaan dan responnya saat mengalami halusinasi<br>
        <ul>
          <li>Marah</li>
          <li>Takut</li>
          <li>Sedih</li>
          <li>Senang</li>
          <li>Cemas</li>
          <li>Jengkel</li>
        </ul>
      </td>
      <td class="box-top">
        2.3. Diskusikan dengan klien apa yang dirasakan jika terjadi halusinasi dan beri kesempatan untuk mengungkapkakn perasaannya.<br>
        2.4. Diskusikan dengan klien apa yang dilakukan untuk mengatasi perasaan tersebut.<br>
        2.5. Diskusikan dampak yang akan dialaminya bila klien menikmati halusinasinya.
      </td>
    </tr>

    <tr>
      <td class="box-top">{{$tanggal_3}}</td>
      <td class="box-top">{{$nodx_3}}</td>
      <td class="box-top">{{$dxk_3}}</td>
      <td class="box-top">
        TUK 3:<br>
        Klien dapat mengontrol halusinasinya
      </td>
      <td class="box-top">
        3.1. Setelah {{$k3}} X interaksi klien menyebutkan tindakan yang biasanya dilakukan untuk mengendalikan halusinasinya<br>
        3.2. Setelah {{$k3b}} X interkasi klien menyebutkan cara baru mengontrol halusinasi<br>
        3.3. Setelah {{$k3c}} X interaksi klien dapat memilih dan memperagakan cara mengatasi halusinasi (dengar/lihat/penghidu/raba/kecap)
        3.4. Setelah {{$k3d}} X interkasi klien melaksanakan cara yang telah dipilih untuk mengendalikan halusinasinya<br>
        3.5. Setelah {{$k3e}} X pertemuan klien mengikuti terapi aktivitas kelompok
      </td>
      <td class="box-top">
        3.1. Identifikasi bersama klien cara atau tindakan yang dilakukan jika terjadi halusinasi (tidur, marah, menyibukkan diri dll)<br>
        3.2. Diskusikan cara yang digunakan klien,<br>
        <ul>
          <li>Jika cara yang digunakan adaptif beri pujian.</li>
          <li>Jika cara yang digunakan maladaptif diskusikan kerugian cara tersebut</li>
        </ul>
        3.3. Diskusikan cara baru untuk memutus/ mngontrol timbulnya halusinasi:<br>
        <ul>
          <li>Katakan pada diri sendiri bahwa ini tidak nyata ( "saya tidak mau dengar/ lihat/ penghidu/ raba/ kecap/ pada saat halusinasi terjadi)</li>
          <li>Menemui orang lain (perawat/teman/anggota keluarga) untuk menceritakan tentang halusinasinya.</li>
          <li>Membuat dan melaksanakan jadwal kegiatan sehari-hari yang telah disusun.</li>
          <li>Meminta keluarga/ teman/ perawat menyapa jika sedang berhalusinasi</li>
        </ul>
        3.4. Bantu klien memilih cara yang sudan dianjurkan dan latih untuk mencobanya.<br>
        3.5. Beri kesempattan untuk melakukan cara yang dipilih dan dilatih.<br>
        3.6. Pantau pelaksanaan yang telah dipilih dan dilatih, jika berhasil beri pujian<br>
        3.7. Anjurkan klien mngikuti terapi aktivitas kelompok, orientasi realita, situasi persepsi
      </td>    
    </tr>

    <tr>
      <td class="box-top">{{$tanggal_4}}</td>
      <td class="box-top">{{$nodx_4}}</td>
      <td class="box-top">{{$dxk_4}}</td>
      <td class="box-top">
        TUK 4:<br>
        Klien dapat dukukngan dari keluarga dalam mengontrol halusinasinya
      </td>
      <td class="box-top">
        4.1. Setelah {{$k4}} X pertemuan keluarga, keluarga menyatakan setuju untuk mengikuti pertemuan dengan perawat
        4.2. Setelah {{$k4b}} X Interkasi keluarga menyebutkan pengertian, tanda dan gejala, proses terjadinya halusinasi dan tindakan untuk mengendalikan halusinasi
      </td>
      <td class="box-top">
        4.1. Buat kontrak dengan keluarga untuk pertemuan (waktu, tempat dan topik)<br>
        4.2. Diskusikan dengan keluarga (pada saat pertemuan keluarga/ kunjungan rumah)<br>
        <ul>
          <li>Pengertian halusinasi</li>
          <li>Tanda dan gejala halusinasi</li>
          <li>Proses terjadinya halusinasi</li>
          <li>Cara yang dapat dilakukan klien dan keluarga untuk memutus halusinasi.</li>
          <li>Obat-obatn halusinasi</li>
          <li>Cara merawat anggota keluarga yang halusinasi di rumah ( beri kegiatam, jangan biarkan sendiri, makan bersama, berpergian bersama, memantau obat-obatan dan cara pemberiannya untuk mengatasi halusinasi ) </li>
          <li>Beri informasi waktu kontrol ke rumah sakit dan bagaimana cara mencari bantuan jika halusinasi tidak dapat diatasi di rumah</li>
        </ul>
      </td>
    </tr>

    <tr>
      <td class="box-top">{{$tanggal_5}}</td>
      <td class="box-top">{{$nodx_5}}</td>
      <td class="box-top">{{$dxk_5}}</td>
      <td class="box-top">
        TUK 5:<br>
        Klien dapat memanfaatkan obat dengan baik
      </td>
      <td class="box-top">
        5.1. Setelah {{$k5}} X interaksi klien menyebutkan:<br>
        <ul>
          <li>Manfaat minum obat</li>
          <li>Kerugian tidak minum obat</li>
          <li>Nama, warna, dosis, efek terapi dan efek samping obat</li>
        </ul>
        5.2. Stelah {{$k5b}} X interaksi klien mendemonstrasikan penggunaan obat dengan benar<br>
        5.3. Setelah {{$k5c}} X interaksi klien menyebutkan akibat berhenti minum obat tanpa konsultasi dokter
      </td>
      <td class="box-top">
        5.1. Diskusikan dengan klien tentang manfaat dan kerugian tidak minum obat, nama, warna, dosis, cara, efek terapi dan efek samping penggunaan obat<br>
        5.2. Pantau klien saat penggunaan obat<br>
        5.3. Beri pujian jika klien menggunakan obat dengan benar
        5.4. Diskusikan akibat berhenti minum obat tanpa konsultasi dengan dokter<br>
        5.5. Anjurkan klien untuk konsultasi kepada dokter/perawat jika terjadi hal-hal yang tidak diinginkan.
      </td>
    </tr> 
  </tbody>
</table>

<table>
  <tbody>
    <tr>
      <td class="contain" colspan="6">Keterangan</td>
    </tr>

    <tr>
      <td class="contain" style="padding:0px">
        <ul>
          <li>Halusinasi dengar</li>
        </ul>
      </td>
      <td class="contain" style="padding:0px">
        : bicara dan tertawa tanpa stimulus, memandang ke kanan/ ke kiri/ ke depan seolah-olah ada teman bicara
      </td>
    </tr>

    <tr>
      <td class="contain" style="padding:0px">
        <ul>
          <li>Halusinasi Lihat</li>
        </ul>
      </td>
      <td class="contain" style="padding:0px">
        : menyatakan melihat sesuatu, terlihat ketakutan
      </td>
    </tr>

    <tr>
      <td class="contain" style="padding:0px">
        <ul>
          <li>Halusinasi Penghidu</li>
        </ul>
      </td>
      <td class="contain" style="padding:0px">
        : menyatakan mencium sesuatu, terlihat mengendus
      </td>
    </tr>

    <tr>
      <td class="contain" style="padding:0px">
        <ul>
          <li>Halusinasi Raba</li>
        </ul>
      </td>
      <td class="contain" style="padding:0px">
        : menyatakan merasa sesuatu berjalan di kulitnya, menggosok - gosok tangan/kaki/wajah dll
      </td>
    </tr>

    <tr>
      <td class="contain" style="padding:0px">
        <ul>
          <li>Halusinasi Kecap</li>
        </ul>
      </td>
      <td class="contain" style="padding:0px">
        : menyatakan terasa sesuatu di lidahnya, sering mengulum lidah
      </td>
    </tr>
  </tbody>
</table>

</body>
<html>