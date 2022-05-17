// Get pin from HTML
const pin = document.getElementById('pinEnigmaText');
const keypadForm = document.getElementById('keypadForm');
const arrow = document.getElementById('arrowKeypad');
const keypadArea = document.getElementById("pinEnigmaSection");
const choiceDoors = document.getElementById("choiceDoors");

// !!!! DANGER ZONE !!!!
const uncannyImage = document.getElementById("UncannyEgg");
const uncannyAudio = document.getElementById('UncannyEggAudio');
const consequences = document.getElementById("ThereWillBeConsequences");
let hate = false;
// !!!! NOTHING TO BE SEEN HERE !!!!

/**
 * @param {Bool} isValid - Is the keypad code valid or not
 */

// Keypad Enigma
class Keypad {
    constructor(isValid) {
        this.isValid = isValid;
        this.buttonClick = this.buttonClick.bind(this);
        this.buttonClear = this.buttonClear.bind(this);
        this.buttonCheckValid = this.buttonCheckValid.bind(this);
        this.hate = this.hate.bind(this);

        const buttonClear = document.getElementById("keypadCancel");
        const buttonConfirm = document.getElementById("keypadConfirm");

        buttonClear.addEventListener("click", this.buttonClear);
        buttonConfirm.addEventListener("click", this.buttonCheckValid);

        const buttons = document.getElementsByClassName('btnKeypad');
        for (const button of buttons) {
            button.addEventListener('click', this.buttonClick);
        }
    }

    buttonClick(e) {
        if (pin.value.length < 4) {
            pin.value += e.target.textContent;
        } else {
            e.preventDefault();
        };
    };

    buttonClear(e) {
        if ((pin.value.length >= 10 && hate === false) || (pin.value.length >= 10 && hate === true)) {
            e.preventDefault();
            pin.value = "I HATE YOU..";
            setTimeout(this.hate, 1000);
        } else {
            pin.value = "";
            e.preventDefault();
        };
    };

    buttonCheckValid(e) {
        if (pin.value == 1704) {
            this.isValid = true;
            this.requestSecondStage(e);
        } else if (pin.value == 666 /* Why did you do that... */ ) {
            e.preventDefault();
            uncannyImage.style.display = "block";
            uncannyAudio.play();
            pin.value = "HAHAHAHAHAHAHAHAHA";
            consequences.classList.add("textAnimRed");
            consequences.textContent = "WHY DID YOU DO THAT ?!";
            setTimeout(() => {
                this.buttonClear(e);
            }, 3000);
            // HELL WILL TAKE CARE OF YOU
        } else {
            e.preventDefault();
            pin.value = "Try again";
            setTimeout(() => {
                this.buttonClear(e);
            }, 2000);
        };
    };
    // WHAT ARE YOU DOING HERE ? GO BACK !
    hate() {
        hate = true;
        pin.value = "";
        console.log("I hate you.....");
        consequences.textContent = "THERE WILL BE CONSEQUENCES";
        uncannyAudio.pause();
        uncannyAudio.currentTime = 0;
        uncannyImage.style.display = "none";
        consequences.animate([{
                opacity: 100
            },
            {
                opacity: 100
            }
        ], {
            duration: 2000,
            iterations: Infinity
        });
    };
    // THERE... WILL... BE... CONSEQUENCES.

    // Get StepId for checkpoints.
    requestSecondStage(e) {
        if (this.isValid === true) {
            const param = new FormData(keypadForm);
            const request = fetch("actionsFirstStage.php", {
                method: 'POST',
                body: param
            });
            console.log(request);
            request.then(manageAnswerKeypad).catch(keypadValidError);
        } else {
            console.log("ERROR OCCURED. CODE ISN'T VALID.");
            e.preventDefault();
        };
    };

};

// Create instance of keypad's enigma
const enigmaKeypad = new Keypad(false);

// Event Listeners
arrow.addEventListener('click', loadDoors);

// Manage answer on right code in keypad
function manageAnswerKeypad(rep) {
    const textReceipt = rep.text();
    console.log(rep);
    textReceipt.catch(keypadValidError);
}

// If right code entered but error occurs
function keypadValidError(textErr) {
    // If textErr isn't undefined
    if (textErr !== undefined) {
        pin.value = textErr;
        setTimeout(() => {
            enigmaKeypad.buttonClear(e);
        }, 3000);
        // If textErr is undefined
    } else {
        console.log("Error occured");
        () => {
            enigmaKeypad.buttonClear(e);
        };
    }
};

// Choice Doors Section
function loadDoors() {
    keypadArea.style.display = "none";
    choiceDoors.style.display = "block";
}

// Change volume of audio
const audioHorror = document.getElementById("backgroundUnsettling");
const audioHorrorSrc = document.getElementById("backgroundUnsettlingSrc");

audioHorror.volume = 0.2;