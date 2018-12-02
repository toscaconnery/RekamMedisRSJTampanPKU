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


  <h2 align="center">ASESMEN AWAL KEPERAWATAN NAPZA</h2><br>
   
  <h4>I. DATA UMUM</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
     <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Tanggal Pengkajian
          </td>    
          <td class="konten_s_answer">  
            : {{$tanggal_pengkajian}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Sumber Informasi
          </td>    
          <td class="konten_s_answer">  
            : {{$sumber_informasi}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            tanggal Dirawat
          </td>    
          <td class="konten_s_answer">  
            : {{$tanggal_dirawat}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Ruangan
          </td>    
          <td class="konten_s_answer">  
            : {{$ruangan}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>II. ALASAN MASUK/KEDATANGAN</h4>
  <hr class="limit">
  <div style="font-size: 85%;">
    <p class="list"><b>A. Alasan Masuk :</b> - </p>
    <ul>
      <?php 
        if(isset($alasan_masuk[1])) echo 
        '<li>
          Keinginan sendiri
        </li>';
        if(isset($alasan_masuk[2])) echo 
        '<li>
          Paksaan Orang Tua
        </li>';
        if(isset($alasan_masuk[3])) echo 
        '<li>
          Rujukan Praktek Dokter
        </li>';
        if(isset($alasan_masuk[4])) echo 
        '<li>
          Rujukan Instansi Lain
        </li>';
        if(isset($alasan_masuk[5])) echo 
        '<li>
          Kiriman Kepolisian
        </li>';
        if(isset($alasan_masuk[6])) echo 
        '<li>
          Lain-lain, '.$alasan_masuk_lainnya.'
        </li>';
      ?>
    </ul> 

    <p class="list"><b>B. Keadaan Saat Masuk :</b> - </p>
    <ul>
      <?php 
        if(isset($keadaan_masuk[1])) echo 
        '<li>
          Gejala putus zat/withdrawal
        </li>';
        if(isset($keadaan_masuk[2])) echo 
        '<li>
          Overdosis
        </li>';
        if(isset($keadaan_masuk[3])) echo 
        '<li>
          Intoksikasi zat adiktif
        </li>';
        if(isset($keadaan_masuk[4])) echo 
        '<li>
          Lain-lain
        </li>';
      ?>
    </ul>

    <p class="list"><b>Pemakaian Terakhir :</b> - </p>
    <ul>
      <?php 
        if(isset($pemakaian_terakhir[4])) echo 
        '<li>
          Jenis Zat, '.$jenis_zat.'
        </li>';
        if(isset($pemakaian_terakhir[4])) echo 
        '<li>
          Cara Pemakaian, '.$cara_pemakaian.'
        </li>';
        if(isset($pemakaian_terakhir[4])) echo 
        '<li>
          Intoksikasi zat adiktif
        </li>';
        if(isset($pemakaian_terakhir[4])) echo 
        '<li>
          Lain-lain
        </li>';
      ?>
    </ul>
  </div>

  <h4>III. FAKTOR PREDISPOSISI</h4>
  <hr class="limit">
  <div style="font-size: 85%;"> 
    <p class="list"><b>A. Riwayat Masalah Penggunaan Zat :</b></p> 
    <br>
    <div class="rowsize">
      <div class="colsize" style="width:40%">
        1. Intoksidasi
      </div>
      <div class="colsize" style="width:50%">
        : {{$f1}}
      </div>
    </div>
    <br> 
    <div class="rowsize">
      <div class="colsize" style="width:40%">
        2. Keadaan/Gejala lepas  zat
      </div>
      <div class="colsize" style="width:40%">
        : {{$f2}}
      </div>
    </div>
    <br> 
    <div class="rowsize">
      <div class="colsize" style="width:40%">
        3. Kompilasi medic/jiwa
      </div>
      <div class="colsize" style="width:50%">
        : {{$f3}}, {{$keterangan_komplikasi}}
      </div>
    </div>
    <br> 
    <div class="rowsize">
      <div class="colsize" style="width:40%">
        4. Perilaku kriminal dalam rumah sendiri
      </div>
      <div class="colsize" style="width:50%">
        <ul>
          :<?php 
            if(isset($kriminal_dirumah[1]) echo 
            '<li>
              Mencuri
            </li>';
            if(isset($kriminal_dirumah[2]) echo 
            '<li>
              Mengambil barang dengan mengancam paksaan
            </li>';
            if(isset($kriminal_dirumah[3]) echo 
            '<li>
              Menjual barang sendiri
            </li>';
            if(isset($kriminal_dirumah[4]) echo 
            '<li>
              Tak ada masalah
            </li>';
          ?>
        </ul>
      </div>
    </div>
    <br> 
    <div class="rowsize">
      <div class="colsize" style="width:40%">
        5. Perilaku kriminal di luar rumah
      </div>
      <div class="colsize" style="width:50%">
        :<ul>
          <?php 
            if(isset($kriminal_diluar[1]) echo 
            '<li>
              Mencuri
            </li>';
            if(isset($kriminal_diluar[2]) echo 
            '<li>
              Mengambil barang dengan mengancam paksaan
            </li>';
            if(isset($kriminal_diluar[3]) echo 
            '<li>
              Menjual barang sendiri
            </li>';
            if(isset($kriminal_diluar[4]) echo 
            '<li>
              Tak ada masalah
            </li>';
          ?>
        </ul>
      </div>
    </div>
    <br> 
    <div class="rowsize">
      <div class="colsize" style="width:40%">
        6. Problema sekolah
      </div>
      <div class="colsize" style="width:50%">
        :<ul>
          <?php 
            if(isset($problema_sekolah[1]) echo 
            '<li>
              Tidak naik kelas
            </li>';
            if(isset($problema_sekolah[2]) echo 
            '<li>
              Berhenti sekolah
            </li>';
            if(isset($problema_sekolah[3]) echo 
            '<li>
              Berhenti sementara/cuti
            </li>';
            if(isset($problema_sekolahr[4]) echo 
            '<li>
              Sulit konsentrasi
            </li>';
            if(isset($problema_sekolah[5]) echo 
            '<li>
              Dikeluarkan
            </li>';
            if(isset($problema_sekolah[6]) echo 
            '<li>
              Tak ada masalah
            </li>';
          ?>
        </ul>
      </div>
    </div>
    <br> 
    <div class="rowsize">
      <div class="colsize" style="width:40%">
        7. Problema dalam keluarga
      </div>
      <div class="colsize" style="width:50%">
        :<ul>
          <?php 
            if(isset($problema_keluarga[1]) echo 
            '<li>
              Keluarga bercerai
            </li>';
            if(isset($problema_keluarga[2]) echo 
            '<li>
              Keluarga mudah curiga
            </li>';
            if(isset($problema_keluarga[3]) echo 
            '<li>
              Keluarga tak peduli
            </li>';
            if(isset($problema_keluarga[4]) echo 
            '<li>
              Tak ada masalah
            </li>';
          ?>
        </ul>
      </div>
    </div>
    <br> 
    <div class="rowsize">
      <div class="colsize" style="width:40%">
        8. Problema dalam pekerjaan
      </div>
      <div class="colsize" style="width:50%">
        :<ul>
          <?php 
            if(isset($problema_pekerjaan[1]) echo 
            '<li>
              Sulit konsentrasi
            </li>';
            if(isset($problema_pekerjaan[2]) echo 
            '<li>
              Tidak bekerja
            </li>';
            if(isset($problema_pekerjaan[3]) echo 
            '<li>
              Dikeluarkan/dipecat
            </li>';
            if(isset($problema_pekerjaan[4]) echo 
            '<li>
              Berhenti bekerja
            </li>';
            if(isset($problema_pekerjaan[5]) echo 
            '<li>
              Belum bekerja
            </li>';
            if(isset($problema_pekerjaan[6]) echo 
            '<li>
              Tidak ada masalah
            </li>';
          ?>
        </ul>
      </div>
    </div>
    <br> 
    <div class="rowsize">
      <div class="colsize" style="width:40%">
        9. Problema dalam masyarakat
      </div>
      <div class="colsize" style="width:50%">
        :<ul>
          <?php 
            if(isset($problema_masyarakat[1]) echo 
            '<li>
              Masyarakat curiga
            </li>';
            if(isset($problema_masyarakat[2]) echo 
            '<li>
              Tak ada masalah
            </li>';
            if(isset($problema_masyarakat[3]) echo 
            '<li>
              Pernah
            </li>';
            if(isset($problema_masyarakat[4]) echo 
            '<li>
              Dikucilkan lingkungan
            </li>';
            if(isset($problema_masyarakat[5]) echo 
            '<li>
              Tidak
            </li>';
            if(isset($problema_masyarakat[6]) echo 
            '<li>
              Lain-lain, '.$problema_masyarakat_lainnya.'
            </li>';
          ?>
        </ul>
      </div>
    </div>
    <br> 
    <div class="rowsize">
      <div class="colsize" style="width:40%">
        10. Dirawat di RS Jiwa, Diagnosis Medis
      </div>
      <div class="colsize" style="width:50%">
        : {{$dirawat_diagnosis_medis}}
      </div>
    </div>
    <br>
    <p class="list"><b>B. Etiologi Penggunaan Zat Adiktif Pertama Kali :</b></p>  
    <ul style="padding-left:25px;">
      <?php 
        if(isset($etiologi[1]) echo 
        '<li>
          Diajak Teman
        </li>';
        if(isset($etiologi[2]) echo 
        '<li>
          Dipaksa Teman
        </li>';
        if(isset($etiologi[3]) echo 
        '<li>
          Coba-coba/keinginan sendiri
        </li>';
        if(isset($etiologi[4]) echo 
        '<li>
          Tidak enak dengan lingkungan sekitar
        </li>';
        if(isset($etiologi[5]) echo 
        '<li>
          Lain-lain
        </li>';
      ?>
    </ul>

  </div>

  <h4>IV. FAKTOR PENYEBAB KAMBUH/RELAPS</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <ul style="padding-left:25px;">
      <?php 
        if(isset($faktor_kambuh[1]) echo 
        '<li>
          Tidak mampu menahan suggest
        </li>';
        if(isset($faktor_kambuh[2]) echo 
        '<li>
          Diajak teman
        </li>';
        if(isset($faktor_kambuh[3]) echo 
        '<li>
          Dipaksa teman adiktif
        </li>';
        if(isset($faktor_kambuh[4]) echo 
        '<li>
          Keinginan untuk mencoba lagi
        </li>';
        if(isset($faktor_kambuh[5]) echo 
        '<li>
          Dendam setelah masa pemulihan
        </li>';
        if(isset($faktor_kambuh[6]) echo 
        '<li>
          Konflik dengan orang tua, orang dekat
        </li>';
        if(isset($faktor_kambuh[7]) echo 
        '<li>
          Bergabung dengan kelompok pengguna zat
        </li>';
        if(isset($faktor_kambuh[8]) echo 
        '<li>
          Tidak memiliki aktifitas berarti
        </li>';
      ?>
    </ul>
    <br>
    <p><b>Masalah keperawatan:</b></p>
    <p>{{$masalah_keperawatan_1}}</p>
  </div>

  <h4>v RIWAYAT UPAYA PENANGGULANGAN</h4>
  <hr class="limit">
  <div style="font-size: 85%;">
    <p><b>1. Lembaga/Kota :<b></p>
    <p>Isi</p><br>

    <p><b>2. Lamanya :<b></p>
    <p>Isi</p><br>

    <p><b>3. Jenis Penanggulangan :<b></p>
    <ul style="padding-left:25px;">
      <?php 
        if(isset($jenis_penanggulangan[1]) echo 
        '<li>
          Konseling Dokter/Psikiater
        </li>';
        if(isset($jenis_penanggulangan[2]) echo 
        '<li>
          Detoksifikasi
        </li>';
        if(isset($jenis_penanggulangan[3]) echo 
        '<li>
          Lain-lain
        </li>';
        if(isset($jenis_penanggulangan[4]) echo 
        '<li>
          Rehabilitasi rohani
        </li>';
        if(isset($jenis_penanggulangan[5]) echo 
        '<li>
          Rehabilitasi medik
        </li>';
        if(isset($jenis_penanggulangan[6]) echo 
        '<li>
          Tidak pernah
        </li>';
      ?>
    </ul>

    <p><b>4. Alasan meninggalkan metode tersebut :<b></p>
    <ul style="padding-left:25px;">
      <?php 
        if(isset($alasan_meninggalkan[1]) echo 
        '<li>
          Tidak cocok dengan metodenya
        </li>';
        if(isset($alasan_meninggalkan[2]) echo 
        '<li>
          Anak kabur/tidak betah
        </li>';
        if(isset($alasan_meninggalkan[3]) echo 
        '<li>
          Tidak cocok dengan fasilitasnya
        </li>';
        if(isset($alasan_meninggalkan[4]) echo 
        '<li>
          Kehabisan biaya
        </li>';
        if(isset($alasan_meninggalkan[5]) echo 
        '<li>
          Programnya selesai
        </li>';
        if(isset($alasan_meninggalkan[6]) echo 
        '<li>
          Lain-lain
        </li>';
      ?>
    </ul>

    <p><b>Masalah keperawatan:</b></p>
    <p>{{$masalah_keperawatan_2}}</p>
  </div>
  
  <h4>VI. PEMERIKSAAN FISIK</h4>
  <p><b>Keluhan Fisik</b></p>
  <hr class="limit">
  <div style="font-size: 85%;">
    <ul style="padding-left:25px;">
      <?php 
        if(isset($keluhan_fisik[1]) echo 
        '<li>
          Sakit kepala
        </li>';
        if(isset($keluhan_fisik[2]) echo 
        '<li>
          Merasa panas dingin lemah
        </li>';
        if(isset($keluhan_fisik[3]) echo 
        '<li>
          Nyeri pada sendi otot tulang
        </li>';
        if(isset($keluhan_fisik[4]) echo 
        '<li>
          Tremor pada ekstremitas
        </li>';
        if(isset($keluhan_fisik[5]) echo 
        '<li>
          Bicara cadel
        </li>';
        if(isset($keluhan_fisik[6]) echo 
        '<li>
          Berkeringat banyak
        </li>';
        if(isset($keluhan_fisik[7]) echo 
        '<li>
          Mulut kering
        </li>';
        if(isset($keluhan_fisik[8]) echo 
        '<li>
          Kesadaran menurun
        </li>';
        if(isset($keluhan_fisik[9]) echo 
        '<li>
          Mengantuk/banyak tidur
        </li>';
        if(isset($keluhan_fisik[10]) echo 
        '<li>
          Nafsu makan menurun
        </li>';
        if(isset($keluhan_fisik[11]) echo 
        '<li>
          Nafsu makan meningkat
        </li>';
        if(isset($keluhan_fisik[12]) echo 
        '<li>
          Mual muntah
        </li>';
        if(isset($keluhan_fisik[13]) echo 
        '<li>
          Diare
        </li>';
        if(isset($keluhan_fisik[14]) echo 
        '<li>
          Kontipasi
        </li>';
        if(isset($keluhan_fisik[15]) echo 
        '<li>
          Mata berair/lakrimasi
        </li>';
        if(isset($keluhan_fisik[16]) echo 
        '<li>
          Pupil melebar
        </li>';
        if(isset($keluhan_fisik[17]) echo 
        '<li>
          Hidung berair
        </li>';
        if(isset($keluhan_fisik[18]) echo 
        '<li>
          Bulu roma berdiri
        </li>';
        if(isset($keluhan_fisik[19]) echo 
        '<li>
          Denyut jantung cepat
        </li>';
        if(isset($keluhan_fisik[20]) echo 
        '<li>
          Tekanan darah menurun
        </li>';
        if(isset($keluhan_fisik[21]) echo 
        '<li>
          Tekanan darah meningkat
        </li>';
        if(isset($keluhan_fisik[22]) echo 
        '<li>
          Hipotensi Ortostatik
        </li>';
        if(isset($keluhan_fisik[23]) echo 
        '<li>
          Kram perut
        </li>';
        if(isset($keluhan_fisik[24]) echo 
        '<li>
          Jalan sempoyongan
        </li>';
        if(isset($keluhan_fisik[25]) echo 
        '<li>
          Perilaku agresif
        </li>';
        if(isset($keluhan_fisik[26]) echo 
        '<li>
          Daya ingat terganggu
        </li>';
        if(isset($keluhan_fisik[27]) echo 
        '<li>
          Kebingungan
        </li>';
        if(isset($keluhan_fisik[28]) echo 
        '<li>
          Cepat tersinggung
        </li>';
        if(isset($keluhan_fisik[29]) echo 
        '<li>
          Insomnia
        </li>';
        if(isset($keluhan_fisik[30]) echo 
        '<li>
          Halusinasi
        </li>';
        if(isset($keluhan_fisik[31]) echo 
        '<li>
          Waham
        </li>';
        if(isset($keluhan_fisik[32]) echo 
        '<li>
          Paranoia
        </li>';
        if(isset($keluhan_fisik[33]) echo 
        '<li>
          Impulsif
        </li>';
        if(isset($keluhan_fisik[34]) echo 
        '<li>
          Emosi labil
        </li>';
        if(isset($keluhan_fisik[35]) echo 
        '<li>
          Banyak bicara
        </li>';
        if(isset($keluhan_fisik[36]) echo 
        '<li>
          Panik
        </li>';
        if(isset($keluhan_fisik[37]) echo 
        '<li>
          Marah
        </li>';
        if(isset($keluhan_fisik[38]) echo 
        '<li>
          Cemas
        </li>';
        if(isset($keluhan_fisik[39]) echo 
        '<li>
          Apatis
        </li>';
        if(isset($keluhan_fisik[40]) echo 
        '<li>
          Euforia
        </li>';
        if(isset($keluhan_fisik[41]) echo 
        '<li>
          Semangat kerja meningkat
        </li>';
        if(isset($keluhan_fisik[42]) echo 
        '<li>
          Merasa tenang
        </li>';
      ?>
    </ul>
    <p><b>Masalah keperawatan:</b></p>
    <p>{{$masalah_keperawatan_3}}</p>
  </div>

  <h4>VII. DATA PSIKOSOSIAL</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    
    <p><b>1. Adakah anggota keluarga yang juga menggunakan zat psikoaktif :<b></p>
    <p>{{$f4}}, <?php if($f4) echo $anggota_keluarga ?></p><br>

    <p><b>2. Riwayat perilaku seksual :<b></p>
    <p>{{$f5}}</p><br>

    <p><b>Perilaku seksual pra nikah klien :<b></p>
    <p>{{$f6}}, <?php if($f6) echo $anggota_keluarga ?></p><br>

    <p><b>3. Riwayat Pekerjaan klien :<b></p>
    <p>{{$f7}}</p><br>

    <p><b>Masalah keperawatan:</b></p>
    <p>{{$masalah_keperawatan_4}}</p><br>

    <p><b>4. Konsep Diri :</b></p>
    <p><b>A. Gambaran Diri:<b></p>
    <ul style="padding-left:25px;">
      <?php 
        if(isset($gambaran_diri[1]) echo 
        '<li>
          Puas dengan bentuk fisik yang ada
        </li>';
        if(isset($gambaran_diri[2]) echo 
        '<li>
          Tidak puas dengan bentuk fisik yang ada
        </li>';
        if(isset($gambaran_diri[3]) echo 
        '<li>
          Tidak menerima cacat fisik yang ada
        </li>';
        if(isset($gambaran_diri[4]) echo 
        '<li>
          Lain-lain, '.$gambaran_diri_lainnya.'
        </li>';
      ?>
    </ul>

    <p><b>B. Identitas :<b></p>
    <ul style="padding-left:25px;">
      <?php 
        if(isset($identitas[1]) echo 
        '<li>
          Puas dengan status/posisi sekarang
        </li>';
        if(isset($identitas[2]) echo 
        '<li>
          Tidak puas dengan status/posisi sekarang
        </li>';
        if(isset($identitas[3]) echo 
        '<li>
          Puas sebagai laki-laki/perempuan
        </li>';
        if(isset($identitas[4]) echo 
        '<li>
          Tidak puas sebagai laki-laki/perempuan
        </li>';
      ?>
    </ul>

    <p><b>C. Ideal diri :<b></p>
    <ul style="padding-left:25px;">
      <?php 
        if(isset($ideal_diri[1]) echo 
        '<li>
          Memiliki cita-cita yang akan dicapai
        </li>';
        if(isset($ideal_diri[2]) echo 
        '<li>
          Tidak memiliki cita-cita yang akan dicapai
        </li>';
        if(isset($ideal_diri[3]) echo 
        '<li>
          Adanya harapan untuk sembuh
        </li>';
        if(isset($ideal_diri[4]) echo 
        '<li>
          Tidak adanya harapan untuk sembuh
        </li>';
      ?>
    </ul>

    <p><b>D. Harga diri :<b></p>
    <ul style="padding-left:25px;">
      <?php 
        if(isset($harga_diri[1]) echo 
        '<li>
          Percaya diri
        </li>';
        if(isset($harga_diri[2]) echo 
        '<li>
          Tidak percaya diri
        </li>';
        if(isset($harga_diri[3]) echo 
        '<li>
          Tidak konsisten/mudah terpengaruh
        </li>';
      ?>
    </ul>

    <p><b>Masalah keperawatan:</b></p>
    <p>{{$masalah_keperawatan_5}}</p><br>

    <p><b>5. Spiritual:</b></p>
    <p><b>A. Nilai dan Keyakinan<b></p>
    <ul style="padding-left:25px;">
      <?php 
        if(isset($nilai_keyakinan[1]) echo 
        '<li>
          Menggunakan zat bertentangan dengan nilai agama dan budaya
        </li>';
        if(isset($nilai_keyakinan[2]) echo 
        '<li>
          Menggunakan zat tidak bertentangan dengan nilai agama dan budaya
        </li>';
        if(isset($nilai_keyakinan[3]) echo 
        '<li>
          Lain-lain, '.$nilai_keyakinan_lainnya.'
        </li>';
      ?>
    </ul>

    <p><b>B. Kegiatan Ibadah :<b></p>
    <ul style="padding-left:25px;">
      <?php 
        if(isset($kegiatan_ibadah[1]) echo 
        '<li>
          Melakukan Ibadah secara rutin/teratur
        </li>';
        if(isset($kegiatan_ibadah[2]) echo 
        '<li>
          Melakukan ibadah jarang-jarang
        </li>';
        if(isset($kegiatan_ibadah[3]) echo 
        '<li>
          Tidak pernah melakukan kegiatan ibadah
        </li>';
        if(isset($kegiatan_ibadah[4]) echo 
        '<li>
          Tidak memiliki pengetahuan cara melakukan kegiatan sesuai dengan agamanya
        </li>';
      ?>
    </ul>

    <p><b>Masalah keperawatan:</b></p>
    <p>{{$masalah_keperawatan_6}}</p>
  </div>

  <h4>VIII. MEKANISME KOPING</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <p class="list"><b>Adaptif</b></p>
        <ul style="padding-left:25px;">
          <?php 
            if(isset($adaptif[1]) echo 
            '<li>
              Bicara dengan orang dekat
            </li>';
            if(isset($adaptif[2]) echo 
            '<li>
              Berusaha menyelesaikan masalah
            </li>';
            if(isset($adaptif[3]) echo 
            '<li>
              Teknik relaksasi
            </li>';
            if(isset($adaptif[4]) echo 
            '<li>
              Aktivitas konstruktif
            </li>';
            if(isset($adaptif[5]) echo 
            '<li>
              Lainnya, '.$adaptif_lainnya.' 
            </li>';
          ?>
        </ul><br>  
      </div>
      <div class="column">
        <p class="list"><b>Maladaptif</b></p>
        <ul style="padding-left:25px;">
          <?php 
            if(isset($maladaptif[1]) echo 
            '<li>
              Minum  Alkohol
            </li>';
            if(isset($maladaptif[2]) echo 
            '<li>
              Menggunakan zat psikoaktif
            </li>';
            if(isset($maladaptif[3]) echo 
            '<li>
              Reaksi lambat/berlebihan
            </li>';
            if(isset($maladaptif[4]) echo 
            '<li>
              Bekerja berlebihan
            </li>';
            if(isset($maladaptif[5]) echo 
            '<li>
              Menghindari masalah
            </li>';
            if(isset($maladaptif_lainnya) echo 
            '<li>
              '.$maladaptif_lainnya.'
            </li>';
          ?>
        </ul><br>  
      </div>
    </div>

    <p><b>Masalah keperawatan:</b></p>
    <p>{{$masalah_keperawatan_7}}</p>
  </div>

  <h4>IX. PENGETAHUAN KURANG MENGENAI</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <ul style="padding-left:25px;">
      <?php 
        if(isset($pengetahuan_kurang[1]) echo 
        '<li>
          Penyebab pemakaian zat psikoaktif
        </li>';
        if(isset($pengetahuan_kurang[2]) echo 
        '<li>
          Alkohol pemakaian zat psikoaktif
        </li>';
        if(isset($pengetahuan_kurang[3]) echo 
        '<li>
          Faktor pencetus pemakaian kembali
        </li>';
        if(isset($pengetahuan_kurang[4]) echo 
        '<li>
          Cara mengatasi suggest/eraving
        </li>';
        if(isset($pengetahuan_kurang[5]) echo 
        '<li>
          Lain-lain
        </li>';
        if(isset($pengetahuan_kurang[6]) echo 
        '<li>
          Sistem pendukung kesembuhan
        </li>';
        if(isset($pengetahuan_kurang[7]) echo 
        '<li>
          Komplikasi akibat pemakaian zat psikoaktif
        </li>';
        if(isset($pengetahuan_kurang[8]) echo 
        '<li>
          Obat-obatan/terapi medis yang dijalani
        </li>';
        if(isset($pengetahuan_kurang[9]) echo 
        '<li>
          Koping adaptif/konstruktif
        </li>';
        if(isset($pengetahuan_kurang[10]) echo 
        '<li>
          Lainnya, '.$pengetahuan_kurang_lainnya.' 
        </li>';
      ?>
    </ul><br>  
    <p><b>Masalah keperawatan:</b></p>
    <p>{{$masalah_keperawatan_8}}</p>
  </div>

  <h4>X. ASPEK MEDIKASI</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
     <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            1. Diagnosis Medis
          </td>    
          <td class="konten_s_answer">  
            : {{$diagnosis_medis}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            2. Terapi Medis
          </td>    
          <td class="konten_s_answer">  
            : {{$terapi_medis}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>XI. DAFTAR MASALAH KEPERAWATAN</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <ol style="padding-left:25px;">
      <?php 
        if(isset($checkbox_masalah_keperawatan[1]) echo 
        '<li>
          Gangguan rasa nyaman, nyeri aktif
        </li>';
        if(isset($checkbox_masalah_keperawatan[2]) echo 
        '<li>
          Gangguan pola tidur
        </li>';
        if(isset($checkbox_masalah_keperawatan[3]) echo 
        '<li>
          Risiko cedera: jatuh
        </li>';
        if(isset($checkbox_masalah_keperawatan[4]) echo 
        '<li>
          Perubahan nutrisi: kurang dan kebutuhan hidup
        </li>';
        if(isset($checkbox_masalah_keperawatan[5]) echo 
        '<li>
          Gangguan cairan dan elektrolit: kurang dari kebutuhan tubuh
        </li>';
        if(isset($checkbox_masalah_keperawatan[6]) echo 
        '<li>
          Ketidakberdayaan
        </li>';
        if(isset($checkbox_masalah_keperawatan[7]) echo 
        '<li>
          Ideal diri tidak realistis
        </li>';
        if(isset($checkbox_masalah_keperawatan[8]) echo 
        '<li>
          Gangguan identitas personal
        </li>';
        if(isset($checkbox_masalah_keperawatan[9]) echo 
        '<li>
          Harga diri rendah situasional/kronik
        </li>';
        if(isset($checkbox_masalah_keperawatan[10]) echo 
        '<li>
          Risiko mencederai diri dan orang lain
        </li>';
        if(isset($checkbox_masalah_keperawatan[11]) echo 
        '<li>
          Gangguan persepsi sensori: halusinasi
        </li>';
        if(isset($checkbox_masalah_keperawatan[12]) echo 
        '<li>
          Koping keluarga tidak efektif
        </li>';
        if(isset($checkbox_masalah_keperawatan[13]) echo 
        '<li>
           Koping individu tidak efektif: ketidakmampuan menahan keinginan menggunakan zat kembali
        </li>';
        if(isset($checkbox_masalah_keperawatan[14]) echo 
        '<li>
          Kerusakan interaksi sosial
        </li>';
        if(isset($checkbox_masalah_keperawatan[15]) echo 
        '<li>
          Penatalaksanaan regimen terapeutik tidak efektif
        </li>';
        if(isset($checkbox_masalah_keperawatan[16]) echo 
        '<li>
          Harga diri rendah
        </li>';
        if(isset($checkbox_masalah_keperawatan[17]) echo 
        '<li>
          Distress spiritual
        </li>';
        if(isset($checkbox_masalah_keperawatan[18]) echo 
        '<li>
          Perubahan pemeliharaan kesehatan
        </li>';
        if(isset($checkbox_masalah_keperawatan[19]) echo 
        '<li>
          Risiko perilaku kekerasan
        </li>';
        if(isset($checkbox_masalah_keperawatan[20]) echo 
        '<li>
          Gangguan gambaran diri
        </li>';
        if(isset($checkbox_masalah_keperawatan[21]) echo 
        '<li>
          Perubahan penampilan peran
        </li>';
        if(isset($checkbox_masalah_keperawatan[22]) echo 
        '<li>
          Keputus asaan
        </li>';
        if(isset($checkbox_masalah_keperawatan[23]) echo 
        '<li>
          Lainnya, '.$masalah_keperawatan_lainnya.'
        </li>';
      ?>
    </ol><br>  
  </div>

  <h4>XII. DAFTAR MASALAH KEPERAWATAN</h4>
  <hr class="limit">
  <div style="font-size: 85%;"> 
    <ol> 
      @php
        $idx = 0;
      @endphp
      @foreach($text_masalah_keperawatan as $t)
      @php
        $idx++;
      @endphp
      <li>{{$t}}</li>
      @endforeach
    </ol>
  </div>

  <div style="font-size:85%">
    <div class="row">
      <div class="column">
        <p></p>
      </div>
      <div class="column">
        <p style="text-align: center;">Pekanbaru, 28/12/2018</p>
        <p style="text-align: center;">Tanda Tangan</p>
        <br>
        <br>
        <br>
        <br>
        <p style="text-align: center;">( ................)</p>
      </div>
    </div>
  </div>

</body>

<html>