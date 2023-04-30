<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/agro_style.css">
    <!--=============== BOSTRAPP ===============-->

</head>
<!---------------- HEADER ---------------->
<body>
        <header class="header" id="header">
            <nav class="nav container">
                <div class="nav__logo">
                    <img src="../../image/Logo.png" alt="header logo" class="header_logo">
                </div>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="/home" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('permintaan') }}" class="nav__link">Permintaan</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Forum</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('kemitraan') }}" class="nav__link">Kemitraan</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('pencatatan') }}" class="nav__link">Pencatatan</a>
                        </li>
                    </ul>
                </div>

                <div class="nav__icon">
                    <i class="ri-user-fill" onclick="toggleMenu()"></i>
                </div>
            </nav>
            <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="../../asset/user.png" alt="">
                            <h2>Ilham Zamzami</h2>
                        </div>
                        <hr>

                        <ul class="sub__list">
                            <li class="sub__item">
                                <a href="profil">
                                <div class="item">
                                    <i class="ri-user-line"></i>
                                    <p>Profile</p>
                                </div>
                                </a>
                            </li>
                            <li class="sub__item">
                                <a href="/pembayaran">
                                <div class="item">
                                    <i class="ri-coins-line"></i><p>Pembayaran</p>
                                </div>
                                </a>
                            <hr>
                            <li class="sub__item">
                                <a href="loginAgro.php">
                                <div class="item_logout">
                                <form action="" method="POST"  style="margin: 15px;margin-top:60px;color:white;text-align:left">
                                    <button style="border:none; background:none; font-family: var(--body-font); font-size: 1.2rem;font-weight: 500;display: flex;align-items: center;gap: 1rem;" class="ri-login-box-line" name="logout" type="submit">Logout</button>
                                    <!-- <a href="#" class="dashboard-nav-item" ><i class="fas fa-sign-out-alt"></i> Logout </a> -->
                                </form>
                                    <!-- <i class="ri-login-box-line" name="logout" type="submit"></i><p>Logout</p> -->
                                </div>
                                </a>
                            </li>   
                        </ul>
                    </div>
                </div>
        </header>
            <div class="btnkembali">
                <!-- <img src="../../image/Group 105.png" alt=""> -->
            </div>

            @yield('container')
        <script>
            let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu")
            }
        </script>
    </body>
</html>