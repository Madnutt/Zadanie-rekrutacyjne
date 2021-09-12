<div class="welcome container">
    <h3>Witaj, <?= $_SESSION['user']['first_name'] ?>!</h3>

    <span>Użytkownik: </span><strong><?= $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name'] ?></strong>
    <p> <?= $_SESSION['user']['sex'] == "male" ? "Mężczyzna" : "Kobieta" ?> </p>

    <form method="post" action="Includes/logout.php">
        <button type="submit" class="btn btn-primary">Wyloguj</button>
    </form>
</div>