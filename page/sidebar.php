<div class="col-lg-4">
                
                <!-- Statistik -->
                <div class="card mb-4">
                  <div class="card-header">Statistik</div>
                  <div class="card-body">
                      <!-- isi -->
                      <section class="border p-4 mb-4 rounded-5 d-flex justify-content-center">
                      <div class="col-lg-17" >
                        <canvas id="myChart" style="width: 300px; max-width: 900px; display: block; height: 60px;" width="121" height="60" class="chartjs-render-monitor"></canvas>

                            <script>
                              <?php 
                              $laki = query("SELECT Count(jkel) as total, jkel as jenis FROM `user_detail` WHERE jkel='Laki-Laki'");
                              $perempuan = query("SELECT Count(jkel) as total, jkel as jenis FROM `user_detail` WHERE jkel='Perempuan'");
                              $total = query("SELECT Count(jkel) as total, jkel as jenis FROM `user_detail`") ?>
							var xValues = ["Perempuan", "Laki-laki", "Total"];
							var yValues = [<?= $perempuan[0]['total'] ?>, <?= $laki[0]['total'] ?>, <?= $total[0]['total'] ?>];
							var barColors = ["red", "green","blue"];

							new Chart("myChart", {
							  type: "bar",
							  data: {
							    labels: xValues,
							    datasets: [{
							      backgroundColor: barColors,
							      data: yValues
							    }]
							  },
							  options: {
							    legend: {display: false},
							    title: {
							      display: true,
							      text: "Statistik penduduk Desa"
							    }
							  }
							});
							</script>
                      </div>
                     </section>
                  </div>
              </div>
                
                <!-- Side widget-->
                <div class="card mb-4">
                  <div class="card-body">
                  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    
                    <div class="carousel-inner">
                    <?php
                      $img = query("SELECT * FROM staff_img INNER JOIN category_img ON staff_img.category_img = category_img.id ORDER BY category_img ASC");
                      $count = 1;
                      foreach ($img as $i){
                      ?>
                      <div class="carousel-item <?php if ($count == 1) {echo 'active'; $count++;}?>" data-bs-interval="20000">
                        <img src="assets/img/staff/<?= $i['link'];?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5><?= $i['category'];?></h5>
                          <p><?= $i['name_img'];?></p>
                        </div>
                      </div>
                      <?php }?>
                    </div>
                   
                    

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                </div>
                <div class="card mb-4">
                  <div class="card-header">
                    <div class="card-body">
                      <div class="aside-block">

                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Populer</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Terbaru</button>
                          </li>
                        </ul>
          
                        <div class="tab-content" id="pills-tabContent">
          
                          <!-- Popular -->
                          <div class="tab-pane show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                            <?php
                              $sql = query("SELECT post_view.id_post, post.subject, post.date_created, COUNT(post_view.id) FROM post_view INNER JOIN post ON post.id=post_view.id_post GROUP BY id_post DESC LIMIT 4");
                              foreach ($sql as $data){
                              ?>
                            <div class="post-entry-1 border-bottom">
                              
                              <div class="post-meta"><span><?= $data['date_created'] ?></span></div>
                              <h2 class="mb-2"><a href="<?= "?page=view-post&id=".base64_encode($data['id_post']); ?>"><?= $data['subject'] ?></a></h2>
                            </div>
                          <?php } ?>
          
                          </div> <!-- End Popular -->
          
                          <!-- Trending -->
                          <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                            <?php 
                            $sql2 = query("SELECT post.id, post.date_created, post.category, post.subject, post_category.category_name FROM `post` Inner JOIN post_category ON post_category.id=post.category order by id DESC LIMIT 4");

                            foreach ($sql2 as $data2){
                            ?>
                            <div class="post-entry-1 border-bottom">
                              <div class="post-meta"><span class="date"><?= $data2['category_name'] ?></span> <span class="mx-1">&bullet;</span> <span><?= $data2['date_created'] ?></span></div>
                              <h2 class="mb-2"><a href="?page=view-page&id=<?php base64_encode($id)  ?>"><?= $data2['subject'] ?></a></h2>
                            </div>
                            <?php } ?>
          
                          </div> <!-- End Latest -->
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="card mb-4">
                  <div class="card-header">Agenda</div>
                  <div class="card-body">
                    <?php
                    // $week = strtotime('+1 week', time());
                    $setahunfromnow = date('Y-m-d H:i:s', strtotime('+1 year', time()));
                    $sekarang = date('Y-m-d H:i:s', time());
                    $agenda = query("SELECT * FROM agenda WHERE time BETWEEN '$sekarang' AND '$setahunfromnow' limit 2");
                    foreach ($agenda as $a) {
                    $bulan = date('M', strtotime($a['time']));
                    $day = date('l', strtotime($a['time']));
                    $date = date('d', strtotime($a['time']));
                    $waktu = date('H:i', strtotime($a['time']));
                    ?>
                    <div class="row row-stripped">
                      <div class="col-md-2">
                        <h4><span class="badge badge-secondary" style="background-color: #6c757d !important;"><?= $date;?></span></h4>
                        <h7 class=""><?= $bulan;?></h7>
                      </div>
                      <div class="col-md-10">
                        <h4 class="text-uppercase"><strong><?= $a['title'];?></strong></h4>
                          <ul class="list-inline">
                              <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i><?= $day;?></li>
                            <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $waktu;?></li>
                            <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?= $a['location'];?></li>
                          </ul>
                          <p> <?= $a['detail'];?></p>
                      </div>
                    </div>
                    <?php }?>
                  </div>
              </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Menu Kategori</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled mb-0">
                                  <?php 
                                  $categories = query("SELECT DISTINCT(category_name) FROM post_category");
                                  foreach ($categories as $category) {
                                  ?>
                                    <li><a href="?category=<?= $category['category_name'] ?>" class="text-black"><?= $category['category_name']; ?></a></li>
                                  <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>