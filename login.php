<?php
    
    include('root.php');
      
?>
<html lang="en">
    <head>
        <title>
            Login and Registration Page
        </title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="login-page">
            <div class ="form">
                <form class="register-form" action="register_script.php"  method="POST">
			
                    <input type="text" placeholder="Name" name="name"  required="true">
                    <input type="text" placeholder="User Name"  name="username" pattern="[a-zA-Z0-9]{2,15}" title="Username should not contain special characters and less than 15" required="true">
                    <input type="password" placeholder="Password"  name="password" pattern="[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}" title="Atleast 1 uppercase, 1 lowercase, 1 symbol, 1 number and min 8 characters" required="true">
                    <select name="type">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <button type="submit" name ="register">Register</button>
					<p class="message">Already Registered ?<a href="#"> Login</a></p>
                </form>
				

                <form class="login-form" action="login_script.php" method="POST">
                    <input type="text" placeholder="User Name" name="username" required="true">
                    <input type="password" placeholder="Password" name="password" required="true">
                    <select name="type">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <button type="submit">Login</button>
                    
                    <p class="message">Not Registered ?<a href="#"> Register</a></p>
                </form>
                
            </div>
            
        </div>
        


        <script src ="https://code.jquery.com/jquery-3.3.1.min.js">
        </script>
        <script>
            $('.message a').click(function()
            {
                $('form').animate({height: "toggle",opacity: "toggle"}, "slow");
            });
        </script>
    </body>
</html>