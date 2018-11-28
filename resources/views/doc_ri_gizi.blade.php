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

  <h2 align="center">ASUHAN GIZI</h2><br>
  

  <h4 style="font-size:80%;padding-left:5px;margin-bottom:4%" >ASESMEN GIZI</h4>

  <h4 style="font-size:70%;padding-left:5px;margin-bottom:4%" >RIWAYAT KLIEN</h4>
    <div class="row">
      <div class="column">
        <div style="padding-left:10px;">  
           <table style="font-size: 70%;" >
            <tbody>
              <tr>
                <td class="konten_l_question">
                  Umur
                </td>    
                <td class="konten_l_answer">  
                  : {{$umur}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Etnik/Agama
                </td>    
                <td class="konten_l_answer">  
                  : {{$etnik_agama}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Jenis Kelamin
                </td>    
                <td class="konten_l_answer">  
                  : {{$jenis_kelamin}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Kemampuan Baca
                </td>    
                <td class="konten_l_answer">  
                  : {{$kemampuan_baca}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Pekerjaan
                </td>    
                <td class="konten_l_answer">  
                  : {{$pekerjaan}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Peran dalam keluarga
                </td>    
                <td class="konten_l_answer">  
                  : {{$peran_dalam_keluarga}}
                </td>                
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="column">
        <div style="padding-left:10px;">  
           <table style="font-size: 70%;" >
            <tbody>
              <tr>
                <td class="konten_l_question">
                  Keterbatasan Fisik
                </td>    
                <td class="konten_l_answer">  
                  : {{$keterbatasan_fisik}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Mobilitas
                </td>    
                <td class="konten_l_answer">  
                  : {{$mobilitas}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Perokok
                </td>    
                <td class="konten_l_answer">  
                  : {{$perokok}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Riwayat Medis/Kesehatan Pasien/Keluarga
                </td>    
                <td class="konten_l_answer">  
                  : {{$riwayat}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Riwayat Sosial Ekonomi
                </td>    
                <td class="konten_l_answer">  
                  : {{$riwayat_sosial_ekonomi}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Riwayat Diagnosa Dokter
                </td>    
                <td class="konten_l_answer">  
                  : {{$diagnosa_dokter}}
                </td>                
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

   
    <h4 style="font-size:70%;padding-left:5px;margin-bottom:4%" >FOOD HISTORY</h4>
    <div class="row">
      <div class="column">
        <div style="padding-left:10px;">  
           <table style="font-size: 70%;" >
            <tbody>
              <tr>
                <td class="konten_l_question">
                  Alergi makanan Makanan
                </td>    
                <td class="konten_l_answer">  
                  : {{$alergi_makanan}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Ketidaksukaan Makanan 
                </td>    
                <td class="konten_l_answer">  
                  : {{$ketidaksukaan_makanan}}
                </td>                
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="column">
        <div style="padding-left:10px;">  
           <table style="font-size: 70%;" >
            <tbody>
              <tr>
                <td class="konten_l_question">
                  Pengalaman diit/kenseling sebelumnya
                </td>    
                <td class="konten_l_answer">  
                  : {{$konseling_sebelumnya}}, {{$keterangan_konseling}}
                </td>                
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <h4 style="font-size:70%;padding-left:5px;margin-bottom:4%" >DATA ANROPOMETRI</h4>
    <div class="row">
      <div class="column"> 
        <div style="padding-left:10px;">  
           <table style="font-size: 70%;" >
            <tbody>
              <tr>
                <td class="konten_l_question">
                  BB saat ini
                </td>    
                <td class="konten_l_answer">  
                  : {{$bb_saat_ini}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  PB/TB 
                </td>    
                <td class="konten_l_answer">  
                  : {{$pbtb}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  IMT
                </td>    
                <td class="konten_l_answer">  
                  : {{$imt}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Status Gizi
                </td>    
                <td class="konten_l_answer">  
                  : {{$status_gizi}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Riwayat Penurunan BB
                </td>    
                <td class="konten_l_answer">  
                  :
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  BB biasanya
                </td>    
                <td class="konten_l_answer">  
                  : {{$bb_biasanya}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Penurunan BB
                </td>    
                <td class="konten_l_answer">  
                  : {{$bb_biasanya}} % , mgg/bln
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Pengukuran lainnya
                </td>    
                <td class="konten_l_answer">  
                  : {{$pengukuran_lainnya}}
                </td>                
              </tr>
            </tbody>
          </table>
        </div>

      </div>
      
    </div>

    <h4 style="font-size:70%;padding-left:5px;margin-bottom:4%" >BIOKIMIA TERKAIT GIZI</h4>
    <div style="padding-left:10px;">  
       <table style="font-size: 70%;" >
        <tbody>
          <tr>
            <td class="konten_l_question" colspan="2">
              {{$biokimia_terkait}}
            </td>                 
          </tr>
        </tbody>
      </table>
    </div>

    <h4 style="font-size:70%;padding-left:5px;margin-bottom:4%" >FISIK KLINIS - GIZI</h4>
    <div class="row">
      <div class="column">
        <div style="padding-left:10px;">  
           <table style="font-size: 70%;" >
            <tbody>
              <tr>
                <td class="konten_l_question">
                  Atropi Otot Lengan
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk1}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Hilang Lemak Subkutan
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk2}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Odema
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk3}}3
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Nafsu Makan
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk4}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Mual
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk5}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Muntah
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk6}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Kembung
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk7}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Konstipasi
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk8}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Diare
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk9}}
                </td>                
              </tr>
              <tr>
            </tbody>
          </table>
        </div>
      </div>
       <div class="column">
        <div style="padding-left:10px;">  
           <table style="font-size: 70%;" >
            <tbody>
              <tr>
                <td class="konten_l_question">
                  Kulit
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk10}}
                </td>                
              </tr>
              <tr>
                <td class="konten_l_question">
                  Kepala dan Mata
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk11}}
                </td>                
              </tr>
               <tr>
                <td class="konten_l_question">
                  Gigi Geligi
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk12}}
                </td>                
              </tr>
               <tr>
                <td class="konten_l_question">
                  Gangguan Menelan
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk13}}
                </td>                
              </tr>
               <tr>
                <td class="konten_l_question">
                  Gangguan Mengunyah
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk14}}
                </td>                
              </tr>
               <tr>
                <td class="konten_l_question">
                  Gangguan Menghisap
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk15}}
                </td>                
              </tr>
               <tr>
                <td class="konten_l_question" colspan="2">
                  Tanda-tanda Vital:
                </td>    
              </tr>
               <tr>
                <td class="konten_l_question">
                  &emsp;Nadi
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk16}}
                </td>                
              </tr>
               <tr>
                <td class="konten_l_question">
                  &emsp;Respitori
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk17}}
                </td>                
              </tr>
               <tr>
                <td class="konten_l_question">
                  &emsp;Suhu
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk18}}
                </td>                
              </tr>
               <tr>
                <td class="konten_l_question">
                  Data Lain
                </td>    
                <td class="konten_l_answer">  
                  : {{$fk19}}
                </td>                
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>




    <h4 style="font-size:80%;padding-left:5px;margin-bottom:4%" >DIANOSA GIZI</h4>
    <table style="font-size: 70%;padding-left:5px" >
      <tbody>
        <tr>
          <td class="konten_l_question" colspan="2" style="padding-left:5px">
            {{$diagnosa_gizi}}
          </td>                    
        </tr>
      </tbody>
    </table>

    <h4 style="font-size:80%;padding-left:5px;margin-bottom:4%" >INTERVENSI GIZI</h4>
    <table style="font-size: 65%;padding-left:5px">
      <tbody>
        <tr>
          <td class="konten_s_question" style="padding-left:5px">
            Tujuan
          </td>    
          <td class="konten_s_answer">  
            : {{$tujuan_intervensi}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question" style="padding-left:5px">
            Target
          </td>    
          <td class="konten_s_answer">  
            : {{$target_intervensi}}
          </td>                
        </tr>
      </tbody>
    </table>

    <h4 style="font-size:80%;padding-left:5px;margin-bottom:4%" >RENCANA MONITORING EVALUASI GIZI</h4>
    <table style="font-size: 70%;padding-left:5px" >
      <tbody>
        <tr>
          <td class="konten_l_question" colspan="2" style="padding-left:5px">
            {{$rencana_monitoring_evaluasi}}
          </td>                    
        </tr>
      </tbody>
    </table>

    <hr>

    <div class="row" style="font-size:65%;">
      <div class="column">
        <table style="font-size: 70%;padding-left:5px" >
          <tbody>
            <tr>
              <td class="konten_s_question" colspan="2" style="padding-left:5px">
                Tanggal
              </td>  
              <td class="konten_s_answer" colspan="2" style="padding-left:5px">
                :-
              </td>                   
            </tr>
            <tr>
              <td class="konten_s_question" colspan="2" style="padding-left:5px">
                Jam
              </td>  
              <td class="konten_s_answer" colspan="2" style="padding-left:5px">
                :-
              </td>                   
            </tr>
            <tr>
              <td class="konten_s_question" colspan="2" style="padding-left:5px">
                Nama Ahli Gizi
              </td>  
              <td class="konten_s_answer" colspan="2" style="padding-left:5px">
                :-
              </td>                   
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <p style="text-align: center;">Tanda Tangan</p>
      </div>
    </div>
    

    <pagebreak>
    <table>
      <thead>
        <tr>
          <th class="default" width="" rowspan="2">Makan Pagi</th>
          <th class="default" width="" colspan="2">Banyak</th>
          <th class="default" width="" rowspan="2">Snack Pagi</th>
          <th class="default" width="" colspan="2">Banyak</th>
        </tr>
        <tr>
          <th class="default" width="10%">Gr</th>
          <th class="default" width="10%">URT</th>
          <th class="default" width="10%">Gr</th>
          <th class="default" width="10%">URT</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td class="default">
            1. Nasi<br>
            2. Lauk<br>
            3. Sayur<br>
            <br>
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
        </tr>
      </tbody>
    </table>
    <table>
      <thead>
        <tr>
          <th class="default" width="" rowspan="2">Makan Pagi</th>
          <th class="default" width="" colspan="2">Banyak</th>
          <th class="default" width="" rowspan="2">Snack Pagi</th>
          <th class="default" width="" colspan="2">Banyak</th>
        </tr>
        <tr>
          <th class="default" width="10%">Gr</th>
          <th class="default" width="10%">URT</th>
          <th class="default" width="10%">Gr</th>
          <th class="default" width="10%">URT</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td class="default">
            1. Nasi<br>
            2. Lauk<br>
            3. Tempe<br>
            4. Sayur<br>
            5. Buah
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
        </tr>
      </tbody>
    </table>
    <table>
      <thead>
        <tr>
          <th class="default" width="" rowspan="2">Makan Pagi</th>
          <th class="default" width="" colspan="2">Banyak</th>
          <th class="default" width="" rowspan="2">Snack Pagi</th>
          <th class="default" width="" colspan="2">Banyak</th>
        </tr>
        <tr>
          <th class="default" width="10%">Gr</th>
          <th class="default" width="10%">URT</th>
          <th class="default" width="10%">Gr</th>
          <th class="default" width="10%">URT</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td class="default">
            1. Nasi<br>
            2. Lauk<br>
            3. Tempe<br>
            4. Sayur<br>
            5. Buah
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
          <td class="default">
            -
          </td>
        </tr>
      </tbody>
    </table>
    <br>
    <table>
      <thead>
        <tr>
          <th class="default" width="20%"></th>
          <th class="default" width="20%">ENERGI (Kal)</th>
          <th class="default" width="20%">PROTEIN (Gr)</th>
          <th class="default" width="20%">LEMAK (Gr)</th>
          <th class="default" width="20%">KH (Gr)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="default">-</td>
          <td class="default">-</td>
          <td class="default">-</td>
          <td class="default">-</td>
          <td class="default">-</td>
        </tr>
        <tr>
          <td class="default">-</td>
          <td class="default">-</td>
          <td class="default">-</td>
          <td class="default">-</td>
          <td class="default">-</td>
        </tr>
        <tr>
          <td class="default">-</td>
          <td class="default">-</td>
          <td class="default">-</td>
          <td class="default">-</td>
          <td class="default">-</td>
        </tr>
      </tbody>
    </table>

    <pagebreak>

    <table>
    <tbody>
      <tr>
        <td width="20%">Validasi Oleh</td>
        <td width="20%">: -</td>
        <td width="20%"></td>
        <td width="20%">Dokter Pengirim</td>
        <td width="20%">: -</td>
      </tr>
      <tr>
        <td>Bahan Diterima</td>
        <td>: -</td>
        <td></td>
        <td>Ruangan</td>
        <td>: -</td>
      </tr>
      <tr>
        <td>Hasil Dicetak</td>
        <td>: -</td>
        <td></td>
        <td>Tanggal Permintaan</td>
        <td>: -</td>
      </tr>
    </tbody>
  </table>

  <br>

  <table>
    <thead>
      <tr>
        <th class="big-box" width="10%">TANGGAL</th>
        <th class="big-box" width="10%">BB (KG)</th>
        <th class="big-box" width="60%">KONSULTASI GIZI/PENGAMATAN</th>
        <th class="big-box" width="20%">PARAF & NAMA</th>  
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="s-box">21/06/2008</td>
        <td class="s-box">-</td>
        <td class="s-box">-</td>
        <td class="s-box">-</td>
      </tr>
      <tr>
        <td class="s-box">21/06/2008</td>
        <td class="s-box">-</td>
        <td class="s-box">-</td>
        <td class="s-box">-</td>
      </tr>
      <tr>
        <td class="s-box">21/06/2008</td>
        <td class="s-box">-</td>
        <td class="s-box">-</td>
        <td class="s-box">-</td>
      </tr>
      <tr>
        <td class="s-box">21/06/2008</td>
        <td class="s-box">-</td>
        <td class="s-box">-</td>
        <td class="s-box">-</td>
      </tr>
    </tbody>
  </table>
</body>

<html>