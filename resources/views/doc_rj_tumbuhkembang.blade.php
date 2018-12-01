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


  <h2 align="center">ASESMEN AWAL PASIEN TUMBUH KEMBANG DAN EDUKASI TERPADU</h2><br>
   
  <h4>I. DATA ANAK</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
     <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Nama Lengkap
          </td>    
          <td class="konten_s_answer">  
            : {{$nama_anak}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Tempat/Tgl.Lahir
          </td>    
          <td class="konten_s_answer">  
            : {{$tempat_lahir_anak}}/{{$tanggal_lahir_anak}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Jenis Kelamin
          </td>    
          <td class="konten_s_answer">  
            : {{$jenis_kelamin_anak}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Agama
          </td>    
          <td class="konten_s_answer">  
            : {{$agama_anak}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Sekolah/Kelas
          </td>    
          <td class="konten_s_answer">  
            : {{$sekolah_anak}}/{{$kelas_anak}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Alamat Sekolah/Terapi
          </td>    
          <td class="konten_s_answer">  
            : {{$alamat_sekolah_anak}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Suku Bangsa
          </td>    
          <td class="konten_s_answer">  
            : {{$suku_bangsa_anak}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Bahasa Sehari-hari
          </td>    
          <td class="konten_s_answer">  
            : {{$bahasa_anak}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Alamat Lengkap
          </td>    
          <td class="konten_s_answer">  
            : {{$alamat_lengkap_anak}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Telp
          </td>    
          <td class="konten_s_answer">  
            : {{$no_telp_anak}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Anak tinggal dengan
          </td>    
          <td class="konten_s_answer">  
            : {{$tinggal_dengan}} <?php if($tinggal_dengan) echo ','.$tinggal_dengan_lainnya.'' ?>
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>II. DATA ORANG TUA</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  

    <p class="list"><b>A. Data Ayah</b></p>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Nama Lengkap
          </td>    
          <td class="konten_s_answer">  
            : {{$nama_ayah}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Tempat/Tgl.Lahir
          </td>    
          <td class="konten_s_answer">  
            : {{$tempat_lahir_ayah}}/{{$tanggal_lahir_ayah}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Agama
          </td>    
          <td class="konten_s_answer">  
            : {{$agama_ayah}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pendidikan
          </td>    
          <td class="konten_s_answer">  
            : {{$pendidikan_ayah}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pekerjaan
          </td>    
          <td class="konten_s_answer">  
            : {{$pekerjaan_ayah}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Alamat Pekerjaan
          </td>    
          <td class="konten_s_answer">  
            : {{$alamat_pekerjaan_ayah}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Perkawinan ke
          </td>    
          <td class="konten_s_answer">  
            : {{$perkawinan_ke_ayah}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Lama Perkawinan
          </td>    
          <td class="konten_s_answer">  
            : {{$lama_perkawinan_ayah}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Status
          </td>    
          <td class="konten_s_answer">  
            : {{$status_ayah}} <?php if($status_ayah) echo ','.$status_ayah_lainnya.'' ?>
          </td>                
        </tr>
      </tbody>
    </table>

    <p class="list"><b>A. Data Ibu</b></p>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Nama Lengkap
          </td>    
          <td class="konten_s_answer">  
            : {{$nama_ibu}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Tempat/Tgl.Lahir
          </td>    
          <td class="konten_s_answer">  
            : {{$tempat_lahir_ibu}}/{{$tanggal_lahir_ibu}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Agama
          </td>    
          <td class="konten_s_answer">  
            : {{$agama_ibu}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pendidikan
          </td>    
          <td class="konten_s_answer">  
            : {{$pendidikan_ibu}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pekerjaan
          </td>    
          <td class="konten_s_answer">  
            : {{$pekerjaan_ibu}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Alamat Pekerjaan
          </td>    
          <td class="konten_s_answer">  
            : {{$alamat_pekerjaan_ibu}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Perkawinan ke
          </td>    
          <td class="konten_s_answer">  
            : {{$perkawinan_ke_ibu}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Lama Perkawinan
          </td>    
          <td class="konten_s_answer">  
            : {{$lama_perkawinan_ibu}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Status
          </td>    
          <td class="konten_s_answer">  
            : $status_ibu <?php if($status_ayah) echo ','.$status_ibu_lainnya.'' ?>
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <br>

  <h4>III. DATA SAUDARA</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  

    <p class="list"><b>A. Saudara Kandung</b></p>
    <div class="panel-body">
      <table class="tabel">
          <thead>
              <tr>   
                  <th class="default" data-field="name" width="15%">Umur</th>
                  <th class="default" data-field="name" width="25%">Jenis Kelamin</th>
                  <th class="default" data-field="name" width="25%">Pendidikan</th>
                  <th class="default" data-field="name" width="35%">Pekerjaan</th>
              </tr>    
          </thead>

          <tbody>
            @foreach($saudara as $s)
            <tr>
              <td class="kolom">
                {{$s['umur']}}
              </td>
              <td class="kolom">
                {{$s['jenis_kelamin']}}
              </td> 
              <td class="kolom">
                {{$s['pendidikan']}}
              </td> 
              <td class="kolom">
                {{$s['pekerjaan']}}
              </td>   
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>

    <p class="list"><b>A. Saudara Tiri</b></p>
    <div class="panel-body">
      <table class="tabel">
          <thead>
              <tr>   
                  <th class="default" data-field="name" width="15%">Umur</th>
                  <th class="default" data-field="name" width="25%">Jenis Kelamin</th>
                  <th class="default" data-field="name" width="25%">Pendidikan</th>
                  <th class="default" data-field="name" width="35%">Pekerjaan</th>
              </tr>    
          </thead>

          <tbody>
            @foreach($saudara_tiri as $st)
              <tr>
                <td class="kolom">
                  {{$st['umur_tiri']}}
                </td>
                <td class="kolom">
                  {{$st['jenis_kelamin_tiri']}}
                </td> 
                <td class="kolom">
                  {{$st['pendidikan_tiri']}}
                </td> 
                <td class="kolom">
                  {{$st['pekerjaan_tiri']}}
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>

  </div>

  <br>

  <h4>IV. DATA ORANG-ORANG LAIN YANG SERUMAH</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <div class="panel-body">
      <table class="tabel">
          <thead>
              <tr>   
                  <th class="default" data-field="name" width="15%">Umur</th>
                  <th class="default" data-field="name" width="25%">Jenis Kelamin</th>
                  <th class="default" data-field="name" width="25%">Pendidikan</th>
                  <th class="default" data-field="name" width="35%">Pekerjaan</th>
              </tr>    
          </thead>

          <tbody>
            @foreach($serumah as $r)
            <tr>
              <td class="kolom">
                {{$r['umur']}}
              </td>
              <td class="kolom">
                {{$r['jenis_kelamin']}}
              </td> 
              <td class="kolom">
                {{$r['pendidikan']}}
              </td> 
              <td class="kolom">
                {{$r['pekerjaan']}}
              </td>   
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>

  <br>

  <h4>V. DATA ORANG-ORANG LAIN YANG SERUMAH</h4>
  <hr class="limit">
  <div style="font-size: 85%;">
    <p class="list"><b>A. Riwayat Kehamilan :</b></p>  

    <p>1. Bagaimana keadaan kandungan ibu pada awal kehamilan ?</p>
    <p>{{$keadaan_awal_kandungan}}</p>

    <p>2. Selama mengandung ibu pernah menderita penyakit ?</p>
    <p>{{$penyakit_selama_mengandung}}</p>

    <p>3. Perasaan-perasaan ibu selama mengandung (khusus) ?</p>
    <p>{{$perasaan_selama_mengandung}}</p>

    <p>4. Apakah ibu suka minum obat-obatan selama mengandung ?</p>
    <p>{{$suka_obat_obatan}}</p>

    <p>5. Apakah obat-obatan tersebut diminum berdasarkan anjuran dokter ?</p>
    <p>{{$berdasarkan_anjuran}}</p>

    <p>6. Apakah ibu pernah jatuh, mengalami kecelakaan selama masa kehamilan ?</p>
    <p>{{$pernah_jatuh_kecelakaan}}</p>

    <?php if($pernah_jatuh_kecelakaan == 'Ya') echo '<p>Pada usia kandungan berapa bulan : '.$usia_jatuh_kecelakaan.'</p>' ?>
    

    <p>7. Selama mengandung, apakah ibu suka merokok/minum-minuman yang mengandung alkohol ?</p>
    <p>$suka_merokok</p>

    <p>8. Apakah ibu pernah mengalami keguguran ?</p>
    <p>{{$pernah_keguguran}}</p>

    <?php if($pernah_keguguran == 'Ya') echo '<p>Berapa kali : '.$jumlah_keguguran.'</p>' ?>
   

    <p>9. Usia ibu saat mengandung kasus (Tahun)</p>
    <p>{{$usia_ketika_kasus}}</p>

    <p>10. Pada saat mengandung kasus, ibu</p>
    <p>$bekerja_ketika_kasus</p>


    <p class="list"><b>B. Riwayat Persalinan :</b></p>  
    <p class="list"><b>a. NATAL :</b></p>
     
    <p>1. Proses kelahiran</p>
    <p>{{$proses_kelahiran}}</p>

    <p>2. Apakah dibantu dengan alat ?</p>
    <p>{{$dibantu_alat}}</p>
    <?php if($dibantu_alat == 'Ya') echo '<p>Alat berupa : '.$alat_bantu.'</p>' ?>

    <p>3. Apakah mengalami keguguran ?</p>
    <p>{{$mengalami_keguguran}}</p>
    <?php if($mengalami_keguguran == 'Ya') echo '<p>Ya, berupa : '.$keterangan_keguguran.'</p>' ?>

    <p>4. Anak lahir : {{$kondisi_lahir}}</p>

    <p>5. Anak lahir ditolong oleh : {{$dibantu_oleh}}<?php if() echo ','.$dibantu_oleh_lainnya.''?></p>

    <p>6. Ukuran Bayi Saat Lahir</p>
    <p>Berat Bayi : {{$berat_bayi}}</p>
    <p>Panjang bayi : {{$panjang_bayi}}</p>


    <p class="list"><b>b. PASCA NATAL :</b></p>
     
    <p>1. Berapa lama anak diberi asi ?</p>
    <p>{{$lama_asi}}</p>

    <p>2. Bagaimana pola makan anak ?</p>
    <p>{{$pola_makan}}</p>

    <p>3. Bagaimana pola tidur anak ?</p>
    <p>{{$pola_tidur}}</p>

    <p>4. Bagaimana toilt training anak ?</p>
    <p>{{$training}}</p>

    <p>5. Bagaimana kemampuan motorik anak ?</p>
    <p>{{$motorik}}</p>

    <p>6. Anak berjalan pada usia : {{$usia_berjalan}}</p>

    <p>7. Anak berbicara pada usia : {{$usia_berbicara}}</p>

    <p>8. Apakah anak mempunyai hambatan dalam berbicara ?</p>
    <p>{{$hambatan_berbicara}}</p>

    <p>9. Penyakit yang pernah diderita anak :</p>
    <div class="panel-body">
      <table class="tabel">
          <thead>
              <tr>   
                  <th class="default" data-field="name" width="25%">Penyakit</th>
                  <th class="default" data-field="name" width="25%">Tahun</th>
                  <th class="default" data-field="name" width="25%">Lamanya</th>
                  <th class="default" data-field="name" width="25%">Keterangan</th>
              </tr>    
          </thead>

          <tbody>
            @foreach($penyakit_anak as $p)
            <tr>
              <td class="kolom">
                {{$p['penyakit']}}
              </td>
              <td class="kolom">
                {{$p['tahun']}}
              </td> 
              <td class="kolom">
                {{$p['lamanya']}}
              </td> 
              <td class="kolom">
                {{$p['keterangan']}}
              </td>   
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>

    <p>10. Obat-obatan yang masih diminum</p>
    <p>{{$obat_masih_diminum}}</p>

    <p>11. Dalam sehari-hari anak lebih banyak berada dalam perawatan/pengasuhan</p>
    <p>{{$diasuh}}</p>

    <p>Selama berapa lama : {{$lama_pengasuhan}}</p>

    <p>12. Masalah khusus dalam masa perawatan/pengasuhan</p>
    <p>{{$masalah_khusus}}</p>

  </div>

  <h4>VI. RIWAYAT AKADEMIS</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>1. Riwayat Sekolah<p>
    <div class="panel-body">
      <table class="tabel">
          <thead>
              <tr>   
                  <th class="default" data-field="name" width="25%">Penyakit</th>
                  <th class="default" data-field="name" width="25%">Tahun</th>
                  <th class="default" data-field="name" width="50%">Keterangan</th>
              </tr>    
          </thead>

          <tbody>
            @foreach($sekolah as $c)
            <tr>
              <td class="kolom">
                {{$c['jenis_sekolah']}}
              </td>
              <td class="kolom">
                {{$c['umur']}}
              </td> 
              <td class="kolom">
                {{$c['keterangan_tinggal']}}
              </td>   
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>

    <p>2. Adaptasi awal belajar di sekolah</p>

    <p>Sikap</p>
    <p>{{$sikap}}</p>

    <p>Keterampilan motorik awal</p>
    <p>{{$keterampilan_motorik_awal}}</p>

    <p>3. Hasil belajar anak </p>
    <p>{{$hasil_belajar_anak}}</p>

    <p>4. Pelajaran yang disenangi</p>
    <p>{{$pelajaran_disenangi}}</p>

    <p>5. Anak mengalami kesukaran dalam mata pelajaran</p>
    <p>{{$pelajaran_sulit}}</p>

    <p>6. Keluhan anak dalam mata pelajaran yang dianggapnya sulit</p>
    <p>{{$keluhan_di_pelajaran_sulit}}</p>

    <p>7. Apakah anak mempunyai tempat belajar sendiri ?</p>
    <p>{{$tempat_belajar_sendiri}}</p>

    <p>8. Kapan biasanya anak belajar ?</p>
    <p>{{$waktu_biasa_belajar}}</p>

    <p>9. Apakah anak dibantu dalam belajar ?</p>
    <p>{{$dibantu_belajar}}</p>

    <p>10. Siapa yang membantu anak dalam belajar ?</p>
    <p>{{$dibantu_belajar_oleh}}, {{$dibantu_belajar_oleh_lainnya}}</p>

    <p>11. Keluhan anak dalam mata pelajaran yang dianggapnya sulit</p>
    <p>Isi</p>

    <p>12. Sikap anak dalam mengikuti kegiatan kelas tersebut di atas</p>
    <p>{{$sikap_di_kegiatan}}</p>

    <p>13. Apakah anak mengikuti kegiatan tambahan dalam bentuk les privat ?</p>
    <p>{{$les}}</p>

    <p>14. Jika mengikuti dalam pelajaran apa saja ?</p>
    <p>{{$pelajaran_les}}</p>

    <p>15. Siapa yang memberi pelajaran tambahan tersebut ?</p>
    <p>{{$pengajar}}</p>

  </div>

  <h4>VII. RIWAYAT SOSIALISASI</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  

    <p>1. Di sekolah :</p>
    <p>{{$sosialisasi_di_sekolah}}</p>

    <p>2. Di dalam keluarga :</p>
    <p>{{$sosialisasi_di_keluarga}}</p> 
  </div>

  <div style="font-size: 85%;">  
  <hr>
    <div class="panel-body">
      <table class="tabel">
          <tbody>
            <tr>
              <td class="default3" style="text-align:center;vertical-align:top;height:70px">
                Tgl, [tanggal]
              </td>
              <td class="default3" style="text-align:center;vertical-align:top;height:70px">
                Nama Psikolog<br>[nama psikolog]
              </td>
              <td class="default3" style="text-align:center;vertical-align:top;height:70px">
                Tanda Tangan
              </td>  
            </tr>
          </tbody>
      </table>
    </div>
  </div>

  <pagebreak>

  <h4>I. RIWAYAT PSIKIATRIK (psychiatric history) (alloanamnesis dari orang tua, kakek, nenek, paman , bibi, kakak kandung, dll)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>A. Keluhan utama (chief Complaint)</p>
    <p>{{$keluhan_utama}}</p>

    <p>B. Riwayat Gangguan Sekarang (History of Present Illness)</p>
    <p>{{$riwayat_gangguan_sekarang}}</p>

    <p>C. Riwayat Gangguan Sebelumnya (History of Previous Illness)</p>
    <p>{{$riwayat_gangguan_sebelumnya}}</p>

    <p>D. Riwayat Pribadi (Personal History)</p>
    <p>{{$riwayat_pribadi}}</p>

    <p>E. Riwayat Pra-Natal dan Perinatal ( Personal and Pernnatal History)</p>
    <p>{{$riwayat_pranatal_perinatal}}</p>

    <p>F. Riwayat Masa Bayi/Masa  Kanak Awal(Early Childhood) (0 – 3 tahun)</p>
    <p>{{$early_childhood}}</p>

    <p>G. Riwayat Masa Kanak Pertengahan (Middle Childhood) (3 – 11 tahun)</p>
    <p>{{$middle_childhood}}</p>

    <p>H. Riwayat Masa Kanak Akhir (Late Childhood) (11 – 18 tahun)</p>
    <p>{{$late_childhood}}</p>

    <p>I. Riwayat Keluarga (Family History)</p>
    <p>{{$riwayat_keluarga}}</p>

    <p>J. Riwayat Situasi Sosial Sekarang (Current Social Situation)</p>
    <p>{{$riwayat_sosial_sekarang}}</p>

    <p>K. Persepsi Pasien tentang dirinya (Patient Perception about Himself)</p>
    <p>{{$persepsi_sendiri}}</p>
  </div>

  <h4>II. PEMERIKSAAN STATUS MENTAL (Mental State Examination)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>A. Deskripsi Umum (General Description)</p>
    <p>{{$deskripsi_umum}}</p>

    <p>B. Interaksi Orang tua – anak (Parent-child Interaction)</p>
    <p>{{$interaksi_ortu_anak}}</p>

    <p>C. Orientasi dan Persepsi (Orientation and Perception)</p>
    <p>{{$orientasi_persepsi}}</p>

    <p>D. Mood, Afek, Ekspresi Afektif dan Empati (Mood, Affect, Affective, Expression, and Empathy)</p>
    <p>{{$mood}}</p>

    <p>E. Proses Pikir (Thought Process)</p>
    <p> &emsp;Bentuk dan Arus Pikir (Steam and Form of Thought)</p>
    <p> &emsp;{{$bentuk_arus_pikir}}</p>

    <p> &emsp;Isi Pikir (Content of Thought)</p>
    <p> &emsp;{{$isi_pikir}}</p>

    <p>F. Fantasi (Fantasy)</p>
    <p>{{$fantasi}}</p>

    <p>G. Kemampuan Menilai Realitas dan Tilikan ( Reality Testing Ability and Insight)</p>
    <p>{{$kemampuan}}</p>
  </div>

  <h4>III. PEMERIKSAAN DIAGNOSTIK LANJUTAN (Further Diagnostic Investigation)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>{{$diagnostik_lanjutan}}</p>
  </div>

  <h4>IV. RINGKASAN HASIL PEMERIKSAAN (Summary of Positive Findings)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>{{$hasil_pemeriksaan}}</p>
  </div>

  <h4>V. FORMULASI DIAGNOSTIK (Diagnostik Formulation)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>{{$formulasi_diagnostik}}</p>
  </div>

  <h4>VI. EVALUASI MULTIAKSIAL (Multiaksial Evaluation)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
             &emsp;Aksis I
          </td>    
          <td class="konten_s_answer">  
            : {{aksis1}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
             &emsp;Aksis II
          </td>    
          <td class="konten_s_answer">  
            : {{aksis2}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
             &emsp;Aksis III
          </td>    
          <td class="konten_s_answer">  
            : {{aksis3}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
             &emsp;Aksis IV
          </td>    
          <td class="konten_s_answer">  
            : {{aksis4}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
             &emsp;Aksis V
          </td>    
          <td class="konten_s_answer">  
            : {{aksis5}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>VII. DAFTAR MASALAH (Problem List)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            &emsp;1. Organobiologik
          </td>    
          <td class="konten_s_answer">  
            : {{masalah_organobiologik}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;2. Psikologik
          </td>    
          <td class="konten_s_answer">  
            : {{masalah_psikologik}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            &emsp;3. Sosial
          </td>    
          <td class="konten_s_answer">  
            : {{masalah_sosial}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>VIII. PROGNOSIS (Prognosis)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>{{$prognosis}}</p>
  </div>

  <h4>IX. PENATALASANAAN (Treatment Plan)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p> &emsp;1. Untuk Pasien :</p>
    <p> &emsp;{{$treatment_pasien}}</p>
    <p> &emsp;2. Untuk Keluarga :</p>
    <p> &emsp;{{$treatment_keluarga}}</p>

  </div>

  <div style="font-size: 85%;">  
  <hr>
    <div class="panel-body">
      <table class="tabel">
          <tbody>
            <tr>
              <td class="default3" style="text-align:center;vertical-align:top;height:70px">
                Tgl, [tanggal]
              </td>
              <td class="default3" style="text-align:center;vertical-align:top;height:70px">
                Nama Dokter<br>[]
              </td>
              <td class="default3" style="text-align:center;vertical-align:top;height:70px">
                Tanda Tangan
                <br>
                <br>
                <br>
              </td>  
            </tr>
          </tbody>
      </table>
    </div>
  </div>

  <pagebreak>

  <h2 align="center">LAYANAN KONSULTASI PSIKIATRI KLINIK TUMBUH KEMBANG ANAK DAN REMAJA</h2><br>
  
  <p>Alamat Pasien : - </p> 
  <hr class="limit">
  <div style="font-size: 85%;">  
     <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            ANAMNESIS
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            PEMERIKSAAN FISIK
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            PEMERIKSAAN PSIKIATRIK
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            PEMERIKSAAN PENUNJANG
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            DIAGNOSIS MEDIS (ICD – 10)
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            TERAPI PSIKOFARMAKA
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
      </tbody>
    </table>

    <p><b> TERAPI NON PSIKOFARMAKA YANG DIREKOMENDASIKAN PSIKIATER </b></p>
     
     <table>
      <tbody>
        <tr>
          <td class="defaultnb" style="width:25%">
            1. Terapi Prilaku (Frekuensi)
          </td>    
          <td class="defaultnb" style="width:35%">  
            : -
          </td>      
          <td class="defaultnb" style="width:35%">  
            Frekuensi : -    x/minggu
          </td>           
        </tr>
        <tr>
          <td class="defaultnb" style="width:25%">
            2. Sensori Integrasi
          </td>    
          <td class="defaultnb" style="width:35%">  
            : -
          </td>        
           <td class="defaultnb" style="width:35%">  
            Frekuensi : -    x/minggu
          </td>              
        </tr>
        <tr>
          <td class="defaultnb" style="width:25%">
            3. Terapi Okupasi
          </td>    
          <td class="defaultnb" style="width:35%">  
            : -
          </td>      
           <td class="defaultnb" style="width:35%">  
            Frekuensi : -    x/minggu
          </td>                
        </tr>
        <tr>
          <td class="defaultnb" style="width:25%">
            4. Sensori Integrasi 
          </td>    
          <td class="defaultnb" style="width:35%">  
            : -
          </td>    
           <td class="defaultnb" style="width:35%">  
            Frekuensi : -    x/minggu
          </td>                  
        </tr>
        <tr>
          <td class="defaultnb" style="width:25%">
            5. Terapi Wicara
          </td>    
          <td class="defaultnb" style="width:35%">  
            : -
          </td> 
           <td class="defaultnb" style="width:35%">  
            Frekuensi : -    x/minggu
          </td>                     
        </tr>
        <tr>
          <td class="defaultnb" style="width:25%">
            6. Remedical Teaching
          </td>    
          <td class="defaultnb" style="width:35%">  
            : -
          </td>   
           <td class="defaultnb" style="width:35%">  
            Frekuensi : -    x/minggu
          </td>                   
        </tr>
        <tr>
          <td class="defaultnb" style="width:25%">
            7. Play Therapy 
          </td>    
          <td class="defaultnb" style="width:35%">  
            : -
          </td>    
           <td class="defaultnb" style="width:35%">  
            Frekuensi : -    x/minggu
          </td>                  
        </tr>
        <tr>
          <td class="defaultnb" style="width:25%">
            8. Story Telling
          </td>    
          <td class="defaultnb" style="width:35%">  
            : -
          </td>   
           <td class="defaultnb" style="width:35%">  
            Frekuensi : -    x/minggu
          </td>                   
        </tr>
      </tbody>
    </table>
    <br>
    <br>
    <br>

    <div class="row">
      <div class="column">
      <br>
        <p style="text-align: center;">Tanda Tangan Pasien</p>
        <br>
        <br>
        <br>
        <br>
        <p style="text-align: center;">( ................)</p>
      </div>
      <div class="column">
        <p style="text-align: center;">Pekanbaru, 28/12/2018</p>
        <p style="text-align: center;">Psikiater</p>
        <br>
        <br>
        <br>
        <p style="text-align: center;">( ................)</p>
      </div>
    </div>
  </div>

  <pagebreak>


  <h2 align="center">KLINIK TUMBUH KEMBANG ANAK DAN EDUKASI TERPADU LEMBAR GABUNGAN HASIL EVALUASI TERAPI</h2><br>

  <p>Isi</p>

  <pagebreak>

  <h2 align="center">LEMBAR PEMERIKSAAN FISIOTERAPI</h2><br>

  <h4>A. Kondisi/Kasus : FTA</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question_l">
             <b>1. Data Klien/Keterangan Umum Penderita</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;a. Nama
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;b. Umur
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;c. Jenis Kelamin
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;d. Agama
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;e. Pekerjaan
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;f. Alamat
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;g. Tanggal Masuk
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             <b>2. Data-Data Medis Rumah Sakit</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;a. Diagnosis Medis
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;b. Catatan Klinis
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;c. Terapi Umum (General Treatment)
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;d. Rujukan Fisioterapi dari dokter
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             <b>3. Asesment</b>
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;a. Anamnesia
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;1. Riwayat Penyakit
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;a) Keluhan Utama
          </td>    
          <td class="konten_s_answer">  
              :-
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;b) Keluhan Penyerta
          </td>    
          <td class="konten_s_answer">  
              :-
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;c) Riwayat Penyakit Sekarang
          </td>    
          <td class="konten_s_answer">  
              :-
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;d) Riwayat Penyakit Dahulu
          </td>    
          <td class="konten_s_answer">  
              :-
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;e) Riwayat Pribadi
          </td>    
          <td class="konten_s_answer">  
              :-
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;f) Riwayat Keluarga
          </td>    
          <td class="konten_s_answer">  
              :-
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;2. Pemeriksaan Umum
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;a). Kesadaran
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;b). Tekanan Darah
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;c). Denyut Nadi
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;d). Pernafasan
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;&emsp;e). Temperatur
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;b. Ananmnesis khusus
          </td>    
          <td class="konten_s_answer">  
            : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;c. Inspeksi
          </td>    
          <td class="konten_s_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;1. Inspeksi Umum
          </td>    
          <td class="konten_s_answer">  
          : -
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
             &emsp;&emsp;2. Inspeksi Khusus
          </td>    
          <td class="konten_s_answer">  
          : -
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>B. Pemeriksaan Fungsi Gerak Dasar</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>isian</p>
  </div>

  <h4>C. Tes Khusus</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>isian</p>
  </div>

  <h4>D. Informasi Lain</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>isian</p>
  </div>

  <h4>E. Pengukuran</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>isian</p>
  </div>

  <h4>F. Problem Fisioterapi</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>isian</p>
  </div>

  <h4>G. Diagnosis Fisioterapi</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>isian</p>
  </div>

  <h4>H. Perencanaan Program Fisioterapi</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>isian</p>
  </div>

  <h4>I. Intervensi</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>isian</p>
  </div>

  <h4>J. Evaluasi</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <p>isian</p>
  </div>

  <div style="font-size: 85%;">  
  <hr>
    <div class="panel-body">
      <table class="tabel">
          <tbody>
            <tr>
              <td class="default3" style="text-align:center;vertical-align:top;height:70px">
                Tgl, ...
              </td>
              <td class="default3" style="text-align:center;vertical-align:top;height:70px">
                Nama Psikolog
              </td>
              <td class="default3" style="text-align:center;vertical-align:top;height:70px">
                Tanda Tangan
              </td>  
            </tr>
          </tbody>
      </table>
    </div>
  </div>

</body>

<html>