let element;
let premier;
let voiceline;
let audio;

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
    premier = tabsounds.shift();
    voiceline = folder + premier;
    audio = new Audio(voiceline); 
    audio.volume=0.3;
    audio.play();
}

function startGame() {
    shuffle(tabsounds);

    newVoiceline();
}

function verify() {
    if(document.getElementById("try").value+".mp3"==premier) {
        document.getElementById('pAnswer').innerHTML = "GOOD";
    }
    else {
        document.getElementById('pAnswer').innerHTML = "WRONG";
    }
    document.getElementById("try").value = "";
}