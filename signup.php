<html>
<head>
<title>signup</title>
<style>
body{
background: #cef4f4;
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
      /* text-decoration:underline; */
    /* border-radius: 70px; */
  }
  .float{ 
    float:left;
    margin-right:900px;
  }



.wrapper{
width: 330px;
padding: 2rem 1rem;
margin: 150px auto;
background-color:#55ffe5;
border-radius: 10px;
text-align:center;
box-shadow: 0 20px 35px rgba(0,0,0,0.3);
}
h1{
font-size: 2rem;
color: #07001f; 
margin-bottom: 1.2rem;
}
form input{
width: 92%; 
outline: none;
border: 1px solid #fff;
padding: 12px 20px; margin-bottom: 10px;
border-radius: 20px;
background:#e4e4e4;
}
button{
font-size: 1rem;
margin-top: 1.8rem;
padding: 10px 0; border-radius:20px;
outline: none; border: none;
width: 90%;
color: #fff;
cursor: pointer;
background: rgb(17,107,143);
}
button:hover{
background: rgba(17,107,143,0.877)
} 
input:focus{
border: 1px solid rgb(192, 192, 192);
}
.terms{
margin-top: 0.2rem;
}
.terms input{
height: 1em;
width: 1em;
vertical-align: middle; cursor: pointer;
}
.terms label{
font-size: 0.7rem;
}
hr{
margin:10px;
}
.terms a{
color: rgb(17,107,143);
}
</style>
</head>
<body>
  <?php include "connection.php"?>
  <?php include "inserction.php"?>
    <div class="navbar" > <div class="float">MEDICINE PRESCRIPTION</div>
    <ul>
        <li><a  href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="signin.php">Login</a></li>
        <li><a class="active" href="signup.php">Signup</a></li>
    </ul>
    </div>
<div class="wrapper">
<h1>Sign Up</h1>
 <form action="" method="POST">
<input type="text" placeholder="Username" name="name" required>
<input type="email" placeholder="Email" name="email" required>
 <input type="password" placeholder="Password" name="password" required>
<!-- <input type="password" placeholder="Re-Enter Password" required> -->

<div class="terms">
<input type="checkbox" id="checkbox" required>
<label style="font-size:larger" for="checbox">I agree with 
<a href="terms.php">Terms & Conditions</a></label>
</div>
<button type="submit">Sign Up</button>
<hr>
<div class="member" >Already a member? <a href="signin.php">login</a>
</div>
</form>
</div>
</body>
</html>