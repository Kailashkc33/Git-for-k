<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
   
           
      
        .sbutton{
            width : 365px;
            height: 34px;
            border: 1px solid;
            border-radius: 50px;
            color: #FFFFFF;
            
            margin: 20px 20px 0 0;
            background-color: #656ED3;
  
        }


    

    
    .fform{
    border-radius: 50px;
    border: 1px solid;
    border-color : #656Ed3;
    color: #000000;
    margin: 5px 0;
    width: 367px;
    height: 34px;
    font-size: 15px;
    
    

    }
    
  

  



  

.pmiddle {
    margin-left: 90px;
    margin-bottom: 80px; /* Add some spacing between header and input fields */
    padding: 0 0 30px 0;
    font-size:  1.2rem; 
    font-weight: bold;
    position: absolute;
    left: 150px;
    
    

    
}
.contact{
    margin: 0 100px 0 20px;
    padding: 0 100px 0 20px;
    position: relative;
    left:20px;
}

.logo{
    margin: 10px 10px 10px 10px;
    height: 3%;
    width: 3%;
    position: relative;
    bottom: 790px;
    left: 200px;
    
}
.main-container{
    display: inline-block;
    margin: 0 50px 50px 90px;
    padding : 40px 30px 30px 30px;
    
    height: 720px;
    width: 1280px;
}
.img-container{
    width: 600px;
    height: 590px;
    position: relative;
    bottom: 630px;
    left: 630px;
   
}

   

.forms{
  
     padding: 40px;
    margin-left: 40%; 
    margin-top: 15%;
}
.background-1 {
    /* Your first background styles */
    background-color: #AFB3FF; /* Example background color */
    width: 100vw;
    height: 100vh;
  }

  .background-2 {
    /* Your second background styles */
    background-color: #EBEFFF; /* Example background color */
    position: absolute;

    width: 70%;
    height: 102%;
  }
  .footer{
    position: relative;
    left: 40px;
  }
  .nav-link{
    text-decoration: none;
  }

    </style>
<body>
    <div class = "background-1">
    <div class = "background-2">
    <main class = "main-container">
        <div class ="forms">
        <span class="pmiddle">Welcome!</span></div><br>
    <form>
        <label for="username">Username:</label><br>
        <input type="email" id = "username" name="username" class="fform" required><br>
        <label for ="pword">Password:</label><br>
        <input type="password" id = "pword" name ="password" class="fform" required><br>
        <button class="sbutton">Login</button>
        <p class="footer">Don't have an account?<a href ="http://127.0.0.1:8000/QuizMasterPro" class="nav-link"> Register</a><br><br></p><br>
        
</div>

        
</main>
</div>
</div>

 <div class="img-container">              
<img src ="Other 03.png"></div>
<div>
    <a href = "https://wa.me/1234567890" target="_blank" class="nav-link"><img src ="whatsapp.png" class = "logo"></a>
</body>

</html>