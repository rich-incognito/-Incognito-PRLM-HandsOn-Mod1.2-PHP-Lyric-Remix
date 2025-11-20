<!--
INCOGNITO, Rich Cristoff C.
WD - 201
November 20, 2025
DWEB
-->

<?php
    $title = "You & I"; //String Variable1
    $artist = "One Direction"; //String Variable2
    $mood = "Sad"; //String Variable3

    //Arrays
    $nouns = ["black", "white", "seconds", "hours", "time", "wrong", "right", "silence", "sound", "fight", "end", "gods", "mistakes", "up", "down", "middle", "room", "day", "night", "light"];
    $verbs = ["figured", "take", "hold", "fight", "separate", "come", "see", "try", "tried", "meet", "saw"];
    $adjectives = ["black", "white", "wrong", "right", "common", "different"];

    $verse1 = [
        "I $verbs[0] it out",
        "I $verbs[0] it out from $nouns[0] and $nouns[1]",
        "$nouns[2] and $nouns[3]",
        "Maybe they had to take some time",
        "I know how it goes",
        "I know how it goes from $adjectives[2] and $adjectives[3]",
        "$nouns[7] and $nouns[8]",
        "Did they ever $verbs[2] each other tight like us?",
        "Did they ever $verbs[3] like us?"
    ];

    $chorus = [
        "You and I",
        "We don't wanna be like them",
        "We can make it till the end",
        "Nothing can $verbs[5] between you and I",
        "Not even the $nouns[11] above",
        "Can $verbs[4] the two of us",
        "No, nothing can $verbs[5] between you and I",
    ];

    $post_chorus = "Oh, you and I";

    $verse2 = [
        "I $verbs[0] it out",
        "$verbs[10] the mistakes from up and down",
        "$verbs[9] in the middle",
        "There's always room for $adjectives[4] ground",
        "I $verbs[6] what it's like",
        "I $verbs[6] what it's like for $nouns[17] and $nouns[18]",
        "Never together",
        "'Cause they $verbs[6] things in a $adjectives[5] $nouns[19] like us",
        "But they never $verbs[8] like us"
    ];

    $chorus2 = [
        "You and I",
        "We don't wanna be like them",
        "We can make it till the end",
        "Nothing can $verbs[5] between you and I",
        "Not even the $nouns[11] above",
        "Can $verbs[4] the two of us",
    ];

    $chorus_zayn = [
        "'Cause you and I",
        "We don't wanna be like them",
        "We can make it till the end",
        "Nothing can $verbs[5] between you and I (Nothing can come between, yeah)",
        "Not even the $nouns[11] above",
        "Can $verbs[4] the two of us",
        "No, nothing can $verbs[5] between you and I (You and I)",
    ];

    $post_chorus2 = "Oh, you and I (Oh)";

    $outro = [
        "You and I",
        "We could make it if we $verbs[7], you and I",
        "Oh, you and I",
        "You and I"
    ];

    $present_year = 2025; //Numeric Variable1
    $year_level = 200; //Numeric Variable2

    $block_number = "1"; //Type Juggling1
    $section = $year_level + $block_number; //Operators

    $second_verse_num = 1 + true; //Type Juggling2


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>You & I</title>
        <style>                   
        
            body{
                font-family: 'Arial', serif;
                background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Clevedon_Pier_from_beach_05.JPG/1200px-Clevedon_Pier_from_beach_05.JPG);
                background-repeat: no-repeat;
                background-size: cover;
                background-color: rgba(0,0,0,0.5);
                background-blend-mode: darken;
                color: white;
            }
            h1,h2,h3,p{
                text-align: center;
            }

            h1,h2,h3,h4{
                padding-top: 3px;

            }
            p{
                line-height: 2px;
            }

        </style>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <h2>by <?php echo $artist; ?></h2>
        <h4>
            <p>Created by: INCOGNITO, Rich Cristoff C. </p>
            <p>Section: WD - <?php echo $section; ?></p>
            <p>November <?php echo $present_year; ?></p>
        </h4>

        <!-- In each part of the song, I decided to loop it instead of displaying it line per line for better code readability -->
        <h3>Verse 1:</h3> 
        <p><?php foreach ($verse1 as $line) echo "<p>$line</p>"; ?></p>

        <h3>Chorus:</h3>
        <p><?php foreach ($chorus as $line) echo "<p>$line</p>"; ?></p>

        <h3>Post-Chorus</h3>
        <p><?php echo $post_chorus; ?></p>

        <h3>Verse <?php echo $second_verse_num; ?></h3>
        <p><?php foreach ($verse2 as $line) echo "<p>$line</p>"; ?></p>

        <h3>Chorus:</h3>
        <p><?php foreach ($chorus2 as $line) echo "<p>$line</p>"; ?></p></br>

        <!-- High Note Part -->
        <p><?php foreach ($chorus_zayn as $line) echo "<p>$line</p>"; ?></p>

        <h3>Post-Chorus:</h3>
        <p><?php echo $post_chorus2; ?></p>

        <h3>Outro:</h3>
        <p><?php foreach ($outro as $line) echo "<p>$line</p>"; ?></p>

    </body>
</html>