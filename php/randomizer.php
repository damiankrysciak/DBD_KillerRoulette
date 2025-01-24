<?php

$selected_options = $_POST['auswahl'] ?? [];

$killers = array("Trapper", "Wraith", "Hillbilly", "Nurse", "Shape", "Hag", "Doctor", "Huntress", "Cannibal",
                "Nightmare", "Pig", "Clown", "Spirit", "Legion", "Plague", "Ghost_Face", "Demogorgon", "Oni",
                "Deathslinger", "Executioner", "Blight", "Twins", "Trickster", "Nemesis", "Cenobite", "Artist",
                "Onryo", "Dredge", "Mastermind", "Knight", "Skull_Merchant", "Singularity", "Xenomorph", "Good_Guy",
                "Unknown", "Lich", "Dark_Lord", "Houndmaster");

$remaining_killers = array_diff($killers, $selected_options);

$random_killer = array_rand($remaining_killers, 1);
$selected_random_killer = $remaining_killers[$random_killer];

echo '<img src="img/' . $selected_random_killer . '.png" alt="Zufälliges Bild">';