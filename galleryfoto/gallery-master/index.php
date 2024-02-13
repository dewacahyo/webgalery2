<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Honk&display=swap');

        html,
        body {
            margin: 0;
            padding: 0;

            background-color: #ddd;
        }

        .container {
            /* width: 80%; */
            width: 100%;
            /* margin: 50px auto; */
            display: grid;
            grid-template-columns: repeat(auto-fit, 1fr);
            grid-template-areas:
                'nav nav nav'
                'header header header'
                'about about about'
                'gallery gallery gallery'
                'contact contact contact'
                'footer footer footer';
        }

        @media screen and (min-width: 667px) {
            .container {
                grid-template-areas:
                    'nav nav nav'
                    'header header header'
                    'about about about'
                    'gallery gallery gallery'
                    'contact contact contact'
                    'footer footer footer';
            }
        }

        .item {

            background-color: rgb(138, 209, 254);
            /* display: flex; */

            /* justify-content: center; */
            /* align-items: center;
        padding: 100px;
        box-sizing: border-box; */
        }

        /* .item:nth-child(even) {
        background-color: rgb(255, 142, 142);
      } */

        .item1 h1 {
            padding: 0px 0px 0px 10px;
            /* font-size: 40px; */
        }

        .nav {
            font-family: 'Honk', system-ui;
        }

        .item1 {
            display: flex;
            justify-content: space-between;
        }

        ul {
            display: flex;
            justify-content: space-between;
            list-style: none;
            /* width: 10%; */
            padding: 10px 30px 0px 0px;
        }

        .con img {
            width: 60px;
            margin: 0px 4px -16px 0px;
        }

        li {
            padding: 0px 0px 0px 20px;
        }

        table {
            margin: 18px 100px 0px 100px;
        }

        .con a {
            font-size: 22px;
        }

        .nav li a {
            font-size: 20px;
        }

        .con {
            display: flex;
            justify-content: space-between;
        }


        .box img{
            width: 400px;
            padding: 0px 0px 10px 0px;
        }
        .box {
            display: flex;
            /* justify-content: center; */
            align-items: center;
            flex-direction: column;
            /* width: 100px; */
        }

        .nav {
            grid-area: nav;
            background-color: whitesmoke;

            /* justify-content: space-around; */
        }

        .header {
            grid-area: header;
            background-color: yellow;
            border: 5px solid black;
        }

        .about {
            grid-area: about;
            background-color: green;
            border: 5px solid black;
        }

        .gallery {
            grid-area: gallery;
            background-color: blue;
            border: 5px solid black;
        }

        .contact {
            grid-area: contact;
            background-color: aqua;
            border: 5px solid black;
        }

        .footer {
            grid-area: footer;
            background-color: orange;
            border: 5px solid black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="item1 nav">
            <!-- <h1><a href="home.php">Halaman Landing</a></h1> -->
            <?php
            session_start();
            if (!isset($_SESSION['userid'])) {
            ?>
                <ul>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            <?php
            } else {
            ?>
                <h1><?= $_SESSION['namalengkap'] ?></h1>

                <ul>
                    <div class="con">
                        <!-- <li><a href="index.php">Home</a></li> -->
                        <li><a href="album.php">Album</a></li>
                        <li><a href="foto.php">Foto</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </div>
                </ul>
            <?php
            }
            ?>
        </div>

        <?php
        include "koneksi.php";
        $sql = mysqli_query($conn, "select * from foto,user where foto.userid=user.userid");
        while ($data = mysqli_fetch_array($sql)) {
        ?>

            <div class="box">
                <a href="komentar.php?fotoid=<?= $data['fotoid'] ?>"><img src="gambar/<?= $data['lokasifile'] ?>"></a>
            </div>


        <?php
        }
        ?>
        </table>
    </div>
</body>

</html>