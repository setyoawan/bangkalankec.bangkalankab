<section class="ftco-section ftco-no-pb">
    <div class="container">
        <!-- <div class="row no-gutters"> -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">All Videos</span>

            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt">
    <div class="container">
      <div class="row justify-content-center mb-5">
    
      </div>
      <div class="row d-flex">
      <?php foreach ($videos as $videos) : ?>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            
              
              
                <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?= $videos['link']; ?>" allowfullscreen></iframe>
</div>
            
          </div>
        </div>
        <?php endforeach; ?> 
      </div>
    </div>
  </section>