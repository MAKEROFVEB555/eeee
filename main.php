<?php
if (isset($_POST['name']) && isset($_POST['tel'])) {
    $name = $_POST['name'];
    $name = $_POST['tel'];

    if (
        mail(
            'dmitrychoo@mail.ru',
            'Новое письмо',
            'Вы успешно зарегистрованы!' . "\n" .
            'Вы ввели телефон: ' . $tel
        )
    ) {
        echo ('Успешно отправлено');
    } else {
        echo ('Ошибка');
    }
}
?>
