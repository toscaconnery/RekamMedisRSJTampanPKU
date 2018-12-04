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

  <h2 align="center" style="font-size:100%">PELAPORAN EFEK SAMPING OBAT KOMITE FARMASI DAN TERAPI</h2><br>

  <h4>PASIEN</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <table>
          <tbody>
            <tr>
              <td class="konten_s_question">
                Suku
              </td>    
              <td class="konten_s_answer">  
                : {{$field1}}
              </td>                
            </tr>
            <tr>
              <td class="konten_s_question">
                Berat Badan
              </td>    
              <td class="konten_s_answer">  
                : {{$field2}}
              </td>                
            </tr>
            <tr>
              <td class="konten_s_question">
                Pekerjaan
              </td>    
              <td class="konten_s_answer">  
                : {{$field3}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <table>
          <tbody>
            <tr>
              <td class="konten_s_question" style="width:100px">
                Penyakit Utama
              </td>    
              <td class="konten_s_answer">  
                : {{$field4}}
              </td>                
            </tr>
            <tr>
              <td class="konten_s_question">
                Kesudahan
              </td>    
              <td class="konten_s_answer">  
                : {{$field5}}
              </td>                
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <p class="list">Penyakit/Kondisi lain yang menyertai:</p>
    <ul>
      <?php 
        if(isset($field6[1])) echo 
        '<li>
          Gangguan Ginjal
        </li>';
        if(isset($field6[2])) echo 
        '<li>
          Gangguan Hati
        </li>';
        if(isset($field6[3])) echo 
        '<li>
          Alergi
        </li>';
        if(isset($field6[4])) echo 
        '<li>
          Kondisi medis lainnya
        </li>';
        if(isset($field6[5])) echo 
        '<li>
          Faktor industri, pertanian, kimia, dll
        </li>';
      ?>
    </ul> 
  </div>

  <h4>REAKSI EFEK SAMPING OBAT (E.S.O)</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <p>Saat/Tgl mulai terjadi: {{$field7}}</p>
        <p class="list">Bentuk/manisfestasi E.S.O yang terjadi:</p>
        <p>{{$field8}}</p>
      </div>
      <div class="column">
        <p>Kesudahan E.S.O: {{$field9}}</p>
        <p>Tanggal: {{$field10}}</p>
        <p class="list">Reaksi E.S.O yang pernah di alami:</p>
        <p>{{$field11}}</p>
      </div>
    </div>
    <p class="list">Tindakan yang telah dilakukan untuk mengatasi reaksi E.S.O:<br>{{$field12}}</p>

    <p class="list">Apakah reaksi E.S.O hilang setelah obat dihentikan?: {{$field13}}</p>

    <p class="list">Apakah reaksi E.S.O yang sama timbul sewaktu obat yang dicurigai digunakan kembali: {{$field14}}</p>
  </div>

  <h4>OBAT</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <table class="tabel">
      <thead>
        <tr>
          <th class="default" rowspan="2" style="width:20%;height:20px;">Nama <br>(Nama Dagang/Pabrik)</th>
          <th class="default" rowspan="2" style="width:10%;height:20px;">Bentuk Sediaan</th>
          <th class="default" rowspan="2" style="width:20%;height:20px;">Bentuk tanda x untuk Obat yang dicurigai</th>
          <th class="default" colspan="4" style="width:30%;height:20px;">Pemberian</th>
          <th class="default" rowspan="2" style="width:10%;height:20px;"> Indikasi penggunaan</th>
        </tr>
        <tr>
          <th class="default">Rute</td>
          <th class="default">Dosis/waktu</td>
          <th class="default">Tgl Mulai</td>
          <th class="default">Tgl Akhir</td>
        </tr>
      </thead>
      <tbody>
        @php
          $idx = 0;
        @endphp
        @foreach($obat as $o)
        @php
          $idx += 1;
        @endphp
        <tr id="form_1">
          <td class="default">{{$o[0]}}</td>
          <td class="default">{{$o[1]}}</td>
          <td class="default"> <?php if(isset($o[2]) == '1') echo '<b>V</b>'; ?></td>
          <td class="default">{{$o[3]}}</td>
          <td class="default">{{$o[4]}}</td>
          <td class="default">{{$o[5]}}</td>
          <td class="default">{{$o[6]}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <h4>PELAPOR</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <p>Nama : {{$field15}} </p>
        <p>Profesi : $field16</p>
        <p>Asal Ruangan Poliklinik : {{$field17}}</p>
      </div>
      <div class="column">
        <p style="text-align: center;">{{$field18}}<br>Tanda Tangan</p>
        <br>
        <br>
        <p style="text-align: center;">( {{$field15}} )</p>
      </div>
    </div>
  </div>
</body>

<html>