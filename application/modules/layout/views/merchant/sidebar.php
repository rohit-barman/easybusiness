<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active">
                   <a href="<?= base_url("merchant")?>">
                        <i class="fas fa-chart-bar"></i>Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url("merchant/chart")?>">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li>
                <li>
                    <a href="<?= base_url("merchant/table")?>">
                        <i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                    <a href="<?= base_url("merchant/form")?>">
                        <i class="far fa-check-square"></i>Forms</a>
                </li>
                <li>
                    <a href="<?= base_url("merchant/calendar")?>">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
              
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->