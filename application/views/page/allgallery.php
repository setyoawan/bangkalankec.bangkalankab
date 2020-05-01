<section class="ftco-section ftco-no-pb">
    <div class="container">
        <!-- <div class="row no-gutters"> -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">All Gallery</span>

            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center mb-5">
      </div>
      <div class="row d-flex">
      <?php foreach ($gallery as $gallery) : ?>
        <div class="col-md-3 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <div class="text">
              
              <a href="<?= base_url('assets/img/gallery/' . $gallery['file']); ?>" class="block-20 img" target="_blank" style="background-image: url('<?= base_url('assets/img/gallery/' . $gallery['file']); ?>');">
              </a>
              <!-- <img class="block-20 img" target="_blank" src="<?= base_url('assets/img/gallery/' . $gallery['file']); ?>" alt=""> -->
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>