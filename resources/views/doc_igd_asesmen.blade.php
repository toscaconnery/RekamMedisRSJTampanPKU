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


  <h2 align="center">ASESMEN AWAL PASIEN RAWAT DARURAT</h2><br>
  

  <h4>DATA UMUM</h4>
  <br>
  <div style="font-size: 85%;">  
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Tanggal Kedatangan
          </td>    
          <td class="konten_s_answer">  
            : {{$tanggal_kedatangan}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Jam Kedatangan 
          </td>    
          <td class="konten_s_answer">  
            : {{$jam_kedatangan}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Cara Datang
          </td>    
          <td class="konten_s_answer">  
            : {{$cara_datang}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Transportasi ke IGD
          </td>    
          <td class="konten_s_answer">  
            : {{$transportasi_ke_igd}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Rujukan dari
          </td>    
          <td class="konten_s_answer">  
            : {{$rujukan_dari}}, {{$nama_rumah_sakit}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Dikirim ke IGD
          </td>    
          <td class="konten_s_answer">  
            : {{$visum}} disertai VISUM ET REPERTUM PSIKIATRIKUM
          </td>                
        </tr>
        <tr>
      </tbody>
    </table>
    <p>Macam Kasus</p>
    <ul>
      <?php 
      if(isset($macam_kasus[1])) echo 
      '<li>
        Jiwa
      </li>';
      if(isset($macam_kasus[2])) echo 
      '<li>
        KLL
      </li>';
      if(isset($macam_kasus[3])) echo 
      '<li>
        KDRT
      </li>';
      if(isset($macam_kasus[4])) echo 
      '<li>
        Kecelakaan Kerja
      </li>';
      if(isset($macam_kasus[5])) echo 
      '<li>
        Stroke
      </li>';
      if(isset($macam_kasus[6])) echo 
      '<li>
        Trauma
      </li>';
      if(isset($macam_kasus[7])) echo 
      '<li>
        Non Trauma
      </li>';
      if(isset($macam_kasus[8])) echo 
      '<li>
        Kekerasaan Anak
      </li>';
    ?>
    </ul>
  </div>


  <div style="font-size:85%">
    <div class="row">
    <p><b>Keadaan Pra Hospital</b></p>
      <div class="column">
        <p>Tensi : {{$tensi}} mmHG</p>
        <p>Nadi : {{$nadi}} x/mnt</p>
        <p>Pernafasan : {{$pernafasan}}</p>
      </div>
      <div class="column">
        <p>Suhu : {{$suhu}} <sup>o</sup> C</p>
        <p>TB : {{$tb}} Cm</p>
        <p>BB : {{$bb}} Kg</p>
      </div>
    </div>

    <div class="row">
      <div class="column">
        <p><b>GCS</b></p>
        <ul>
          <li>E = {{$e}}</li>
          <li>V = {{$v}}</li>
          <li>M = {{$m}}</li>
        </ul>
      </div>
      <div class="column">
        <p><b>Tindakan Pra Hospital</b></p>
          <ul>
            <?php 
            if(isset($tindakan_pra_hospital[1])) echo 
            '<li>
              CPR/RJP
            </li>';
            if(isset($tindakan_pra_hospital[2])) echo 
            '<li>
              O<sup>2</sup>
            </li>';
            if(isset($tindakan_pra_hospital[3])) echo 
            '<li>
              Infus
            </li>';
            if(isset($tindakan_pra_hospital[4])) echo 
            '<li>
              NGT
            </li>';
            if(isset($tindakan_pra_hospital[5])) echo 
            '<li>
              ETT
            </li>';
            if(isset($tindakan_pra_hospital[6])) echo 
            '<li>
              Bebat Tekan
            </li>';
            if(isset($tindakan_pra_hospital[7])) echo 
            '<li>
              Bidai
            </li>';
            if(isset($tindakan_pra_hospital[8])) echo 
            '<li>
              Kateter Urin
            </li>';
            if(isset($tindakan_pra_hospital[9])) echo 
            '<li>
              Lain-lain, '.$tindakan_pra_hospital_lain.'
            </li>';
            if(isset($tindakan_pra_hospital[10])) echo 
            '<li>
              Obat-Obatan, '.$daftar_obat_obatan.'
            </li>';
          ?>
          </ul>
        </div>
      </div>

  <h4>ALASAN KUNJUNGAN</h4>
  <br>
  <div style="font-size: 85%;">  
    <p>{{$alasan_kunjungan}}</p>
  </div>

  <h4>SCREENING GIZI</h4>
  <div style="font-size:85%">
    <p><b>Berdasarkan Malnutrition Universal Screening Tool (MUST)</b></p>

    <p>1. Apakah Pasien mengalami penurunan BB yang tidak diinginkan dalam 6 bulan terakhir ?</p>
    <p>{{$must_bb}}</p>

    <p>2. Apakah asupan makan berkurang karena tidak nafsu makan ?</p>
    <p>{{$must_asupan}}</p>

    <p><b>Total Skor : 1</b></p>    

    <p>3. Pasien dengan diagnosis khusus ?</p>
    <p>{{$must_diagnosis}}</p>

    <p>* Imunitas menurun</p>

    <p><b>Berdasarkan Adaptasi Strong-Kid</b></p>

    <p>1. Apakah pasien tampak kurus ?</p>
    <p>{{$sk_1}}</p>

    <p>2. Apakah Terdapat penurunan BB selama satu bulan terakhir ? (berdasarkan penilaian objektif data BB bila ada atau penilaian seubjektif orangtua pasien atau untuk bayi < 1 tahun : BB tidak naik selama 3 bulan terakhir)</p>
    <p>{{$sk_2}}</p>

    <p>3. Apakah terdapat salah satu dari kondisi berikut ?</p>
    <ul>
      <li> Diare ≥ 5 kali/hari dan atau muntah ? 3 kali/hari dalam seminggu terakhir</li>
      <li> Asupan makanan berkurang selama 1 minggu terakhir</li>
    </ul>
    <p>{{$sk_3}}</p>

    <p>4. Apa terdapat penyakit atau keadaan yang mengakibatkan pasien beresiko mengalami malnutrisi ?</p>
    <p>{{$sk_4}}</p>

    <p><b>Total Skor : 5</b></p>    

  

    <p><b>Daftar Penyakit/keadaan yang bersiko mengakibatkan malnutrisi</b></p>
    <ul>
      <?php 
      if(isset($penyakit_malnutrisi[1])) echo 
      '<li>
        Diare Kronik (lebih dari 2 minggu)
      </li>';
      if(isset($penyakit_malnutrisi[2])) echo 
      '<li>
        (Tersangka) Penyakit jantung bawaan
      </li>';
      if(isset($penyakit_malnutrisi[3])) echo 
      '<li>
        (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
      </li>';
      if(isset($penyakit_malnutrisi[4])) echo 
      '<li>
        (Tersangka) Kanker
      </li>';
      if(isset($penyakit_malnutrisi[5])) echo 
      '<li>
       Penyakit hati kronik
      </li>';
      if(isset($penyakit_malnutrisi[6])) echo 
      '<li>
        Penyakit ginjal kronik
      </li>';
      if(isset($penyakit_malnutrisi[7])) echo 
      '<li>
        TB Paru
      </li>';
      if(isset($penyakit_malnutrisi[8])) echo 
      '<li>
        Luka bakar luas
      </li>';
      if(isset($penyakit_malnutrisi[9])) echo 
      '<li>
        Kelainan anatomi daerah mulut yang menyebabkan kesulitan makan (misal:bibir sumbing)
      </li>';
      if(isset($penyakit_malnutrisi[10])) echo 
      '<li>
        Trauma
      </li>';
      if(isset($penyakit_malnutrisi[11])) echo 
      '<li>
        Kelainan metabolik bawaan (Inborn Error Metabolism)
      </li>';
      if(isset($penyakit_malnutrisi[12])) echo 
      '<li>
        (Tersangka) Infeksi Human Immunodeficiency Virus (HIV)
      </li>';
      if(isset($penyakit_malnutrisi[13])) echo 
      '<li>
        Retardasi mental
      </li>';
      if(isset($penyakit_malnutrisi[14])) echo 
      '<li>
        Rencana / paska operasi mayor (misal: laparatomi, tokaratomi)
      </li>';
      if(isset($penyakit_malnutrisi[15])) echo 
      '<li>
        Terpasang stoma
      </li>';
      if(isset($penyakit_malnutrisi[16])) echo 
      '<li>
        Lain-lain, '.$penyakit_malnutrisi_lain.'
      </li>';
    ?>
    </ul>

    <p><b>Interpresi Skor : 5 Resiko Berat</b></p>   

    <p>Diberitahukan ke dokter?</p>   
    <p><?php if() echo 'Ya, '.{{$waktu_pemberitahuan}}.''; else echo 'Tidak' ?></p> 

  </div>
  <pagebreak>
  <h4>PENILAIAN TINGKAT NYERI</h4>
  <br>
  <table style="font-size:85%">
    <tbody>
      <tr>
        <td class="box">
          <center><img src="img/nyeri.jpg" alt="Smiley face" height="170" width="300"><br> </center>
        </td>
        
        <td class="box" style="padding:2%">
          <center>Status Lokalis</center><br>
          <center><img src="img/body.jpg" alt="Smiley face" height="200" width="200"></center>
        </td>
      </tr>
      <tr>
        
      </tr>
      <tr>
        <td class="box">
          Keluhan Nyeri: {{$keluhan_nyeri}}<br><br>
          Skala Nyeri : {{$skala_nyeri}}<br><br>
          Lokasi Nyeri: {{$lokasi_nyeri}}<br><br>
          Penyebab Nyeri: {{$penyebab_nyeri}}
        </td>

        <td class="box">
          Rasa Nyeri: - <br><br>
          Nyeri berpindah dari satu tempat ke tempat lainnya: {{$nyeri_berpindah}} <br><br>
          Seberapa seing mengalami nyeri: {{$frekuensi_nyeri}}<br><br>
          Berapa Lama: {{$lama_nyeri}}
        </td>
      </tr>
    </tbody>
  </table>

  <h4>PENILAIAN RISIKO JATUH</h4>
  <div style="font-size: 85%;">  
    <?php if($jenis_resiko_jatuh == 'humpty_dumpty')
    echo 
      '<p><b>HUMPTY DUMPTY (Anak-anak) </b></p>
        <table>
        <tbody>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Usia <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$humpty_1.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Jenis Kelamin <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : [jenis kelamin]
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Diagnosis <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$humpty_2.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Gangguan Kognitif <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$humpty_3.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Faktor Lingkungan <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$humpty_4.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Respon terhadap Operasi/<br>Obat Penenang/Efek Anastesi <b></b>
            </td>    
            <td class="konten_s_answer">  
              : '.$humpty_5.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Penggunaan Obat <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$humpty_6.'
            </td>                
          </tr>
        </tbody>
      </table>';
    ?>
    <?php if($jenis_resiko_jatuh == 'morse')
    echo 
      '<p><b>MORSE (Dewasa) </b></p>
        <table>
        <tbody>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Riwayat Jatuh<b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$morse_1.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Diagnosis Sekunder <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$morse_2.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Alat Bantu <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$morse_3.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Terpasang Infus <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$morse_4.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Gaya Berjalan <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$morse_5.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Status Mental <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$morse_6.'
            </td>                
          </tr>
        </tbody>
      </table>';
    ?>
    <?php if($jenis_resiko_jatuh == 'edmunson')
    echo 
      '<p><b>EDMUNSON (Jiwa) </b></p>
        <table>
        <tbody>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Usia <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : [Usia]
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Status Mental <b></b>
            </td>    
            <td class="konten_s_answer">  
              : '.$edmunson_1.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Eliminasi <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$edmunson_3.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Pengobatan <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$edmunson_4.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Diagnosa <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$edmunson_5.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Ambulasi/Keseimbangan <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$edmunson_6.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Nutrisi <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$edmunson_7.'
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question">
              Gangguan pola tidur <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : [Gangguan Pola Tidur]
            </td>                
          </tr>
          <tr>
            <td class="konten_s_question" style="line-height:15px">
              Riwayat Jatuh <b></b>
            </td>    
            <td class="konten_s_answer" style="line-height:15px">  
              : '.$edmunson_8.'
            </td>                
          </tr>
        </tbody>
      </table>';
    ?>
  <p>Total Skor : [total skor]</p>

  <?php if(1) echo '<p><b>Tidak Beresiko : Skor < 90</b></p>
    <ol>
      <li>Orientasi pasien pada lingkungan kamar/bangsal</li>
      <li>Pastikan rem tempat tidur terkunci</li>
      <li>Pastikan bel terjangkau</li>
      <li>Singkirkan barang berbahaya terutama pada malam hari (kursi tambahan dan lain-lain)</li>
      <li>Minta persetujuan pasien agar lampu malam tetap menyala karena lingkungan masih asing</li>
      <li>Pastikan alat bantu jalan dalam jangkauan (bila menggunakan)</li>
      <li>Pastikan alas kaki tidak licin</li>
      <li>Pastikan kebutuhan pribadi dalam jangakauan</li>
      <li>Tempatkan meja pasien dengan baik agar tidak menghalangi</li>
      <li>Tempatkan pasien sesuai dengan tinggi badannya</li>
    </ol>
  </div>'; else echo '
  <p><b> Beresiko : Skor > 90</b></p>
    <ol>
      <li>Lakukan tindakan sesuai skor (>90)</li>
      <li>Pasang penanda risiko jatuh pada pintu kamar bagian atas/brankard</li>
      <li>Awasi atau bantu sebagian ADL pasien</li>
      <li>Cepat menanggapi keluhan pasien</li>
      <li>Review kembali obat-obatan yang beresiko</li>
      <li>Beritahu pasien agar mobilisasi secara bertahap : duduk perlahan-lahan sebelum berdiri</li>
      <li>Libatkan pasien secara aktif</li>
    </ol>
  </div>' ?>


    <div class="row">
      <div class="column">
        <p>Tekanan Intrakranial : {{$tekanan_intrakanal}}</p>
        <ul>
        <?php if($tekanan_intrakanal == false) {

          if(isset($list_tekanan_intrakanal[1])) echo 
          '<li>
            Sakit Kepala
          </li>';
          if(isset($list_tekanan_intrakanal[2])) echo 
          '<li>
            Muntah
          </li>';
          if(isset($list_tekanan_intrakanal[3])) echo 
          '<li>
            Pusing
          </li>';
          }   ?></ul>

        <p>Pupil :</p>
        <ul>
          <?php 
            if(isset($pupil[1])) echo 
            '<li>
              Normal
            </li>';
            if(isset($pupil[2])) echo 
            '<li>
              Miosis
            </li>';
            if(isset($pupil[3])) echo 
            '<li>
              Midriasis
            </li>';
            if(isset($pupil[4])) echo 
            '<li>
              Isokor
            </li>';
            if(isset($pupil[5])) echo 
            '<li>
              Anisokor
            </li>';
          ?>
        </ul> 

        <p>Neurosensorik :</p>
        <ul>
          <?php 
            if(isset($neurosensorik[1])) echo 
            '<li>
              Tidak ada keluhan
            </li>';
            if(isset($neurosensorik[2])) echo 
            '<li>
              Spasme otot
            </li>';
            if(isset($neurosensorik[3])) echo 
            '<li>
              Perubahan Sensorik
            </li>';
            if(isset($neurosensorik[4])) echo 
            '<li>
              Perubahan Motorik
            </li>';
          ?>
        </ul>    

        <p>Muskuloskeletal :</p>
        <ul>
          <?php 
            if(isset($muskuloskeletal[1])) echo 
            '<li>
              Tidak ada gangguan
            </li>';
            if(isset($muskuloskeletal[2])) echo 
            '<li>
              Kerusakan jaringan/luka
            </li>';
            if(isset($muskuloskeletal[3])) echo 
            '<li>
              Perubahan bentuk ekstremitas
            </li>';
            if(isset($muskuloskeletal[4])) echo 
            '<li>
              Penurunana tingkat kesadaran
            </li>';
            if(isset($muskuloskeletal[5])) echo 
            '<li>
              Fraktur
            </li>';
            if(isset($muskuloskeletal[6])) echo 
            '<li>
              Dislokasi
            </li>';
            if(isset($muskuloskeletal[7])) echo 
            '<li>
              Luksasio
            </li>';
          ?>
        </ul>    
      </div>
      <div class="column">
        <p>Integumen :</p>
        <ul>
          <?php 
            if(isset($integumen[1])) echo 
            '<li>
              Tidak ada gangguan
            </li>';
            if(isset($integumen[2])) echo 
            '<li>
              Luka bakar
            </li>';
            if(isset($integumen[3])) echo 
            '<li>
              Lecet
            </li>';
            if(isset($integumen[4])) echo 
            '<li>
              Luka decubitus
            </li>';
            if(isset($integumen[5])) echo 
            '<li>
              Luka robek
            </li>';
            if(isset($integumen[6])) echo 
            '<li>
              Luka Gangren
            </li>';
          ?>
        </ul>     

        <p>Turgor kulit :</p>
        <ul>
          <?php 
            if(isset($turgor[1])) echo 
            '<li>
              Baik
            </li>';
            if(isset($turgor[2])) echo 
            '<li>
              Menurun
            </li>';
          ?>
        </ul>   

        <p>Edema : {{$edema}}</p>
        <ul>
          <?php if($edema == 'Ada')
          {
            if(isset($list_edema[1])) echo 
            '<li>
              Ekstremitas
            </li>';
            if(isset($list_edema[2])) echo 
            '<li>
              Abdomen
            </li>';
            if(isset($list_edema[3])) echo 
            '<li>
              Seluruh tubuh
            </li>';
            if(isset($list_edema[4])) echo 
            '<li>
              Palpebra
            </li>';
          }
          ?>
        </ul>    

        <p>Mukosa Mulut : Lembab</p>
      </div>
    </div>

    <p>Pendarahan :{{$pendarahan}} <?php if($pendarahan == 'Ada') { echo 'jumlah '.$jumlah_pendarahan.' cc, warna '.$warna_pendarahan.'' ?> </p>

    <p>Intoksidasi : </p>
    <ul>
      <?php 
        if(isset($intoksisasi[1])) echo 
        '<li>
          Makanan
        </li>';
        if(isset($intoksisasi[2])) echo 
        '<li>
          Zak kimia
        </li>';
        if(isset($intoksisasi[3])) echo 
        '<li>
          Minuman
        </li>';
        if(isset($intoksisasi[4])) echo 
        '<li>
          Gas
        </li>';
        if(isset($intoksisasi[5])) echo 
        '<li>
          Gigitan binatang
        </li>';
        if(isset($intoksisasi[6])) echo 
        '<li>
          Zat kimia
        </li>';
        if(isset($intoksisasi[7])) echo 
        '<li>
          Gas
        </li>';
        if(isset($intoksisasi[8])) echo 
        '<li>
          Obat
        </li>';
        if(isset($intoksisasi[9])) echo 
        '<li>
          PTidak ada
        </li>';
      ?>
    </ul>     

    <p>Eliminasi : </p>
    <ul>
      <?php 
        if(isset($eliminasi[1])) echo 
        '<li>
          BAB
        </li>';
        if(isset($eliminasi[2])) echo 
        '<li>
          BAK
        </li>';
        if(isset($eliminasi[3])) echo 
        '<li>
          Frekuensi
        </li>';
        if(isset($eliminasi[4])) echo 
        '<li>
          Frekuensi
        </li>';
        if(isset($eliminasi[5])) echo 
        '<li>
          Konsistensi
        </li>';
        if(isset($eliminasi[6])) echo 
        '<li>
          Warna
        </li>';
        if(isset($eliminasi[7])) echo 
        '<li>
          Warna
        </li>';
        if(isset($eliminasi[8])) echo 
        '<li>
          Lain-lain
        </li>';
      ?>
    </ul>     

  </div>

  <h4>DIAGNOSA KEPERAWATAN</h4>
  <div style="font-size: 85%;">  
    <p>Nyeri Kronis</p>
    <div class="row">
      <div class="column">
        <p><b>Diagnosa Keperawatan Umum :</b></p>
        <ul>
          <?php 
            if(isset($diagnosa_umum[1])) echo 
            '<li>
              Aktual/ Resiko bersihan jalan nafas tidak efektif
            </li>';
            if(isset($diagnosa_umum[2])) echo 
            '<li>
             Aktual/ Resiko aspirasi
            </li>';
            if(isset($diagnosa_umum[3])) echo 
            '<li>
              Aktual/ Resiko pola nafas tidak efektif
            </li>';
            if(isset($diagnosa_umum[4])) echo 
            '<li>
              Aktual/ Resiko gangguan pertukaran gas
            </li>';
            if(isset($diagnosa_umum[5])) echo 
            '<li>
              Aktual/ penurunan curah jantung
            </li>';
            if(isset($diagnosa_umum[6])) echo 
            '<li>
              Aktual/ Resiko gangguan perfusi jaringan celebral/perifer
            </li>';
            if(isset($diagnosa_umum[7])) echo 
            '<li>
              Aktual/ Resiko gangguan keseimbangan cairan
            </li>';
            if(isset($diagnosa_umum[8])) echo 
            '<li>
              Aktual/ Resiko gangguan keseimbangan kontinuitas jaringan
            </li>';
            if(isset($diagnosa_umum[9])) echo 
            '<li>
              Aktual/ Resiko infeksi
            </li>';
            if(isset($diagnosa_umum[10])) echo 
            '<li>
              Resiko cedera / jatuh
            </li>';
            if(isset($diagnosa_umum[11])) echo 
            '<li>
              Hypertermi
            </li>';
            if(isset($diagnosa_umum[12])) echo 
            '<li>
              Nyeri
            </li>';
            if(isset($diagnosa_umum[13])) echo 
            '<li>
              Gangguan kebutuhan nutrisi
            </li>';
            if(isset($diagnosa_umum[14])) echo 
            '<li>
              Lainnya, '.$diagnosa_umum_lainnya.'
            </li>';
          ?>
        </ul>     
      </div>
      <div class="column">
        <p><b>Diagnosa Keperawatan Jiwa :</b></p>
        <ul>
          <?php 
            if(isset($neurosensorik[1])) echo 
            '<li>
              Gangguan persepsi sensori : halusinasi
            </li>';
            if(isset($neurosensorik[2])) echo 
            '<li>
              Perilaku kekerasan
            </li>';
            if(isset($neurosensorik[3])) echo 
            '<li>
              Isolasi sosial
            </li>';
            if(isset($neurosensorik[4])) echo 
            '<li>
              Gangguan konsep diri
            </li>';
            if(isset($neurosensorik[5])) echo 
            '<li>
              Resiko bunuh diri
            </li>';
            if(isset($neurosensorik[6])) echo 
            '<li>
              Intoleransi aktifitas
            </li>';
            if(isset($neurosensorik[7])) echo 
            '<li>
              Waham
            </li>';
            if(isset($neurosensorik[8])) echo 
            '<li>
              Defisit perawatan diri
            </li>';
            if(isset($neurosensorik[9])) echo 
            '<li>
              Kerusakan komunitas verbal
            </li>';
            if(isset($neurosensorik[10])) echo 
            '<li>
              Koping individu tidak efektif
            </li>';
            if(isset($neurosensorik[11])) echo 
            '<li>
              Aktual/Resiko Cemas/Takut
            </li>';
            if(isset($neurosensorik[12])) echo 
            '<li>
              Lainnya, '.$diagnosa_jiwa_lainnya.'
            </li>';
          ?>
        </ul>     
      </div>
    </div>
    <p><b>Kolaborasi</b></p>
    <p>Oksigenasi</p>
    <p>Nebulizer</p>
    <p>Obat Parental :</p>
    <ul>
      <li>{{$obat_parental}}</li>
    </ul>
    <p>NGT</p>
    <p>EKG : {{$ekg}} </p>
  </div>

  <h4>EVALUASI TINDAKAN KEPERAWATAN</h4>
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <p><b>Implementasi</b></p>
        <p>{{$implementasi}}</p>
      </div>
      <div class="column">
        <p><b>Evaluasi</b></p>
        <p>{{$evaluasi}}/p>
      </div>
    </div>

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Tanggal
          </td>    
          <td class="konten_s_answer">  
            : [tanggal]
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Jam
          </td>    
          <td class="konten_s_answer">  
            : [jam]
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Nama Perawat
          </td>    
          <td class="konten_s_answer">  
            : [nama perawat]
          </td>                
        </tr>
      </tbody>
    </table>

    <br>
    <br>

    <div class="row">
      <div class="column">
        <p></p>
      </div>
      <div class="column">
        <p style="text-align: center;">Tanda Tangan</p>
      </div>
    </div>

  </div>
  <pagebreak>
  <h4>DATA MEDIS</h4><br>
  <div style="font-size: 85%;">  

  <p>Wawancara dengan : {{$pewawancara}}</p>

  <p><b>a. Keluhan Utama :</b></p>
  <p>Sakit pada ...., merasakan ...........  ................... ................. ......... ......... ..... .. ....... ....... ....... ..</p>

  <p><b>b. Riwayat Penyakit Sekarang :</b></p>
  <p> {{$riwayat_penyakit_sekarang}} </p>

  <p><b>c. Riwayat Penyakit Dahulu (gangguan kejiwaan) : </b>{{$riwayat_penyakit_dahulu}}</p>
  
  <p><b>d. Riwayat NAPZA : </b>{{$riwayat_napza}}</p>
  <p>&emsp;&nbsp;<b>Lama Pemakaian : </b>{{$lama_pemakaian}}</p>
  <p>&emsp;&nbsp;<b>Jenis Zat :</b></p>
  <p>&emsp;&nbsp; {{$jenis_zat}} </p>
  <p>&emsp;&nbsp;<b>Cara Pemakaian :</b></p>
  <p>&emsp;&nbsp; {{$cara_pemakaian}} </p>
  <p>&emsp;&nbsp;<b>Latar Belakang Pemakaian :</b></p>
  <p>&emsp;&nbsp; {{$latar_belakang_pemakaian}} </p>

  <p><b>e. Kepribadian Sebelum Sakit :</b></p>
  <p> {{$kepribadian_sebelum_sakit}} </p>
  
  <p><b>f. Riwayat Pendidikan :</b></p>
  <p> {{$riwayat_pendidikan}} </p>
  
  <p><b>g. Riwayat Pekerjaan :</b></p>
  <p> {{$riwayat_pekerjaan}} </p>
  
  <p><b>h. Riwayat Pendidikan :</b></p>
  <p> {{$riwayat_perkawinan}} </p>
  
 
  <p><b>i. Riwayat Penyakit Lainnya :</b></p>
  <ul>
    <?php 
      if(isset($riwayat_penyakit_lain[1])) echo 
      '<li>
        Hipertensi
      </li>';
      if(isset($riwayat_penyakit_lain[2])) echo 
      '<li>
        Liver
      </li>';
      if(isset($riwayat_penyakit_lain[3])) echo 
      '<li>
        Diabetes
      </li>';
      if(isset($riwayat_penyakit_lain[4])) echo 
      '<li>
        Cancer
      </li>';
      if(isset($riwayat_penyakit_lain[5])) echo 
      '<li>
        Jantung
      </li>';
      if(isset($riwayat_penyakit_lain[6])) echo 
      '<li>
        TBC
      </li>';
      if(isset($riwayat_penyakit_lain[7])) echo 
      '<li>
        Stroke
      </li>';
      if(isset($riwayat_penyakit_lain[8])) echo 
      '<li>
        Glaukoma
      </li>';
      if(isset($riwayat_penyakit_lain[9])) echo 
      '<li>
        Dialysis
      </li>';
      if(isset($riwayat_penyakit_lain[10])) echo 
      '<li>
        STD
      </li>';
      if(isset($riwayat_penyakit_lain[11])) echo 
      '<li>
        Asthma
      </li>';
      if(isset($riwayat_penyakit_lain[12])) echo 
      '<li>
        Perdarahan
      </li>';
      if(isset($riwayat_penyakit_lain[13])) echo 
      '<li>
        Kejang
      </li>';
      if(isset($riwayat_penyakit_lain[14])) echo 
      '<li>
        Lainnya, '.$text_riwayat_penyakit_lain.'
      </li>';
    ?>
  </ul> 

  <p><b>j. Riwayat Operasi : </b>$riwayat_operasi</p>
  <p>&emsp;&nbsp;<b>Jenis : </b> {{$jenis_operasi}} </p>
  <p>&emsp;&nbsp;<b>Kapan : </b> {{$waktu_operasi}} </p>
 
  <p><b>k. Riwayat Transfusi : </b>{{$riwayat_tranfusi}}</p>

  <p>&emsp;&nbsp;<b>Reaksi Transfusi : </b>{{$reaksi_tranfusi}}</p>

  <p>&emsp;&nbsp;<b>Reaksi yang timbul :</b></p>
  <p>&emsp;&nbsp; {{$reaksi_tranfusi_timbul}} </p>

  <p><b>l. Riwayat Penyakit Dalam Keluarga :</b></p>
  <p> {{$riwayat_penyakit_keluarga}} </p>

  <p><b>m. Riwayat Pengobatan :</b></p>
  <p> {{$riwayat_pengobatan}} </p>

  <p><b>n. Riwayat Alergi :</b></p>
  <p> {{$riwayat_alergi}} </p>

  </div>

  <h4>OBAT YANG DIMINUM SAAT INI</h4>
  <br>
  <div style="font-size: 85%;">  
            <div class="panel-body">
            <table class="tabel">
                <thead>
                    <tr>   
                        <th class="col1" data-field="name">No</th>
                        <th class="col2" data-field="name">NAMA OBAT</th>
                        <th class="col3" data-field="name">DIBAWA</th>
                        <th class="col4" data-field="name">JUMLAH</th>
                        <th class="col5" data-field="name">TIDAK DIBAWA</th>
                        <th class="col6" data-field="name">KETERANGAN</th>
                    </tr>    
                </thead>

                <tbody>
                  @foreach($obat as $o)
                    <tr id="form_obat_{{$o->id}}">
                      <td class="kolom">
                        {{$o->nama_obat}}
                      </td>
                      <td class="kolom">
                        {{$o->dibawa}}
                      </td> 
                      <td class="kolom">
                        {{$o->jumlah}}
                      </td> 
                      <td class="kolom">
                        {{$o->tidak_dibawa}}
                      </td> 
                      <td class="kolom">
                        {{$o->keterangan}}
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
  </div>

  <h4>PEMERIKSAAN FISIK</h4>
  <div style="font-size: 85%;">  
    <br>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            1. Kepala
          </td>    
          <td class="konten_s_answer">  
            : {{$kepala}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            2. Leher
          </td>    
          <td class="konten_s_answer">  
            : {{$leher}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            3. Dada
          </td>    
          <td class="konten_s_answer">  
            : {{$dada}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; a. Jantung
          </td>    
          <td class="konten_s_answer">  
            : {{$jantung}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; b. Paru-paru
          </td>    
          <td class="konten_s_answer">  
            : {{$paru}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            4. Perut
          </td>    
          <td class="konten_s_answer">  
            : {{$perut}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            5. {{$anggota_gerak}}
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>STATUS LOKALIS</h4><br>
  <table style="font-size:85%;">
    <tr>
      <td class="box" style="padding:2%"><center><img src="img/body.jpg" alt="Smiley face" height="200" width="200"></center></td>
      <td class="box" style="margin-left:5%;vertical-align:top;padding:5%;" width="75%">Sakit pada {{$status_lokalis}} dan nyeri pada ...</td>
    </tr>
  </table>

  <h4>STATUS PSIKIATRIS</h4>
  <div style="font-size: 85%;">
  <br>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            <b>1. Keadaan Umum</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Penampilan
          </td>    
          <td class="konten_s_answer">  
            : {{$penampilan}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;b. Kesadaran
          </td>    
          <td class="konten_s_answer">  
            : {{$kesadaran}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; c. Orientasi
          </td>    
          <td class="konten_s_answer">  
            : {{$orientasi}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp; d. Sikap & Tingkah Laku
          </td>    
          <td class="konten_s_answer">  
            : {{$sikap_tingkah_laku}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>2. Gangguan Berpikir</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Proses Pikir
          </td>    
          <td class="konten_s_answer">  
            : {{$proses_pikir}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Bentuk Pikir
          </td>    
          <td class="konten_s_answer">  
            : {{$bentuk_pikir}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;c. Isi Pikir
          </td>    
          <td class="konten_s_answer">  
            : {{$isi_pikir}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>3. Alam Perasaan</b>
          </td>    
          <td class="konten_s_answer">  
            
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Mood
          </td>    
          <td class="konten_s_answer">  
            : {{$mood}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Afek
          </td>    
          <td class="konten_s_answer">  
            : {{$afek}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>4. Persepsi</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Halusinasi
          </td>    
          <td class="konten_s_answer">  
            : {{$halusinasi}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Ilusi
          </td>    
          <td class="konten_s_answer">  
            : {{$ilusi}}
          </td>                
        </tr>

         <tr>
          <td class="konten_s_question">
            <b>5. Fungsi Intelektual</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;&nbsp;a. Daya Konsentrasi
          </td>    
          <td class="konten_s_answer">  
            : {{$daya_konsentrasi}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;b. Daya Ingat
          </td>    
          <td class="konten_s_answer">  
            : {{$daya_ingat}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
           &emsp;&nbsp;c. Pikiran Abstrak
          </td>    
          <td class="konten_s_answer">  
            : {{$pikiran_abstrak}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>6. Pengendalian Impuls</b> 
          </td>    
          <td class="konten_s_answer">  
            : {{$pengendalian_impuls}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>7. Daya Nilai</b>
          </td>    
          <td class="konten_s_answer">  
            : {{$daya_nilai}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>8. Tilikan/Insight</b> 
          </td>    
          <td class="konten_s_answer">  
            : {{$tilikan}}
          </td>                
        </tr>

        <tr>
          <td class="konten_s_question">
            <b>9. Taraf dapat dipercaya</b>
          </td>    
          <td class="konten_s_answer">  
            : {{$taraf_dipercaya}}
          </td>                
        </tr>
      </tbody>
    </table>  
  </div>

  <h4>STATUS NEUROLOGI</h4>
  <div style="font-size: 85%;">  
    <p><b>1. Pemeriksaan Khusus</b></p>

    <p>&emsp;&nbsp;<b>a. Meningeal Signt</b></p>
    <p>&emsp;&nbsp; {{$meningeal_sight}} </p>

    <p>&emsp;&nbsp;<b>b. Hasil Pemeriksaan Nervus Cranialis</b></p>
    <p>&emsp;&nbsp; {{$nervus_cranialis}} </p>


    <p><b>2. Pemeriksaan Sistem Motorik</b></p>
    <p> {{$sistem_motorik}} </p>

    <p><b>3. Koordinasi Gait Keseimbangan (fungsi cerebellum)</b></p>
    <p> {{$cerebellum}} </p>

    <p><b>4. Gerakan-Gerakan Abnormal</b></p>
    <p> - </p>

    <p><b>5. Vegetatif</b></p>
    <p> {{$vegetatif}} </p>

  </div>

  <h4>PEMERIKSAAN PENUNJANG</h4>
  <br>
  <div style="font-size: 85%;">  
    <div class="panel-body">
      <table class="tabel">
          <thead>
              <tr>   
                  <th style="vertical-align: middle;" rowspan="2" class="col7" data-field="name">JENIS PEMERIKSAAN</th>
                  <th style="text-align: center" class="col8" data-field="name">PEMERIKSAAN/PERMINTAAN</th>
                  <th style="text-align: center" class="col8" data-field="name">HASIL</th>
                  <th style="vertical-align: middle;" rowspan="2" class="col7" data-field="name">KETERANGAN</th>
              </tr>    
              <tr>   
                  <th class="col8" data-field="name">JAM:</th>
                  <th class="col8" data-field="name">JAM:</th>
              </tr>    
          </thead>

          <tbody>
            <tr>
              <td class="kolom">
                Laboratorium
              </td>
              <td class="kolom">
                {{$pemeriksaan_laboratorium}}
              </td> 
              <td class="kolom">
                {{$hasil_laboratorium}}
              </td> 
              <td class="kolom">
                {{$keterangan_laboratorium}}
              </td>     
            </tr>
            <tr>
              <td class="kolom">
                Radiologi
              </td>
              <td class="kolom">
                {{$pemeriksaan_radiologi}}
              </td> 
              <td class="kolom">
                {{$hasil_radiologi}}
              </td> 
              <td class="kolom">
                {{$keterangan_radiologi}}
              </td>     
            </tr>
            <tr>
              <td class="kolom">
                EKG
              </td>
              <td class="kolom">
                {{$jam_pemeriksaan_ekg}}
              </td> 
              <td class="kolom">
                {{$hasil_ekg}}
              </td> 
              <td class="kolom">
                {{$keterangan_ekg}}
              </td>     
            </tr>
            <tr>
              <td class="kolom">
                Lain-lain
              </td>
              <td class="kolom">
                {{$pemeriksaan_lain}}
              </td> 
              <td class="kolom">
                {{$hasil_lain}}
              </td> 
              <td class="kolom">
                {{$keterangan_lain}}
              </td>     
            </tr>
          </tbody>
      </table>
    </div>
  </div>

  <h4>INSTRUMEN PENILAIAN</h4>
  <div style="font-size: 85%;">

    <p><b>PANSS Ec</b></p>  
    <div class="row">
      <div class="column">
        <p><b>P4. GADUH GELISAH</b></p>
        <p><b>Nilai : </b>{{$pe1}}</p>
        <p>{{$p4}}</p>

        <p><b>P7. PERMUSUHAN</b></p>
        <p><b>Nilai : </b>{{$pe3}}</p>
        <p>{{$p7}}</p>

        <p><b>G4. KETEGANGAN</b></p>
        <p><b>Nilai : </b>{{$pe5}}</p>
        <p>{{$g4}}</p>

      </div>
      <div class="column">
        <p><b>G8. KETIDAKOPERATIFAN</b></p>
        <p><b>Nilai : </b>{{$pe2}}</p>
        <p>{{$g8}}</p>

        <p><b>G14. PENGENDALIAN IMPULS</b></p>
        <p><b>Nilai : </b>{{$pe4}}</p>
        <p>{{$g14}}</p>
      </div>
    </div> 

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Nama
          </td>    
          <td class="konten_s_answer">  
            : Joko Pangestu
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            No.RM
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Umur
          </td>    
          <td class="konten_s_answer">  
            : 43
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Bangsal
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pemeriksaan Tanggal
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b>Score</b></p>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            P4
          </td>    
          <td class="konten_s_answer">  
            : {{$pe1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            P7
          </td>    
          <td class="konten_s_answer">  
            : {{$pe3}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            G4
          </td>    
          <td class="konten_s_answer">  
            : {{$pe5}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            G8
          </td>    
          <td class="konten_s_answer">  
            : {{$pe2}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            G14
          </td>    
          <td class="konten_s_answer">  
            : {{$pe4}}
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b>Total Score : </b>18 </p>

    <p>Hasil Penilaian < 20 indikasi masuk maintenens rehabilitasi</p>

    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            PANSS EC Skor
          </td>    
          <td class="konten_s_answer">  
            : {{$panssec}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            GAFF Skor
          </td>    
          <td class="konten_s_answer">  
            : {{$gaff}}
          </td>                
        </tr>

      </tbody>
    </table>
    
    <div class="row">
      <div class="column">
        <p>Bangsal : {{$bangsal}}</p>
        <p>Tanggal Pemeriksaan : {{$tanggal_pemeriksaan}} </p>
      </div>
      <div class="column">
        <p style="text-align: center;">Dokter Penanggung Jawab</p>
      </div>
    </div>

  </div>

  <pagebreak>
  <h4>DIAGNOSIS DAN TINDAKAN/TERAPI</h4>
  <div style="font-size: 85%;">
    <div class="row">
      <div class="column">
        <p><b>DIAGNOSIS PSIKIATRI</b></p>
        <p>Axis 1 : {{$axis_1}} </p>
        <p>Axis 2 : {{$axis_2}} </p>
        <p>Axis 3 : {{$axis_3}} </p>
        <p>Axis 4 : {{$axis_4}} </p>
        <p>Axis 5 : {{$axis_5}} </p>
      </div>
      <div class="column">
        <p><b>DIAGNOSIS NON PSIKIATRI</b></p>
        <p>Diagnosis Utama :</p>
        <p>{{$diagnosis_utama}}</p>
        <p>Diagnosis Sekunder :</p>
        <p>{{$diagnosis_sekunder}}</p>
      </div>
    </div>
    <div class="panel-body">
      <table class="tabel">
          <thead>
              <tr>   
                  <th class="col9" data-field="name">JAM</th>
                  <th class="col10" data-field="name">TINDAKAN/TERAPI</th>
              </tr>    
          </thead>

          <tbody>
            @foreach($tindakan as $t)
            <tr id="form_tindakan_{{$t->id}}">
              <td class="kolom">
               {{$t->jam}}
              </td>
              <td class="kolom">
                {{$t->tindakan}}
              </td>   
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>

  <h4>DAFTAR MASALAH</h4>
  <div style="font-size: 85%;">  
    <p>{{$daftar_masalah}}</p>
  </div>

  <h4>TINDAK LANJUT</h4>
  <div style="font-size: 85%;">  
    <p>{{$tindak_lanjut}}</p>
    <p>{{$kontrol}}, tanggal {{$tanggal_kontrol}} {{$dirawat_di_ruang}} {{$indikasi_rawat_inap}} {{$alasan_menolak}} {{$dirujuk_ke}} {{$alasan_rujuk}} {{$doa}}</p>
    <p>Jam Keluar: {{$jam_keluar}}</p>
  <p><b>KONDISI PASIEN SAAT KELUAR</b></p>
  <p>Kesadaran :</p>
  <ul>
    <?php 
      if(isset($kesadaran_saat_keluar[1])) echo 
      '<li>
        Compos Mentis
      </li>';
      if(isset($kesadaran_saat_keluar[2])) echo 
      '<li>
        Apatis
      </li>';
      if(isset($kesadaran_saat_keluar[3])) echo 
      '<li>
        Delirium
      </li>';
      if(isset($kesadaran_saat_keluar[4])) echo 
      '<li>
        Sopor
      </li>';
      if(isset($kesadaran_saat_keluar[5])) echo 
      '<li>
        Koma
      </li>';
      if(isset($kesadaran_saat_keluar[6])) echo 
      '<li>
        GCS, '.$gcs.'
      </li>';
      if(isset($kesadaran_saat_keluar[7])) echo 
      '<li>
        Lain-lain, '.$kesadaran_lainnya.'
      </li>';
    ?>
  </ul> 
  
  <p>Tanda-tanda vital : </p></div>
  <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Tensi 
          </td>    
          <td class="konten_s_answer">  
            : {{$tensi}} mmHg
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Nadi 
          </td>    
          <td class="konten_s_answer">  
            : {{$nadi}} x/mnt
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pernafasan 
          </td>    
          <td class="konten_s_answer">  
            : {{$pernafasan}} x/mnt
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Suhu 
          </td>    
          <td class="konten_s_answer">  
            : {{$suhu}} <sup>o</sup> C
          </td>                
        </tr>
      </tbody>
    </table>

    <br>
    <br>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Tanggal
          </td>    
          <td class="konten_s_answer">  
            : [Tanggal]
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Jam
          </td>    
          <td class="konten_s_answer">  
            : [jam]
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Nama Perawat
          </td>    
          <td class="konten_s_answer">  
            : [nama pengisi]
          </td>                
        </tr>
      </tbody>
    </table>

    <div class="row" style="font-size:85%;">
      <div class="column">
        <p></p>
      </div>
      <div class="column">
        <p style="text-align: center;">Tanda Tangan</p>
      </div>
    </div>

</body>

<html>