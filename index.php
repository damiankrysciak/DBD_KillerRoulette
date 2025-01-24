<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .checkbox-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .checkbox-grid .form-check {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1 1 calc(25% - 10px);
            /* 4 items per row on large screens */
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #fff;
            text-align: center;
        }

        .form-check-label {
            margin-left: 5px;
        }

        input[type="checkbox"] {
            width: 16px;
            height: 16px;
        }

        @media (max-width: 992px) {
            .checkbox-grid .form-check {
                flex: 1 1 calc(33.33% - 10px);
                /* 3 items per row on medium screens */
            }
        }

        @media (max-width: 768px) {
            .checkbox-grid .form-check {
                flex: 1 1 calc(50% - 10px);
                /* 2 items per row on small screens */
            }
        }

        @media (max-width: 576px) {
            .checkbox-grid .form-check {
                flex: 1 1 100%;
                /* 1 item per row on extra small screens */
            }
        }
    </style>
</head>

<body>

    <br>
<div class="row">
    <div class="col-6">
        <h4>Select the killers, you don't want to show up or just press the button to get your random killer!</h4><br>
        <form method="POST">
            <div class="checkbox-grid">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Trapper" id="0">
                    <label class="form-check-label" for="check0">Trapper</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Wraith" id="1">
                    <label class="form-check-label" for="check1">Wraith</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Hillbilly" id="2">
                    <label class="form-check-label" for="check2">Hillbilly</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Nurse" id="3">
                    <label class="form-check-label" for="check3">Nurse</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Shape" id="4">
                    <label class="form-check-label" for="check4">Shape</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Hag" id="5">
                    <label class="form-check-label" for="check5">Hag</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Doctor" id="6">
                    <label class="form-check-label" for="check6">Doctor</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Huntress" id="7">
                    <label class="form-check-label" for="check7">Huntress</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Cannibal" id="8">
                    <label class="form-check-label" for="check8">Cannibal</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Nightmare" id="9">
                    <label class="form-check-label" for="check9">Nightmare</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Pig" id="10">
                    <label class="form-check-label" for="check10">Pig</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Clown" id="11">
                    <label class="form-check-label" for="check11">Clown</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Spirit" id="12">
                    <label class="form-check-label" for="check12">Spirit</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Legion" id="13">
                    <label class="form-check-label" for="check13">Legion</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Plague" id="14">
                    <label class="form-check-label" for="check14">Plague</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Ghost_Face" id="15">
                    <label class="form-check-label" for="check15">Ghost Face</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Demogorgon" id="16">
                    <label class="form-check-label" for="check16">Demogorgon</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Oni" id="17">
                    <label class="form-check-label" for="check17">Oni</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Deathslinger" id="18">
                    <label class="form-check-label" for="check18">Deathslinger</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Executioner" id="19">
                    <label class="form-check-label" for="check19">Executioner</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Blight" id="20">
                    <label class="form-check-label" for="check20">Blight</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Twins" id="21">
                    <label class="form-check-label" for="check21">Twins</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Trickster" id="22">
                    <label class="form-check-label" for="check22">Trickster</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Nemesis" id="23">
                    <label class="form-check-label" for="check23">Nemesis</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Cenobite" id="24">
                    <label class="form-check-label" for="check24">Cenobite</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Artist" id="25">
                    <label class="form-check-label" for="check25">Artist</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Onryo" id="26">
                    <label class="form-check-label" for="check26">Onryo</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Dredge" id="27">
                    <label class="form-check-label" for="check27">Dredge</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Mastermind" id="28">
                    <label class="form-check-label" for="check28">Mastermind</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Knight" id="29">
                    <label class="form-check-label" for="check29">Knight</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Skull_Merchant" id="30">
                    <label class="form-check-label" for="check30">Skull Merchant</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Singularity" id="31">
                    <label class="form-check-label" for="check31">Singularity</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Xenomorph" id="32">
                    <label class="form-check-label" for="check32">Xenomorph</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Good_Guy" id="33">
                    <label class="form-check-label" for="check33">Good Guy</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Unknown" id="34">
                    <label class="form-check-label" for="check34">Unknown</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Lich" id="35">
                    <label class="form-check-label" for="check35">Lich</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Dark_Lord" id="36">
                    <label class="form-check-label" for="check36">Dark Lord</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="auswahl[]" value="Houndmaster" id="37">
                    <label class="form-check-label" for="check37">Houndmaster</label>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary mt-3">Randomize!</button>
        </form>

        <br>

    </div>

    <div class="col-6">

        <div class="container border" id="result-container">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                include 'php/randomizer.php';
            }
            ?>
        </div>

    </div>
</div>
</body>

</html>