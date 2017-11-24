<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="buttons">
    <button id="slower">slower</button>
    <button id="faster">faster</button>
</div>

<?php

//hier worden alle blok divjes gemaakt.
for ($i = 0; $i < 30; $i++) {
    echo '<div class="blok num' . $i . '" style="margin: auto; left:' . (200 + ($i * 5)) . 'px; top:' . (100 + ($i * 5)) . 'px; z-index:-' . $i . '; animation-delay: ' . $i * 0.04 . 's; background-color: rgb(' . (250 - ($i)) . ',' . $i * 8 . ',' . (21 - ($i)) . ');"></div>';
}
for ($i = 0; $i < 30; $i++) {
    echo '<div class="blok num' . ($i + 30) . '" style="left:' . (200 - ($i * 5)) . 'px; top:' . (100 + ($i * 5)) . 'px; z-index:-' . $i . '; animation-delay: ' . $i * 0.04 . 's; background-color: rgb(' . (250 - ($i)) . ',' . $i * 8 . ',' . (21 - ($i)) . ');"></div>';
}
for ($i = 0; $i < 30; $i++) {
    echo '<div class="blok num' . ($i + 60) . '" style="left:' . (50 + ($i * 5)) . 'px; top:' . (250 + ($i * 5)) . 'px; z-index:' . (-30 + $i) . '; animation-delay: ' . (1.16 - ($i * 0.04)) . 's; background-color: rgb(' . (220 + ($i)) . ',' . (240 - ($i * 8)) . ',' . $i . ');"></div>';
}
for ($i = 0; $i < 30; $i++) {
    echo '<div class="blok num' . ($i + 90) . '" style="left:' . (340 - ($i * 5)) . 'px; top:' . (250 + ($i * 5)) . 'px; z-index:' . (-30 + $i) . '; animation-delay: ' . (1.16 - ($i * 0.04)) . 's; background-color: rgb(' . (220 + ($i)) . ',' . (240 - ($i * 8)) . ',' . $i . ');"></div>';
}
?>
</body>
<script>

    //pak de knoppen en blokken
    var faster = document.getElementById("faster").addEventListener("click", goFaster);
    var slower = document.getElementById("slower").addEventListener("click", goSlower);
    var blokjes = document.getElementsByClassName("blok");

    function goFaster() {

        //laat de blokjes sneller draaien
        for (var i = 0; i < blokjes.length; i++) {
            var speed = getComputedStyle(blokjes[i]).animationDuration.replace('s', '');
            var s = parseInt(speed);
            console.log(s);
            if (s == 2) {
                s = 4
            }
            var newSpeed = s - 2 + "s";
            blokjes[i].style.animationDuration = newSpeed;
        }
    }

    function goSlower() {

        //laat de blokjes slomer draaien
        for (var i = 0; i < blokjes.length; i++) {
            var speed = getComputedStyle(blokjes[i]).animationDuration.replace('s', '');
            var s = parseInt(speed);
            if (s == 16) {
                s = 14
            }
            var newSpeed = s + 2 + "s";
            blokjes[i].style.animationDuration = newSpeed;
        }
    }

</script>
</html>