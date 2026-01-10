
// Hijri Date Module
// Handles Hijri date calculation and Maghrib-aware transitions.

const HijriDate = {
    calculate(offset, prayerTimings = null) {
        const date = new Date();
        let finalOffset = offset || 0;

        // Transition Hijri date at Maghrib
        if (prayerTimings && prayerTimings.Maghrib) {
            const [mHrs, mMins] = prayerTimings.Maghrib.split(':');
            const maghribTime = new Date();
            maghribTime.setHours(mHrs, mMins, 0);
            if (date >= maghribTime) finalOffset += 1;
        }

        date.setDate(date.getDate() + finalOffset);

        try {
            const formatter = new Intl.DateTimeFormat('en-u-ca-islamic-umalqura-nu-latn', {
                day: 'numeric', month: 'long', year: 'numeric'
            });
            
            const parts = formatter.formatToParts(date);
            return parts.map(part => {
                if (part.type === 'year' || part.type === 'era') {
                    // Wrap year and era in responsive span (Hidden on mobile, inline on md+)
                    return `<span class="year-responsive">${part.value}</span>`;
                }
                // Wrap the comma/space before the year if possible?
                // For simplicity, we'll wrap punctuation if it's likely a year separator, 
                // but checking previous part type is robust enough for now. 
                // However, simple approach: just wrap year. Punctuation might linger. 
                // Let's wrap literals that are explicitly ", " if followed by year? Too complex for map.
                // Alternative: Just wrap year. "Rajab 14, " looks okay.
                return part.value;
            }).join('');
        } catch (e) {
            console.error("Hijri error", e);
            return "";
        }
    }
};

window.HijriDateModule = HijriDate;
