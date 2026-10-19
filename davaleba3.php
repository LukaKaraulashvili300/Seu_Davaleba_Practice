
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Davaleba 3</title>
</head>
<body>

<h2>Studentis testireba</h2>

<form method="post">

    <p>1. Ras nishnavs HTML?</p>
    <input type="radio" name="pasuxi1" value="a" required> A. Programirebis ena<br>
    <input type="radio" name="pasuxi1" value="b"> B. Webgverdis struqtura<br>
    <input type="radio" name="pasuxi1" value="c"> C. Monacemta baza<br>
    <input type="radio" name="pasuxi1" value="d"> D. Operaciuli sistema<br><br>

    <p>2. Romeli failis gafartoebaa PHP?</p>
    <input type="radio" name="pasuxi2" value="a" required> A. .jpg<br>
    <input type="radio" name="pasuxi2" value="b"> B. .css<br>
    <input type="radio" name="pasuxi2" value="c"> C. .php<br>
    <input type="radio" name="pasuxi2" value="d"> D. .mp3<br><br>

    <p>3. Romeli metodi gamoiyeneba PHP-shi formis monacemebis gadasacemad?</p>
    <input type="radio" name="pasuxi3" value="a" required> A. PRINT<br>
    <input type="radio" name="pasuxi3" value="b"> B. POST<br>
    <input type="radio" name="pasuxi3" value="c"> C. TABLE<br>
    <input type="radio" name="pasuxi3" value="d"> D. STYLE<br><br>

    <p>4. Ra aris PHP?</p>
    <textarea name="pasuxi4" required></textarea><br><br>

    <p>5. Ristvis gamoiyeneba HTML?</p>
    <textarea name="pasuxi5" required></textarea><br><br>

    <input type="submit" name="gagzavna" value="Pasuxebis shemowmeba">

</form>

<?php
if (isset($_POST['gagzavna'])) {

    $pasuxi1 = $_POST['pasuxi1'];
    $pasuxi2 = $_POST['pasuxi2'];
    $pasuxi3 = $_POST['pasuxi3'];
    $pasuxi4 = strtolower(trim($_POST['pasuxi4']));
    $pasuxi5 = strtolower(trim($_POST['pasuxi5']));

    $qula = 0;

    if ($pasuxi1 == "b") {
        $qula = $qula + 1;
    }

    if ($pasuxi2 == "c") {
        $qula = $qula + 1;
    }

    if ($pasuxi3 == "b") {
        $qula = $qula + 1;
    }

    if ($pasuxi4 == "programirebis ena") {
        $qula = $qula + 1;
    }

    if ($pasuxi5 == "webgverdis struqtura") {
        $qula = $qula + 1;
    }

    echo "<h3>Shedegi</h3>";

    echo "1. Swori pasuxi: B<br>";
    echo "2. Swori pasuxi: C<br>";
    echo "3. Swori pasuxi: B<br>";
    echo "4. Swori pasuxi: Programirebis ena<br>";
    echo "5. Swori pasuxi: Webgverdis struqtura<br><br>";

    echo "Sheni qula: $qula / 5";
}
?>

</body>
</html>
