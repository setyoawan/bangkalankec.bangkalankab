<?php
//BACASELENGKAPNYA DI HALAMAN USER
$id_artikel = abs(intval($_GET['id']));
$query = "SELECT * FROM news WHERE id = '$id_artikel' LIMIT 1";


$news = $this->db->query($query)->row_array();

$a = $this->db->get('news')->result_array();

$querytampil = "SELECT * FROM news ORDER by id DESC";
$berita = $this->db->query($querytampil)->result_array();
?>

<section>
  <div class="container">

<div class="card shadow mb-4">
<?php echo "<img src='" . base_url("assets/img/news/" . $news['gambar']) . "'>"; ?>
<div class="card-body">
<h3 class="mt-2"><?php echo $news["judul"]; ?></h3>
<p><?php echo '<em>' . date('d F Y', $news['date_created']) . '</em>'; ?></p>
<p align="justify"><?php echo $news["isi"]; ?></p>
</div>
</div>
</div>

</section>