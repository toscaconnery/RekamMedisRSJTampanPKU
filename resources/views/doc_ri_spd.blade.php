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


  <h2 align="center" style="font-size:110%;">SURAT PENGANTAR DIRAWAT (SPD)</h2>
  
  <table>
    <tbody>
      
      <tr>
        <td class="konten_s_question">Pendidikan</td>
        <td class="konten_s_answer">: {{$pendidikan}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Pekerjaan</td>
        <td class="konten_s_answer">: {{$pekerjaan}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Alamat</td>
        <td class="konten_s_answer">: {{$alamat}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Tanggal</td>
        <td class="konten_s_answer">: {{$tanggal_lahir}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Jenis Kelamin</td>
        <td class="konten_s_answer">: {{$jk}}</td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2"><b>
        <br>PENANGGUNG JAWAB</b></td>
      </tr>
      <tr>
        <td class="konten_s_question">Nama</td>
        <td class="konten_s_answer">: {{$nama_pj}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Alamat</td>
        <td class="konten_s_answer">: {{$alamat_pj}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">No.Telp/Hp</td>
        <td class="konten_s_answer">: {{$no_telp_pj}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Ruang/Kelas</td>
        <td class="konten_s_answer">: {{$ruang}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Cara Bayar</td>
        <td class="konten_s_answer">: {{$cara_bayar}}</td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2"><br><b>SEBAB UTAMA DIRAWAT :</b></td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2">{{$sebab_utama_dirawat}}</td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2"><br><b>DIAGNOSA :</b></td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2">{{$diagnosa}}</td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2"><br><b>GAF (GLOBAL ASESSMENT OF FUNCTION) :</b></td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2">{{$gaf}}</td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2"><br><b>PANSS-EC :</b></td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2">{{$panss_ec}}</td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2"><br><b>TERAPI (Yang Dianjurkan) :</b></td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2">{{$terapi}}</td>
      </tr>
      <tr>
        <td class="konten_s_question" colspan="2"><br><b>TELAH DICATAT MASUK RS. JIWA TAMPAN :</b></td>
      </tr>
       <tr>
        <td class="konten_s_question">Tanggal</td>
        <td class="konten_s_answer">: {{$tanggal_masuk_rs}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Ruang</td>
        <td class="konten_s_answer">: {{$ruang_masuk_rs}}</td>
      </tr>
      <tr>
        <td class="konten_s_question">Kelas</td>
        <td class="konten_s_answer">: {{$kelas_masuk_rs}}</td>
      </tr>
    </tbody>
  </table>

  <table>
    <tr>
      <td class="ttd3"></td>
      <td class="ttd3"></td>
      <td class="ttd3">
        Pekanbaru, {{$tanggal}}<br>Dokter IGD / Klinik
        <br>
        <br>
        <br>
        <br>
        <br>
        ( {{$dokter_igd_klinik}} )
      </td>
    </tr>  
  </table>

</body>

<html>