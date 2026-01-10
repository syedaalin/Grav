
// Adhan Player Module
// Handles Adhan audio playback logic.

const AdhanPlayer = {
    adhanPlayed: false,

    init(audioUrl, timings) {
        if (!audioUrl || !timings) return;
        
        // Check every 30 seconds
        setInterval(() => {
            this.check(audioUrl, timings);
        }, 30000);
    },

    check(audioUrl, timings) {
        const now = new Date();
        const nowStr = `${now.getHours().toString().padStart(2, '0')}:${now.getMinutes().toString().padStart(2, '0')}`;
        
        const prayers = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
        
        if (prayers.some(p => timings[p] === nowStr)) {
            if (!this.adhanPlayed) {
                this.play(audioUrl);
            }
        }
    },

    play(url) {
        const audio = new Audio(url);
        audio.play().catch(e => console.log("Adhan autoplay blocked", e));
        this.adhanPlayed = true;
        
        // Reset after 1 minute
        setTimeout(() => {
            this.adhanPlayed = false;
        }, 60000);
    }
};

window.AdhanPlayerModule = AdhanPlayer;
