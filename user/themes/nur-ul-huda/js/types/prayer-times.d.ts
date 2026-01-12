/**
 * Prayer Times Service Type Definitions
 */

export interface PrayerConfig {
    location: string;
    method: 'tehran' | 'karachi' | 'isna' | 'leva';
}

export interface PrayerTimings {
    Fajr: string;
    Sunrise: string;
    Dhuhr: string;
    Asr: string;
    Sunset: string;
    Maghrib: string;
    Isha: string;
    Imsak: string;
    Midnight: string;
}

export interface NextPrayer {
    name: string;
    time: Date;
}

export declare class PrayerTimesService {
    fetch(config: PrayerConfig): Promise<PrayerTimings | null>;
    getNextPrayer(timings: PrayerTimings): NextPrayer | null;
    clearCache(): void;
}

export declare const prayerTimes: PrayerTimesService;
