
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Davaleba 2</title>
</head>
<body>

<h2>Nishnebis uwyisi</h2>

<form method="post">
    Studentis saxeli: <input type="text" name="saxeli" required><br><br>
    Studentis gvari: <input type="text" name="gvari" required><br><br>
    Kursi: <input type="number" name="kursi" min="1" required><br><br>
    Semestri: <input type="number" name="semestri" min="1" required><br><br>
    Saswavlo kursi: <input type="text" name="sagnis" required><br><br>
    Qula: <input type="number" name="qula" min="0" max="100" required><br><br>
    Leqtoris saxeli da gvari: <input type="text" name="leqtori" required><br><br>
    Dekanis saxeli da gvari: <input type="text" name="dekani" required><br><br>

    <input type="submit" name="gagzavna" value="Gagzavna">
</form>

<?php
if (isset($_POST['gagzavna'])) {

    $saxeli = $_POST['saxeli'];
    $gvari = $_POST['gvari'];
    $kursi = $_POST['kursi'];
    $semestri = $_POST['semestri'];
    $sagnis = $_POST['sagnis'];
    $qula = $_POST['qula'];
    $leqtori = $_POST['leqtori'];
    $dekani = $_POST['dekani'];

    if ($qula >= 91) {
        $shefaseba = "A - Friadi";
    } elseif ($qula >= 81) {
        $shefaseba = "B - Dzalian kargi";
    } elseif ($qula >= 71) {
        $shefaseba = "C - Kargi";
    } elseif ($qula >= 61) {
        $shefaseba = "D - Damakmayofilebeli";
    } elseif ($qula >= 51) {
        $shefaseba = "E - Sakmarisi";
    } elseif ($qula >= 41) {
        $shefaseba = "FX - Ver chaabara";
    } else {
        $shefaseba = "F - Chaichra";
    }

    echo "<h3>Shedegi</h3>";

    echo "<table border='1' cellpadding='5'>
    <tr>
        <th>Saxeli</th>
        <th>Gvari</th>
        <th>Kursi</th>
        <th>Semestri</th>
        <th>Saswavlo kursi</th>
        <th>Qula</th>
        <th>Shefaseba</th>
        <th>Leqtori</th>
        <th>Dekani</th>
    </tr>
    <tr>
        <td>$saxeli</td>
        <td>$gvari</td>
        <td>$kursi</td>
        <td>$semestri</td>
        <td>$sagnis</td>
        <td>$qula</td>
        <td>$shefaseba</td>
        <td>$leqtori</td>
        <td>$dekani</td>
    </tr>
    </table>";
}
?>

</body>
</html>
