<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Endless</title>
    <link href="/public/assets/build/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="/public/assets/images/favicon.png" type="image/x-icon">
</head>

<body id="bodyHtml">
    <!-- Landing Page -->
    <section id="landingPage">
        <!-- Toggleable Blood Splatter -->
        <img class="nodisplay text-center mx-auto" id="bloodSplatter" src="/public/assets/images/blood_splatter.png"
            alt="You died ?">
        <!-- Form to go to the first stage -->
        <form id="wakeUpForm" method="POST" action="PHP/first-stage/firstStage.php">
            <div class="my-3 text-center m-auto row justify-content-center align-items-center">
                <div class="col-auto">
                    <label for="inputName" id="inputNameLabel" class="nodisplay form-label textAnimYellow">What's your
                        name ?</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="sessionname" class="nodisplay form-control textAnim" id="inputName"
                        aria-describedby="nameInput" required>
                </div>
            </div>
            <button class="nodisplay btn text-center mx-auto mt-3 textAnim" id="wakeUpBtn" type="submit">Wake up..
                Please!</button>
        </form>


        <!-- Page Content -->
        <audio id="backgroundMusic" autoplay loop>
            <source id="backgroundMusicSrc" src="/public/assets/media/landing_lofi.mp3" type="audio/mp3">
        </audio>
        <audio id="heartCrackSfx">
            <source id="heartCrackSfxSrc" src="/public/assets/media/heart_crack.mp3" type="audio/mp3">
        </audio>

        <div id="heartDiv"
            class="text-center m-auto container d-flex flex-direction-column justify-content-center align-items-center"
            style="height: 90vh;">
            <img class="w-25" id="heartMain" src="/public/assets/images/heart_main.png" alt="Heart">
            <img class="w-25" id="heartBrokenMain" src="/public/assets/images/heart_broken_main.png" alt="??">
        </div>
        <!-- Appears after breaking heart -->
        <div class="choice">
            <p class="nodisplay text-center justify-content-center align-items-center textAnim" id="heartBreakText">Why
                did you
                break my
                heart ?</p>
            <button class="nodisplay btn text-center mx-auto" id="heartBreakAnswerBtn" type="button">I don't
                know...</button>
        </div>

        <audio id="gunshotSfx">
            <source id="gunshotSfxSrc" src="/public/assets/media/gunshot.mp3" type="audio/mp3">
        </audio>

        <p id="deathText" class="nodisplay text-center m-auto textAnimRed">You're coming with me...</p>


    </section>

    <section class="newBG">
        <audio id="backgroundUnsettling" autoplay loop>
            <source id="backgroundUnsettlingSrc" src="/public/assets/media/horror_2.mp3" type="audio/mp3">
        </audio>

        <section id="pinEnigmaSection">

            <form method="POST" action="/public/second-stage/secondStage.php" id="keypadForm">

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
                <p id="arrowKeypad" class="h3">-></p>
            </div>

            <p id="ThereWillBeConsequences" class="text-light noOpacity text-center mx-auto"></p>
            <div class="text-center mx-auto" value="There's Nothing To Be Seen Here... Go Away !!">
                <img id="UncannyEgg" class="w-25 nodisp*lay mx-auto text-center" src="/public/assets/images/uncanny.png"
                    alt="What is that ??">
                <audio id="UncannyEggAudio" value="GO BACK!">
                    <source id="UncannyEggAudioSrc" src="/public/assets/media/hate.mp3" type="audio/mp3">
                </audio>
            </div>
        </section>

        <section id="choiceDoors" class="text-light mx-auto text-center nodisplay"></section>


        <script crossorigin="anonymous"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/src/JS/intro.js"></script>
        <script src="/src/JS/firstStage.js"></script>

</body>

</html>