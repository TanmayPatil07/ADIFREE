<?php 
session_start();

	include("connect.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>

  <style>body {
    margin: 0;
    overflow: hidden;
}

.video-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the video covers the entire container */
    z-index: -1; /* Places the video behind the content */
   
}

glowing-text {
    font-size: 36px;
    color: #f06;
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    animation: glowing 2s infinite;
}

@keyframes glowing {
    0% {
        text-shadow: 0 0 10px rgb(250, 239, 244), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(229, 222, 225);
    }
    50% {
        text-shadow: 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(245, 240, 242), 0 0 40px rgb(255, 255, 255);
    }
    100% {
        text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255);
    }
}

.heading {
    text-align: center;
    color: rgb(0, 0, 0);
    font-size: 30px;
     text-transform: uppercase;
    font-weight: bold;
    animation: glowing 2s infinite;

}
@keyframes heading {
    0% {
        text-shadow: 0 0 10px rgb(244, 238, 240), 0 0 20px rgb(244, 239, 241), 0 0 30px rgb(250, 248, 249);
    }
    50% {
        text-shadow: 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255), 0 0 40px rgb(255, 255, 255);
    }
    100% {
        text-shadow: 0 0 10px rgb(255, 253, 254), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255);
    }
}

.element {
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    animation: glowing 2s infinite;

}
@keyframes element {
    0% {
        text-shadow: 0 0 10px rgb(244, 238, 240), 0 0 20px rgb(244, 239, 241), 0 0 30px rgb(250, 248, 249);
    }
    50% {
        text-shadow: 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255), 0 0 40px rgb(255, 255, 255);
    }
    100% {
        text-shadow: 0 0 10px rgb(255, 253, 254), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255);
    }
}

.paragraph {
    text-align: center;
    color: rgb(0, 0, 0);
    font-size: 30px;
    text-transform: uppercase;
    font-weight: bold;
    animation: glowing 2s infinite;

}
@keyframes paragraph {
    0% {
        text-shadow: 0 0 10px rgb(244, 238, 240), 0 0 20px rgb(244, 239, 241), 0 0 30px rgb(250, 248, 249);
    }
    50% {
        text-shadow: 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255), 0 0 40px rgb(255, 255, 255);
    }
    100% {
        text-shadow: 0 0 10px rgb(255, 253, 254), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255);
    }
}

.abc {
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    animation: glowing 2s infinite;

}
@keyframes abc {
    0% {
        text-shadow: 0 0 10px rgb(244, 238, 240), 0 0 20px rgb(244, 239, 241), 0 0 30px rgb(250, 248, 249);
    }
    50% {
        text-shadow: 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255), 0 0 40px rgb(255, 255, 255);
    }
    100% {
        text-shadow: 0 0 10px rgb(255, 253, 254), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(255, 255, 255);
    }
}

.button {
    text-align: center;
    color: aliceblue;
    padding: 4px;
    margin: 4px;
    background-color: rgb(45, 68, 45);
}

*{
    text-align: center;
    color: rgb(0, 0, 0);
    
}

</style>
    <div class="video-container">
        <video autoplay loop muted>
            <source src="https://video-previews.elements.envatousercontent.com/files/72a8748e-7933-4892-9727-754650581474/video_preview_h264.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="bg-container">
        <div class="d-flex flex-row abc">

            <a href="javascrypt.html"><button class="btn btn-primary button">About</button></a>
            <a href="logout.php"><button class="btn btn-primary button">Logout</button></a>
            <a href="info.php"><button class="btn btn-primary button">Info</button></a>
            <a href="contact.php"><button class="btn btn-primary button">Contact</button></a>

        </div>
        <h10 class="heading">Hello, <?php echo $user_data['user_name']; ?> </h10>
        <h1 class="heading">CryptoKeeper</h1>
        <p class="paragraph">Secure and Private your Important Files!<br>Encrypt Files and Text here!</p>   
        <h2 class="element">Encryption Algorithms</h2> 
        <a href="jscrypt.html"><button class="btn btn-primary button">AES</button></a>
        <a href="jscrypt.html"><button class="btn btn-primary button">DES</button></h2></a>
    </div>

    </div>

</body>

</html>