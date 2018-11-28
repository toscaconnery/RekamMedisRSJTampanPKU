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

<h2 align="center" style="font-size:100%">RENCANA TINDAKAN KEPERAWATAN<br>KLIEN DENGAN PERILAKU KEKERASAN</h2>

  <table style="font-size: 70%;">
    <tbody>
      <tr>
        <td class="contain" width="20%" style="padding:-0.2%">
          Tanggal Pengkajian 
        </td>    
        <td class="contain" style="padding:-0.2%">  
          : {{$tanggal_pengkajian}}
        </td>                
      </tr>      
      <tr>
        <td class="contain" style="padding:-0.2%">
          Jam Pengkajian 
        </td>    
        <td class="contain" style="padding:-0.2%">  
          : {{$jam_pengkajian}}
        </td>                
      </tr>
      <tr>
        <td class="contain" style="padding:-0.2%">
          Ruangan
        </td>    
        <td class="contain" style="padding:-0.2%">  
          : {{$ruangan}}
        </td>                
      </tr>
      <tr>
        <td class="contain" style="padding:-0.2%">
          Diagnosa Medis
        </td>    
        <td class="contain" style="padding:-0.2%">  
          : {{$diagnosa_medis}}
        </td>                
      </tr>
    </tbody>
  </table>

