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
        <h1>DAY 1 SCHEDULE.</h1>
        <h2>Begin your addiction free journey from today.</h2>
        <p><b>- "Believe in your ability to quit, for within you lies the strength to overcome any addiction."</b></p>
        <pre>
            <b>Morning (7:00 AM - 11:00 AM)</b><br>
            Wake up and set a positive intention for the day.<bR>
            Remove all cigarettes, lighters, and ashtrays from your home and car.
            Prepare a healthy breakfast to start the day with energy.<br>
            Identify smoking triggers and write them down.
            <hr>

            <b>Mid-Morning (11:00 AM - 12:00 PM)</b><br>
            Take a 15-minute brisk walk or engage in light exercise to boost your mood.
            <hr>

            <b>Lunch (12:00 PM - 1:00 PM)</b><br>
            Have a balanced and nutritious lunch.<br>
            Research local quit smoking support groups or resources.
            <hr>

            <b>Afternoon (1:00 PM - 4:00 PM)</b><br>
            Call a close friend or family member to inform them about your quit attempt.<br>
            Download a quit smoking app for motivation and tracking progress.
            <hr>

            <b>Evening (4:00 PM - 8:00 PM)</b><br>
            Engage in a relaxing hobby or activity to distract from cravings.<br>
            Prepare a healthy dinner.<br>
            Identify your high-risk smoking situations and brainstorm strategies to avoid them.
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