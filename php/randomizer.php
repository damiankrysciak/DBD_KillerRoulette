<?php

$selected_options = $_POST['auswahl'] ?? [];

$killers = array("Trapper", "Wraith", "Hillbilly", "Nurse", "Shape", "Hag", "Doctor", "Huntress", "Cannibal",
                "Nightmare", "Pig", "Clown", "Spirit", "Legion", "Plague", "Ghost Face", "Demogorgon", "Oni",
                "Deathslinger", "Executioner", "Blight", "Twins", "Trickster", "Nemesis", "Cenobite", "Artist",
                "Onryo", "Dredge", "Mastermind", "Knight", "Skull Merchant", "Singularity", "Xenomorph", "Good Guy",
                "Unknown", "Lich", "Dark Lord", "Houndmaster");

$remaining_killers = array_diff($killers, $selected_options);

$random_killer = array_rand($remaining_killers, 1);
$selected_random_killer = $remaining_killers[$random_killer];

echo '<br><div class="text-center"><h4><img src="img/' . $selected_random_killer . '.png" alt="Zufälliges Bild">';
echo '<br><br>The ';
echo $selected_random_killer . '</h4></div>';