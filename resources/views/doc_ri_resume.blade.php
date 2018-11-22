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


  <h2 align="center">RESUME MEDIS (RAHASIA)</h2><br>
   
  <h4>A. DATA UMUM</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
     <table>
      <tbody>
        <tr>
          <td class="konten_s_question_l">
            Tanggal Masuk RS
          </td>    
          <td class="konten_s_answer">  
            : {{$tanggal_masuk}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
            Tanggal Keluar RS 
          </td>    
          <td class="konten_s_answer">  
            : {{$tanggal_keluar}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
            Ruang Rawat Terakhir
          </td>    
          <td class="konten_s_answer">  
            : {{$ruang_rawat_terakhir}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question_l">
            DPJP
          </td>    
          <td class="konten_s_answer">  
            : {{$dpjp}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>
  
  <h4>B. RINGKASAN PERAWATAN PASIEN</h4>
  <hr class="limit">
  <div style="font-size: 100%;">  
    <table>
      <tbody>
        <tr>
          <td class="konten_S_question_L">
           Alergi
          </td>    
          <td class="konten_s_answer">  
            : {{$alergi}} 
          </td>                
        </tr>
        <tr>
          <td class="konten_S_question_L">
            Diagnosa Masuk
          </td>    
          <td class="konten_s_answer">  
            : {{$diagnosa_masuk}}
          </td>                
        </tr>
        <tr>
          <td class="konten_S_question_l">
            Indikasi Dirawat / Alasan di rawat
          </td>    
          <td class="konten_s_answer">  
            : {{$alasan_dirawat}}
          </td>                
        </tr>
         <tr>
          <td class="konten_s_question_l">
            Hasil Pemeriksaan Penunjang
          </td>    
          <td class="konten_s_answer">  
            : {{$hasil_pemeriksaan_penunjang}}
          </td>                
        </tr>
         <tr>
          <td class="konten_s_question_l">
            Terapi yang Diberikan Saat di RS
          </td>    
          <td class="konten_s_answer">  
            : {{$terapi}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>C. DIAGNOSA</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  

      <div class="rowsize">
        <div class="colsize" style="width:60%">
          <table class="tabel">
            <thead>
                <tr>   
                    <th class="default" style="width:90%" data-field="name">DIAGNOSA PSIKIATRI</th>
                    <th class="default" data-field="name" style="padding-left:2%;padding-right:2%">KODE ICD-10</th>
                </tr>    
            </thead>

            <tbody>
              <tr>
                <td class="default">
                  Axis 1 : {{$diagnosa_psikiatri_1}}
                </td>
                <td class="default" style="text-align:center">
                  {{$kode_psikiatri_1}}
                </td>
              </tr>
              <tr>
                <td class="default">
                  Axis 2 : {{$diagnosa_psikiatri_2}}
                </td>
                <td class="default" style="text-align:center">
                  {{$kode_psikiatri_2}}
                </td>
              </tr>
              <tr>
                <td class="default">
                  Axis 3 : {{$diagnosa_psikiatri_3}}
                </td>
                <td class="default" style="text-align:center">
                  {{$kode_psikiatri_3}}
                </td>
              </tr>
              <tr>
                <td class="default">
                  Axis 4 : {{$diagnosa_psikiatri_4}}
                </td>
                <td class="default" style="text-align:center">
                  {{$kode_psikiatri_4}}
                </td>    
              </tr>
              <tr>
                <td class="default">
                  Axis 5 : {{$diagnosa_psikiatri_5}}
                </td>
                <td class="default" style="text-align:center">
                  {{$kode_psikiatri_5}}
                </td>  
              </tr>
            </tbody>
          </table>
        </div>

        <div class="colsize" style="width:30%">
          <table class="tabel">
            <thead>
                <tr>   
                    <th class="default" style="width:90%" data-field="name">DIAGNOSA NON PSIKIATRI</th>
                    <th class="default" data-field="name" style="padding-left:2%;padding-right:2%">KODE ICD-10</th>
                </tr>    
            </thead>

            <tbody>
              <tr>
                <td class="default">
                  Diagnosa Utama
                </td>
                <td class="default">
                  
                </td>
              </tr>
              <tr>
                <td class="default">
                  {{$diagnosa_non_psikiatri_1}}
                </td>
                <td class="default" style="text-align:center">
                  {{$kode_non_psikiatri_1}}
                </td>    
              </tr>
              <tr>
                <td class="default">
                  Diagnosa Sekunder
                </td>
                <td class="default">
                  
                </td>  
              </tr>
              <tr>
                <td class="default">
                  1. {{$diagnosa_non_psikiatri_2}}
                </td>
                <td class="default" style="text-align:center">
                  {{$kode_non_psikiatri_2}}
                </td>  
              </tr>
              <tr>
                <td class="default">
                  2. {{$diagnosa_non_psikiatri_3}}
                </td>
                <td class="default" style="text-align:center">
                  {{$kode_non_psikiatri_3}}
                </td>  
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>

  <h4>D. TINDAKAN KEDOKTERAN</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <table class="tabel">
      <thead>
          <tr>   
              <th class="default" style="width:10%" data-field="name">Tgl</th>
              <th class="default" style="width:85%" data-field="name">Nama Tindakan Medis</th>
              <th class="default" style="width:5%" data-field="name" style="padding-left:2%;padding-right:2%">KODE ICD-9-CM</th>
          </tr>    
      </thead>

      <tbody>
        @php
          $idx_tindakan = 0;
        @endphp
        @foreach($tindakan_kedokteran as $key => $value)
          @php
            $idx_tindakan += 1;
          @endphp
          <tr id="form_tindakan_{{$idx_tindakan}}">
            <td class="default">
              {{$value[0]}}
            </td>
            <td class="default">
              {{$value[1]}}
            </td>
            <td class="default" style="text-align:center">
              {{$value[2]}}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <h4>E. PENYEBAB LUAR/CEDERA/KECELAKAAN (jika ada)</h4><hr class="limit">
  <div style="font-size:85%">
    <p>{{$penyebab_luar}}</p>
    <p>Keadaan Keluar : -</p>
    <p>Cara Pulang : -</p>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Keadaan Keluar
          </td>    
          <td class="konten_s_answer">  
            : {{$keadaan_keluar}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Cara Pulang 
          </td>    
          <td class="konten_s_answer">  
            : {{$cara_pulang}}
          </td>                
        </tr>
      </tbody>
    </table>
    <br>

    <p class="list">Kondisi Pulang : </p>    
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Kondisi
          </td>    
          <td class="konten_s_answer">  
            : {{$kondisi_pulang}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Jam Keluar 
          </td>    
          <td class="konten_s_answer">  
            : {{$jam_keluar}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            TD 
          </td>    
          <td class="konten_s_answer">  
            : {{$td}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            HR 
          </td>    
          <td class="konten_s_answer">  
            : {{$hr}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            RR 
          </td>    
          <td class="konten_s_answer">  
            : {{$rr}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            T 
          </td>    
          <td class="konten_s_answer">  
            : {{$t}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            BB 
          </td>    
          <td class="konten_s_answer">  
            : {{$bb}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>F. OBAT YANG DIBAWA PULANG</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <table class="tabel">
      <thead>
          <tr>   
              <th class="default" style="width:5%" data-field="name">NO</th>
              <th class="default" style="width:55%" data-field="name">NAMA OBAT</th>
              <th class="default" style="width:15%" data-field="name">JUMLAH</th>
              <th class="default" style="width:15%" data-field="name">ATURAN PAKAI</th>
              <th class="default" style="width:15%" data-field="name">KETERANGAN</th>
          </tr>    
      </thead>

      <tbody>
        @php
          $idx_obat = 0;
        @endphp
        @foreach($obat_dibawa_pulang as $key => $value)
          @php
            $idx_obat += 1;
          @endphp
          <tr id="form_obat_{{$idx_obat}}">
            <td class="default" style="text-align:center">{{$idx_obat}}</td>
            <td class="default" style="text-align:center">
              {{$value[0]}}
            </td>
            <td class="default" style="text-align:center">
              {{$value[1]}}
            </td>
            <td class="default" style="text-align:center">
              {{$value[2]}}
            </td>
            <td class="default" style="text-align:center">
              {{$value[3]}}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <h4>EDUKASI PASIEN</h4><hr class="limit">
  <div style="font-size:85%">
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Penyakit Diet
          </td>    
          <td class="konten_s_answer">  
            : {{$penyakit}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Diet 
          </td>    
          <td class="konten_s_answer">  
            : {{$diet}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>INSTRUKSI</h4><hr class="limit">
  <div style="font-size:85%">
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Perlu Kontrol/ berobat jalan di
          </td>    
          <td class="konten_s_answer">  
            : {{$tempat_kontrol}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Tanggal 
          </td>    
          <td class="konten_s_answer">  
            : {{$tanggal_kontrol}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>HASIL PEMERIKSAAN YANG TERTUNDA</h4><hr class="limit">
  <div style="font-size:85%">
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Hasil Pemeriksaan
          </td>    
          <td class="konten_s_answer">  
            : {{$hasil_tertunda}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Diambil Tanggal 
          </td>    
          <td class="konten_s_answer">  
            : {{$tanggal_pengambilan}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <div style="font-size:85%">
    <div class="row">
      <div class="column">
        <p></p>
      </div>
      <div class="column">
        <p style="text-align: center;">Pekanbaru, [tanggal]</p>
        <p style="text-align: center;">Dokter Penanggung Jawab Pelayanan</p>
        <br>
        <br>
        <br>
        <br>
        <p style="text-align: center;">( {{$dpjp}} )</p>
      </div>
    </div>
  </div>

</body>

<html>