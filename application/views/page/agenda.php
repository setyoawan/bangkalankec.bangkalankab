<?php
//BACASELENGKAPNYA DI HALAMAN USER
$id_agenda = abs(intval($_GET['id']));
$query = "SELECT * FROM agenda WHERE id = '$id_agenda' LIMIT 1";


$agenda = $this->db->query($query)->row_array();

$a = $this->db->get('agenda')->result_array();

$querytampil = "SELECT * FROM agenda ORDER by id DESC";
$berita = $this->db->query($querytampil)->result_array();
?>

<section>
  <div class="container">

<div class="card shadow mb-4">
<div class="card-body">
<h3 class="mt-2"><?php echo $agenda["judul"]; ?></h3>
<p><?php echo '<em>' . date('d F Y', $agenda['date_created']) . '</em>'; ?></p>
<p align="justify"><?php echo $agenda["isi"]; ?></p>
</div>
</div>
</div>

</section>