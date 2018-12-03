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


  <h2 align="center" style="font-size:110%;">FORMULIR TES DAN KONSELING HIV</h2>
   
  <div style="text-align:center;padding-left:90%;padding-top:-5%;padding-bottom:-10px;">
    <p style="background-color: black;"><font color="white">RAHASIA</font></p>
  </div>

  <div style="font-size: 75%;border:3px solid black;">
    <p style="background-color: black;padding-left:10px;margin-top:-2px;"><font color="white"> DATA KLIEN </font></p>
    
    <div class="row" style="padding-top:-20px;padding-left:10px;">
        <div class="column">
          <p class=""><b>NAMA</b></p>
          <p class="answer">{{$nama}}</p>

          <p class="question"><b>ALAMAT</b></p>
          <p class="answer">{{$alamat}}</p>

          <p class="question"><b>PROPINSI</b></p>
          <p class="answer">{{$propinsi}}</p>

          <p class="question"><b>KOTA/KABUPATEN</b></p>
          <p class="answer">{{$kota_kabupaten}}</p>

          <p class="question"><b>NAMA IBU KANDUNG</b></p>
          <p class="answer">{{$nama_ibu_kandung}}</p>
        </div>
        <div class="column" style="padding-top:15px;">
          <p class="question"><b>PASANGAN KLIEN</b></p><br>
          
          <p class="question"><b>KLIEN PUNYA PASANGAN TETAP</b></p>
          <p class="answer">{{$pt}}</p>

          <p class="question"><b>TGL LAHIR PASANGAN</b></p>
          <p class="answer">{{$tanggal_lahir_pasangan}}</p>

          <p class="question"><b>STATUS PASANGAN</b></p>
          <p class="answer">{{$sp}}</p>

          <p class="question"><b>TGL TES TERAKHIR PASANGAN</b></p>
          <p class="answer">{{$tgl_tes_terakhir_pasangan}}</p>

        </div>
      </div>

    <hr style="height:2px;">

    <div class="specialcase" style="padding-top:-3px;">
      <div class="rowsize">
        <div class="colsize" style="width:28%">
          <p class="question"><b>JENIS KELAMIN</b></p>
          <p class="answer">{{$jenis_kelamin}}</p>
        </div>
        <div class="colsize" style="width:28%">
          <p class="question"><b>STATUS PERKAWINAN</b></p>
          <p class="answer">$spk</p>
        </div>
        <div class="colsize" style="width:28%">
          <p class="question"><b>TGL LAHIR</b></p>
          <p class="answer">{{$tgl_lahir}}</p>
        </div>
      </div>

      <div class="rowsize">
        <div class="colsize" style="width:28%">
          <p class="question"><b>STATUS KEHAMILAN</b></p>
          <p class="answer">{{$skh}}</p>
        </div>
        <div class="colsize" style="width:28%">
          <p class="question"><b>UMUR ANAK TERAKHIR</b></p>
          <p class="answer">{{$umur_anak_terakhir}}</p>
        </div>
        <div class="colsize" style="width:28%">
          <p class="question"><b>JUMLAH ANAK KANDUNG</b></p>
          <p class="answer">{{$jumlah_anak_kandung}}</p>
        </div>
      </div>
    </div>

    <hr style="height:2px;">

    <div class="specialcase">
      <p class=""><b>PENDIDIKAN TERAKHIR</b></p>
      <p class="answer">{{$pen}}</p>
    </div>

    <hr style="height:2px;">

    <div class="specialcase ">
      <p class=""><b>PEKERJAAN</b></p>
      <p class="answer">{{$pek}}, {{$jenis_pekerjaan}}</p>
    </div>

    <hr style="height:2px;">

    <div class="specialcase ">
      <p class=""><b>KELOMPOK RISIKO</b></p>
      <p class="answer">{{$kr}}, {{$ktr}}</p>
    </div>

    <hr style="height:2px;">

    <div class="specialcase ">
      <p class=""><b>Lamanya</b></p>
      <p class="answer">{{$lama_ps_penasun}}</p>
    </div>

    <hr style="height:2px;">

    <div class="specialcase" style="padding-top:-3px;">
      <div class="rowsize">
      <div class="colsize" style="width:28%">
        <p class="question"><b>STATUS KUNJUNGAN</b></p>
        <p class="answer">{{$sk}}</p>
      </div>
      <div class="colsize" style="width:28%">
        <p class="question"><b>STATUS RUJUKAN</b></p>
        <p class="answer">{{$sr}}</p>
      </div>
    </div>
    </div>

  </div>

  <div style="font-size: 75%;border:3px solid black;">
    <p style="background-color: black;padding-left:10px;margin-top:-2px;"><font color="white"> POPULASI KHUSUS </font></p>
    <div class="specialcase">
      <p class="">Klien WBP (Warga Binaan Permasyarakatan)? {{$wbp}}</p>
    </div>
    <br>
  </div>

  <div style="font-size: 75%;border:3px solid black;">
    <p style="background-color: black;padding-left:10px;margin-top:-2px;"><font color="white"> KONSELING PRA TES </font></p>
    <div class="specialcase2" style="padding-top:-15px;">
      <table style="padding-left:-10px;">
        <tbody>
          <tr>
            <td class="default2q" style="padding-top:5px;">
              <b>TGL PEMBERIAN INFORMASI</b>
            </td>    
            <td class="default2s" colspan="2">
              {{$tgl_konseling_pra_hiv}}
            </td> 
            <td class="default2s" colspan="2">
              <b>STATUS KLIEN : </b>{{$skl}}
            </td>                
          </tr>
          <tr>
            <td class="default2q">
               <b>ALASAN TES HIV</b>
            </td>    
            <td class="default2s" colspan="2">
              <ul>
                <li>Ingin tahu saja</li>
                <li>Untuk bekerja</li>
              </ul>
            </td>      
             <td class="default2s" colspan="2">
              <ul>
                <li>Ingin tahu saja</li>
                <li>Untuk bekerja</li>
              </ul>
            </td>               
          </tr>
          <tr>
            <td class="default2q">
               <b>MENGETAHUI ADANYA TES DARI</b>
            </td>    
            <td class="default2s" colspan="2">
              {{$dmn}} {{$dmn_lainnya}}
            </td>                 
          </tr>
          <tr>
            <td class="default2q">
              <b>KAJIAN TINGKAT RISIKO: HUBUNGAN SEKS VAGINAL BERESIKO</b>
            </td>    
            <td class="default2s" style="width:60px;" colspan="2">
                {{$kaj}}, {{$waktu_kaj}}
            </td>  
            <td class="default2s" colspan="2">
              <b>ANAL SEKS BERESIKO : {{$an}}, {{$waktu_an}}</b>
            </td>            
          </tr>
          <tr>
            <td class="default2q">
              <b>BERGANTIAN PERALATAN SUNTIK</b>
            </td>    
            <td class="default2s" style="width:60px;" colspan="2">
                {{$per}}, {{$waktu_per}}
            </td>  
            <td class="default2s" colspan="2">
              <b>TRANSFUSI DARAH : {{$trf}}, {{$waktu_trf}}</b>
            </td>            
          </tr>
          <tr>
            <td class="default2q">
              <b>TRANSMISI IBU KE ANAK</b>
            </td>    
            <td class="default2s" style="width:60px;" colspan="2">
                {{$trm}}, {{$waktu_trm}}
            </td>  
            <td class="default2s" colspan="2">
              <b>LAINNYA : {{$ktr_lainnya}}, {{$waktu_ktr_lainnya}}</b>
            </td>            
          </tr>
          <tr>
            <td class="default2q">
              <b>PERIODE JENDELA</b>
            </td>    
            <td class="default2s" style="width:60px;" colspan="2">
                {{$jd}}, {{$waktu_jd}}
            </td>  
            <td class="default2s" colspan="2">
              <b>KESEDIAAN UNTUK TES : {{$ksd}}</b>
            </td>            
          </tr>
           <tr>
            <td class="default2q">
              <b>PERNAH TES HIV SEBELUMNYA</b>
            </td>    
            <td class="default2s" style="width:60px;">
                {{$tes_hiv}}
            </td>  
            <td class="default2s">
              <b>Dimana : </b>{{$tt_hiv}}
            </td> 
            <td class="default2s">
              <b>Kapan : </b>{{$wt_hiv}}
            </td>
            <td class="default2s">
              <b>Hasil : </b>{{$ht_hiv}}
            </td>               
          </tr>
        </tbody>
      </table>
      <br>
    </div>
  </div>

  <pagebreak>

  <div style="font-size: 75%;border:3px solid black;">
    <p style="background-color: black;padding-left:10px;margin-top:-2px;"><font color="white"> PEMBERIAN INFORMASI </font></p>
    <div class="specialcase2" style="padding-top:-15px;">
      <table style="padding-left:-10px;">
        <tbody>
          <tr>
            <td class="default2q" style="padding-top:5px;">
              <b>TGL PEMBERIAN INFORMASI</b>
            </td>    
            <td class="default2s" colspan="4">
              {{$tgl_pemberian_informasi}}
            </td>                
          </tr>
          <tr>
            <td class="default2q">
              <b>PERNAH TES HIV SEBELUMNYA</b>
            </td>    
            <td class="default2s" style="width:60px;">
                {{$tes_hiv2}}
            </td>  
            <td class="default2s">
              <b>Dimana : </b>{{$tt_hiv2}}
            </td> 
            <td class="default2s">
              <b>Kapan : </b>{{$wt_hiv2}}
            </td>
            <td class="default2s">
              <b>Hasil : </b>{{$ht_hiv2}}
            </td>               
          </tr>
          <tr>
            <td class="default2q">
                <b>PENYAKIT TERKAIT PASIEN</b>
            </td>    
            <td class="default2s" colspan="2">
              <ul>
                <?php 
                  if(isset($ptp[1])) echo 
                  '<li>
                    TB
                  </li>';
                  if(isset($ptp[2])) echo 
                  '<li>
                    Dermatitis
                  </li>';
                  if(isset($ptp[3])) echo 
                  '<li>
                    Herpes
                  </li>';
                  if(isset($ptp[4])) echo 
                  '<li>
                    Sifilis
                  </li>';
                  if(isset($ptp[5])) echo 
                  '<li>
                    Hepatitis
                  </li>';
                  if(isset($ptp[6])) echo 
                  '<li>
                    Diare
                  </li>';
                ?>
              </ul> 
            </td>   
            <td class="default2s" colspan="2">
              <ul>
                <?php 
                  if(isset($ptp[7])) echo 
                  '<li>
                    LGV
                  </li>';
                  if(isset($ptp[8])) echo 
                  '<li>
                    Toksopiasmosis
                  </li>';
                  if(isset($ptp[9])) echo 
                  '<li>
                    IMS lainnya ...
                  </li>';
                  if(isset($ptp[10])) echo 
                  '<li>
                    Kandidiasis oralesovagial
                  </li>';
                  if(isset($ptp[11])) echo 
                  '<li>
                    PCP
                  </li>';
                  if(isset($ptp[12])) echo 
                  '<li>
                    Wasting syndrome
                  </li>';
                  if(isset($ptp[13])) echo 
                  '<li>
                    Lainnya
                  </li>';
                ?>
              </ul> 
            </td>                
          </tr>
          <tr>
            <td class="default2q">
               <b>KESEDIAAN UNTUK TES</b>
            </td>    
            <td class="default2s" colspan="4">
              {{$kesediaan_tes_tipk}}
            </td>                
          </tr>
        </tbody>
      </table>
      <br>
    </div>
  </div>

  <div style="font-size: 75%;border:3px solid black;">
    <p style="background-color: black;padding-left:10px;margin-top:-2px;"><font color="white"> TES ANTIBODI HIV </font></p>
    <div class="specialcase2" style="padding-top:-15px;">
      <table style="padding-left:-10px;">
        <tbody>
          <tr>
            <td class="default2q"  style="padding-top:5px;">
               <b>TGL TES HIV</b>
            </td>    
            <td class="default2s" style="width:60px;">
              {{$tgl_tes_hiv}}
            </td>  
            <td class="default2s">
              <b>JENIS TES HIV : </b> {{$jt}}
            </td>                      
          </tr>
          
          <tr>
            <td class="default2q">
               <b>HASIL TES R1</b>
            </td>    
            <td class="default2s" style="width:60px;">
              {{$r1}}
            </td>  
            <td class="default2s">
              <b>Nama Reagen : </b> {{$r1_reagen}}
            </td>             
          </tr>
          <tr>

          <tr>
            <td class="default2q">
               <b>HASIL TES R2</b>
            </td>    
            <td class="default2s" style="width:60px;">
              {{$r2}}
            </td>  
            <td class="default2s">
              <b>Nama Reagen : </b> {{$r2_reagen}}
            </td>             
          </tr>
          <tr>

          <tr>
            <td class="default2q">
               <b>HASIL TES R2</b>
            </td>    
            <td class="default2s" style="width:60px;">
              {{$r3}}
            </td>  
            <td class="default2s">
              <b>Nama Reagen : </b> {{$r3_reagen}}
            </td>             
          </tr>
          <tr>

          <tr>
            <td class="default2q"  style="padding-top:5px;">
               <b>KESIMPULAN HASIL TES HIV</b>
            </td>    
            <td class="default2s" colspan="2">
              {{$kes}}
            </td>                
          </tr>

          <tr>
            <td class="default2q"  style="padding-top:5px;">
               <b>NOMOR REGISTRASI NASIONAL PDP</b>
            </td>    
            <td class="default2s" style="width:70px;">
              {{$nrn_pdp}}
            </td>  
            <td class="default2s">
              <b>Tanggal Masuk PDP : </b> {{$tgl_masuk_pdp}}
            </td>                   
          </tr>
          <tr>
            <td class="default2q"  style="height:40px;">
               <b>TINDAK LANJUT (TIPK)</b>
            </td>    
            <td class="default2s" colspan="2">
              <ul>
                <?php 
                  if(isset($tl_tipk[1])) echo 
                  '<li>
                    Rujuk Konseling ...
                  </li>';
                  if(isset($tl_tipk[2])) echo 
                  '<li>
                    Rujuk ke ...
                  </li>';
                  if(isset($tl_tipk[3])) echo 
                  '<li>
                    Rujuk ke PDP dan PPIA
                  </li>';
                ?>
              </ul> 
            </td>                       
          </tr>
        </tbody>
      </table>
      <br>
    </div>
  </div>

  <div style="font-size: 75%;border:3px solid black;">
    <p style="background-color: black;padding-left:10px;margin-top:-2px;"><font color="black"> |</font></p>
    <div class="specialcase2">
      <table style="padding-left:-10px;">
        <tbody>
          <tr>
            <td class="default2q"  style="padding-top:5px;">
               Bagaimana Status HIV Pasangan?
            </td>    
            <td class="default2s"  style="padding-top:5px;">
               {{$shp}}
            </td>             
          </tr>
        </tbody>
      </table>
      <br>
    </div>
  </div>

  <div style="font-size: 75%;border:3px solid black;">
    <p style="background-color: black;padding-left:10px;margin-top:-2px;"><font color="white"> KONSELING PASCA TES </font></p>
    <div class="specialcase2" style="padding-top:-15px;">
      <table style="padding-left:-10px;">
        <tbody>
          <tr>
            <td class="default2q"  style="padding-top:5px;">
               <b>TGL KONSELING PASCA TES HIV</b>
            </td>    
            <td class="default2s" colspan="3">
              {{$tgl_konseling_pasca_tes}}
            </td>                
          </tr>
          <tr>
            <td class="default2q">
               <b>TERIMA HASIL</b>
            </td>    
            <td class="default2s" style="width:60px;">
              {{$tha}}
            </td>  
            <td class="default2s">
              <b>KAJI GEJALA TB : </b>{{$ktb}}
            </td> 
            <td class="default2s">
              <b>Jumlah Kondom yang diberikan : </b> {{$jkyd}}
            </td>               
          </tr>
          <tr>
            <td class="default2q">
               <b>TINDAK LANJUT (KTS)</b>
            </td>    
            <td class="default2s" colspan="3">
              <ul>
                <?php 
                  if(isset($tl_kts[1])) echo 
                  '<li>
                    Tes Ulang
                  </li>';
                  if(isset($tl_kts[2])) echo 
                  '<li>
                    Rujuk ke PDP
                  </li>';
                  if(isset($tl_kts[3])) echo 
                  '<li>
                    Rujuk ke Layanan PTRM
                  </li>';
                  if(isset($tl_kts[4])) echo 
                  '<li>
                    Rujuk ke Layanan IMS
                  </li>';
                  if(isset($tl_kts[5])) echo 
                  '<li>
                    Rujuk ke PPIA
                  </li>';
                  if(isset($tl_kts[6])) echo 
                  '<li>
                    Rujuk ke Rehab
                  </li>';
                  if(isset($tl_kts[7])) echo 
                  '<li>
                    Rujuk ke Layanan LASS
                  </li>';
                  if(isset($tl_kts[8])) echo 
                  '<li>
                    Rujuk ke Layanan TB
                  </li>';
                  if(isset($tl_kts[9])) echo 
                  '<li>
                    Rujuk ke Profesional
                  </li>';
                  if(isset($tl_kts[10])) echo 
                  '<li>
                    Rujuk ke petugas pendukung
                  </li>';
                  if(isset($tl_kts[10])) {
                    if(isset($rpp[1])) echo 
                      '<li>
                        - Komunitas
                      </li>';
                    if(isset($rpp[2])) echo 
                      '<li>
                        - LSM ...
                      </li>';
                    if(isset($rpp[3])) echo 
                      '<li>
                        - Kader
                      </li>';
                  }
                  if(isset($tl_kts[11])) echo 
                  '<li>
                    Konseling, '.$ksl.'
                  </li>';
                ?>
                
              </ul> 
            </td>                
          </tr>
          <tr>
            <td class="default2q">
               <b>NAMA KONSELOR / PETUGAS KESEHATAN</b>
            </td>    
            <td class="default2s" colspan="3">
              {{$nama_konselor}}
            </td>                
          </tr>
          <tr>
            <td class="default2q">
               <b>STATUS LAYANAN</b>
            </td>    
            <td class="default2s" colspan="3">
              {{$sl}}
            </td>                
          </tr>
          <tr>
            <td class="default2q" style="height:35px;">
               <b>JENIS PELAYANAN</b>     
            </td>    
            <td class="default2s" colspan="3">
              {{$jpe}}
            </td>                
          </tr>
        </tbody>
      </table>
      <br>
    </div>
  </div>

</body>

<html>