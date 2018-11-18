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


  <h3 align="center">KEBUTUHAN INFORMASI DAN EDUKASI PASIEN & KELUARGA RAWAT JALAN</h3><br>
  
  
  <h4 style="font-size:80%;">PENGKAJIAN KEBUTUHAN INFORMASI DAN EDUKASI</h4><br>
  
  <div style="font-size: 85%;">  
    <p><b>Persiapan</b></p>
    <table>
      <tbody>
        <tr>
          <td class="konten_s_question">
            Bahasa
          </td>    
          <td class="konten_s_answer">  
            : {{$bahasa}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Kebutuhan Penterjemah
          </td>    
          <td class="konten_s_answer">  
            : {{$penerjemah}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pendidikan Pasien
          </td>    
          <td class="konten_s_answer">  
            : {{$pendidikan}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Baca dan Tulis
          </td>    
          <td class="konten_s_answer">  
            : {{$baca_tulis}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Pilihan Cara Belajar
          </td>    
          <td class="konten_s_answer">  
            : {{$cara_belajar}}
          </td>                
        </tr>
        <tr>
          <td class="konten_s_question">
            Budaya/Suku/Etnis
          </td>    
          <td class="konten_s_answer">  
            : {{$budaya}}
          </td>                
        </tr>
      </tbody>
    </table>
  </div>
  
  <div style="font-size: 85%;">  
  <p><b>Hambatan</b></p>
    <ul>
      <li>Kognitif terbatas</li>
      <li>Emosional</li>
      <li>Fisik lemah</li>
      <li>...</li>
    </ul>
  </div>

  <div style="font-size: 85%;">  
    <p><b>Kebutuhan</b></p>
    <ul>
      <li>Proses Penyakit</li>
      <li>Pencegahan Faktor Risiko</li>
      <li>...</li>
    </ul>
    <p><b>Kesediaan Pasien dan/atau Keluarga/Wali untuk menerima informasi dan edukasi :</b> {{$kesediaan_menerima}}</p>    
  </div>

  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        <p><b>Keterangan Keluarga Wali</b></p>
        <p>Nama : {{$nama_keluarga}}</p>
        <p>Hubungan dengan pasien : {{$hubunganh}}</p>
      </div>
      <div class="column">
        <p><b>Tanda Tangan Persetujuan Pernyataan</b></p>
        <p>Tanggal : 29/08/2018</p>
        <br>
        <br>
        <br>
        <p>{{$nama_keluarga}}</p>
      </div>
    </div>
  </div>

  <br>


  <div style="font-size: 85%;">  
    <div class="panel-body">
      <table class="tabel">
          <thead>
              <tr>   
                  <th style="vertical-align: middle; width:10%; text-align:center;" rowspan="2" class="col7" data-field="name">Tanggal</th>
                  <th class="col11" rowspan="2" data-field="name">Poliklinik</th>
                  <th class="col11" rowspan="2" data-field="name">Informasi/Edukasi tentang</th>
                  <th class="col11" colspan="2" data-field="name">EDUKATOR</th>
                  <th class="col11" colspan="2" data-field="name">SASARAN <br> (PASIEN/KELUARGA/ LAIN-LAIN)</th>
                  <th class="col11" rowspan="2" data-field="name">Evaluasi</th>
              </tr>    
              <tr>   
                  <th class="col12" data-field="name">Nama<br>Profesi</th>
                  <th class="col12" data-field="name">TTD</th>
                  <th class="col12" data-field="name">NAMA</th>
                  <th class="col12" data-field="name">TTD</th>
              </tr>    
          </thead>

          <tbody>
            <tr>
              <td class="kolom_big">
                20/08/2018
              </td>
              <td class="kolom_big">
                
              </td> 
              <td class="kolom_big">
                1. Penyakit yang diderita pasien
              </td> 
              <td class="kolom_big">
                Obat
              </td>
               <td class="kolom_big">
                <br>
                <br>
                <br>
                <br>
                <br>
              </td> 
              <td class="kolom_big">
                
              </td>   
               <td class="kolom_big">
                
              </td> 
              <td class="kolom_big">
                Sudah mengerti
              </td>        
            </tr>
            <tr>
              <td class="kolom_big">
                20/08/2018
              </td>
              <td class="kolom_big">
                
              </td> 
              <td class="kolom_big">
                2. Rencana tindakan/ terapi
              </td> 
              <td class="kolom_big">
                
              </td>   
              <td class="kolom_big"> 
                <br>
                <br>
                <br>
                <br>
                <br>
              </td> 
              <td class="kolom_big">
                
              </td>   
              <td class="kolom_big">
                
              </td> 
              <td class="kolom_big">
                Sudah mengerti
              </td>     
            </tr>
            <tr>
              <td class="kolom_big">
                20/08/2018
              </td>
              <td class="kolom_big">
                
              </td> 
              <td class="kolom_big">
                3. Pengobatan dan prosedur yang diberika atau diperlukan
              </td> 
              <td class="kolom_big">
                
              </td>   
              <td class="kolom_big">
                <br>
                <br>
                <br>
                <br>
                <br>
              </td> 
              <td class="kolom_big">
                
              </td> 
              <td class="kolom_big">
                
              </td>
              <td class="kolom_big">
                Sudah mengerti
              </td>    
            </tr>
            <tr>
              <td class="kolom_big">
                20/08/2018
              </td>
              <td class="kolom_big">
                
              </td> 
              <td class="kolom_big">
                4. Hasil Pelayanan, termasuk terjadinya kejadian yang diharapkan dan tidak diharapkan
              </td> 
              <td class="kolom_big">
                
              </td>  
              <td class="kolom_big">
                <br>
                <br>
                <br>
                <br>
                <br>
              </td> 
              <td class="kolom_big">
                
              </td>   
              <td class="kolom_big">
                
              </td> 
              <td class="kolom_big">
                Sudah mengerti
              </td>      
            </tr>

            <tr>
              <td class="kolom_big">
                20/08/2018
              </td>
              <td class="kolom_big">
                
              </td> 
              <td class="kolom_big">
                ....
              </td> 
              <td class="kolom_big">
                
              </td>  
              <td class="kolom_big">
                <br>
                <br>
                <br>
                <br>
                <br>
              </td> 
              <td class="kolom_big">
                
              </td>   
              <td class="kolom_big">
                
              </td> 
              <td class="kolom_big">
                Sudah mengerti
              </td>      
            </tr>

          </tbody>
      </table>
    </div> 
  </div>

</body>

<html>