<table>
  <thead>
    <tr>
     <th class="box-c" width="8%" rowspan="2">Tgl</th>
     <th class="box-c" width="8%" rowspan="2">No Dx</th> 
     <th class="box-c" width="20%" rowspan="2">Dx Keperawatan</th> 
     <th class="box-c" width="64%" colspan="3">Perencanaan</th>  
    </tr>
    <tr>
      <th class="box-c" width="16%">Tujuan</th>
      <th class="box-c" width="20%">Kriteria Evaluasi</th>
      <th class="box-c" width="27%">Intervensi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="box-top">{{$tanggal_1}}</td>
      <td class="box-top">{{$nodx_1}}</td>
      <td class="box-top">
        {{$dxk_1}}<br>
        b.d. Perilaku Kekerasan
      </td>
      <td class="box-top">
        TUM: {{$t1}} <br>
        TUK:<br>
        1. Klien dapat membina hubungan saling percaya
      </td>
      <td class="box-top">
        1. Setelah {{$k1}} X pertemuan klien menunjukkan tanda-tanda percaya kepada perawat:<br>
        <ul>
          <li>Wajah cerah, tersenyum</li>
          <li>Mau berkenalan</li>
          <li>Ada kontak mata</li>
          <li>Bersedia menceritakan perasaan</li>
        </ul>
      </td>
      <td class="box-top">
        1. Bina hubungan saling percaya dengan :
        <ul>
          <li>Beri salam setiap berinteraksi</li>
          <li>Perkenalkan nama, nama panggilan perawat dan tujuan perawat berinteraksi</li>
          <li>Tanyakan dan panggil nama kesukaan klien</li>
          <li>Tunjukkan sikap empati, jujur dan menepati janji setiap kali berinteraksi</li>
          <li>Tanyakan perasaan klien dan masalah yang dihadapi klien</li>
          <li>Buat kontrak interaksi yang jelas</li>
          <li>Dengarkan dengan penuh perhatian ungkapa perasaan klien</li>
        </ul>
      </td>

    </tr>
     <tr>
      <td class="box-top">{{$tanggal_2}}</td>
      <td class="box-top">{{$nodx_2}}</td>
      <td class="box-top">{{$dxk_2}}</td>
      <td class="box-top">
        2. Klien dapat mengidentifikasi penyebab perilaku kekerasan yang dilakukannya
      </td>
      <td class="box-top">
        2. Setelah {{$k2}} X pertemuan klien menceritakan penyebab perilaku kekerasan yang dilakukannya:<br>
        <ul>
          <li>Menceritakan penyebab perasaan jengkel/kesal baik dari diri sendiri maupun lingkungannya</li>
        </ul>
      </td>
      <td class="box-top">
      2. Bantu klien mengungkapkan perasaan marahnya :<br>
      <ul>
        <li>Motivasi klien untuk menceritakan penyebab rasa kesal atau jengkelnya</li>
        <li>Dengarkan tanpa menyela atau memberi penilaian setiap ungkapan perasaan klien</li>
      </ul> 
      </td>
    </tr>

     <tr>
      <td class="box-top">{{$tanggal_3}}</td>
      <td class="box-top">{{$nodx_3}}</td>
      <td class="box-top">{{$dxk_3}}</td>
      <td class="box-top">3. Klien dapat mengidentifikasi tanda-tanda perilaku kekerasan</td>
      <td class="box-top">
        3. Setelah {{$k3}} X pertemuan klien menceritakan tanda-tanda saat terjadi perilaku kekerasan<br>
        <ul>
          <li>Tanda fisik : mata merah, tangan mengepal, ekspresi tegang, dan lain-lain.</li>
          <li>Tanda emosional : perasaan marah, jengkel, bicara kasar.</li>
          <li>Tanda sosiak : bermusuhan yang dialami terjadi perilaku kekerasan</li>
        </ul>
      </td>
      <td class="box-top">
        3. Bantu klien mengungkapkan tanda-tanda perilaku kekerasan yang dialaminya:<br>
        <ul>
          <li>Motivasi klien menceritakan kondisi fisik (tanda-tanda fisik) saat perilaku kekerasan terjadi</li>
          <li>Motivasi klien menceritakan kondisi emosinya (tanda-tanda emosional) saat terjadi perilaku kekerasan</li>
          <li>Motivasi klien menceritakan kondisi hubungan dengan orang lain (tanda-tanda sosial) saat terjadi perilaku kekerasan.</li>
        </ul>
      </td>
    </tr>

     <tr>
      <td class="box-top">{{$tanggal_4}}</td>
      <td class="box-top">{{$nodx_4}}</td>
      <td class="box-top">{{$dxk_4}}</td>
      <td class="box-top">4. Klien dapat mengidentifikasi jenis perilaku kekerasan yang pernah dilakukannya</td>
      <td class="box-top">
        4. Setelah {{$k4}} X pertemuan klien menjelaskan:<br>
        <ul>
          <li>Jenis-jenis ekspresi kemarahan yang selama ini dilakukannya</li>
          <li>Perasaannya saat melakukan kekerasan</li>
          <li>Efektivitas cara yang dipakai dalam menyelesaikan masalah</li>
        </ul> 
      </td>
      <td class="box-top">
        4. Diskusikan dengan klien perilaku kekerasan yang dilakukannya selama ini:<br>
        <ul>
          <li>Motivasi klien menceritakan jenis-jenis tindak kekerasan yang selama ini pernah dilakukannya.</li>
          <li>Motivasi klien menceritakan perasaan klien setelah tindak kekerasan tersebut terjadi</li>
          <li>Diskusikan apakah dengan tindak kekerasan yang dilakukannya masalah yang dialami teratasi.</li>
        </ul> 
      </td>
    </tr>
     <tr>
      <td class="box-top">{{$tanggal_5}}</td>
      <td class="box-top">{{$nodx_5}}</td>
      <td class="box-top">{{$dxk_5}}</td>
      <td class="box-top">5. Klien dapat mengidentifikasi akibat perilaku kekerasan</td>
      <td class="box-top">
        5. Setelah {{$k5}} X pertemuan klien menjelaskan akibat tindak kekerasan yang dilakukannya<br>
        <ul>
          <li>Diri sendiri: luka, dijauhi teman, dll</li>
          <li>Orang lain/keluarga: luka, tersinggung, ketakutan, dll</li>
          <li>Lingkungan: barang atau benda rusak dll</li>
        </ul> 
      </td>
      <td class="box-top">
        5. Diskusikan dengan klien akibat negatif (kerugian) cara yang dilakukan pada:<br>
        <ul>
          <li>Diri sendiri</li>
          <li>Orang lain/keluarga</li>
          <li>Lingkungan</li>
        </ul>
      </td>
    </tr>
     <tr>
      <td class="box-top">{{$tanggal_6}}</td>
      <td class="box-top">{{$nodx_6}}</td>
      <td class="box-top">{{$dxk_6}}</td>
      <td class="box-top">6. Klien dapat mengidentifikasi cara konstruktif dalam mengungkapkan kemarahan</td>
      <td class="box-top">
        6. Setelah {{$k6}} X pertemuan klien :<br>
        <ul>
          <li>Menjelaskan cara-cara sehat mengungkapkan marah</li>
        </ul>
      </td>
      <td class="box-top">
        6. Diskusikan dengan klien <br> 
        <ul>
          <li>Apabila klien mau mempelajari cara baru mengungkapkan marah yang sehat</li>
          <li>Jelaskan berbagai alternatif pilihan untuk mengungkapkan marah selain perilaku kekerasan yang diketahui klien.</li>
          <li>
            Jelaskan cara-cara sehat untuk mengungkapkan marah:
            <ul>
              <li>Cara fisik: nafas dalam, pukul bantal atau kasur, olah raga.</li>
              <li>Verbal: mengungkapkan bahwa dirinya sedang kesal kepada orang lain.</li>
              <li>Sosial: latihan asertif dengan orang lain.</li>
              <li>Spiritual: sembahyang/doa, zikir, meditasi, dsb sesuai keyakinan agamanya masing-masing</li>
            </ul>
          </li>
        </ul>
      </td>
    </tr>
     <tr>
      <td class="box-top">{{$tanggal_7}}</td>
      <td class="box-top">{{$nodx_7}}</td>
      <td class="box-top">{{$dxk_7}}</td>
      <td class="box-top">7. Klien dapat mendemonstrasikan cara mengontrol perilaku kekerasan</td>
      <td class="box-top">
        7. Setelah {{$k7}} X pertemuan klien memperagakan cara mengontrol perilaku kekerasan:<br>
        <ul>
          <li>Fisik: tarik nafas dalam, memukul bantal/kasur</li>
          <li>Verbal: mengungkapkan perasaan kesal/jengkel pada orang lain tanpa menyakiti</li>
          <li>Spiritual: zikir/doa, meditasi sesua agamanya</li>
        </ul> 
      </td>
      <td class="box-top">
        7.1. Diskusikan cara yang mungkin dipilih dan dianjurkan klien memilih cara yang mungkin untuk mengunkapkan kemarahan.<br>
        7.2. Ltih klien memperagakan cara yang dipilih:<br>
        <ul>
          <li>Peragakan cara melaksanakan cara yang dipilih</li>
          <li>Jelaskan manfaat cara tersebut</li>
          <li>Anjurkan klien menirukan peragaan yang sudah dilakukan</li>
          <li>Beri penguatan pada klien, perbaiki cara yang masih belum sempurna</li>
        </ul> 
      </td>
    </tr>
     <tr>
      <td class="box-top">{{$tanggal_8}}</td>
      <td class="box-top">{{$nodx_8}}</td>
      <td class="box-top">{{$dxk_8}}</td>
      <td class="box-top">8. Klien mendapat dukungan keluarga untuk mengontrol perilaku kekerasan</td>
      <td class="box-top">
        8. Setelah  {{$k8}} X pertemuan keluarga:<br>
        <ul>
          <li>Menjelaskan cara merawat klien dengan perilaku kekerasan</li>
          <li>Mengungkapkan rasa puas dalam merawat klien</li>
        </ul> 
      </td>
      <td class="box-top">
        8.1. Diskusikan pentingnya peran serta keluarga sebagai pendukung klien untuk mengatasi perilaku kekerasan.<br>
        8.2. Diskusikan potensi keluarga untuk membantu klien mengatasi perilaku kekerasan<br>
        8.3. Jelaskan pengertian, penyebab, akibat dan cara merawat klien perilaku kekerasan yang dapat dilaksanakan oleh keluarga.<br>
        8.4. Peragakan cara merawat klien (menangani perilaku kekerasan)<br>
        8.5. Beri kesempatan keluarga untuk memperagakan ulang
        8.6. Beri pujian kepada keluarga setelah peragaan<br>
        8.7. Tanyakan perasaan keluarga setelah mencoba cara yang dilatihkan
      </td>
    </tr>
     <tr>
      <td class="box-top">{{$tanggal_9}}</td>
      <td class="box-top">{{$nodx_9}}</td>
      <td class="box-top">{{$dxk_9}}</td>
      <td class="box-top">9. Klien menggunakan obat sesuai program yang telah ditetapkan</td>
      <td class="box-top">
        9.1. Setelah {{$k9}} X pertemuan klien menjelaskan:<br>
        <ul>
          <li>Manfaat minum obat</li>
          <li>Kerugian tidak minum obat</li>
          <li>Nama obat</li>
          <li>Bentuk dan warna obat</li>
          <li>Dosis yang diberikan kepadanya</li>
          <li>Waktu pemakaian</li>
          <li>Cara pemakaian</li>
          <li>Efek yang dirasakan</li>
        </ul><br>
        9.2. Setelah {{$k10}} X pertemuan klien menggunakan obat sesuai program  
      </td>
      <td class="box-top">
        9.1. Jelaskan manfaat menggunakan obat secara teratur dan kerugian jika tidak menggunakan obat<br>
        9.2. Jelaskan kepada klien:<br>
        <ul>
          <li>Jenis obat (nama, warna dan bentuk obat)</li>
          <li>Dosis yang tepat untuk klien</li>
          <li>Waktu pemakaian</li>
          <li>Cara pemakaian</li>
          <li>Efek yang akan dirasakan klien</li>
        </ul>
        9.3. Anjurkan klien:<br>
        <ul>
          <li>Minta dan menggunakan obat tepat waktu</li>
          <li>Lapor ke perawat/dokter jika mengalami efek yang tidak biasa</li>
          <li>Beri pujian terhadap kedisiplinan klien menggunakan obat</li>
        </ul>
      </td>
    </tr>
  </tbody>
</table>

</body>
<html>