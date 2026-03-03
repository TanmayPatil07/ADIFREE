<?php 
session_start();

	include("connect.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>

        <head>
            <title>
                About Page
            </title>
           
        </head>
        <body>
            <style>
                .navbar
{
    height: 100px;
    width: 100%;
    border: 4px solid rgb(0, 0, 0);
    border-radius: 20px;
    background-color: rgb(100, 129, 86);
    border-top: none;
    border-left: none;
    border-right: none;

}

.about1
{
    
    font-size: 30px;
    font-weight: bolder;
    opacity: 0; 
            color: rgb(33, 33, 170); 
            animation: fadeColorChange 5s ease-in-out forwards;
}
@keyframes fadeColorChange {
    0% {
        opacity: 0;
        color: rgba(102, 81, 6, 0.867); 
    }
    100% {
        opacity: 1; 
        color: rgb(1, 12, 14); 
    }
}
.about
{
    transition: transform 0.3s;
    font-size: 30px;
    font-weight: bolder;
}
.about:hover{
    transform: scale(1.1);
}
.nav
{
    padding: 0px;
    height: 107px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.info
{
    height: 790px;
    width: 100%;

  background-image: url(https://img.freepik.com/free-photo/abstract-blur-empty-green-gradient-studio-well-use-as-background-website-template-frame-business-report_1258-52616.jpg?size=626&ext=jpg&ga=GA1.1.725292349.1697043220&semt=ais) ;
    border: 2px solid black;
    border-radius: 20px;
    color: rgb(0, 50, 51);  font-size: 30px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
#abc
{
    height: 500px;
    width: auto;
    margin-left: 30px;
    word-wrap: normal;
    margin-right: 20px;
}
#members
{
    height: auto;
    border: 4px solid rgb(0, 0, 0);
    border-radius: 20px;
    background-image: url(https://img.freepik.com/premium-photo/abstract-background-images-wallpaper-ai-generated_643360-15534.jpg?size=626&ext=jpg&ga=GA1.1.725292349.1697043220&semt=ais);
}
#m1
{
    height: auto;
    display: flex;
    width: 90%;
    margin-left: 100px;
    border: 2px solid rgb(0, 0, 0);
    border-radius: 51px;
    background-color: rgba(7, 147, 169, 0.404);
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
    background-color: rgba(7, 147, 169, 0.404);
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
    background-color: rgba(7, 147, 169, 0.404);
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
    background-color: rgba(7, 147, 169, 0.404);
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

footer {
    background-color: #d9d7d0;
    padding: 20px;
    border: 2px solid rgb(61, 68, 49);
    border-radius: 20px;
}
footer p{
    text-align : center ;
    color : rgb(0, 0, 0);
    margin : 0;
}
            </style>
        <div class="navbar">
            <div class="nav" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                <div class="division">
                    <p class="about1" style="margin-left: 30px; color: rgba(9, 13, 225, 0.9); font-size: 36px;  ">ADDIFREE.com
                        </p>
                </div>
                <p class="about"><a  href="https://www.mindful.org/how-to-meditate/" target = "_main";
                        style="text-decoration: none; color: black; text-decoration: underline; font-size: 15px; ">MEDITATION</a></p>
                <p class="about"><a href="https://www.cdc.gov/mentalhealth/learn/index.htm#:~:text=What%20is%20mental%20health%3F,1" target = "_main";
                        style="text-decoration: none; color: black; text-decoration: underline; font-size: 15px;">MENTAL HEALTH</a></p>
                <p class="about" style="margin-right: 30px;"><a href="rehabcenter.php"
                        style="text-decoration: none; color: black; text-decoration: underline; font-size: 15px;">REHAB CENTERS
                        </a></p>
            </div>
        </div>
        <div class="info">
            <div id="abc">
                <h3>Hey! Here is Something About Our Website</h3>
                <p>ADDIFREE.com is an Emerging webpage that provides Important Information about Cigarette & Tobacco. Helps You in Removing Addiction of these Dangerous Products.</p>

                <p style=text-transform:capitalize; >To successfully stop smoking, you'll need to address both the addiction and the habits and routines that go along with it. But it can be done. With the quit plan and right support of our Course,any smoker can kick the addiction—even if you’ve tried and failed multiple times before.Smoking can also be a way of coping with depression, anxiety, or even boredom. Quitting means finding different, healthier ways to cope with those feelings.So Quiting is the Best option For you and your font-family</p>

                <p>Highlights of Page:</p>
                <ul style="font-weight: bolder;">
                    <li>99.9% Assurance to be Addiction Free</li>
                    <li>Whatsapp Connectivity For Customized Schedule</li>
                    <li>Assistance After Completion Of Course</li>
                    <li>Near by Rehab-Center Suggestions</li>
                </ul>

                <p style=text-transform:capitalize; >Experience the convenience of personalized Course
                    with Whatsapp connectivity. Begin your journey For Healthy Life today
                    and make yourself Addicted Free!</p>
            </div>
        </div>
        <div id="members">
           <h2 class="hello"
                style="text-align: center; text-decoration: underline dashed; color: rgba(0, 0, 0, 0.967); font-size: 35px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: 900;">
                 #CREATORS OF ADDIFREE</h2> 
            <div id="m1">
                <img src="jayesh.jpg" alt="top" width="250" height="200"
                    style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px;"
                    class="img">

                <p
                    style="font-size: 30px;  color:  rgb(234, 235, 195);   font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    <h1
                        style=" color:  rgb(0, 0, 0);  font-size: 50px; margin-bottom: 231px; margin-left: 37px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                       Jayesh Nehete -</h1>
                    <p
                        style="font-size: 30px; font-weight: bolder; margin-top: 100px; color:  rgb(0, 0, 0); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-transform: capitalize;">
                       <B>LEADER OF THE PROJECT.</B>
                       Leading our project By Handling All The Members is not An Easy Job.Leadership is the creation of an environment in which others are able to self-actualize in the process of completing the job "Guiding the way, shaping our vision, and steering the project to success.".</p>
                </p>

            </div>
            <div id="m11">
                <img src="Tanmay.jpg"  alt="Local Image"  width="250" height="200"
                    style="margin-left: 10px; background-size: cover;"
                    class="img">

                <p
                    style="font-size: 30px;  color:  rgb(234, 235, 195);   font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    <h1
                        style=" color:  rgb(0, 0, 0);  font-size: 50px; margin-bottom: 231px; margin-left: 37px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                        Tanmay Patil-</h1>
                    <p
                        style="font-size: 30px; font-weight: bolder; margin-top: 100px; color:  rgb(0, 0, 0); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-transform: capitalize;">
                        Team Player: Bringing dedication, collaboration, and a keen eye for details to the team.Supporting, communicating, and collaborating seamlessly. He ensure cohesion, harmony, and coordination among team members, essential for The  project's triumph.Dealing With Backend of Project.</p>
                </p>

            </div>
            <div id="m2">
                <img src="gauresh.jpg" alt="top" width="250" height="200"
                    style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px;"
                    class="img" >

                <p
                    style="font-size: 30px;  color:  rgb(234, 235, 195);   font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    <h1
                        style=" color:  rgb(0, 0, 0);  font-size: 50px; margin-bottom: 231px; margin-left: 37px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                        Gauresh Patil -</h1>
                    <p
                        style="font-size: 30px; font-weight: bolder; margin-top: 100px; color:  rgb(0, 0, 0); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-transform: capitalize;">
                        Innovator:Fueled by creativity, pushing boundaries, and turning ideas into reality.Handling The Course of addiction and looking for a near to perfect plan for users.Constantly pushing boundaries, thinking outside the box, and injecting creativity into our project.He's the catalyst for fresh ideas and unique solutions.</p>
                </p>

            </div>
            <div id="m3">
                <img src="Tann.jpg" alt="top" width="250" height="200"
                    style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px;"
                    class="img">

                <p
                    style="font-size: 30px;  color:  rgb(234, 235, 195);   font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                    <h1
                        style=" color:  rgb(0, 0, 0);  font-size: 50px; margin-bottom: 168px; margin-left: 37px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                        Tanmay Narayankar -</h1>
                    <p
                        style="font-size: 28px; font-weight: bolder; margin-top: 100px; color:  rgb(0, 0, 0); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-transform: capitalize;">
                        Meet our Frontend Expert,Meticulously focused on precision and thoroughness. He sweat the small stuff, ensuring quality and accuracy that underpin our project's integrity.Expertise in html and Css.Creating Various Eye-Catching web-pages for Website.</p>
                </p>

            </div>

        </div>

    </body>

    <footer>
        <p>Mini Project/Sem-3--ADDIFREE.com</p>
    </footer>
   <a href="home.php"><button>Back</button></a>

</html>