<?php 
session_start();

	include("connect.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>

<head> <title><AddiFree.com</AddiFree></title>
    <link rel="stylesheet" href="C:\xampp\htdocs\login\tutorial\Day1.css">
 </head>

<body></body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap');

.days-info-container {
    background-image: url("https://img.freepik.com/free-photo/fresh-leaves-twig-arrange-row-yellow-surface_23-2148217832.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais");
    background-size: cover;
    height: 200vh;

}

.font-days-color {
    color: black;
    font-size: large;
}
</style>
<div class="days-info-container">
    <div class="font-days-color">
        <h1>DAY 11 SCHEDULE.</h1>
        <h2>Consolidating Progress</h2>
        <p><b>- "You may have made mistakes, but that doesn't mean you are a mistake."</b></p>
        <pre>
            <b>Morning (7:00 AM - 11:00 AM)</b><br>
            Wake up with a sense of accomplishment as you continue to be smoke-free.
           Have a nutritious breakfast.
           Reflect on the positive changes in your health and finances since quitting.
           Set specific short-term goals for the week ahead.

           <hr>

            <b>Mid-Morning (11:00 AM - 12:00 PM)</b><br>
           Engage in light exercise to boost your mood and maintain your energy levels.
            <hr>

            <b>Lunch (12:00 PM - 1:00 PM)</b><br>
           Savor a balanced lunch.
           Share your progress with your support group or friends for continued encouragement.
            <hr>

            <b>Afternoon (1:00 PM - 4:00 PM)</b><br>
          Stay engaged in activities you enjoy.
          Stay vigilant for any unexpected triggers.
          Continue tracking your progress and setting rewards for yourself.

            <hr>
            <b>Evening (4:00 PM - 8:00 PM)</b><br>
           Practice stress-reduction techniques or meditation to maintain emotional balance.
           Prepare a healthy dinner.
           Review your high-risk situations and refine your avoidance strategies.
            <hr>

            <b>Night (8:00 PM - 10:00 PM)</b><br>
            Wind down with a warm bath or shower.
            Practice deep breathing exercises to manage cravings.
            Read or listen to a motivational book or podcast on quitting smoking.
        </pre>
        <hr>

    </div>
</div>
<a href="page1.php"><button>Back</button></a>
</body>

</html>