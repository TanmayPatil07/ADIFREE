
<?php 
session_start();

	include("connect.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>

<head>  <title><AddiFree.com</AddiFree></title>
    <link rel="stylesheet" href="C:\xampp\htdocs\login\tutorial\Day1.css"></head>

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
        <h1>DAY 6 SCHEDULE.</h1>
        <h2>Sustaining Your Success</h2>
        <p><b>- "Recovery is not for people who need it; it's for people who want it."</b></p>
        <pre>
            <b>Morning (7:00 AM - 11:00 AM)</b><br>
             Wake up feeling proud of your smoke-free achievements.
            Enjoy a nutritious breakfast to start your day.
            Reflect on the positive changes you've experienced since quitting.
            Remind yourself of the reasons why you quit.

            <hr>

            <b>Mid-Morning (11:00 AM - 12:00 PM)</b><br>
           Go for a 15-minute brisk walk or engage in light exercise.
           Reaffirm your commitment to a smoke-free life.
            <hr>

            <b>Lunch (12:00 PM - 1:00 PM)</b><br>
           Have a balanced and satisfying lunch.
           Connect with a friend or support group to share your progress and challenges.
            <hr>

            <b>Afternoon (1:00 PM - 4:00 PM)</b><br>
          Stay occupied with activities or hobbies.
         Stay hydrated and have healthy snacks on hand.
         Use your quit smoking app to monitor your journey and celebrate milestones.

            <hr>

            <b>Evening (4:00 PM - 8:00 PM)</b><br>
            Engage in relaxing activities to unwind.
            Prepare a healthy and enjoyable dinner.
            Continue to identify and avoid high-risk situations for smoking.

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