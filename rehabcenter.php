<?php 
session_start();

	include("connect.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>

<head>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    
    <style>
           @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap');

#members
{
    height: auto;
    border: 4px solid rgb(0, 0, 0);
    border-radius: 20px;
    background-image: url(https://media.istockphoto.com/id/518400220/photo/white-wood-painted-roughly-texture.jpg?b=1&s=612x612&w=0&k=20&c=fThnkQe7IJRL84ZiYolNUOW-USm3DxzSuimMd8IbvFM=);
}
#m1
{
    height: auto;
    display: flex;
    width: 90%;
    margin-left: 100px;
    border: 2px solid rgb(0, 0, 0);
    border-radius: 51px;
    /* background-color: rgba(142, 210, 130, 0.404); */
    align-items: center;
    align-content: center;
    justify-content: space-between;
    background-size:cover ;
    transition: transform 0.3s;
}
#m1:hover
{
    transform: scale(1.05);
}
#m11
{
    margin-top: 20px;
    height: auto;
    display: flex;
    width: 90%;
    margin-left: 100px;
    border: 2px solid rgb(0, 0, 0);
    border-radius: 51px;
  /*  background-color: rgba(120, 169, 7, 0.404); */
    align-items: center;
    align-content: center;
    justify-content: space-between;
    transition: transform 0.3s;
}
#m2
{
    margin-top: 20px;
    height: auto;
    display: flex;
    width: 90%;
    margin-left: 100px;
    border: 2px solid rgb(0, 0, 0);
    border-radius: 51px;
   /* background-color: rgba(7, 147, 169, 0.404); */
    align-items: center;
    align-content: center;
    justify-content: space-between;
    transition: transform 0.3s;
}
#m3
{
    margin-top: 20px;
    height: 320px;
    display: flex;
    width: 90%;
    margin-left: 110px;
    border: 2px solid rgb(0, 0, 0);
    border-radius: 51px;
 /*   background-color: rgba(7, 147, 169, 0.404); */
    align-items: center;
    align-content: center;
    justify-content: space-between;
    transition: transform 0.3s;
}
#m11:hover,
#m2:hover,
#m3:hover
{
    transform: scale(1.05);
}
.img
{
    border: 2px solid black;
    border-radius: 20px;
}

.button1{
    color: aliceblue;
      background-color: black;
      text-transform: capitalize;
      padding: 4px;
    }
 </style>

    <div id="members">
        <h2 class="hello"
             style="text-align: center; text-decoration: underline dashed; color: rgba(0, 0, 0, 0.967); font-size: 35px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: 900;">
             Near By Rehab Centers--</h2> 
         <div id="m1">
             <img src="https://content.jdmagicbox.com/comp/mumbai/s5/022pxx22.xx22.130824160637.d2s5/catalogue/yashwant-foundation-virar-west-mumbai-rehabilitation-centre-for-alcohol-45xyoj0-250.jpg" alt="top" width="250" height="200"
                 style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px;"
                 class="img">

             <p
                 style="font-size: 30px;  color:  rgb(234, 235, 195);   font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                 <h1
                     style=" color:  rgb(0, 0, 0);  font-size: 50px; margin-bottom: 231px; margin-left: 37px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                     1.Yashwant Foundation rehab center -</h1>
                 <p
                     style="font-size: 32px; font-weight: bolder; margin-top: 100px; color:  rgb(0, 0, 0); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-transform: capitalize;">
                     ground, Lt. Manubhai Shah Nidan Kendra, Purshottam Pamarg, near Virat Nagar, Virar West, Virar, Maharashtra 401303.</p>
             </p>

         </div>
         <div id="m11">
             <img src="https://content3.jdmagicbox.com/comp/palghar/v3/022pxx22.xx22.210714125155.l6v3/catalogue/punarjivan-foundation-virar-west-palghar-rehabilitation-centres-3gsl3jxvpt.jpg" alt="top" width="250" height="200"
                 style="margin-left: 10px; background-size: cover;"
                 class="img">

             <p
                 style="font-size: 30px;  color:  rgb(234, 235, 195);   font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                 <h1
                     style=" color:  rgb(0, 0, 0);  font-size: 50px; margin-bottom: 231px; margin-left: 37px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                     2.Punarjeevan foundation rehab center-</h1>
                 <p
                     style="font-size: 32px; font-weight: bolder; margin-top: 100px; color:  rgb(0, 0, 0); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-transform: capitalize;">
                     Satpala - Wagholi Rd, near st. joseph college, Pipri Dontalav, Virar West, Vatar, Virar, Maharashtra 401301.</p>
             </p>

         </div>
         <div id="m2">
             <img src="https://content.jdmagicbox.com/comp/mumbai/r2/022pxx22.xx22.220721134904.g5r2/catalogue/tripta-foundation-palghar-rehabilitation-centres-tooysnfa60.jpg?clr=" alt="top" width="250" height="200"
                 style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px;"
                 class="img">

             <p
                 style="font-size: 30px;  color:  rgb(234, 235, 195);   font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                 <h1
                     style=" color:  rgb(0, 0, 0);  font-size: 50px; margin-bottom: 231px; margin-left: 37px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                 <h1> 3.Tripta Wellness Home -</h1>
                 <p
                     style="font-size: 32px; font-weight: bolder; margin-top: 100px; color:  rgb(0, 0, 0); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-transform: capitalize;">
                     Home # 445, Char Rasta Satpala, Rajodi, Nalasopara West, Nala Sopara, Maharashtra 401301.</p>
             </p>

         </div>
         <div id="m3">
             <img src="https://www.anandvanwellnesscentre.com/assets/images/about/anandvan-about-1.jpg" alt="top" width="250" height="200"
                 style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px;"
                 class="img">

             <p
                 style="font-size: 30px;  color:  rgb(234, 235, 195);   font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                 <h1
                     style=" color:  rgb(0, 0, 0);  font-size: 50px; margin-bottom: 168px; margin-left: 37px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                    <h1> 4.Anandvan Wellness Center -</h1>
                 <p
                     style="font-size: 24px; font-weight: bolder; margin-top: 100px; color:  rgb(0, 0, 0); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-transform: capitalize;">
                     Ram Laxman Marg,Panchal Nagar,Lakshmiben Chedda Nagar,Nalasopara West,NalaSopara,Maharashtra 401203.
                    For More Info Visit Their Website-<a href="https://www.anandvanwellnesscentre.com/About/About-Us" target = "_main">https://www.anandvanwellnesscentre.com/About/About-Us</a></p>
             </p>

         </div>

     </div>
 
    <a href = "about.php"> <button class ="button1">BACK</button></a>

    

</body>

</html>