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


  <h2 align="center" style="font-size:110%;">LEMBAR TRANSFER PASIEN INTERNAL RUMAH SAKIT</h2>

  <br>
  <div style="font-size: 15%;"> 

    <div class="row" >
      <div class="column" style="width:250px">
        <table>
          <tbody>
            <tr>
              <td class="konten_question" style="width:110px;">
                Tanggal Masuk
              </td>    
              <td class="konten_answer" style="width:90px;">  
                : {{$tanggal_masuk}}
              </td>                
            </tr>
            <tr>
              <td class="konten_question">
                DPJP
              </td>    
              <td class="konten_answer">  
                : {{$dpjp}}
              </td>                
            </tr>
            <tr>
              <td class="konten_question">
                Dokter Konsulen 1
              </td>    
              <td class="konten_answer">  
                : {{$dokter_konsulen_1}}
              </td>                
            </tr>
            <tr>
              <td class="konten_question">
                Dokter Konsulen 2
              </td>    
              <td class="konten_answer">  
                : {{$dokter_konsulen_2}}
              </td>                
            </tr>
            <tr>
              <td class="konten_question">
                Dokter Konsulen 3
              </td>    
              <td class="konten_s_answer">  
                : {{$dokter_konsulen_3}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>

      <div class="column">
        <table>
          <tbody>
            <tr>
              <td class="konten_question" style="width:150px;">
                Ruang/Kamar
              </td>    
              <td class="konten_answer">  
                : {{$ruang_kamar}}
              </td>                
            </tr>
            <tr>
              <td class="konten_question">
                Tgl/Jam Pindah 
              </td>    
              <td class="konten_answer">  
                : {{$tanggal_pindah}}/{{$jam_pindah}}
              </td>                
            </tr>
            <tr>
              <td class="konten_question">
                Pindah ke ruang/kamar
              </td>    
              <td class="konten_answer">  
                : {{$pindah_ke}}
              </td>                
            </tr>
            <tr>
              <td class="konten_question">
                Diagnosis Sekarang
              </td>    
              <td class="konten_answer">  
                : {{$diagnosis_sekarang}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <h4>I. PEMERIKSAAN FISIK</h4>
  <hr class="limit">
  <div>  
     <table style="font-size: 60%;">
      <tbody>
        <tr>
          <td class="konten_question">
            Keadaan Umum
          </td>    
          <td class="konten_answer">  
            : {{$keadaan_umum}}
          </td>                
        </tr>
        <tr>
          <td class="konten_question">
            Kesadaran 
          </td>    
          <td class="konten_answer">  
            : {{$kesadaran}}
          </td>                
        </tr>
        <tr>
          <td class="konten_question">
            Pemeriksaan tanda-tanda vital
          </td>    
          <td class="konten_answer">  
          </td>                
        </tr>
        <tr>
          <td class="konten_question">
            Tensi
          </td>    
          <td class="konten_answer">  
            : {{$tensi}}
          </td>                
        </tr>
        <tr>
          <td class="konten_question">
            Suhu
          </td>    
          <td class="konten_answer">  
            : {{$suhu}}
          </td>                
        </tr>

        <tr>
          <td class="konten_question">
            Nadi
          </td>    
          <td class="konten_answer">  
            : {{$nadi}}
          </td>                
        </tr>

        <tr>
          <td class="konten_question">
            
          </td>    
          <td class="konten_answer">  
            
          </td>                
        </tr>

        <tr>
          <td class="konten_question">
            Riwayat Penyakit
          </td>    
          <td class="konten_answer">  
            : {{$riwayat_penyakit}}
          </td>                
        </tr>
        <tr>
          <td class="konten_question">
            Riwayat Alergi
          </td>    
          <td class="konten_answer">  
            : {{$riwayat_alergi}}
          </td>                
        </tr>
        <tr>
          <td class="konten_question">
            Alasan Pindah Ruangan
          </td>    
          <td class="konten_answer">  
            : {{$alasan_pindah}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <h4>II. PEMERIKSAAN PENUNJANG YANG SUDAH DILAKUKAN</h4>
  <hr class="limit">
  <div style="font-size: 60%;">

    <div class="row">
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_question">
                Laboratorium
              </td>    
              <td class="konten_answer">  
                : {{$laboratorium}}
              </td>                
            </tr>
            <tr>
              <td class="konten_question">
                EKG 
              </td>    
              <td class="konten_answer">  
                : {{$ekg}}
              </td>                
            </tr>
            <tr>
              <td class="konten_question">
                Radiologi
              </td>    
              <td class="konten_answer">  
                : {{$radiologi}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_question">
                CT Scan
              </td>    
              <td class="konten_answer">  
                : {{$ct_scan}}
              </td>                
            </tr>
            <tr>
              <td class="konten_question">
                USG
              </td>    
              <td class="konten_answer">  
                : {{$usg}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <h4>III. TINDAKAN MEDIS YANG SUDAH DILAKUKAN</h4>
  <hr class="limit">
  <div  style="font-size: 70%;margin-top:-2%;">  
     <p>{{$tindakan_medis}}</p>
  </div>

  <h4 style="margin-top:-1%;">IV. PEMBERIAN THERAPI</h4>
  <hr class="limit">
  <div style= style="font-size: 60%;">  
     

     <div class="row">
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_question">
                Infus :
              </td>                 
            </tr>
            <tr>
              <td class="konten_question">
                {{$infus}}
              </td>    
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_question">
                Obat Injeksi:
              </td>               
            </tr>
            <tr>
              <td class="konten_question">
                {{$obat_injeksi}}
              </td>               
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_question">
                Obat Oral:
              </td>               
            </tr>
            <tr>
              <td class="konten_question">
                {{$obat_oral}}
              </td>               
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <br>
    
    <div class="row">
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_question">
                Lain-lainnya:
              </td>               
            </tr>
            <tr>
              <td class="konten_question">
                {{$lain_lain}}
              </td>               
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <hr class="limit">
  <div>  
     <table style="font-size: 60%;" >
      <tbody>
        <tr>
          <td class="konten_question">
            Nilai PANSS EC
          </td>    
          <td class="konten_answer">  
            : {{$panss_ec}}
          </td>                
        </tr>
        <tr>
          <td class="konten_question">
            Kategori pasien transfer
          </td>    
          <td class="konten_answer">  
            : Level {{$kategori}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>

  <hr>
    <div class="panel-body">
      <table class="tabel" style="font-size: 75%;">
          <tbody>
            <tr>
              <td class="default3" style="text-align:left;vertical-align:top;height:40px">
                <table>
                  <tbody>
                    <tr>
                      <td class="konten_question" style="padding-left:5px;font-size: 80%;width:1px;" >
                        Tanggal
                      </td>    
                      <td class="konten_answer" style="font-size: 80%;">  
                        : {{$tanggal}}
                      </td>                
                    </tr>
                    <tr>
                      <td class="konten_question" style="padding-left:5px;font-size: 80%;width:1px;">
                        Jam
                      </td>    
                      <td class="konten_answer" style="font-size: 80%;">  
                        : {{$jam}}
                      </td>                
                    </tr>
                  </tbody>
                </table>
              </td>
              <td class="default3" style="text-align:center;vertical-align:middle;height:30px" style="font-size:80%">
                Yang Menyerahkan
                <br>
                <br>
                <br>
                {{$yang_menyerahkan}}
              </td>
              <td class="default3" style="text-align:center;vertical-align:middle;height:30px" style="font-size:80%">
                Yang menerima
                <br>
                <br>
                <br>
                {{$yang_menerima}}
              </td>  
            </tr>
          </tbody>
      </table>
    </div>

  <table style="font-size: 60%;">
    <thead>
      <tr>
        <th class="default">LEVEL</th>
        <th class="default">KATEGORI</th>
        <th class="default">PENDAMPING</th>
        <th class="default">PERALATAN</th>
      </tr>  
    </thead>

    <tbody>
      <tr>
        <td class="default" style="text-align:center;">0</td>
        <td class="default">Pasien yang hanya membutuhkan ruang perawatan biasa</td>
        <td class="default">Perawat</td>
        <td class="default">Status rekam medis pasien. Hasil pemeriksaan penunjang, form transfer pasien</td>
      </tr>

      <tr>
        <td class="default" style="text-align:center;">1</td>
        <td class="default">Kondisi pasien yang beresiko mengalami perburukan, baru di pindahkan dari HCU/ICU, pasien yang akan dirawat di ruang perawatan biasa dengan pengawasan tim perawatan khusus (HND)</td>
        <td class="default">Perawat/Bidan Sopir ambulance Security</td>
        <td class="default">Peralatan Level 0, oksigen, suction, tiang infus portable, Tas emergency</td>
      </tr>

      <tr>
        <td class="default" style="text-align:center;">2</td>
        <td class="default">Pasien yang memerlukan observasi ketat atau intervensi khus misalnya pada pasien yang mengalami kegagalan satu sistem organ, pasien perawatan post operatif</td>
        <td class="default">Dokter, Perawat/bidan, Sopir ambulance, Security</td>
        <td class="default">Peralatan level 1 dan mesin defibrilator bila diperlukan</td>
      </tr>

       <tr>
        <td class="default" style="text-align:center;">3</td>
        <td class="default">Pasien yang mengalami kegagalan multi organ dan memerlukan bantuan hidup jangka panjang ditambah dengan kebutuhan akan alat bantu/pernafasan</td>
        <td class="default">Dokter, Perawat/Bidan, Sopir ambulance, Security</td>
        <td class="default">Peralatan level 2 + alat bantu pernafasan</td>
      </tr>

    </tbody>
  </table>

</body>

<html>