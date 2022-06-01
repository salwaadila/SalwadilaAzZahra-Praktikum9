<div class="col-md-12">
 <h3>
 Daftar Mahasiswa
 </h3>
 <table class="table" border="1">
 <thead>
 <tr>
 <th>#</th><th>Nama</th><th>SKS</th><th>Kode</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor=1;
 foreach($list_mtklh as $mtklh){
 ?>
 <tr>
 <td><?=$nomor?></td>
 <td><?=$mtklh->nama?></td>
 <td><?=$mtklh->sks?></td>
 <td><?=$mtklh->kode?></td>
 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</div>