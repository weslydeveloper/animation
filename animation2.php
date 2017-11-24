<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animation</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div>
    <button id="go">click me</button>
</div>

<?php

//maakt de onderste blokjes van de site.
for ($i = 0; $i < 150; $i++) {
    echo '<div class="blok" style=" height: ' . 10 . 'px; left:' . $i * 5 . 'px; animation-delay: ' . $i * 0.01 . 's;  background-color: rgb(' . (250 - (round($i / 5))) . ',' . round($i / 5) * 8 . ',' . (21 - round($i / 5)) . ');"></div>';
}

?>
</body>
<script>


    var gobutton = document.getElementById("go");
    gobutton.addEventListener("click", go);
    var blokjes = document.getElementsByClassName("blok");
    function go() {
        for (var i = 0; i < blokjes.length; i++) {

            //maakt class die voor de animatie zorgt
            blokjes[i].className = 'blok up';
        }
        setTimeout(removeClass, 2000);
        gobutton.style.display = "none";
    }

    function removeClass() {
        for (var i = 0; i < blokjes.length; i++) {

            //reset de class
            blokjes[i].className = 'blok';
        }
        gobutton.style.display = "inline-block";
    }

</script>
</html>