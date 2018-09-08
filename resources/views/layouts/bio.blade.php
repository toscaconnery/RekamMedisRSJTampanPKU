<div class="panel-body bio-graph-info">
  <h1>No. RM : {{Session::has('id_pasien') ? Session::get('id_pasien') : ''}}</h1>
  <div class="row">
    <div class="bio-row">
      <p><span>Nama Pasien </span>: {{Session::has('nama_pasien') ? Session::get('nama_pasien') : ''}} </p>
    </div>
    <div class="bio-row">
      <p><span>Tanggal Lahir</span>: {{Session::has('tanggal_lahir') ? Session::get('tanggal_lahir') : ''}}</p>
    </div>
    <div class="bio-row">
      <p><span>Jenis Kelamin </span>: {{Session::has('jenis_kelamin') ? Session::get('jenis_kelamin') : ''}}</p>
    </div>
  </div>
</div>