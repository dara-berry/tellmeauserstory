<?php

if (isset($_POST['who'])) {
    $who = strip_tags($_POST['who']);
    $what = strip_tags($_POST['what']);
    $why = strip_tags($_POST['why']);
    $story = strip_tags($_POST['type']);

    $myVars = 'Who: ' . $who . ' What ' . $what . ' Why: ' . $why . ' Story: ' . $story;


    $html = "";

    if($story == 'vanilla'){
        $html = "<h2>Basic User Story</h2>";
        $html .= "As a " . $who . ", I want to " . $what . " so that I can " . $why . ".";
    } else if ($story == 'fairy') {
        $html = "<h2>Fairy Tale</h2>";
        $html .= "Once upon a time in a kingdom far away, there was a " . $who . " who wanted to " . $what . " but they couldn't because it didn't exist yet. They were very sad ";
        $html .= "until one day an awesome engineer came to the kingdom's rescue and made it so that the " . $who . " can " . $why . ". The engineer received a raise and everyone lived happily ever after.";
    } else if ($story == 'pirate'){
        $html = "<h2>Scurvey Pirrrrate</h2>";
        $html .= "T' scurviest pirate of the seven seas, " . $who . ", be only famous for t' ability to " . $what . " s'that they be able t' plunder booty an " . $why . ".";
    } else {
        $html = "<h2>Whelp, something went wrong.</h2>";
    }
    echo $html;
}
