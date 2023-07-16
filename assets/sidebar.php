<nav id="sidebar" class="sidebar">
                <div class="sidebar-header">
                    <div class="text-center">
                    <img src="img2/<?php echo $_SESSION['admin_profile']?>" width="150px" class="rounded-circle img-thumbnail shadow-sm">
                    </div>
                    <h3 style="color: orangered;"><?php echo $_SESSION['username']?></h3>
                    <h6>Selamat Datang </h6>
                </div>
                <ul class="nav flex-column" id="nav_accordion">
                    <li class="nav-item has-submenu">
                        <a class="nav-link" href="#"><i class="fas fa-hotel mr-2 "></i>Data Hotel </a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="menu-admin.php">List Hotel</a></li>
                            <li><a class="nav-link" href="tambah.php">Tambah Hotel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-submenu">
                        <a class="nav-link" href="profile-admin.php"><i class="fas fa-user mr-2"></i>Profile  </a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-door-open mr-2"></i>Log Out </a>
                    </li>
                </ul>
            </nav>