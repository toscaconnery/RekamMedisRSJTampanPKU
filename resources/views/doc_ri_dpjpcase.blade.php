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

  <h2 align="center">DPJP DAN CASE MANAGER</h2><br>
   
  <div style="font-size: 85%;">  
     
    <div style="font-size:85%">
      <div class="row">
        <div class="column">
          <table>
            <tbody>
              <tr>
                <td class="konten_s_question">
                  Diagnosa
                </td>    
                <td class="konten_s_answer">  
                  : {{$diagnosa}}
                </td>                
              </tr>
              <tr>
                <td class="konten_s_question">
                  Ruang
                </td>    
                <td class="konten_s_answer">  
                  : {{$ruang}}
                </td>                
              </tr>
              <tr>
                <td class="konten_s_question">
                  DPJP
                </td>    
                <td class="konten_s_answer">  
                  : {{$nama_dpjp}}
                </td>                
              </tr>
            </tbody>
          </table>
        </div>
        <div class="column">
          <p style="text-align: center;">Tanda Tangan</p>
          <br>
          <p style="text-align: center;">( {{$nama_dpjp}} )</p>
        </div>
      </div>
    </div>
    <br>

    <p><b>Tim DPJP (Dokter Ruangan)</b></p>
    <p>1. - </p>
    <p>2. - </p>
    
  </div>


  <h4>RAWAT BERSAMA</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <div class="row">
      <div class="column">
        DPJP Utama : -
      </div>
      <div class="column">
        Tanggal : 12/08/2018
      </div>
    </div>
    <div class="row">
      <div class="column">
        DPJP : -
      </div>
      <div class="column">
        Tanggal : 12/08/2018
      </div>
    </div>
  </div>
  
  <h4>Pengalihan DPJP</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <div class="row">
        <div class="column">
          <table>
            <tbody>
              <tr>
                <td style="width:40px">
                  Pengalihan DPJP ke
                </td>    
                <td class="konten_s_answer">  
                  : {{$pengalihan_dpjp_ke}}
                </td>                
              </tr>
              <tr>
                <td class="konten_s_question">
                  Tanggal
                </td>    
                <td class="konten_s_answer">  
                  : {{$tanggal_pengalihan}}
                </td>                
              </tr>
              <tr>
                <td class="konten_s_question">
                  Alasan
                </td>    
                <td class="konten_s_answer">  
                  : {{$alasan_pengalihan}}
                </td>                
              </tr>
            </tbody>
          </table>
        </div>
        <div class="column">
          <p style="text-align: center;">Tanda Tangan</p>
          <br>
          <p style="text-align: center;">( {{$pengalihan_dpjp_ke}} )</p>
        </div>
      </div>
  </div>

  <h4>CASE MANAGER</h4>
  <hr class="limit">
  <div style="font-size: 85%;">  
    <table class="tabel">
      <thead>
          <tr>   
              <th class="default" data-field="name" width="90%">Case Manager</th>
              <th class="default" data-field="name">Ttd</th>
          </tr>    
      </thead>

      <tbody>
        <tr>
          <td style="height: 50px" class="default">
            CASE MANAGER 1 : {{$cm_1}}
          </td>
          <td class="default">
            
          </td>
        </tr>
        <tr>
          <td style="height:50px" class="default">
            CASE MANAGER 2 : {{$cm_2}}
          </td>
          <td class="default">
            
          </td>  
        </tr>
        <tr>
          <td style="height:50px" class="default">
            CASE MANAGER 3 : {{$cm_3}}
          </td>
          <td class="default">
            
          </td> 
        </tr>
      </tbody>
    </table>
  </div>

</body>

<html>