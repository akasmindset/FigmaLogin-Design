<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login Form</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <h2 id="branding">
            <span id="brand-red">Hotels.ng</span> INTERNSHIP 4.0
        </h2>

        <form>
            <input type="text" class="loginTxt" placeholder="Username">

            <input type="text" class="loginTxt" placeholder="Password">

            <input type="button" id="signTxt" value="Sign in">

        </form>
        <p>
            current time signed in: <br> 
            <span id="text-size"> 

               <?php echo date("h:i:a"); 
               ?>

            </span>
        </p>
        
    </div>
</body>

</html>