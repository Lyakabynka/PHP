<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $agree = isset($_POST['agree']);
    $feedback = $_POST['feedback'];

    $errors = array();

    if (!preg_match('/^\+380\d{9}$/', $phone)) {
        $errors['phone'] = 'Неправильний формат номера телефону';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Неправильний формат електронної пошти';
    }

    if (!$agree) {
        $errors['agree'] = 'Потрібно погодитися з умовами';
    }

    if (empty($errors)) {
        echo '<p>' . $name . ' дякуємо за ваш відгук!</p>';
        echo '<p>Ми зв\'яжемося з вами найближчим часом.</p>';
    }
}
?>

<form method="POST">
        <div>
            <label for="phone">Телефон:</label>
            <input type="text" id="phone" name="phone">
            <?php if (!empty($errors['phone'])): ?>
                <div><?php echo $errors['phone']; ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="name">Ім'я:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Пошта:</label>
            <input type="text" id="email" name="email">
            <?php if (!empty($errors['email'])): ?>
                <div><?php echo $errors['email']; ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="agree">Я згоден з умовами:</label>
            <input type="checkbox" id="agree" name="agree">
            <?php if (!empty($errors['agree'])): ?>
                <div><?php echo $errors['agree']; ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="feedback">Відгук:</label>
            <textarea id="feedback" name="feedback"></textarea>
        </div>
        <div>
            <input type="submit" text="submit">
        </div>
</form>