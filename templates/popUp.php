  <div class="PopUp">
                <div class="PopUp-content">
                      <img src="https://www.freeiconspng.com/uploads/white-close-button-png-16.png" alt="Close" class="close_login">
                      <form action="login.php" method="post">
                               <div class="logo_login">
                                   <h1>Account login</h1>
																<?php
																if ($_SESSION['loggedOn'] == false)
																{
																	// include 'templates/loginError.php';
																	echo $_SESSION['loginError'];
																	session_destroy();
																} 
																?>
                               </div>

                                 <input type="text" name="username"placeholder="Username">    
                                 <input type="password" name="password" placeholder="Password">
                               <a class= "Login" id="Login" href="#"><button type="submit">Login</button></a>
                               <a href="register.php" class="btnLogin">Register</a>
                           </form>
                   </div>
               </div>

