let element;
let premier;
let voiceline;
let audio;
let score = 0;
var gameSounds;

function shuffle(array) {
    let currentIndex = array.length,  randomIndex;

    while (currentIndex != 0) {

        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;

        [array[currentIndex], array[randomIndex]] = [
            array[randomIndex], array[currentIndex]];
    }

    return array;
}

function newVoiceline() {
    document.getElementById("try").value = ""; 
    document.getElementById('pAnswer').innerHTML = "Submit your guess";
    premier = gameSounds.shift();
    voiceline = folder + premier;
    audio = new Audio(voiceline); 
    audio.volume=0.3;
    audio.play();
}

function startGame() {
    score = 0;
    afficherScore();
    console.log("startGame");
    console.log(tabSounds);
    gameSounds = shuffle(tabSounds);
    console.log(gameSounds);
    document.getElementById("next").style.visibility = 'visible';
    newVoiceline();
}

function verify() {
    console.log(premier);
    if(document.getElementById("try").value+".mp3"==premier) {
        score++;
        document.getElementById('pAnswer').innerHTML = "GOOD";
    }
    else {
        document.getElementById('pAnswer').innerHTML = "WRONG";
    }
    document.getElementById("try").value = "";
    afficherScore();
}

function afficherScore() {
    document.getElementById('pScore').innerHTML = score;
}