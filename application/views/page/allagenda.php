<section class="ftco-section ftco-no-pb">
    <div class="container">
        <!-- <div class="row no-gutters"> -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">All Agenda</span>

            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center mb-5">
      </div>
      <div class="row d-flex">
      <?php foreach ($agenda as $agenda) : ?>
        <div class="col-md-3 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <div class="text">
              <h3 class="heading"><a href="page/loadagenda?id=<?= $agenda['id']; ?>"><?php echo $agenda["judul"]; ?></a></h3>
              <div class="meta mb-3">
                <div><?= date('d F Y', $agenda['date_created']); ?></div>
                <div> - By Admin</div>
              </div>
              <p><?php echo substr($agenda["isi"], 0, 200); ?>.</p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>