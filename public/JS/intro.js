// Landing Page
const bgMusic = document.getElementById("backgroundMusic");
const bgSrcMusic = document.getElementById("backgroundMusicSrc");
const heart = document.getElementById("heartMain");
const bodyHtml = document.getElementById("bodyHtml");
const heartDiv = document.getElementById("heartDiv");

// Post Heart Broken Consts
const heartText = document.getElementById("heartBreakText");
const brokenHeart = document.getElementById("heartBrokenMain");
const heartBreakBtn = document.getElementById("heartBreakAnswerBtn");
const heartSfx = document.getElementById("heartCrackSfx");

// Gunshot Consts
const gunshot = document.getElementById("gunshotSfx");
const blood = document.getElementById("bloodSplatter");
const deathText = document.getElementById("deathText");

// WakeUp Consts
const wakeyForm = document.getElementById("wakeUpForm");
const wakeyInput = document.getElementById("inputName");
const wakeyInputLabel = document.getElementById("inputNameLabel");
const wakeyBtn = document.getElementById("wakeUpBtn");

// Event listeners
heart.addEventListener("click", breakHeart);
heartBreakBtn.addEventListener("click", gunshotClick);
wakeyForm.addEventListener("submit", submitForm);

// Lower sound volume and play
bgMusic.volume = 0.3;
gunshot.volume = 0.6;
heartSfx.volume = 0.4;

// On Click, Break Heart and Change Music / Appear Txt and Btn.
function breakHeart() {
    bgSrcMusic.src = "assets/media/horror1.mp3"
    bgMusic.load();
    bgMusic.play();
    heartSfx.load();
    heartSfx.play();
    heart.style.display = "none";
    heart.style.position = "relative";
    brokenHeart.style.display = "block";
    bodyHtml.style.background = "#010E15";
    heartText.style.display = "flex";
    heartBreakBtn.style.display = "block";
    heartDiv.style.height = "45vh";
}

// No more red text + wakeUp btn
function wakeUp() {
    deathText.style.animation = "none";
    deathText.style.opacity = "0";
    wakeyBtn.style.display = "block";
    heartDiv.style.height = "0vh";
    wakeyInput.style.display = "block";
    wakeyInput.style.textTransform = "none";
    wakeyInputLabel.style.display = "block";
}

// On Btn Press, Gunshot
function gunshotClick() {
    brokenHeart.style.display = "none"
    heartText.style.display = "none";
    heartBreakBtn.style.display = "none";
    gunshot.load();
    gunshot.play();
    bloodSplatter.style.display = "block";
    deathText.style.display = "block";

    setTimeout(wakeUp, 7000);
}

// Form for Name
function submitForm() {
    const param = new FormData(wakeyForm);
    const request = fetch("PHP/actionsIntro.php", {
        method: "POST",
        body: param
    });
    request.then(manageAnswerWakey).catch(showErrorWakey);
}

function manageAnswerWakey(rep) {
    const textReceipt = rep.text();
    textReceipt.catch(showErrorWakey);
}

function showErrorWakey(texteErr) {
    wakeyBtn.textContent = texteErr;
}