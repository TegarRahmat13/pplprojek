<style>
    
    /* Pen-specific styles */
html, body, section, div {
  height: 100vh;
}



h1 {
    font-size: 1.75rem;
    margin: 0 0 0.75rem 0;
}
h3 {
    margin-top: 10%;
}

/* Pattern styles */
.container {
    display: grid;
}

.left-half {
    grid-column: 1;
}

.right-half {
    text-align: center;
    color: black;
    grid-column: 2;
}
.save_ {
    margin-bottom: 20px;
    margin-top: 20px;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/logsign_agro.css">
</head>
<body>
    <section class="container">
        <div class="left-half">
            <img src="image/Group 2.png" alt="" style="width: 100%;height:100%; ">
        </div>
        <div class="right-half">
            <img src="image/logo_login.png" alt="">
            <p>Aplikasi untuk mencari mitra dalam dunia agroindustri di Indonesia</p>
            <h3>Login Sebagai</h3>
            <div class="save_">
                <a href="/loginAgro" style="margin-right: 10%;background: #159895;color: white;border-radius: 5px;font-size: 20px;">Pelaku Agro</a>
                <a href="/loginMitra" style="background: #159895;color: white;border-radius: 5px;font-size: 20px;">Mitra</a>
                <br>
                <br>
                <a href="/home" class="delete-btn" style="background: #159895;color: white;border-radius: 5px;font-size: 20px;">Admin</a>
            </div>
        </div>

    </section>

</body>
</html>