<?php

    $group = $_POST['group'];
    $week_id;
    // $week = $_POST['week'];
    $week = '2021-W20';
    $day_of_week = $_POST['day_of_week'];
    $time = $_POST['time'];
    $name_id = $_POST['name_id'];
    $type_id = $_POST['type_id'];
    $classroom = $_POST['classroom'];

    require_once $_SERVER['DOCUMENT_ROOT'] . '/connection.php'; // подключаем скрипт

    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка" . mysqli_error($link));
    $query = "SELECT * FROM WEEK WHERE Week = '$week'"; // проверка наличия недели в БД
    $result = mysqli_query($link, $query) or die("Ошибка" . mysqli_error($link));
    if ($result) {
        if (mysqli_num_rows($result) == 0) { // если недели нет в БД, то создаем новую
            $sql = "INSERT INTO `Week`(`Week`) VALUES ('$week')";
            if ($link->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
            }
            // здесь продолжить
        }
    }
    // // выполняем операции с базой данных
    // $sql = "INSERT INTO `List_Of_Classes` (`ID_Group`, `ID_Week`, `ID_Day_Of_Week`, `ID_Classes_Time`, `ID_Classroom`, `ID_Class`, `ID_Type`)
    // VALUES ('$group', '', '$day_of_week', '$time', '$classroom', '$name_id', '$type_id')";

    //     if ($link->query($sql) === TRUE) {
    //         echo "New record created successfully";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . $link->error;
    // }
    // закрываем подключение
    mysqli_close($link);