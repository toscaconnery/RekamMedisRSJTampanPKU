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


  <h2 align="center" style="font-size:110%;">LEMBAR TRANSFER PASIEN EKSTERNAL RUMAH SAKIT</h2>
  <h2 align="center" style="font-size:85%;padding-top:-10px;"> Nomor : {{$nomor}}</h2>

  <hr>

  <div style="font-size: 60%;">

    <div class="row">
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_l_question" style="width:30%;">
                RS Tujuan
              </td>    
              <td class="konten_l_answer" style="width:40%;">  
                : {{$rs_tujuan}}
              </td>                
            </tr>
            <tr>
              <td class="konten_l_question">
                Petugas RS tujuan yang dihubungi 
              </td>    
              <td class="konten_l_answer">  
                : {{$petugas_dihubungi}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_l_question">
                Tanggal
              </td>    
              <td class="konten_l_answer">  
                : {{$tanggal_dihubungi}}
              </td>                
            </tr>
            <tr>
              <td class="konten_l_question">
                Jam
              </td>    
              <td class="konten_l_answer">  
                : {{$jam_dihubungi}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <hr>
  <div style="font-size: 60%;">

    <div class="row">
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_l_question" style="width:50%;">
                Alasan/tujuan transfer
              </td>    
              <td class="konten_l_answer" style="width:50%;">  
                : {{$alasan_transfer}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_l_question">
                Tanggal transfer
              </td>    
              <td class="konten_l_answer">  
                : {{$tanggal_transfer}}
              </td>                
            </tr>
            <tr>
              <td class="konten_l_question">
                Jam transfer
              </td>    
              <td class="konten_l_answer">  
                : {{$jam_transfer}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <hr>
  <div style="font-size: 60%;">

    <div class="row">
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_l_question" style="width:50%;">
                Atas Permintaan
              </td>    
              <td class="konten_l_answer" style="width:50%;">  
                : {{$atas_permintaan}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column" style="line-height:0px;">
        <table style="font-size: 60%;">
          <tbody>
            <tr>
              <td class="konten_l_question">
                Kategori pasien transfer
              </td>    
              <td class="konten_l_answer">  
                : {{$kategori_pasien}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <hr>
  <div style="font-size: 60%;">
  	<table style="font-size: 60%;">
      <tbody>
        <tr>
          <td class="konten_l_question">
            Petugas Pendamping
          </td>                
        </tr>
        <tr>
          <td class="konten_l_question">
            <ul>
            	<li></li>
            	<li></li>
            </ul>
          </td>                   
        </tr>
      </tbody>
    </table>
  </div>



	<hr>
	<div style= style="font-size: 65%;"> 
    <p class="question">Tanggal Masuk RS: {{$tanggal_masuk_rs}}</p>
    <br>

		<p class="question"><b>Anamnesa:</b></p>
		<p class="answer">{{$anamnesa}}</p>

    <p class="question"><b>Diagnosa:</b></p>
    <p class="answer">{{$diagnosa}}</p>

		<p class="question"><b>Indikasi di rawat:</b></p>
		<p class="answer">{{$indikasi_dirawat}}</p>

		<p class="question"><b>Tindakan yang telah dilakukan:</b></p>
		<p class="answer">{{$tindakan_dilakukan}}</p>

		<p class="question"><b>Terapi yang telah diberikan:</b></p>
		<p class="answer">{{$terapi_diberikan}}</p>

		<p class="question"><b>Resiko:</b></p>
		<p class="answer">{{$resiko}}</p>

		<p class="question"><b>Transportasi yang digunakan: </b>{{$transportasi}}</p>
  	
  	</div>

  	<br>

  	<table style="font-size: 60%;">
    <thead>
      <tr>
        <th class="default" width="5%">JAM</th>
        <th class="default" width="20%">KEADAAN UMUM</th>
        <th class="default" width="15%">TD mmHg</th>
        <th class="default" width="10%">HR x/mnt</th>
        <th class="default" width="10%">RR x/mnt</th>
        <th class="default" width="10%">SUHU (<sup>o</sup>C)</th>
        <th class="default" width="10%">SpO2</th>
        <th class="default" width="10%">LAINNYA</th>
        <th class="default" width="15%">KET</th>
      </tr>  
    </thead>

    <tbody>
      <tr>
       <td class="default" style="text-align:center;"><br></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
      </tr>
      <tr>
        <td class="default" style="text-align:center;" colspan="9"><b>STATUS PASIEN SEBELUM TRANSFER</b></td>
      </tr>
       <tr>
        <td class="default" style="text-align:center;">{{$jam_sebelum}}</td>
        <td class="default" style="text-align:center;">{{$keadaan_umum_sebelum}}</td>
        <td class="default" style="text-align:center;">{{$td_sebelum}}</td>
        <td class="default" style="text-align:center;">{{$hr_sebelum}}</td>
        <td class="default" style="text-align:center;">{{$rr_sebelum}}</td>
        <td class="default" style="text-align:center;">{{$suhu_sebelum}}</td>
        <td class="default" style="text-align:center;">{{$spo2_sebelum}}</td>
        <td class="default" style="text-align:center;">{{$lainnya_sebelum}}</td>
        <td class="default" style="text-align:center;">{{$keterangan_sebelum}}</td>
      </tr>
  
      <tr>
        <td class="default" style="text-align:center;" colspan="9"><b>STATUS PASIEN SELAMA TRANSFER</b></td>
      </tr>
      <tr>
        <td class="default" style="text-align:center;">{{$jam_selama}}</td>
        <td class="default" style="text-align:center;">{{$keadaan_umum_selama}}</td>
        <td class="default" style="text-align:center;">{{$td_selama}}</td>
        <td class="default" style="text-align:center;">{{$hr_selama}}</td>
        <td class="default" style="text-align:center;">{{$rr_selama}}</td>
        <td class="default" style="text-align:center;">{{$suhu_selama}}</td>
        <td class="default" style="text-align:center;">{{$spo2_selama}}</td>
        <td class="default" style="text-align:center;">{{$lainnya_selama}}</td>
        <td class="default" style="text-align:center;">{{$keterangan_selama}}</td>
      </tr>

      <tr>
       <td class="default" style="text-align:center;"><br></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
        <td class="default" style="text-align:center;"></td>
      </tr>
      
      <tr>
      	<td class="default" style="text-align:right;border-right: white;" colspan="7"></td>
        <td class="default" style="text-align:center;border-left: white;" colspan="2">
        	<p>Nama dan Tanda tangan Dokter</p>
        	<br>
        	<br>
        	<br>
        	<p>( {{$nama_dokter}} )</p>
        </td>
      </tr>
      <tr>
        <td class="default" style="text-align:center;" colspan="9"><b>STATUS AKHIR SETELAH TRANSFER</b></td>
      </tr>
      <tr>
        <td class="default" style="text-align:center;">{{$jam_setelah}}</td>
        <td class="default" style="text-align:center;">{{$keadaan_umum_setelah}}</td>
        <td class="default" style="text-align:center;">{{$td_setelah}}</td>
        <td class="default" style="text-align:center;">{{$hr_setelah}}</td>
        <td class="default" style="text-align:center;">{{$rr_setelah}}</td>
        <td class="default" style="text-align:center;">{{$suhu_setelah}}</td>
        <td class="default" style="text-align:center;">{{$spo2_setelah}}</td>
        <td class="default" style="text-align:center;">{{$lainnya_setelah}}</td>
        <td class="default" style="text-align:center;">{{$keterangan_setelah}}</td>
      </tr>
    </tbody>
  </table>

  

  
 
	<div class="panel-body">
	  <table class="tabel" style="font-size: 75%;">
	      <tbody>
	        <tr>
	          <td class="default3" style="text-align:left;vertical-align:middle;height:70px">
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
	                <tr>
	                  <td class="konten_question" style="padding-left:5px;font-size: 80%;width:1px;">
	                    RS
	                  </td>    
	                  <td class="konten_answer" style="font-size: 80%;">  
	                    : {{$rs}}
	                  </td>                
	                </tr>
	              </tbody>
	            </table>
	          </td>
	          <td class="default3" style="font-size:80%;text-align:center;vertical-align:middle;height:70px">
	            Yang Menyerahkan
              <br>
              <br>
              <br>
              <br>
              {{$nama_petugas_menyerahkan}}
	          </td>
	          <td class="default3" style="font-size:80%;text-align:center;vertical-align:middle;height:70px">
	            Yang Menerima
              <br>
              <br>
              <br>
              <br>
              {{$nama_petugas_penerima}}
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