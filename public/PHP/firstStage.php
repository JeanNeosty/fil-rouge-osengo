<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You're never getting out...</title>
    <link href="../assets/build/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
</head>

<body class="newBG">
    <audio id="backgroundUnsettling" autoplay loop>
        <source id="backgroundUnsettlingSrc" src="../assets/media/horror_2.mp3" type="audio/mp3">
    </audio>

    <section id="pinEnigmaSection">

        <form id="keypadForm">
            <div id="pinEnigma"
                class="rounded-2 container d-flex-inline text-center m-auto justify-content-center align-items-start mt-5"
                style="height: 60vh;">
                <input type="text" id="pinEnigmaText" class="w-50 text-center rounded-1 p-1" value="" readonly>
                <div id="pinEnigmaKeypad" class="pinText">
                    <div id="firstRow" class="mt-5 m-3">
                        <button value="1" type="button" class="btnKeypad" id="numberOne">1</button>
                        <button value="2" type="button" class="btnKeypad" id="numberTwo">2</button>
                        <button value="3" type="button" class="btnKeypad" id="numberThree">3</button>
                    </div>
                    <div id="secondRow" class="m-3">
                        <button value="4" type="button" class="btnKeypad" id="numberFour">4</button>
                        <button value="5" type="button" class="btnKeypad" id="numberFive">5</button>
                        <button value="6" type="button" class="btnKeypad" id="numberSix">6</button>
                    </div>
                    <div id="thirdRow" class="m-3">
                        <button value="7" type="button" class="btnKeypad" id="numberSeven">7</button>
                        <button value="8" type="button" class="btnKeypad" id="numberEight">8</button>
                        <button value="9" type="button" class="btnKeypad" id="numberNine">9</button>
                    </div>
                    <div id="fourthRow" class="m-3">
                        <button value="" type="button" id="keypadCancel">X</button>
                        <button value="0" type="button" class="btnKeypad" id="numberZero">0</button>
                        <button type="submit" id="keypadConfirm">Y</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="exitPad text-light text-end me-5 mt-3 btnAnimYellow d-flex justify-content-end">
            <p id="arrowKeypad" class="h3 ">-></p>
        </div>

        <p id="ThereWillBeConsequences" class="text-light noOpacity text-center mx-auto"></p>
        <div class="text-center mx-auto" value="There's Nothing To Be Seen Here... Go Away !!">
            <img id="UncannyEgg" class="w-25 nodisplay mx-auto text-center" src="../assets/images/uncanny.png"
                alt="What is that ??">
            <audio id="UncannyEggAudio" value="GO BACK!">
                <source id="UncannyEggAudioSrc" src="../assets/media/hate.mp3" type="audio/mp3">
            </audio>
        </div>
    </section>

    <section id="choiceDoors" class="text-light mx-auto text-center nodisplay"></section>
    
    <script crossorigin="anonymous" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/firstStage.js"></script>
</body>

</html>