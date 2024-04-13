<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #AFB3FF; /* Background color for the main container */
        }
        .forms {
            text-align: center; /* Center align the form elements */
            background-color: #EBEFFF; /* Background color for the form */
            border-radius: 10px;
            padding: 20px;
            width: 400px;
        }
        .pmiddle {
            font-size: 24px; /* Increase font size */
            font-weight: bold;
        }
        .fform {
            border-radius: 20px;
            border: 1px solid #656Ed3;
            color: #000000;
            margin: 10px 0;
            padding: 8px;
            width: 100%;
            box-sizing: border-box; /* Include padding and border in the element's total width */
        }
        .sbutton {
            border: none;
            border-radius: 20px;
            background-color: #656ED3;
            color: #FFFFFF;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer; /* Change cursor to pointer on hover */
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
        }
        .logo {
            height: 30px; /* Adjust height of the logo */
            width: 30px; /* Adjust width of the logo */
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="forms">
            <span class="pmiddle">Welcome!</span><br>
            <form>
                <label for="username">Username:</label><br>
                <input type="email" id="username" name="username" class="fform" required><br>
                <label for="pword">Password:</label><br>
                <input type="password" id="pword" name="password" class="fform" required><br>
                <button type="submit" class="sbutton">Login</button>
                <p class="footer">Don't have an account? <a href="http://127.0.0.1:8000/QuizMasterPro" class="nav-link">Register</a></p>
            </form>
        </div>
    </div>
    <a href="https://wa.me/1234567890" target="_blank"><img src="whatsapp.png" alt="WhatsApp Logo" class="logo"></a>
</body>
</html>
