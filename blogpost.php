<?php include('connection.inc.php'); include('header.php'); ?>
  <main id="main">
    <!-- ======= Blog Section ======= -->
    <section class="hero-section inner-page">
      <div class="wave">
        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Blog Posts</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section">
      <div class="container">
        <div class="row mb-5">
             <?php 
                $res=mysqli_query($con,"SELECT * FROM blogpost WHERE status=1 ORDER BY id DESC");
                    if(mysqli_num_rows($res)>0)
                         while($blogpost=mysqli_fetch_assoc($res)){
                ?>
                        <div class="col-md-4 box-shadow ml-2">
                        <div class="post-entry">
                          <a href="blog/<?php echo $blogpost['slug']; ?>" class="d-block mb-4">
                              <div class="">
                            <img src="assets/img/blog/<?php echo $blogpost["banner"]?>" alt="Image" class="img-fluid "></div>
                          </a>
                          <div class="post-text">
                            <span class="post-meta"><?php echo $blogpost["date"]?> &bullet;</span>
                            <h3><a href="blog/<?php echo $blogpost['slug'];?>"><?php echo $blogpost["title"]?></a></h3>
                            <p class="text-justify"><?php echo $blogpost["description"]?></p>
                            <p><a href="blog/<?php echo $blogpost['slug'];?>" class="readmore">Read more</a></p>
                          </div>
                        </div>
                      </div>
          
            <?php }?>
        </div>  
      </div>
    </section>
    <?php include('cta_section.php'); ?>
  </main><!-- End #main -->
<?php include('footer.php'); ?>