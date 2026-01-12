/**
 * Theme Configuration Type Definitions
 */

export interface ThemeConfig {
    numberFormat: 'western' | 'arabic_indic' | 'persian';
    dateCalendar: 'gregorian' | 'both' | 'hijri_primary';
    direction: 'ltr' | 'rtl';
    language: string;
    prayerMethod: 'tehran' | 'karachi' | 'isna' | 'leva';
    hijriOffset: number;
    snipcartKey: string;
    moodleUrl: string;
    location: string;
    adhanMedia?: string;
}

export declare class ThemeUtils {
    toArabicIndic(num: number | string): string;
    toPersian(num: number | string): string;
    formatNumber(num: number | string): string;
    formatTime(time: string): string;
    formatCurrency(amount: number, symbol?: string): string;
    getConfig(): ThemeConfig;
    getConfigValue(key: string, defaultValue?: any): any;
}

export declare const themeUtils: ThemeUtils;

// Global window extensions
declare global {
    interface Window {
        themeUtils: ThemeUtils;
        PrayerTimesModule: any;
        HijriDateModule: any;
        KhumsCalculator: any;
    }
}
