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

  <h2 align="center">HASIL PEMERIKSAAN LABORATORIUM</h2><br>

  <table>
    <tbody>
      <tr>
        <td width="20%">Validasi Oleh</td>
        <td width="20%">: {{$validasi_oleh}}</td>
        <td width="20%"></td>
        <td width="20%">Dokter Pengirim</td>
        <td width="20%">: {{$dr_pengirim}}</td>
      </tr>
      <tr>
        <td>Bahan Diterima</td>
        <td>: {{$bahan_diterima}}</td>
        <td></td>
        <td>Ruangan</td>
        <td>: {{$ruangan}}</td>
      </tr>
      <tr>
        <td>Hasil Dicetak</td>
        <td>: {{$tgl_hasil_cetak}}</td>
        <td></td>
        <td>Tanggal Permintaan</td>
        <td>: {{$tgl_permintaan}}</td>
      </tr>
    </tbody>
  </table>

  <br>

  <table>
    <thead>
      <tr>
        <th width="30%">Pemeriksaan</th>
        <th width="20%">Hasil</th>
        <th width="20%">Status</th>
        <th width="30%">Nilai Rujukan</th>  
      </tr>
    </thead>
    <tbody>

      <tr>
        <td class="top-border" colspan="4"><b>HEMATOLOGI</b></td>
      </tr>
      @foreach($hematologi as $h)
      <tr id="hematologi_{{$h['id_data']}}">
        <td>{{$h['pemeriksaan']}}</td>
        <td>{{$h['hasil']}} mm<sup>3</sup></td>
        <td>{{$h['status']}}</td>
        <td>{{$h['normal']}}</td>
      </tr>
      @endforeach

      <tr>
        <td class="top-border" colspan="4"><b>URINE</b></td>
      </tr>
      @foreach($urine as $u)
      <tr id="urine_{{$u['id_data']}}">
        <td>{{$u['pemeriksaan']}}</td>
        <td>{{$u['hasil']}}</td>
        <td>{{$u['status']}}</td>
        <td>{{$u['normal']}}</td>
      </tr>
      @endforeach

      <tr>
        <td class="top-border" colspan="4"><b>FAECES RUTIN</b></td>
      </tr>
      @foreach($faeces as $f)
      <tr id="faeces_{{$f['id_data']}}">
        <td>{{$f['pemeriksaan']}}</td>
        <td>{{$f['hasil']}}</td>
        <td>{{$f['status']}}</td>
        <td>{{$f['normal']}}</td>
      </tr>
      @endforeach

      <tr>
        <td class="top-border" colspan="4"><b>KIMIA DARAH</b></td>
      </tr>
      @foreach($kimia as $k)
      <tr id="kimia_{{$k['id_data']}}">
        <td>{{$k['pemeriksaan']}}</td>
        <td>{{$k['hasil']}}</td>
        <td>{{$k['status']}}</td>
        <td>{{$k['normal']}}</td>
      </tr>
      @endforeach

      <tr>
        <td class="top-border" colspan="4"><b>SEROLOGI</b></td>
      </tr>
      @foreach($serologi as $s)
      <tr id="serologi_{{$s['id_data']}}">
        <td>{{$s['pemeriksaan']}}</td>
        <td>{{$s['hasil']}}</td>
        <td>{{$s['status']}}</td>
        <td>{{$s['normal']}}</td>
      </tr>
      @endforeach

      <tr>
        <td class="top-border" colspan="4"><b>NARKOBA</b></td>
      </tr>
      @foreach($narkoba as $n)
      <tr id="narkoba_{{$n['id_data']}}">
        <td>{{$n['pemeriksaan']}}</td>
        <td>{{$n['hasil']}}</td>
        <td>{{$n['status']}}</td>
        <td>{{$n['normal']}}</td>
      </tr>
      @endforeach
      <tr>
        <td class="top-border" colspan="4"></td>
      </tr>
    </tbody>
  </table>

  <div class="row" style="font-size:70%;margin-top:10%;">
    <div class="column">
      <p></p>
    </div>
    <div class="column">
      <p style="text-align: center;">
        <b>PEKANBARU, {{$tgl_hasil_cetak}}
        <br>PENANGGUNG JAWAB LABORATORIUM</b>
      </p>
      <br>
      <br>
      <br>
      <p style="text-align: center;">
        <b>[Nama]
        <br>NIP.[nip]</b>
    </div>
  </div>

  <pagebreak>

  <h2 align="center">MORFOLOGI DARAH TEPI</h2><br>

  <table>
    <tbody>
      <tr>
        <td class="big-box" width="20%"><b>ERITROSIT</b></td>
        <td class="big-box" width="80%">-</td>
      </tr>
      <tr>
        <td class="big-box"><b>LEUKOSIT</b></td>
        <td class="big-box">-</td>
      </tr>
      <tr>
        <td class="big-box"><b>TROMBOSIT</b></td>
        <td class="big-box">-</td>
      </tr>
      <tr>
        <td class="big-box"><b>KESAN</b></td>
        <td class="big-box">-</td>
      </tr>
      <tr>
        <td class="big-box"><b>ANJURAN</b></td>
        <td class="big-box">-</td>
      </tr>
    </tbody>
  </table>

  <br>
  <br>

  <div class="row" style="font-size:80%;">
      <div class="column">
        <p></p>
      </div>
      <div class="column">
        <p style="text-align: center;">
          <b>PEKANBARU, {{$tgl_hasil_cetak}}
          <br>PENANGGUNG JAWAB LABORATORIUM</b>
        </p>
        <br>
        <br>
        <br>
        <p style="text-align: center;">
          <b>[Nama]
          <br>NIP.[nip]</b>
      </div>
    </div>

</body>

<html>