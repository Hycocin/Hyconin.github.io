<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$quest_1 = $_POST["status_quest_1"];
$quest_2 = $_POST["status_quest_2"];
$quest_3 = $_POST["status_quest_3"];
$grade = $_POST["status_grade"];
$wishes = $_POST["wishes"];
$email = $_POST["email"];
$phone = $_POST["telephone"];
$misto = $_POST["misto"];
echo "<b>Ваше ім'я: </b>" . $firstname . " " . $lastname . "<br>";
echo "<b>Відповідь на перше запитання: </b>" . $quest_1 . "<br>";
echo "<b>Відповідь на друге запитання: </b>" . $quest_2 . "<br>";
echo "<b>Відповідь на третє запитання: </b>" . $quest_3 . "<br>";
echo "<b>Оцінка магазину: </b>" . $grade . "<br>";
echo "<b>Побажання: </b>" . $wishes . "<br>";
echo "<b>Email: </b>" . $email . "<br>";
echo "<b>Телефон: </b>" . $phone . "<br>";
echo "<b>Місто: </b>" . $misto;
