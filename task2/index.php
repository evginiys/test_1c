<?php
$arguments = [];
if (isset($_POST['fio'])) {
    if (empty($_POST['fio'])) {
        $arguments['fio'] = "fio is empty";
        $arguments['errors'] = true;
    }
} else {
    $arguments['errors'] = true;
    $arguments['fio'] = 'not found fio field';
}

if (isset($_POST['phone'])) {
    if (empty($_POST['phone']) or !preg_match("/^\+\d{10,13}/",$_POST['phone'])) {
        $arguments['phone'] = "phone is incorrect";
        $arguments['errors'] = true;
    }
} else {
    $arguments['errors'] = true;
    $arguments['phone'] = 'not found phone field';
}

if (isset($_POST['email']) or !preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/",$_POST['email'])) {
    if (preg_match('/@gmail.com/',$_POST['email'])) {
        $arguments['email'] = "email is banned";
        $arguments['errors'] = true;
    }
}

$parameters=http_build_query($arguments);

header('Location:http://1c/task2/form.php?'.$parameters);//редирект на форму с параметрами