    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li <?php if ($menu == "") {
                    echo 'class="active"';
                } ?>><a href="index.php"><i class="fa-regular fa-chart-line"></i><span class="menu-title" data-i18n="Dashboard Hospital">Dashboard</span></a>

                <li class=" navigation-header"><span data-i18n="Utama">Utama</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Utama"></i>
                <li <?php if ($menu == "pembayaran") {
                    echo 'class="active"';
                } ?>class=" nav-item"><a href="?menu=pembayaran"><i class="fa-regular fa-dollar"></i><span class="menu-title" data-i18n="Calendar">Pembayaran</span></a>
                </li>
                <li <?php if ($menu == "kelola") {
                    echo 'class="active"';
                } ?>class=" nav-item"><a href="?menu=pelanggan"><i class="fa-regular fa-dollar"></i><span class="menu-title" data-i18n="Calendar">Kelola Pembayaran</span></a>
                </li>

                
                
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->