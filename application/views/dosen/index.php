<div class="col-md-12">
 <h3>
 Daftar Mahasiswa
 </h3>
 <table class="table" border="1">
 <thead>
 <tr>
 <th>#</th><th>NIDN</th><th>Nama</th><th>Gender</th>
<th>Pendidikan</th><th>Tmp Lahir</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor=1;
 foreach($list_dsn as $dsn){
 ?>
 <tr>
 <td><?=$nomor?></td>
 <td><?=$dsn->nidn?></td>
 <td><?=$dsn->nama?></td>
 <td><?=$dsn->gender?></td>
<td><?=$dsn->tmp_lahir?></td>
<td><?=$dsn->pendidikan?></td>
 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</div>