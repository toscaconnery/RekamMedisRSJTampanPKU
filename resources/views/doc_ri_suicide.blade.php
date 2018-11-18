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

<h2 align="center">ASESMEN SUICIDE DAN KEKERASAN FISIK</h2>

<table>
  <thead>
  <tr>
     <th class="big-box" width="40%">SUICIDALITY<br>Static (historical) factors</th> 
     <th class="big-box" width="10%">Result</th> 
     <th class="big-box" width="40%">Dynamic (Current) risk factor</th> 
     <th class="big-box" width="10%">Result</th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="box">Tinggal hidup sendiri</td>
      <td class="box">{{$s1}}</td>
      <td class="box">Mengungkapkan ide bunuh diri</td>
      <td class="box-c">{{$s8}}</td>
    </tr>
    <tr>
      <td class="box">Riwayat upaya serius suicide</td>
      <td class="box">{{$s2}}</td>
      <td class="box">Memiliki rencana/ maksud suicide</td>
      <td class="box-c">{{$s9}}</td>
    </tr>
    <tr>
      <td class="box">Riwayat keluarga suicide</td>
      <td class="box">{{$s3}}</td>
      <td class="box">Mengungkapkan stress yang berat</td>
      <td class="box-c">{{$s10}}</td>
    </tr>
     <tr>
      <td class="box">Adanya diagnosa gangguan jiwa</td>
      <td class="box">{{$s4}}</td>
      <td class="box">keputusasaan</td>
      <td class="box-c">{{$s11}}</td>
    </tr>
    <tr>
      <td class="box">Penyakit/ Disabilitas berat</td>
      <td class="box">{{$s5}}</td>
      <td class="box">Peristiwa/Kejadian signifikan akhir-akhir ini</td>
      <td class="box-c">{{$s12}}</td>
    </tr>
    <tr>
      <td class="box">Berpisah/ Duda/ Cerai</td>
      <td class="box">{{$s6}}</td>
      <td class="box">Berkurangnya/Kehilangan untuk kontrol diri</td>
      <td class="box-c">{{$s13}}</td>
    </tr>
    <tr>
      <td class="box">Kehilangan pekerjaan/ pensiun/ tidak punya kerja</td>
      <td class="box">{{$s7}}</td>
      <td class="box">Penggunaan NAPZA</td>
      <td class="box-c">{{$s14}}</td>
    </tr>
    <tr>
      <td class="box" colspan="4"><b>PROTECTIVE FACTORS dan RESIKO LAINNYA (Describe) : </b> <br> {{$p1}} </td>
    </tr>
    <tr>
      <td class="box" colspan="4"><b>LEVEL OF SUICIDE RISK (Total Skor) : </b> <br> LOW (< 7) </td>
    </tr>
  </tbody>
</table>

<br>

<table>
  <thead>
  <tr>
     <th class="big-box" width="40%">AGGRESSION/VIOLENCE<br>Static (historical) factors</th> 
     <th class="big-box" width="10%">Result</th> 
     <th class="big-box" width="40%">Dynamic (Current) risk factor</th> 
     <th class="big-box" width="10%">Result</th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="box">Insiden kekerasan baru-baru ini</td>
      <td class="box">{{$s15}}</td>
      <td class="box">Mengekspresikan ide untuk melukai orang lain</td>
      <td class="box-c">{{$s24}}</td>
    </tr>
    <tr>
      <td class="box">Riwayat penggunaan senjata</td>
      <td class="box">{{$s16}}</td>
      <td class="box">Akses untuk melakukan tindakan kekerasan</td>
      <td class="box-c">{{$s25}}</td>
    </tr>
     <tr>
      <td class="box">Laki-laki</td>
      <td class="box">{{$s17}}</td>
      <td class="box">Ide paranoid atau lainnya</td>
      <td class="box-c">{{$s26}}</td>
    </tr>
    <tr>
      <td class="box">Usia di bawah 35 tahun</td>
      <td class="box">{{$s18}}</td>
      <td class="box">Perintah halusinasi untuk tindakan kekerasan</td>
      <td class="box-c">{{$s27}}</td>
    </tr>
    <tr>
      <td class="box">Riwayat kirminal</td>
      <td class="box">{{$s19}}</td>
      <td class="box">Kemarahan, frustasi, atau agitasi</td>
      <td class="box-c">{{$s28}}2</td>
    </tr>
    <tr>
      <td class="box">Riwayat melakukan tindakan berbahaya atau ide kekerasan ...</td>
      <td class="box">{{$s20}}</td>
      <td class="box">Kesenangan untuk ide/ tindakan kekerasan</td>
      <td class="box-c">{{$s29}}</td>
    </tr>
     <tr>
      <td class="box">Riwayat kekerasan masa kanak-kanak</td>
      <td class="box">{{$s21}}</td>
      <td class="box">Perilaku seksual yang tidak wajar</td>
      <td class="box-c">{{$s30}}</td>
    </tr>
     <tr>
      <td class="box">Kurangnya peran dalam hidup <br>(pekerjaan, hubungan)</td>
      <td class="box">{{$s22}}</td>
      <td class="box">Berkurangnya/ kehilangan untuk kontrol diri</td>
      <td class="box-c">{{$s31}}</td>
    </tr>
     <tr>
      <td class="box">Riwayat penggunaan NAPZA</td>
      <td class="box">{{$s23}}</td>
      <td class="box">Penggunaan NAPZA</td>
      <td class="box-c">{{$s32}}</td>
    </tr>
    <tr>
      <td class="box" colspan="4"><b>PROTECTIVE FACTORS dan RESIKO LAINNYA (Describe) : </b> <br> {{$p2}} </td>
    </tr>
    <tr>
      <td class="box" colspan="4"><b>LEVEL OF VIOLANCE RISK (Total Skor) : </b> <br> LOW (< 7) </td>
    </tr>
    <tr>
      <td class="box" colspan="4"><b>OTHER RISK IDENTIFIED (AND RISK FACTORS) : </b> <br> {{$p3}} </td>
    </tr>
  </tbody>
</table>

<br>

<table>
  <thead>
    <tr> 
     <th class="box" width="10%" colspan="3" style="text-align:center;">MANAGEMENT PLAN</th> 
    </tr>
    <tr>
       <th class="box" width="10%">Skoring</th> 
       <th class="box" width="10%">Resiko</th> 
       <th class="box" width="70%">Management Plan</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td class="box"> - </td>
      <td class="box">RENDAH</td>
      <td class="box">
        1. Rawat jalan dan pemberian terapi<br>
        2. Advise untuk mengenali tanda-tanda perburukan dan segera datang untuk kontrol ulang<br>
        3. Psycoteraphy
      </td>
    </tr>

    <tr>
      <td class="box"> - </td>
      <td class="box">SEDANG</td>
      <td class="box">
        Pertimbangkan untuk rawat inap dengan memperhatikan faktor resiko: tinggal sendiri, adanya riwayat suicide/kekerasa sebelumya
      </td>
    </tr>

    <tr>
      <td class="box"> - </td>
      <td class="box">BERAT</td>
      <td class="box">
       Sangat direkomendasikan untuk rawat inap
      </td>
    </tr>

  </tbody>
</table>


</body>

<html>