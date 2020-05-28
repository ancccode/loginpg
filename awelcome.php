<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome</title>
        
        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
            }
            section{
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                background: url(welc.png);
                background-size: cover;
                background-repeat: no-repeat;
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
            
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <header>
            <ul id="right-nav">
                <li><a href="dashboard.php">Dashboard</a></li>
            </ul>
        </header>
        <section>
            <div class="box">
                <h1>WELCOME</h1>
            </div>
        </section>
    </body>
</html>