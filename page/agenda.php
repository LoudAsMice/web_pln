<section id="listproduct" class="posts">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 align-center">
        <div class="row justify-content-center">
        	<div class="row">
        		<div class="card mb-4">
                  <div class="card-header">Agenda</div>
                  <div class="card-body">
                    <?php
                    // $week = strtotime('+1 week', time());
                    $setahunfromnow = date('Y-m-d H:i:s', strtotime('+1 year', time()));
                    $sekarang = date('Y-m-d H:i:s', time());
                    $agenda = query("SELECT * FROM agenda WHERE time BETWEEN '$sekarang' AND '$setahunfromnow'");
                    foreach ($agenda as $a) {
                    $bulan = date('M', strtotime($a['time']));
                    $day = date('l', strtotime($a['time']));
                    $date = date('d', strtotime($a['time']));
                    $waktu = date('H:i', strtotime($a['time']));
                    ?>
                    <div class="row row-stripped">
                      <div class="col-md-2">
                        <h4><span class="badge badge-secondary" style="background-color: #6c757d !important;"><?= $date;?> <?= $bulan;?> <?= date('Y', strtotime($a['time'])) ?></span></h4>
                        <h7 class=""></h7>
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
        	</div>
        </div>
      </div>
    </div>
  </div>
</section>