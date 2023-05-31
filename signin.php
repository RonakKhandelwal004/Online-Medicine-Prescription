<html>  <head>
 <title>login</title>
    <style>


     body{
        background-color: #cef4f4;
         margin: 0;
        padding: 0; 
     
        
        }
     
 .navbar{
    padding: 5px ;
    padding-top: 12px;   
    margin-right:3px;
    background: black;
    color:white;
    font-weight: bold;
    font-size:30px;
}
.navbar ul{
    margin: 0;
    padding: 0;
    list-style:none;
    overflow:hidden;
    display: flex;
  }
  .navbar  li{
    font-family: "Raleway", sans-serif;
    font-weight: 600;
    font-size: 18px;
    white-space:nowrap;
    position:relative;
    margin:10px;
    margin-right: 50px;
  }
  .navbar li a{
    color:#fff;
    text-decoration: none;
  }
    a:hover, .active{
      background-color:rgb(47, 152, 232);
      color:white;
      padding-top: 10px;
      padding-left: 10px;
      padding-bottom: 10px;
      padding-right: 10px;
}
  .float{ 
    float:left;
    margin-right:900px;
  }


.sign-up-form{
    width : 300px;
    background: #55ffe5;
    padding: 40px;
    box-shadow: 0 20px 35px rgba(0,0,0,0.3);
    text-align: center;
    margin:8% auto 0;
    border-radius:10px;
}

 .sign-up-form h1{
color: #01111d;
 margin-bottom: 30px;
}
 .input-box{
border-radius: 20px;
padding: 10px;
margin: 10px 0; 
 width: 100%;
border: 1px solid rgba(0, 0, 0, 0); 
outline: none;
}
button{
color: #fff; width: 100%;padding: 10px;
border-radius: 20px; font-size: 15px;
margin: 10px 0;
border: none;
outline: none; cursor: pointer;
}
.signup-btn{
background-color: #1c8adb;
}

    </style>
    
    </head>
    <body>
      <?php include "connection.php"?>
      <?php include "fetch.php"?>
        <div class="navbar" > <div class="float">MEDICINE PRESCRIPTION</div>
        <ul>
            <li><a  href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a class="active" href="signin.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        </ul>
        </div>
    <div  class="sign-up-form">
    <h1><b> Login Now</b></h1>
    <form action="" method="POST">
    <input type="email" class="input-box" placeholder="Your Email" name="email" required>
     <input type="password" class="input-box" placeholder="Your Password" name="password" required>
     <button  type="submit" class="signup-btn"><b>login</b></button>
    <hr><p><b>Don't have an account ? <a href="signup.php">Sign up</a></b></p>
    </form>
    </div>
    </body>
    </html>