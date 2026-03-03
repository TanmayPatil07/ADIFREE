<?php 
session_start();

	include("connect.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>

<head>  <title><AddiFree.com</AddiFree></title>
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
        <h1>DAY 12 SCHEDULE.</h1>
        <h2>Renewed Focus on Health</h2>
        <p><b>- "The road to recovery may be challenging, but the destination is worth the journey."</b></p>
        <pre>
            <b>Morning (7:00 AM - 11:00 AM)</b><br>
            Start your day with a positive mindset.
             Have a nourishing breakfast.
             Focus on the health improvements you've experienced since quitting.
             Plan for a healthy, smoke-free future.


           <hr>

            <b>Mid-Morning (11:00 AM - 12:00 PM)</b><br>
           Engage in light exercise to boost your mood and maintain your energy levels.


            <hr>

            <b>Lunch (12:00 PM - 1:00 PM)</b><br>
          Celebrate your ten-day milestone with a special and nutritious lunch.
          Connect with your support network to share your success.

            <hr>

            <b>Afternoon (1:00 PM - 4:00 PM)</b><br>
          Keep busy with enjoyable activities.
          Continue to stay mindful of triggers and track your progress.
           Stay hydrated and have healthy snacks available.

            <hr>
            <b>Evening (4:00 PM - 8:00 PM)</b><br>
            Engage in relaxation techniques.
            Prepare a dinner to commemorate reaching ten days smoke-free.
            Reward yourself with a non-smoking treat or activity.
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