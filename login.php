<!DOCTYPE html>
<html>
<head>
    <style>
        *{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body{
            background: url(img/bg-login.png);
            
            height: 100vh;
            width: 98%;
            
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            position: absolute;
            

        }
        .container{
            height: 450px;
            width: 350px;
            background-color: #f8f8e0ed;
            margin-top: 50px;
            padding: 5px;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }
        .button_box{
            width: 210px;
            margin: 35px auto;
            box-shadow: 0 0 20px 9px #ff61241f ;
            border-radius: 30px;
            position: relative;

        }
        .toggle_btn{
            padding: 10px 29px;
            cursor: pointer;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }
        .btn{
            top: 0;
            left: 0;
            width: 110px;
            height: 100%;
            background: linear-gradient(to right, #900E7C,#CC0062,#DE2A2C);
            border-radius: 30px;
            transition: .5s;
            position: absolute;

        }
        .input_group{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 30px;
            position: absolute;
            width: 350px;
            transition: .5s;
            
        }
        .input_field{
            width: 85%;
            padding: 10px 0;
            margin: 5px 0;
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
            margin: 10px;

        }
        .submit_btn{
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: linear-gradient(to right, #900E7C,#CC0062,#DE2A2C);
            outline: none;
            border-radius: 30px;
            margin: 20px;
            border: none;

        }
        #login{
            left: 0px;
        }
        #register{
            left: 400px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="main_container">
            <div class="button_box">
                <div class="btn" id="btn"></div>
                <button type="button" class="toggle_btn" onclick="login()">Log In</button>
                <button type="button" class="toggle_btn" onclick="register()">Register</button>
            </div>
            <form action="validation.php" id="login" class="input_group" method="POST">
                <input type="text" class="input_field" placeholder="User Id" name="user" require>
                <input type="password" class="input_field" placeholder="Password"  name="password" required>
                <button type="submit" class="submit_btn">Log In</button>
            </form>
            <form action="registration.php" id="register" class="input_group" method="POST">
                <!-- <input type="email" class="input_field" placeholder="Email Id" required> -->
                <input type="text" class="input_field" placeholder="User Id" name="user" required >
                <input type="password" class="input_field" placeholder="Password"  name="password" required>
                <button type="submit" class="submit_btn">register</button>
            </form>
        </div>
    </div>
    <script>
        var x= document.getElementById("login");
        var y= document.getElementById("register");
        var z= document.getElementById("btn");

        function register(){
            x.style.left ="-400px";
            y.style.left ="0px";
            z.style.left="110px";
        }
        function login(){
            x.style.left ="0px";
            y.style.left ="410px";
            z.style.left="0px";
        }
    </script>
</body>
</html>