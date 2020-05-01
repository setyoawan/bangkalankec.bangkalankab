<section class="ftco-section ftco-no-pb">
    <div class="container">
        <!-- <div class="row no-gutters"> -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">All News</span>

            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center mb-5">
      </div>
      <div class="row d-flex">
      <?php foreach ($news as $news) : ?>
        <div class="col-md-3 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <div class="text">
              <h3 class="heading"><a href="page/loadartikel?id=<?= $news['id']; ?>"><?php echo $news["judul"]; ?></a></h3>
              <div class="meta mb-3">
                <div><?= date('d F Y', $news['date_created']); ?></div>
                <div> - By Admin</div>
              </div>
              <a href="page/loadartikel?id=<?= $news['id']; ?>" class="block-20 img" style="background-image: url('<?= base_url('assets/img/news/' . $news['gambar']); ?>');">
              </a>
              <p><?php echo substr($news["isi"], 0, 200); ?>.</p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>