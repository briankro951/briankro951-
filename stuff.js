function toggleMute() {
    var video = document.getElementById("video1")

    if (video.muted) {
        video.mute = false;
    } else {
        video.mute = true;
    }
}