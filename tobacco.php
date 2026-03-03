<?php 
session_start();

	include("connect.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="C:\xampp\htdocs\login\tutorial\tobacco.css" >
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap');

.favourite-places-bg-container {
    background-image: url("https://img.freepik.com/free-photo/abstract-grunge-decorative-relief-navy-blue-stucco-wall-texture-wide-angle-rough-colored-background_1258-28311.jpg?size=626&ext=jpg&ga=GA1.2.202822172.1692620567&semt=ais");
    background-size: cover;
    height: 1000vh;
    padding: 20px;
    margin: 10px;
}

.favourite-places-card {
    background-color: pink;
    border-radius: 10px;
    padding: 20px;
    margin: 10px;

}

.image {
    height: 100px;
    width: 100px;
}

.heading {
    color: yellow;
}
    </style>
    <div class="favourite-places-bg-container">
        <h1 class="heading">21 days challenge</h1>
        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 1</h1>
                <p>Introduction to the Course: Explain the course objectives and what participants can expect. </p>
            </div>
            <a href="Day1.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 2</h1>
                <p>Assessing Your Tobacco Use: Help participants understand their smokeless tobacco habits and triggers. </p>
            </div>
            <a href="Day 2.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 3</h1>
                <p>Develop a support network.Inform your friends and family about your plan. </p>
            </div>
            <a href="Day 3.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 4</h1>
                <p>Research the health benefits of quiting Tobacco. </p>
            </div>
            <a href="Day 4.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 5</h1>
                <p>Explore various tobacco sessions(e.g. nicotine,replacement therapy,councelling).</p>
            </div>
            <a href="Day 5.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 6</h1>
                <p>Identifying Triggers: Teach participants to identify situations, emotions, or activities that trigger the urge to use smokeless tobacco. </p>
            </div>
            <a href="Day 6.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 7</h1>
                <p>Start using NRT(e.g.Nickotine gun,patch). </p>
            </div>
            <a href="Day 7.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 8</h1>
                <p>Monitor how NRT is helping reduce is helping reduce craving. </p>
            </div>
            <a href="Day 8.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 9</h1>
                <p>
                    Managing Withdrawal Symptoms: Educate participants on common withdrawal symptoms and strategies to cope with them.
                </p>
            </div>
            <a href="Day 9.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 10</h1>
                <p>Oral Health: Highlight the benefits of improved oral health after quitting smokeless tobacco.
                </p>
            </div>
            <a href="Day 10.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 11</h1>
                <p>Coping with Cravings: Provide tips and techniques for dealing with cravings as they continue to occur. </p>
            </div>
            <a href="Day 11.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 12</h1>
                <p>Stress Management: Teach stress-reduction techniques, as stress is a common trigger for smokeless tobacco use.
                </p>
            </div>
            <a href="Day 12.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 13</h1>
                <p>Oral Health Maintenance: Discuss oral hygiene practices to help participants care for their teeth and gums post-quitting.
                </p>
            </div>
            <a href="Day 13.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 14</h1>
                <p>ocial Support: Encourage participants to seek support from friends, family, or support groups. </p>
            </div>
            <a href="Day 14.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 15</h1>
                <p>
                    Long-Term Goals: Discuss the long-term benefits of quitting and set goals for a tobacco-free future. </p>
            </div>
            <a href="Day 15.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 16</h1>
                <p>Relapse Prevention: Provide strategies to prevent relapse and deal with slips if they occur.. </p>
            </div>
            <a href="Day 16.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 17</h1>
                <p>Celebrating Success: Celebrate achievements and milestones during the course. </p>
            </div>
            <a href="Day 17.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 18</h1>
                <p>Daily Check-Ins: Encourage participants to log their progress and share their experiences daily. </p>
            </div>
            <a href="Day 18.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 19</h1>
                <p>Group Support: Foster a sense of community among participants through group discussions or forums.. </p>
            </div>
            <a href="Day 19.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 20</h1>
                <p>Professional Guidance: Offer access to trained counselors or healthcare professionals for individual support.
                </p>
            </div>
            <a href="Day 20.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <div class="favourite-places-card d-flex flex-row">
            <div>
                <h1>Day 21</h1>
                <p>Educational Materials: Provide informative articles, videos, or other resources to reinforce the quitting process. </p>
            </div>
            <a href="Day 21.php"><img src="https://img.freepik.com/free-photo/word-no-made-from-broken-cigarette-tobacco_23-2148043837.jpg?size=626&ext=jpg&ga=GA1.1.202822172.1692620567&semt=ais" class="image" /></a>
        </div>

        <a href="home.php"><button class="btn btn-primary"> Back</button></a>
    </div>
</body>