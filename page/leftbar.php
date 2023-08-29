    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li <?php if ($menu == "") {
                    echo 'class="active"';
                } ?>><a href="index.php"><i class="fa-regular fa-chart-line"></i><span class="menu-title" data-i18n="Dashboard Hospital">Dashboard</span></a>

                <li class=" navigation-header"><span data-i18n="Utama">Utama</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Utama"></i>
                <li <?php if ($menu == "tarif") {
                    echo 'class="active"';
                } ?>class=" nav-item"><a href="?menu=tarif"><i class="fa-regular fa-list"></i><span class="menu-title" data-i18n="Calendar">Kelola Tarif</span></a>
                </li>
                <li <?php if ($menu == "pelanggan") {
                    echo 'class="active"';
                } ?>class=" nav-item"><a href="?menu=pelanggan"><i class="fa-regular fa-users"></i><span class="menu-title" data-i18n="Calendar">Kelola Pelanggan</span></a>
                </li>

                <li class=" navigation-header"><span data-i18n="Apps">Transaksi</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Transaksi"></i>
                <li <?php if ($menu == "penggunaan") {
                echo 'class="active"';
                     } ?>class=" nav-item"><a href="?menu=penggunaan"><i class="fa-regular fa-newspaper"></i><span class="menu-title" data-i18n="Calendar">Kelola Penggunaan</span></a>
                </li>
                </li>
                
                
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->