<?php
require 'assets/php/db.php';
$id = base64_decode($_GET['id']);
$sql = "INSERT INTO post_view (id_post) VALUES('$id')";
mysqli_query($koneksi, $sql);
?>

<section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->

            <?php 
            $id = base64_decode($_GET['id']);
            $isi = query("SELECT * FROM post WHERE id = $id limit 1");
            $category = query("SELECT * FROM post_category WHERE id = ". $isi[0]['category'])
            ?>
            <div class="single-post">
              <div class="post-meta"><span class="date"><?= $category[0]['category_name'];?></span> <span class="mx-1">&bullet;</span> <span><?= $isi[0]['date_created'];?></span></div>
                <h1 class="mb-5"><?= $isi[0]['subject'];?></h1>

                <!-- pemanggilan isi artikel -->
                <p><?= $isi[0]['body'];?></p>
                
              
            </div><!-- End Single Post Content -->

          
          </div>
          <?php
          include 'sidebar.php';
          ?>
      </div>
    </section>