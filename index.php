<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
    $linje19 = ['Hagsätra', 'Rågsved', 'Högdalen', 'Bandhagen', 'Stureby', 'Svedmyra', 'Sockenplan', 'Enskede Gård', 'Globen', 'Gullmarsplan', 'Skanstull', 'Medborgarplatsen', 'Slussen', 'Gamla Stan', 'T-Centralen', 'Hötorget', 'Rådmansgatan',
    'Odenplan', 'S:T Eriksplan', 'Fridhemsplan', 'Thorildsplan', 'Kristineberg', 'Alvik', 'Stora Mossen', 'Abrahamsberg', 'Brommaplan', 'Åkeshov', 'Ängbyplan', 'Islandstorget', 'Blackeberg', 'Råcksta', 'Vällingby', 'Johannelund', 'Hässelby Gård', 'Hässelby Strand'];
    ?>
    <div class="container">
        <div class="form-container">
            <form action="#" method="post">
                <label for="start">From:</label><br>
                <select name="start" id="start">
                <?php
                for ($i = 0; $i < count($linje19); $i++) {
                    echo "<option value='$linje19[$i]'>$linje19[$i]</option>";
                }
                ?>
                </select>
                <br>
                <br>
                <label for="end">To:</label><br>
                <select name="end" id="end">
                <?php
                for ($i = 0; $i < count($linje19); $i++) {
                    echo "<option value='$linje19[$i]'>$linje19[$i]</option>";
                }
                ?>
                </select>
                <button type="submit" class="custom-button" name="submit">Submit</button>
            </form>
        </div>
        <?php
        if (isset($_POST["submit"])) {

            $startingpoint = $_POST["start"];
            $endingpoint = $_POST["end"];

            $startind = array_search($startingpoint, $linje19);
            $endind = array_search($endingpoint, $linje19);

            $finaltime_mins = abs($endind - $startind) * 3;

            if ($finaltime_mins >= 60) {
                $hours = floor($finaltime_mins / 60);
                $minutes = $finaltime_mins % 60;
                $finaltime = "$hours hour and $minutes minutes";
            }
            else {
                $finaltime = "$finaltime_mins minutes";
            }
        ?>
        <div class="result">
        Time you will spend traveling from <strong><?php echo $startingpoint; ?></strong> to <strong><?php echo $endingpoint; ?></strong> is <?php echo $finaltime; ?>
        </div>
        <?php
        } 
        ?>
    </div>
</body>
</html>