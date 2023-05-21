<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="StyleSheet.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="Web Teknolojileri Proje">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Bartu MERKAN">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com
/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div id="nav-container">
        <div id="menu-icon">
            &#9776;
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Ana Sayfa</a></li>
                <li><a href="ozgecmis.html">Özgeçmiş</a></li>
                <li><a href="sehrim.html">Şehrim</a></li>
                <li><a href="miras.html">Mirasımız</a></li>
                <li><a href="ilgi.html">İlgi alanlarım</a></li>
                <li><a href="iletisim.html">İletişim</a></li>
                <li>Login</li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <h1>Kullanıcı Girişi</h1>  
    </div>
    <div class="login-container">
        <h2>Login Page</h2>
        <form action="loginprocess.php" method="post">
            <input type="email" id="username" name="username" autofocus placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Log in</button>
        </form>
    </div>
</body>
</html>
