/**
 * Adhan Player Module - ES2025+
 * Blueprint: [islamic-utilities.blueprint.md](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints/docs/islamic-utilities.blueprint.md)
 * Handles Adhan audio playback logic.
 */

export class AdhanPlayer {
    #adhanPlayed = false;
    #checkInterval = null;

    /**
     * Initialize the player
     * @param {string} audioUrl - URL to the adhan audio
     * @param {Object} timings - Prayer timings 
     */
    init(audioUrl, timings) {
        if (!audioUrl || !timings) return;
        
        // Clear existing interval if any
        if (this.#checkInterval) clearInterval(this.#checkInterval);

        // Check every 30 seconds
        this.#checkInterval = setInterval(() => {
            this.check(audioUrl, timings);
        }, 30000);
    }

    /**
     * Check if it's time for prayer
     */
    check(audioUrl, timings) {
        const now = new Date();
        const nowStr = `${now.getHours().toString().padStart(2, '0')}:${now.getMinutes().toString().padStart(2, '0')}`;
        
        const prayers = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
        
        if (prayers.some(p => timings[p] === nowStr)) {
            if (!this.#adhanPlayed) {
                this.play(audioUrl);
            }
        }
    }

    /**
     * Play the adhan audio
     */
    play(url) {
        const audio = new Audio(url);
        audio.play().catch(e => console.warn("Adhan autoplay blocked", e));
        this.#adhanPlayed = true;
        
        // Reset after 1 minute to allow for next prayer
        setTimeout(() => {
            this.#adhanPlayed = false;
        }, 60000);
    }

    /**
     * Stop the check interval
     */
    stop() {
        if (this.#checkInterval) {
            clearInterval(this.#checkInterval);
            this.#checkInterval = null;
        }
    }
}

// Export singleton instance
export const adhanPlayer = new AdhanPlayer();
export default adhanPlayer;
