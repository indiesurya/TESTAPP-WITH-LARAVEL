<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/40fc9b7b86.js" crossorigin="anonymous"></script>
    <script type=" text/javascript" src="assets/js/ckeditor/ckeditor.js">
    </script>
    <title>{{ $title }}</title>
</head>

<body>
    <div class="navbar">
        <div class="nav">
            <div class="logo">
                <b style="color: #009DAE;">TEST</b><b style="color:#71DFE7;">APP</b>
                <a style="text-decoration:none;" href="logout.php" class="ldropdown" class="fa fa-sign-out-alt"><i class="fas fa-sign-out-alt"></i> Logout</a>
                <a style="text-decoration:none;" href="index.php" class="ldropdown"><i class="fas fa-user-circle"></i> Indie Surya</a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="main-content">
        <div class="sidebar">
            <div class="fitur">
                <li class="kolom"><a href="/tasks"><b>TASK</b></a></li>
            </div>
        </div>
        <div class="dashboard">
            <div class="content">
                @yield('container')
            </div>
        </div>
    </div>
</body>
<footer>
    <p>
        <a target="_blank" href="index.php"><b style="color: #71DFE7;">TEST</b><b style="color: #C2FFF9;">APP</b></a>
    </p>
</footer>

</html>