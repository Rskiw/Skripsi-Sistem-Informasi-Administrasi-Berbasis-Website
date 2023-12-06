<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/<?php echo $meta['logo_meta'] ?>" alt="" height="25">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/<?php echo $meta['logo_meta'] ?>" alt="" height="35">
                        <strong style="text-transform: uppercase;"><?php echo $meta['singkat_meta'] ?> BJM</strong>
                    </span>
                </a>

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/<?php echo $meta['logo_meta'] ?>" alt="" height="25">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/<?php echo $meta['logo_meta'] ?>" alt="" height="35">
                        <strong style="text-transform: uppercase;"><?php echo $meta['singkat_meta'] ?> BJM</strong>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button> 
    
        </div> 

        <div class="d-flex"> 

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div> 

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/user.png">
                    <span class="d-none d-xl-inline-block ms-1"><?php echo $admin['nama']; ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">  
                    <a class="dropdown-item text-danger" href="logout.php">
                        <i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout
                    </a>
                </div>
            </div> 
    
        </div>
    </div>
</header>