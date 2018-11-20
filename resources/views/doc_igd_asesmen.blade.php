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
      <li>Jiwa</li>
      <li>Trauma</li>
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
            <li>O2</li>
            <li>Infus</li>
            <li>NGT</li>
          </ul>
        </div>
      </div>

    <div class="row">
      <p><b>TRIASE</b></p>
      <ul>
        <li>Jiwa</li>
        <li>Trauma</li>
      </ul>
    </div>
  </div>

  <h4>ALASAN KUNJUNGAN</h4>
  <br>
  <div style="font-size: 85%;">  
    <p>Alasan berkunjung adalah</p>
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
      <li>Diare Kronik (lebih dari 2 minggu)</li>
      <li>Penyakit hati kronik</li>
      <li>TB Paru</li>
      <li>Trauma</li>
    </ul>

    <p><b>Interpresi Skor : 5 Resiko Berat</b></p>   

    <p>Diberitahukan ke dokter?</p>   
    <p>{{$pemberitahuan}} {{$waktu_pemberitahuan}}</p> 

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
    <p><b>Edmunson (Jiwa) </b></p>
    <table>
    <tbody>
      <tr>
        <td class="konten_s_question">
          Usia <b>(Skor: 8)</b>
        </td>    
        <td class="konten_s_answer">  
          : Kurang dari 50 tahun
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Status Mental <b>(Skor: 12)</b>
        </td>    
        <td class="konten_s_answer">  
          : {{$edmunson_1}}
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Eliminasi <b>(Skor: 10)</b>
        </td>    
        <td class="konten_s_answer">  
          : {{$edmunson_3}}
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Pengobatan <b>(Skor: 10)</b>
        </td>    
        <td class="konten_s_answer">  
          : {{$edmunson_4}}
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Diagnosa <b>(Skor: 12)</b>
        </td>    
        <td class="konten_s_answer">  
          : {{$edmunson_5}}
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Ambulasi <b>(Skor: 10)</b>
        </td>    
        <td class="konten_s_answer">  
          : {{$edmunson_6}}
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Nutrisi <b>(Skor: 0)</b>
        </td>    
        <td class="konten_s_answer">  
          : {{$edmunson_7}}
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Gangguan pola tidur <b>(Skor: 8)</b>
        </td>    
        <td class="konten_s_answer">  
          : Tidak ada gangguan pola tidur
        </td>                
      </tr>
      <tr>
        <td class="konten_s_question">
          Riwayat Jatuh <b>(Skor: 8)</b>
        </td>    
        <td class="konten_s_answer">  
          : {{$edmunson_8}}
        </td>                
      </tr>
    </tbody>
  </table>
  <p>Total Skor : 78</p>

  <p><b>Tidak Beresiko : Skor < 90</b></p>
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

    <div class="row">
      <div class="column">
        <p>Tekanan Intrakranial : {{$tekanan_intrakanal}}, Sakit kepala</p>
        <p>Pupil : Miosis</p>

        <p>Neurosensorik :</p>
        <ul>
          <li>Spasme otot</li>
          <li>Perubahan motorik</li>
        </ul>    

        <p>Muskuloskeletal :</p>
        <ul>
          <li>Penurunan tingkat kesadaran</li>
          <li>Fraktur</li>
          <li>Dislokasi</li>
        </ul> 
      </div>
      <div class="column">
        <p>Integumen :</p>
        <ul>
          <li>Luka Bakar</li>
          <li>Luka Lecet</li>
        </ul> 

        <p>Turgor kulit : Baik</p>

        <p>Edema : Ada</p>
        <ul>
          <li>Ekstremitas</li>
          <li>Abdomen</li>
        </ul> 

        <p>Mukosa Mulut : Lembab</p>
      </div>
    </div>

    <p>Pendarahan : $pendarahan, jumlah {{$jumlah_pendarahan}} cc, warna {{$warna_pendarahan}}</p>

    <p>Intoksidasi : </p>
    <ul>
      <li>Makanan : -</li>
      <li>Zat Kimia : -</li>
      <li>Gas : -</li>
    </ul> 

    <p>Eliminasi : </p>
    <ul>
      <li>BAB : - , Frekuensi : - , Konsistensi : - , Warna : -</li>
      <li>BAK : - , Frekuensi : - , Warna : - , Lain-lain: - </li>
    </ul> 

  </div>

  <h4>DIAGNOSA KEPERAWATAN</h4>
  <div style="font-size: 85%;">  
    <p>Nyeri Kronis</p>
    <div class="row">
      <div class="column">
        <p><b>Diagnosa Keperawatan Umum :</b></p>
        <ul>
          <li>Aktual/Resiko aspirasi</li>
          <li>Aktual/Resiko gangguan pertukaran gas</li>
          <li>Nyeri</li>
          <li>Hypertermi</li>
        </ul>
      </div>
      <div class="column">
        <p><b>Diagnosa Keperawatan Jiwa :</b></p>
        <ul>
          <li>Isolasi Sosial</li>
          <li>Waham</li>
          <li>{{$diagnosa_jiwa_lainnya}}</li>
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
        <p>E{{$evaluasi}}/p>
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
    <li>Hipertensi</li>
    <li>Liver</li>
    <li>Diabetes</li>
    <li>Jantung</li>
    <li>{{$text_riwayat_penyakit_lain}}</li>
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
        <p><b>Nilai : 4</b></p>
        <p>Sedang - agitasi atau mudah terangsang yang jelas, ledakan-ledakan episodik</p>

        <p><b>P7. PERMUSUHAN</b></p>
        <p><b>Nilai : 3</b></p>
        <p>Ringan - melampiaskan kemarahan secara tidak langusng atau ditahan</p>

        <p><b>G4. KETEGANGAN</b></p>
        <p><b>Nilai : 2</b></p>
        <p>Minimal - patologis diragukan</p>

      </div>
      <div class="column">
        <p><b>G8. KETIDAKOPERATIFAN</b></p>
        <p><b>Nilai : 2</b></p>
        <p>Minimal - patologis diragukan</p>

        <p><b>G14. PENGENDALIAN IMPULS</b></p>
        <p><b>Nilai : 7</b></p>
        <p>Sangat berat - memperlihatkan serangan kebrutalan dan berbahaya</p>
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
            : {{$p4}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            P7
          </td>    
          <td class="konten_s_answer">  
            : {{$p7}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            G4
          </td>    
          <td class="konten_s_answer">  
            : {{$g4}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            G8
          </td>    
          <td class="konten_s_answer">  
            : {{$g8}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            G14
          </td>    
          <td class="konten_s_answer">  
            : {{$g14}}
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
    <li>{{$gcs}}</li>
    <li>Compos Mentis</li>
    <li>Apatis</li>
    <li>{{$kesadaran_lainnya}}</li>
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