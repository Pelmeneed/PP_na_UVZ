<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = $_POST['first-name'];
  $lastName = $_POST['last-name'];
  $middleName = $_POST['middle-name'];
  $profession = $_POST['profession'];
  $birthdate = $_POST['birthdate'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $data = "Имя: $firstName\nФамилия: $lastName\nОтчество: $middleName\nПрофессия: $profession\nДата рождения: $birthdate\nТелефон: $phone\nПочта: $email\n-----------------------------------------\n";

  file_put_contents('vacancy_response.txt', $data, FILE_APPEND);

  print "<p>Спасибо, ваши данные успешно отправлены!</p>";
}
?>
