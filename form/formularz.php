<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formularz</title>
</head>
<body>
    <section class="formbox">
        <form action="form.php", method="post">
            <p>Podaj imie: <input name="name", min="3", max="20"></p>
            <p>Podaj nazwisko: <input name="surname", min="3", max="20"></p>
            <p>Podaj email: <input name="email", min="3", max="40"></p>
            <p>Podaj wiek: <input name="age", min="1", max="2"></p>
            <button type="submit">Wyślij</button>
        </form>
    </section>
</body>
</html>