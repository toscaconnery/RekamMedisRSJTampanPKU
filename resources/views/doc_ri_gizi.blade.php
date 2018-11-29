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

    <div class="row" style="font-size:70%;">
      <div class="column">
        <table style="font-size: 70%;padding-left:5px" >
          <tbody>
            <tr>
              <td class="konten_s_question" colspan="2" style="padding-left:5px">
                Tanggal
              </td>  
              <td class="konten_s_answer" colspan="2" style="padding-left:5px">
                :{{$tanggal}}
              </td>                   
            </tr>
            <tr>
              <td class="konten_s_question" colspan="2" style="padding-left:5px">
                Jam
              </td>  
              <td class="konten_s_answer" colspan="2" style="padding-left:5px">
                :{{$jam}}
              </td>                   
            </tr>
            <tr>
              <td class="konten_s_question" colspan="2" style="padding-left:5px">
                Nama Ahli Gizi
              </td>  
              <td class="konten_s_answer" colspan="2" style="padding-left:5px">
                :{{$nama_ahli_gizi}}
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
            1. Nasi
            <br>
          </td>
          <td class="default">
            {{$p_gr_nasi}}
          </td>
          <td class="default">
            {{$p_urt_nasi}}
          </td>
          <td class="default" rowspan="3">
            {{$p_nama_snack}}
          </td>
          <td class="default" rowspan="3">
            {{$p_gr_snack}}
          </td>
          <td class="default" rowspan="3">
            {{$p_urt_snack}}
          </td>
        </tr>

         <tr>
          <td class="default">
            2. Lauk
            <br>
          </td>
          <td class="default">
            {{$p_gr_lauk}}
          </td>
          <td class="default">
            {{$p_urt_lauk}}
          </td>
        </tr>

         <tr>
          <td class="default">
            3. Sayur
            <br>
          </td>
          <td class="default">
            {{$p_gr_sayur}}
          </td>
          <td class="default">
            {{$p_urt_sayur}}
          </td>
        </tr>
      </tbody>
    </table>

    <table>
      <thead>
        <tr>
          <th class="default" width="" rowspan="2">Makan Siang</th>
          <th class="default" width="" colspan="2">Banyak</th>
          <th class="default" width="" rowspan="2">Snack Siang</th>
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
            1. Nasi
          </td>
          <td class="default">
            {{$s_gr_nasi}}
          </td>
          <td class="default">
            {{$s_urt_nasi}}
          </td>
          <td class="default" rowspan="5">
            {{$s_nama_snack}}
          </td>
          <td class="default" rowspan="5">
            {{$s_gr_snack}}
          </td>
          <td class="default" rowspan="5">
            {{$s_urt_snack}}
          </td>
        </tr>
        <tr>
          <td class="default">
            2. Lauk
          </td>
          <td class="default">
            {{$s_gr_lauk}}
          </td>
          <td class="default">
            {{$s_urt_lauk}}
          </td>
        </tr>
        <tr>
          <td class="default">
            3. Tempe
          </td>
          <td class="default">
            {{$s_gr_tempe}}
          </td>
          <td class="default">
            {{$s_urt_tempe}}
          </td>
        </tr>
        <tr>
          <td class="default">
            4. Sayur<br>
          </td>
          <td class="default">
            {{$s_gr_sayur}}
          </td>
          <td class="default">
            {{$s_urt_sayur}}
          </td>
        </tr>
        <tr>
          <td class="default">
            5. Buah
          </td>
          <td class="default">
            {{$s_gr_buah}}
          </td>
          <td class="default">
            {{$s_urt_buah}}
          </td>
        </tr>
      </tbody>
    </table>
    <table>
      <thead>
        <tr>
          <th class="default" width="" rowspan="2">Makan Malam</th>
          <th class="default" width="" colspan="2">Banyak</th>
          <th class="default" width="" rowspan="2">Snack Malam</th>
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
            1. Nasi
          </td>
          <td class="default">
            {{$m_gr_nasi}}
          </td>
          <td class="default">
            {{$m_urt_nasi}}
          </td>
          <td class="default" rowspan="5">
            {{$m_nama_snack}}
          </td>
          <td class="default" rowspan="5">
            {{$m_gr_snack}}
          </td>
          <td class="default" rowspan="5">
            {{$m_urt_snack}}
          </td>
        </tr>
        <tr>
          <td class="default">
            2. Lauk
          </td>
          <td class="default">
            {{$m_gr_lauk}}
          </td>
          <td class="default">
            {{$m_urt_lauk}}
          </td>
        </tr>
        <tr>
          <td class="default">
            3. Tempe
          </td>
          <td class="default">
            {{$m_gr_tempe}}
          </td>
          <td class="default">
            {{$m_urt_tempe}}
          </td>
        </tr>
        <tr>
          <td class="default">
            4. Sayur
          </td>
          <td class="default">
            {{$m_gr_sayur}}
          </td>
          <td class="default">
            {{$m_urt_sayur}}
          </td>
        </tr>
        <tr>
          <td class="default">
            5. Buah
          </td>
          <td class="default">
            {{$m_gr_buah}}
          </td>
          <td class="default">
            {{$m_urt_buah}}
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
          <td class="default">{{$energi_pagi}}</td>
          <td class="default">{{$protein_pagi}}</td>
          <td class="default">{{$lemak_pagi}}</td>
          <td class="default">{{$kh_pagi}}</td>
        </tr>
        <tr>
          <td class="default">-</td>
          <td class="default">{{$energi_siang}}</td>
          <td class="default">{{$protein_siang}}</td>
          <td class="default">{{$lemak_siang}}</td>
          <td class="default">{{$kh_siang}}</td>
        </tr>
        <tr>
          <td class="default">-</td>
          <td class="default">{{$energi_malam}}</td>
          <td class="default">{{$protein_malam}}</td>
          <td class="default">{{$lemak_malam}}</td>
          <td class="default">{{$kh_malam}}</td>
        </tr>
      </tbody>
    </table>

    <br>

    <table>
      <thead>
        <tr>
          <td class="default" colspan="2">KETERANGAN TENTANG MAKANAN</td>
        </tr>
        <tr>
          <td class="default" width="30%">Jenis Makanan</td>
          <td class="default" width="70%" >Pola Makan</td>
        </tr>
      </thead>
      <tbody>
        
        <?php if($jumlah_1){
          echo 
          "<tr>
            <td class='default'>Beras</td>
            <td class='default'>".$jumlah_1."</td>
          </tr>";
        } ?>

         <?php if($jumlah_2){
          echo 
          '<tr>
            <td class="default">Jagung</td>
            <td class="default">'.$jumlah_2.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_3){
          echo 
          '<tr>
            <td class="default">Mi</td>
            <td class="default">'.$jumlah_3.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_4){
          echo 
          '<tr>
            <td class="default">Roti</td>
            <td class="default">'.$jumlah_4.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_5){
          echo 
          '<tr>
            <td class="default">Biskuit/Kue</td>
            <td class="default">'.$jumlah_5.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_6){
          echo 
          '<tr>
            <td class="default">Kentang</td>
            <td class="default">'.$jumlah_6.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_7){
          echo 
          '<tr>
            <td class="default">Singkong</td>
            <td class="default">'.$jumlah_7.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_8){
          echo 
          '<tr>
            <td class="default">Ubi Rambat</td>
            <td class="default">'.$jumlah_8.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_9){
          echo 
          '<tr>
            <td class="default">Tempe</td>
            <td class="default">'.$jumlah_9.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_10){
          echo 
          '<tr>
            <td class="default">Tahu</td>
            <td class="default">'.$jumlah_10.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_11){
          echo 
          '<tr>
            <td class="default">Oncom</td>
            <td class="default">'.$jumlah_11.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_12){
          echo 
          '<tr>
            <td class="default">Kacang Kering</td>
            <td class="default">'.$jumlah_12.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_13){
          echo 
          '<tr>
            <td class="default">Ayam</td>
            <td class="default">'.$jumlah_13.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_14){
          echo 
          '<tr>
            <td class="default">Daging</td>
            <td class="default">'.$jumlah_14.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_15){
          echo 
          '<tr>
            <td class="default">Daging diawet</td>
            <td class="default">'.$jumlah_15.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_16){
          echo 
          '<tr>
            <td class="default">Hati/Limpa/Otak/Usus/Paru-paru</td>
            <td class="default">'.$jumlah_16.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_17){
          echo 
          '<tr>
            <td class="default">Telur ayam/bebek</td>
            <td class="default">'.$jumlah_17.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_18){
          echo 
          '<tr>
            <td class="default">Ikan basah</td>
            <td class="default">'.$jumlah_18.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_19){
          echo 
          '<tr>
            <td class="default">Ikan kering</td>
            <td class="default">'.$jumlah_19.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_20){
          echo 
          '<tr>
            <td class="default">Udang basah</td>
            <td class="default">'.$jumlah_20.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_21){
          echo 
          '<tr>
            <td class="default">Sayuran hijau daun</td>
            <td class="default">'.$jumlah_21.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_22){
          echo 
          '<tr>
            <td class="default">Sayuran kacang-kacangan</td>
            <td class="default">'.$jumlah_22.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_23){
          echo 
          '<tr>
            <td class="default">Sayuran tomat/wortel</td>
            <td class="default">'.$jumlah_23.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_24){
          echo 
          '<tr>
            <td class="default">Sayuran Lain</td>
            <td class="default">'.$jumlah_24.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_25){
          echo 
          '<tr>
            <td class="default">Pisang</td>
            <td class="default">'.$jumlah_25.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_26){
          echo 
          '<tr>
            <td class="default">Pepaya</td>
            <td class="default">'.$jumlah_26.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_27){
          echo 
          '<tr>
            <td class="default">Jeruk</td>
            <td class="default">'.$jumlah_27.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_28){
          echo 
          '<tr>
            <td class="default">Buah segar lain</td>
            <td class="default">'.$jumlah_28.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_29){
          echo 
          '<tr>
            <td class="default">Buah diawe</td>
            <td class="default">'.$jumlah_29.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_30){
          echo 
          '<tr>
            <td class="default">Buah segar</td>
            <td class="default">'.$jumlah_30.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_31){
          echo 
          '<tr>
            <td class="default">Susu kental manis</td>
            <td class="default">'.$jumlah_31.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_32){
          echo 
          '<tr>
            <td class="default">Susu kental tak manis</td>
            <td class="default">'.$jumlah_32.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_33){
          echo 
          '<tr>
            <td class="default">Susu tepung whole</td>
            <td class="default">'.$jumlah_33.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_34){
          echo 
          '<tr>
            <td class="default">Susu tepung skim</td>
            <td class="default">'.$jumlah_34.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_35){
          echo 
          '<tr>
            <td class="default">Keju</td>
            <td class="default">'.$jumlah_35.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_36){
          echo 
          '<tr>
            <td class="default">Minyak/ Goreng-gorengan</td>
            <td class="default">'.$jumlah_36.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_37){
          echo 
          '<tr>
            <td class="default">Kelapa/Santan</td>
            <td class="default">'.$jumlah_37.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_38){
          echo 
          '<tr>
            <td class="default">Margarine/Mentega</td>
            <td class="default">'.$jumlah_38.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_39){
          echo 
          '<tr>
            <td class="default">Teh manis</td>
            <td class="default">'.$jumlah_39.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_40){
          echo 
          '<tr>
            <td class="default">Kopi manis</td>
            <td class="default">'.$jumlah_40.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_41){
          echo 
          '<tr>
            <td class="default">Sirop</td>
            <td class="default">'.$jumlah_41.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_42){
          echo 
          '<tr>
            <td class="default">Minuman botol ringan</td>
            <td class="default">'.$jumlah_42.'</td>
          </tr>';
        } ?>

         <?php if($jumlah_43){
          echo 
          '<tr>
            <td class="default">Minuman alkohol</td>
            <td class="default">'.$jumlah_43.'</td>
          </tr>';
        } ?>
      </tbody>
    </table>
    <br>
    <hr>
    <br>
    <div class="row" style="font-size:70%;">
      <div class="column">
        <table style="font-size: 70%;padding-left:5px" >
          <tbody>
            <tr>
              <td class="konten_s_question" colspan="2" style="padding-left:5px">
                Tanggal
              </td>  
              <td class="konten_s_answer" colspan="2" style="padding-left:5px">
                : {{$tanggal}}
              </td>                   
            </tr>
            <tr>
              <td class="konten_s_question" colspan="2" style="padding-left:5px">
                Jam
              </td>  
              <td class="konten_s_answer" colspan="2" style="padding-left:5px">
                :{{$jam}}
              </td>                   
            </tr>
            <tr>
              <td class="konten_s_question" colspan="2" style="padding-left:5px">
                Nama Ahli Gizi
              </td>  
              <td class="konten_s_answer" colspan="2" style="padding-left:5px">
                :{{$nama_ahli_gizi}}
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
    <tbody>
      <tr>
        <td width="10%">Pekerjaan</td>
        <td width="90%">: -</td>
      </tr>
      <tr>
        <td width="10%">DHT</td>
        <td width="90%">: -</td>
      </tr>
      <tr>
        <td width="10%">TB</td>
        <td width="90%">: -</td>
      </tr>
      <tr>
        <td width="10%">BB</td>
        <td width="90%">: -</td>
      </tr>
      <tr>
        <td width="10%">DMI</td>
        <td width="90%">: -</td>
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