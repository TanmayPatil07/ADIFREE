<?php 
session_start();

	include("connect.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>

<head>
      <title><AddiFree.com</AddiFree></title>
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
        <h1>DAY 2 SCHEDULE.</h1>
        <h2>First Day Smoke-free</h2>
        <p><b>- "Recovery is an acceptance that your life is in shambles and you have to change it."</b></p>
        <pre>
            <b>Morning (7:00 AM - 11:00 AM)</b><br>
       Wake up with a positive mindset and remind yourself of your commitment to quitting.
	Start your day with a healthy breakfast to boost your energy.
	Reflect on the reasons why you want to quit smoking.

            <hr>

            <b>Mid-Morning (11:00 AM - 12:00 PM)</b><br>
            Take a 15-minute brisk walk or engage in light exercise to boost your mood.
            <hr>

            <b>Lunch (12:00 PM - 1:00 PM)</b><br>
           Enjoy a nutritious lunch to keep your energy levels up.
           Review your quit plan and remind yourself of the strategies you've prepared.
            <hr>

            <b>Afternoon (1:00 PM - 4:00 PM)</b><br>
           Stay hydrated by drinking plenty of water throughout the afternoon.
           Use your quit smoking app to track your progress and celebrate small milestones
            <hr>

            <b>Evening (4:00 PM - 8:00 PM)</b><br>
            Engage in a relaxing hobby or activity to keep your mind off smoking.
            Prepare a healthy dinner.
            If you encounter a high-risk smoking trigger, use the strategies you've brainstormed to avoid it.

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