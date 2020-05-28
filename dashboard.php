<?php 
    include('root.php');

    $query = "SELECT username FROM user";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
            a{
                color: #B3B6B7;
                text-decoration: none;
                font-size: 20px;
            
            }
            header{
                background: #210504;
                height: 50px;
            }
            #right-nav{
                padding: 10px;
            }
            table{
                margin: 100px;
            }
            section{
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                background: url(.images/image.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                height: 100vh;
            }
            section .box{
                position: relative;
                max-width: 600px;
                padding: 50px;
                box-shadow: 0 5px 15px rgba(0,0,0,.5);
                overflow: hidden;
                color: #000;
            }
            section .box h1{
                position: relative;
                margin: 0 0 20px;
                padding: 0;
                font-size: 50px;
                text-transform: uppercase;
                z-index: 2;
            }
            section .box p{
                
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <ul id="right-nav">
                <li><a href="awelcome.php">Welcome</a></li>
            </ul>
        </header>
        <section>
            <div class="box">
                <h2>Login Details</h2>
                <?php 
                while($users = mysqli_fetch_assoc($result)){
                    echo "<p>".$users['username']."<p>";
                }
                ?>
            </div>
        </section>

    </body>
</html>