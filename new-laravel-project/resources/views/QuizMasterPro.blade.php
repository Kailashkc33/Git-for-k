<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
 

    <style>
          body {
            font-family: 'Inter', sans-serif;
        }
        .container {
           
            display: inline-block;
            padding: 10px;
            margin-left: 60%; 
            margin-top: 15%;
            border-radius: 10px; /* Adjust the radius as needed */

    
        }
      
        .sbutton{
            width : 367px;
            height: 34px;
            border: 1px solid;
            border-radius: 50px;
            font: Inter;
            weight: 500;
            color: #FFFFFF;
            padding: 8px;
            margin: 5px;
            background-color: #656ED3;
  
        }


    

    
    .fform{
        border-radius: 20px;
        border: 1px solid;
    border-color : #656Ed3;
    color: #000000;
    /* Same border radius as the container */
    padding: 8px;
    margin: 5px 0;
    width: 367px;
    
    

    }
    
   .image-container{
    /* display: flex;
    flex-wrap: wrap; */
  position: relative;
  width: 50%;
  height: 20%;
  margin : auto;
 
  bottom: 690px;
  right: 200px;
  
} 

.image-position {
  position: absolute;
  top: 0px;
  right: 0;
  width: 536px;
  height: 492px;
  object-fit: cover;
  object-position:15% 100%;
  
}
.pmiddle {
    margin-bottom: 80px; /* Add some spacing between header and input fields */
    padding: 0 0 30px 0;
    font-size:  1.2rem; 
    font-weight: bold;
    font-family: 'Inter', sans-serrif;/* Adjust font size as needed */
    position: relative;
    left: 75px;

    
}
.contact{
    margin: 0 20px 0 20px;
    padding: 0 20px 0 20px;
}
input[type="login"] {
            background-color: #656ED3; /* Green background color */
            border: none; /* Remove default border */
            color: white; /* White text color */
            margin: 10px 10px;
            padding: 10px 10px; /* Padding to make the button larger */
            text-align: center; /* Center align text */
            text-decoration: none; /* Remove default underline */
            display: inline-block; /* Display as a block element */
            font-size: 14px; /* Font size */
            cursor: pointer; /* Change cursor to pointer on hover */
            border-radius: 5px; /* Rounded corners */
        }
        
        /* Change background color on hover */
        input[type="login"]:hover {
            background-color: white;
        }

.logo{
    margin: 10px 10px 10px 10px;
    height: 10%;
    width: 10%;
    position: relative;
    top: -100px;
    left: 75px;
    
}
.nav-link{
   text-decoration: none;
}
    
   



    </style>
</head>



<body>
    <div class="main-container">
        <form action="/action_page.php" id="form1">
            
            <div class="container" class = "input-field">
                <div>
            <span class="pmiddle">Fill out form to begin the fun:</span></div><br>
                <label for="fname">Full name:</label><br>
                <input type="text" id="fname" name="fname" class ="fform"><br><br>
                <label for="Uname">User name:</label><br>
                <input type="Email" id="Uname" name="Uname" required class ="fform"><br><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required class ="fform"><br><br>
                <label for="cpw">Confirm Passowrd:</label><br>
                <input type="password" id="cpw" name="cpw" class ="fform"><br><br>
                <button class = "sbutton"> Register</button>
                <p class = "pmiddle"><span style = "font-weight: normal;">Yes I have an account?<a href ="http://127.0.0.1:8000/loginpage?username=&password=" class="nav-link"> <input type="Login" value="Login" id="login" name ="login"></a><br><br><u><span class = "contact">Contact us on:</span></u></span><br></p><br>
                <a href="https://wa.me/1234567890" target="_blank">
        <img src="whatsapp.png" alt="Whatsapp icons created by Fathema Khanom - Flaticonx" class = "logo">
    </a>
                
               

                
       

            </div>
           
        </form>
        <div class="image-container">
            <img src="{{ asset('Other 07reg.png') }}" alt=" Image"  class = "image-position">
        </div>
    </div>
   

   

        
</body>
</html>

    
    
       
                        
                                