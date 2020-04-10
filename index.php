<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Keyboard Webshop - Homepage</title>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/login.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body onload="LoginCall()">
    <header>
        <h1 class="logo">Keyboard Shop</h1>
        <nav>
            <ul class="nav_links">
                <li><a href="index.php" class="ActivePage">Home</a></li>
                <li><a href="Producten.html">Producten</a></li>
                <li><a href="Contact.hml">Contact</a></li>
            </ul>
        </nav>
        <div class="LOGIN_WINKEL">
            <a  class="Winkelmandje" href="#"><button>Winkelmandje</button> </a>     
              <a class= "Login" id="Login" href="#"><button>Login</button></a>
			  <a class="Login" id="Login" href="Registreer.html"><button>Registreer</button></a>
                </div>
         
    </header>
    <main>
        <div class="Main_title">
        <h1>Keyboard Shop</h1>
            <h2>De enige echte!</h2>
                </div>
            
         <div class="PopUp">
               <div class="PopUp-content">
                   <img src="https://www.freeiconspng.com/uploads/white-close-button-png-16.png" alt="Close" class="close_login">
                        
                   <form action="login.php" method="post">
                            <div class="logo_login">
                                <h1>Keyboard Shop</h1>
                            </div>
                                <input type="text" name="username"placeholder="Username">    
                                <input type="password" name="password" placeholder="Password">
                            <a href="#" class="btnLogin">Login</a>
                            <a href="Registreer.html" class="btnLogin">Registreer</a>
                        </form>
                </div>
            </div>
    </main>
     <script type="text/javascript" src="js/login.js"></script>  
</body>
</html>
