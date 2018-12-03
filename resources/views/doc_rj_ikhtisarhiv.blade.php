<?php 
header('Content-Type: application/pdf');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<h2 align="center" style="font-size:100%;">IKHTISAR PERAWATAN HIV DAN TERAPI ANTIREROVIRAL (ART)</h2>
<div class="row">
  <div class="colsize" style="border:1px solid black; width:49%;height:110%;padding-right:5px;">
    
    <h4 style="font-size:80%;padding-left:5px;margin-bottom:4%" >1. Data Identitas Pasien</h4>
    <div style="padding-left:10px;">  
       <table style="font-size: 80%;" >
        <tbody>
          <tr>
            <td class="konten_l_question">
              No.Reg.Nasional
            </td>    
            <td class="konten_l_answer">  
              : {{$no_reg_nasional}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              Riwayat Alergi Obat 
            </td>    
            <td class="konten_l_answer">  
              : {{$riwayat_alergi_obat}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              NIK
            </td>    
            <td class="konten_l_answer">  
              : {{$nik}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              Nama Ibu Kandung
            </td>    
            <td class="konten_l_answer">  
              : {{$nama_ibu_kandung}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              Alamat dan No. Telp. Pasien
            </td>    
            <td class="konten_l_answer">  
              : {{$alamat_pasien}}, {{$no_telp}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              Nama Pengawas Minum Obat (PMO)
            </td>    
            <td class="konten_l_answer">  
              : {{$nama_pmo}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              Hubungan dengan Pasien
            </td>    
            <td class="konten_l_answer">  
              : {{$hubungan_dengan_pasien}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              Alamat dan No. Telp. PMO
            </td>    
            <td class="konten_l_answer">  
              : {{$alamat_pmo}}. {{$no_telp_pmo}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              Tanggal Konfirmasi tes HIV +
            </td>    
            <td class="konten_l_answer">  
              : {{$tgl_konfirm_tes_hiv}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              &emsp;Tempat
            </td>    
            <td class="konten_l_answer">  
              : {{$tempat_tes_hiv}}
            </td>                
          </tr>
        </tbody>
      </table>
      
      <br>

      <table style="font-size: 80%;" >
        <tbody>
          <tr>
            <td class="konten_l_question">
              <i><b>Entry Point</b></i>
            </td> 
            <td class="konten_l_answer">  
              : {{$entry_point}} {{$keterangan_entry_point}}
            </td>             
          </tr>
        </tbody>
      </table>
      <h4 style="font-size:80%;margin-bottom:4%">2. Riwayat Pribadi</h4>
      <div>  
       <table style="font-size: 80%;" >
        <tbody>
          <tr>
            <td class="konten_l_question">
              Pendidikan
            </td>    
            <td class="konten_l_answer">  
              : {{$pendidikan}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
             Pekerjaan 
            </td>    
            <td class="konten_l_answer">  
              : {{$pekerjaan}} {{$nama_pekerjaan}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question" colspan="2">
              <b>Faktor Risiko:</b>
              <ul>
                <?php 
                  if(isset($macam_kasus[1])) echo 
                  '<li>
                    Keinginan sendiri
                  </li>';
                  if(isset($macam_kasus[2])) echo 
                  '<li>
                    Paksaan Orang Tua
                  </li>';
                  if(isset($macam_kasus[3])) echo 
                  '<li>
                    Rujukan Praktek Dokter
                  </li>';
                  if(isset($macam_kasus[4])) echo 
                  '<li>
                    Rujukan Instansi Lain
                  </li>';
                  if(isset($macam_kasus[5])) echo 
                  '<li>
                    Kiriman Kepolisian
                  </li>';
                  if(isset($macam_kasus[6])) echo 
                  '<li>
                    Lain-lain, '.$alasan_masuk_lainnya.'
                  </li>';
                  if(isset($macam_kasus[7])) echo 
                  '<li>
                    Lain-lain, '.$alasan_masuk_lainnya.'
                  </li>';
                  if(isset($macam_kasus[8])) echo 
                  '<li>
                    Lain-lain, '.$alasan_masuk_lainnya.'
                  </li>';
                ?>
              </ul>
            </td>          
          </tr>
          <tr>
            <td class="konten_l_question" colspan="2">
              &emsp;Perinatal
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question" colspan="2">
              &emsp;Lainnya uraikan, {{$keterangan_fr_lainnya}}
            </td>                  
          </tr>
        </tbody>
      </table>
      <h4 style="font-size:80%;margin-bottom:4%;" >3. Riwayat Keluarga/Mitra Seksual/Mitra Pensiun</h4>
      <div>  
       <table style="font-size: 80%;" >
        <tbody>
          <tr>
            <td class="konten_l_question">
              Status Pernikahan
            </td>    
            <td class="konten_l_answer">  
              : {{$status_pernikahan}}
            </td>                
          </tr>
        </tbody>
      </table>
      <br>
      <table>
        <thead>
          <tr>
            <th class="default">Nama</th>
            <th class="default">Hub</th>
            <th class="default">Umur</th>
            <th class="default">HIV +/-</th>
            <th class="default">ATR Y/T</th>
            <th class="default">NoRegNas</th>
          </tr>
        </thead>
        <tbody>
          @foreach($riwayat_keluarga as $r)
          <tr>
            <td class="default">{{$r[0]}}</td>
            <td class="default">{{$r[1]}}</td>
            <td class="default">{{$r[2]}}</td>
            <td class="default">{{$r[3]}}</td>
            <td class="default">{{$r[4]}}</td>
            <td class="default">{{$r[5]}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
  </div>
  </div>
  
  <div class="colsize" style="padding-bottom:0px;padding-left:5px;padding-right:5px;border:1px solid black; width:49%;height:110%;">
    <h4 style="font-size:80%" >4. Riwayat Terapi Antiretroviral</h4>
    <table style="margin-top:20%;">
        <thead>
          <tr>
            <thead style="font-size:60%">
              <tr>
                <td style="border: 1px solid black" rowspan="2">Pernah menerima ART?<br></td>
                <td style="border: 1px solid black" >{{$pernah_menerima_art}}, {{$jenis_art}}</td>
                <td style="border: 1px solid black">Tempat ART dulu: {{$tempat_art_dulu}}</td>
              </tr>
              <tr>
                <td style="border: 1px solid black" colspan="2">Nama, Dosis ARV & Lama Penggunaannya: {{$nama_arv}}, {{$lama_penggunaan}}</td>
              </tr>
            </thead>
          </tr>
        </thead>
      </table>

    <h4 style="font-size:80%" >5. Pemeriksaan Klinis dan Laboratorium</h4>
      <div>  
      <br>
      <table style="font-size:60%">
        <thead>
          <tr>
            <th class="default" style="padding:1%;"></th>
            <th class="default" style="padding:1%;">Tanggal (hh/bb/th)</th>
            <th class="default" style="padding:1%;">Stad. Klinis</th>
            <th class="default" style="padding:1%;">BB</th>
            <th class="default" style="padding:1%;">Status Fungsional 1=Kerja 2=Ambulatori 3=baring</th>
            <th class="default" style="padding:1%;">Jumlah Cd4 (Cd4 % pd anak2)</th>
            <th class="default" style="padding:1%;">Lain-lain</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="default">Kunjungan pertama</td>
            <td class="default">{{$tanggal_pkl_1}}</td>
            <td class="default">{{$stad_klinis_pkl_1}}</td>
            <td class="default">{{$bb_pkl_1}}</td>
            <td class="default">{{$status_fungsional_pkl_1}}</td>
            <td class="default">{{$cd4_pkl_1}}</td>
            <td class="default">{{$lain_lain_pkl_1}}</td>
          </tr>
          <tr>
            <td class="default">Memenuhi syarat medis untuk ART</td>
            <td class="default">{{$tanggal_pkl_2}}</td>
            <td class="default">{{$stad_klinis_pkl_2}}</td>
            <td class="default">{{$bb_pkl_2}}</td>
            <td class="default">{{$status_fungsional_pkl_2}}</td>
            <td class="default">{{$cd4_pkl_2}}</td>
            <td class="default">{{$lain_lain_pkl_2}}</td>
          </tr>
          <tr>
            <td class="default">Saat mulai ART</td>
            <td class="default">{{$tanggal_pkl_3}}</td>
            <td class="default">{{$stad_klinis_pkl_3}}</td>
            <td class="default">{{$bb_pkl_3}}</td>
            <td class="default">{{$status_fungsional_pkl_3}}</td>
            <td class="default">{{$cd4_pkl_3}}</td>
            <td class="default">{{$lain_lain_pkl_3}}</td>
          </tr>
          <tr>
            <td class="default">Setelah 6 bulan ART</td>
            <td class="default">{{$tanggal_pkl_4}}</td>
            <td class="default">{{$stad_klinis_pkl_4}}</td>
            <td class="default">{{$bb_pkl_4}}</td>
            <td class="default">{{$status_fungsional_pkl_4}}</td>
            <td class="default">{{$cd4_pkl_4}}</td>
            <td class="default">{{$lain_lain_pkl_4}}</td>
          </tr>
          <tr>
            <td class="default">Setelah 12 bulan ART</td>
            <td class="default">{{$tanggal_pkl_5}}</td>
            <td class="default">{{$stad_klinis_pkl_5}}</td>
            <td class="default">{{$bb_pkl_5}}</td>
            <td class="default">{{$status_fungsional_pkl_5}}</td>
            <td class="default">{{$cd4_pkl_5}}</td>
            <td class="default">{{$lain_lain_pkl_5}}</td>
          </tr>
          <tr>
            <td class="default">Setelah 24 bulan ART</td>
            <td class="default">{{$tanggal_pkl_6}}</td>
            <td class="default">{{$stad_klinis_pkl_6}}</td>
            <td class="default">{{$bb_pkl_6}}</td>
            <td class="default">{{$status_fungsional_pkl_6}}</td>
            <td class="default">{{$cd4_pkl_6}}</td>
            <td class="default">{{$lain_lain_pkl_6}}</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 style="font-size:80%" >6. Terapi Anti Retroviral (ART)</h4>
      <div>  
      <br>
      <table style="font-size:70%">
        <thead>
          <tr>
            <th class="default" rowspan="8" style="vertical-align:middle;font-size:80%;">
              <b>Nama Panduan ART Orisinal</b><br>
              1. TDF+3TC+EFV<br>
              2. TDF+FTC+EFV<br>
              3. TDF+3TC+NVP<br>
              4. TDF+FTC+NVP<br>
              5. AZT+3TC+EFV<br>
              6. AZT+3TC+NVP<br>
              7. ...........<br>
            </th>
            <th class="default" colspan="7" ><b>SUBTITUSI dalam lini-1 SWITCH ke lini-2 STOP</b></th>
          </tr>
          <tr style="font-size:60%">
            <th class="default" style="padding:1%">Tanggal</th>
            <th class="default" style="padding:1%">Subtitusi</th>
            <th class="default" style="padding:1%">Switch</th>
            <th class="default" style="padding:1%">Stop</th>
            <th class="default" style="padding:1%">Restar</th>
            <th class="default" style="padding:1%">Alasan</th>
            <th class="default" style="padding:1%">Nama Panduan Baru</th>
          </tr>
        </thead>
        <tbody style="font-size:60%">
          @foreach($terapi_art as $t)
            <tr>
              <td class="default">{{$t[1]}}</td>
              <td class="default">{{$t[2]}}</td>
              <td class="default">{{$t[3]}}</td>
              <td class="default">{{$t[4]}}</td>
              <td class="default">{{$t[5]}}</td>
              <td class="default">{{$t[6]}}</td>
              <td class="default">{{$t[7]}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <p style="font-size:65%;margin-top:1%;margin-bottom:1%">
      <b>Alasan SUBTITUSI/SWITCH:</b> {{$alasan_lain_substitusi}}<br>
      <b>Alasan hanya untuk SWITCH:</b> {{$alasan_lain_switch}}<br>
      <b>Alasan STOP:</b> {{$alasan_lain_stop}}
    </p>
    
    <h4 style="font-size:80%">7. Pengobatan TB selama perawatan HIV</h4>
      <div>  
      <br>
      <table style="font-size:60%">
        <tbody>
          <tr>
            <td class="default3" style="text-align:left;vertical-align:top;padding:2%">
              Klasifikasi TB : {{$klasifikasi_tb}}
            </td>
            <td class="default3" style="text-align:left;vertical-align:top;padding:2%">
              Panduan TB : {{$ptb}}
            </td>
            <td class="default3" style="text-align:left;vertical-align:top;padding:2%">
              Tempat Pengobatan TB:<br>
              Kabupaten: {{$kabupaten_tptb}} <br>
              Nama sarana kesehatan: {{$nama_tptb}}<br>
              No.Reg. TB Kabutaen.Kota: {{$noreg_tptb}}
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>


<pagebreak>
<div class="row">
  <div class="colsize" style="border:1px solid black; width:48%;height:11.5%;">    
    <div style="padding-left:10px;">  
       <table style="font-size: 80%;" >
        <tbody>
          <tr>
            <td class="konten_l_question">
              Tipe TB
            </td>    
            <td class="konten_l_answer">  
              : {{$ttb}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              Tgl. mulai trapi TB 
            </td>    
            <td class="konten_l_answer">  
              : {{$tgl_mulai_terapi_tb}}
            </td>                
          </tr>
          <tr>
            <td class="konten_l_question">
              Tgl. selesai terapi TB
            </td>    
            <td class="konten_l_answer">  
              : {{$tgl_selesai_terapi_tb}}
            </td>                
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  
  <div class="colsize" style="border:1px solid black; width:40.6%;height:11.5%;padding-left:10px;">
    <h4 style="font-size:80%" >8. Indikasi Inisial ART</h4>
    <p>{{$ii}}</p>
  </div>
</div>
<table class="tabel">
      <thead>
         <tr>
            <th class="default" style="padding:0.5%;text-align:left;" colspan="24">9. IKHTISAR <i>FOLLOW-UP</i> PERAWATAN PASIEN HIV DAN TERAPI ANTIRETROVIRAL (ART)</th>
          </tr>
          <tr>   
            <th class="small" data-field="name" rowspan="3">Tanggal kunjungan (follow-up)</th>
            <th class="small" data-field="name" rowspan="3">Rencana Tanggal Kunjungan y.a.d</th>
            <th class="small" data-field="name" colspan="3">Pasien Rujuk Masuk</th>
            <th class="small" data-field="name" rowspan="3">BB(kg) & TB untuk anak</th>
            <th class="small" data-field="name" rowspan="3">Status Fungsional 1.Kerja 2.Ambulatori 3.Baring</th>
            <th class="small" data-field="name" rowspan="3">Stad Klinis</th>
            <th class="small" data-field="name" rowspan="3">Hamil (Y/T) atau metode KB</th>
            <th class="small" data-field="name" rowspan="3">Infeksi Opurtunistik (Lihat Petunjuk dan Kode)</th>
            <th class="small" data-field="name" rowspan="3">Obat Untuk IO</th>
            <th class="small" data-field="name" rowspan="3">Status TB (Lihat Petunjuk dan Kode)</th>
            <th class="small" data-field="name" colspan="3">Pengobatan Pencegahan</th>
            <th class="small" data-field="name" rowspan="3">Obat ARB dan Dosis yang diberikan</th>
            <th class="small" data-field="name" rowspan="3">Sisa Obat ARV Sebelumnya (dalam tablet)</th>
            <th class="small" data-field="name" rowspan="3">Adherence ART 1.(>95%) 2.(80-95%) 3.(< 80%)(Lihat Petunjuk dan Kode)</th> 
            <th class="small" data-field="name" rowspan="3">Efek Samping ART (Lihat Petunjuk dan Kode)</th>
            <th class="small" data-field="name" rowspan="3">Jumlah CD4</th>
            <th class="small" data-field="name" rowspan="3">Hasil Lab</th>
            <th class="small" data-field="name" rowspan="2">Diberikan Kondom Y/T/TT *TT=tidak tersedia</th>
            <th class="small" data-field="name" rowspan="3">Rujuk Ke Spesialis atau Masuk Rumah Sakit(MRS)</th>
            <th class="small" data-field="name" rowspan="3">Akhir Follow-Up (Lihat Petunjuk dan Kode)</th>              
          </tr>    
          <tr>   
            <th class="small" data-field="name" rowspan="2">Y/T</th>
            <th class="small" data-field="name" colspan="2">Jika Y</th>
            <th class="small" data-field="name" rowspan="2">PPK Y/T</th>       
            <th class="small" data-field="name" colspan="2">PP INH</th>  
          </tr>    
          <tr>   
            <th class="small" data-field="name">De- ngan ART Y/T</th>
            <th class="small" data-field="name">Nama Klinik Sebelumnya</th>
            <th class="small" data-field="name">Y/T</th>
            <th class="small" data-field="name">Hasil Akhir (Kode)</th>    
            <th class="small" data-field="name">Jika Y Tulis Jumlahnya</th>  
                  
          </tr>    
      </thead>
      <tbody>
        <tr>
          <td class="default" style="height:30px"> {{$tgl_kunjungan_follow_up}} </td>
          <td class="default" style="height:30px"> {{$rencana_tgl_kunjungan}} </td>
          <td class="default" style="height:30px"> {{$prm}} </td>
          <td class="default" style="height:30px"> {{$drt}} </td>
          <td class="default" style="height:30px"> {{$nama_klinik_sebelumnya}} </td>
          <td class="default" style="height:30px"> {{$tbf}} </td>
          <td class="default" style="height:30px"> {{$sfu}} </td>
          <td class="default" style="height:30px"> {{$stad_klinis}} </td>
          <td class="default" style="height:30px"> {{$hkb}} </td>
          <td class="default" style="height:30px"> 
            <?php 
              if(isset($infop[1])) echo ' K ';
              if(isset($infop[2])) echo ' D ';
              if(isset($infop[3])) echo ' Cr ';
              if(isset($infop[4])) echo ' PCP ';
              if(isset($infop[5])) echo ' CMV ';
              if(isset($infop[6])) echo ' '.$keterangan_infop.' ';
              if(isset($infop[7])) echo ' P ';
              if(isset($infop[8])) echo ' Z ';
              if(isset($infop[9])) echo ' S ';
              if(isset($infop[10])) echo ' T ';
              if(isset($infop[11])) echo ' H ';
            ?>
          </td>
          <td class="default" style="height:30px"> {{$obat_untuk_io}} </td>
          <td class="default" style="height:30px"> {{$stb}} </td>
          <td class="default" style="height:30px"> {{$ppk}} </td>
          <td class="default" style="height:30px"> {{$inh}} </td>
          <td class="default" style="height:30px"> {{$hkr}} </td>
          <td class="default" style="height:30px"> {{$obat_arv}} </td>
          <td class="default" style="height:30px"> [sisa obat] </td>
          <td class="default" style="height:30px"> {{$adr}} </td>
          <td class="default" style="height:30px"> 
          <?php 
            if(isset($esart[1])) echo ' R ';
            if(isset($esart[2])) echo ' Mua ';
            if(isset($esart[3])) echo ' Mun ';
            if(isset($esart[4])) echo ' D ';
            if(isset($esart[5])) echo ' N ';
            if(isset($esart[6])) echo ' Ikt ';
            if(isset($esart[7])) echo ' An ';
            if(isset($esart[8])) echo ' Ll ';
            if(isset($esart[9])) echo ' Sk ';
            if(isset($esart[10])) echo ' Dem ';
            if(isset($esart[11])) echo ' Hip ';
            if(isset($esart[12])) echo ' Dep ';
            if(isset($esart[13])) echo ' P ';
            if(isset($esart[14])) echo ' Lip ';
            if(isset($esart[15])) echo ' Ngan ';
            if(isset($esart[16])) echo ' ln ';
          ?> 
          </td>
          <td class="default" style="height:30px"> {{$jumlah_cd4}} </td>
          <td class="default" style="height:30px"> {{$hasil_lab}} </td>
          <td class="default" style="height:30px"> {{$dkr}} {{$jumlah_kondom}} </td>
          <td class="default" style="height:30px"> {{$rsmrs}} </td>
          <td class="default" style="height:30px"> {{$fll}} {{$tgl_meninggal}} {{$tgl_kunjungan_terakhir}} {{$tgl_keluar}} {{$nama_klinik_baru}} </td>
        </tr>
      </tbody>

    </table>
   <table>
     <tbody>
     <tr>
       <td width="48%" style="line-height:0px;font-size:70%;margin-top:1%;padding-right:2%">
         <b>Petunjuk dan Kode :</b><br>
            <b>Tanggal Kunjungan (Kolom 1):</b> Tulis Tanggal kunjungan yang sebenarnya sejak kunjungan pertama perawatan HIV
          </div>
          <div>
            <br><b>Infeksi Opurtunistik (kolom 8): </b> 
            Boleh diisi > 1 kode - Kandidiasis (K): Diare cryptosporodia (D): Mining itis cryptocococal(Cr): Penumonia Penumocystis (PCP): Cytomeg alovirus (SMV): Penicilliosis (P): Herpes Zoster (Z): Herpessimpleks (S): Toxoplasmosis (T): Hepatitis: Lain-lain uraikan
          </div>
          <div>
            <br><b>Status TB (kolom 10): </b>
            1. Tdk ada gejala/tanda TB:2.Suspek TB (rujuk klinis DOTS atau pemeriksaan sputum):3. Dalam terapi TB 4. Tidak skrining
          </div>
          <div>
            <br><b>PPK (Kolom 11): </b>Pengobatan Pencegah dengan Kotrimoksazol 
          </div>
          <div>
            <br><b>PP INH (Kolom 11): </b> Pengobatan Pencegahan dengan INH (isoniazid)
          </div>
          <div>
            <br><b>Hasil Akhir PP INH: </b>1. Berobat 2. Gagal selama pemberian PP INH 3. Pindah 4. Meninggal 5. Efek samping Berat
          </div>
       </td>
       <td width="48%" style="line-height:0px;font-size:70%;">
          <div>
            <br><b>Adherence ART (kolom 14): </b> 
            Periksalah adeherence dgn menanyak menanyakan apakah pasien melupakan dosis obat. Tuliskan perkiraan tingkat adherence, misalnya (dosis 2 kali sehari): 1 (>95%) artinya < 3 dosis lupa diminum dalam 30 hari. 2. (80-95%) artinya 3-12 dosis lupa diminum dalam 30 hari, 3. (< 80%) artinya >12 dosis lupa diminum dalam 30 hari. Jika paduan ART yang diberikan terdiri dari berbagai dosis, maka pilihlah adherence obat yang terjelek 
          </div>
          <div>
            <br><b>Efek Samping (kolom 15): </b>
            Tuliskan >= 1 kode - R=Ruam kulit, Mua=Mual: Mun=Muntah: D=Diare: N=Neuropati, Ikt=Ikterus, An=Anemi: Ll=Lelah: SK=Sakit kepala: Dem=Demam: Hip=Hipersesitifitas: Dep=Depresi: P=Pankreatitiis: Lip=Lipodistofi: Ngan=Mengantuk: Ln=Lain-lain-Uraikan
          </div>
          <div>
            <br><b>Akhir Follow Up (kolom 20): </b>
            Tuliskan mode. M (jika pasien Meninggal -> tulis tanggal meninggal), LFU (jika pasien >3 bulan tidak datang ke layanan -> tulis tanggal kunjungan terakhir), atau RK (jika dirujuk keluar -> tulis tanggal keluar dan nama klinik barunya) 
          </div>
       </td>
     </tr>
       
     </tbody>
   </table>

</body>

<html>