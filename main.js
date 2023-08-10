$(document).ready(mainCode)

function toggleMute() {

    var video = document.getElementById("video1")

    if (video.muted) {
        video.muted = false;
    } else {
        video.muted = true;
    }
}

function nameTypeout() {
    
}