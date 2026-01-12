/**
 * Hijri Date Service Type Definitions
 */

export interface HijriMonth {
    number: number;
    en: string;
    ar: string;
}

export interface HijriDate {
    date: string;
    format: string;
    day: string;
    weekday: {
        en: string;
        ar: string;
    };
    month: HijriMonth;
    year: string;
    designation: {
        abbreviated: string;
        expanded: string;
    };
    holidays: string[];
}

export declare class HijriDateService {
    constructor(offset?: number);
    getCurrentDate(prayerTimings?: any): Promise<HijriDate | null>;
    setOffset(offset: number): void;
    clearCache(): void;
    formatDate(hijriDate: HijriDate): string;
}

export declare const hijriDate: HijriDateService;
