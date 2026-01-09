---
trigger: always_on
---

This is a comprehensive component breakdown for a **Hybrid Religious NGO & Business Website** built on **Grav CMS** in 2026.

Since Grav is a flat-file CMS known for speed and security, this architecture leverages its modular page capabilities while integrating external services (like Moodle and Payment Gateways) to keep the core lightweight.

### **I. Global Navigation & Header**

*Design Trend 2026: "Mega-Menus" are out; "Contextual Navigation" is in. Keep it clean.*

* **Utility Bar (Top Strip):**
* **Date Display:** Gregorian & **Hijri Calendar** toggle.
* **Prayer Times Widget:** Geo-located "Next Prayer" countdown (Asr/Maghrib).
* **Language Switcher:** Urdu | English | Arabic | Persian.
* **Accessibility Tools:** Text resize, High Contrast toggle (standard in 2026).


* **Main Navbar:**
* **Logo:** SVG format for crisp scaling.
* **Smart Menu:**
* **About:** (Mission, Scholars, History).
* **Services:** (Istikhara, Counseling, Religious Audits).
* **Education:** (Link to Moodle/Course Catalog).
* **Shop:** (Books, Perfumes, Digital Products).
* **Get Involved:** (Donations, Khums, Volunteering).


* **Search Bar:** AI-powered search (indexing both Grav pages and Moodle course titles).
* **User Action Area:**
* **"My Dashboard" Button:** Single Sign-On (SSO) link that logs the user into the website *and* Moodle simultaneously.
* **Cart Icon:** Floating indicator for physical/digital products.





---

### **II. Hero Section (Home Page)**

*Design Trend 2026: Immersive Video & "Glassmorphism" UI.*

* **Dynamic Background:** Slow-motion video loop (e.g., calligraphy writing, nature, or community service footage) with a dark overlay.
* **Dual Call-to-Action (CTA):**
* Primary Button: **"Explore Services"** (Business/Education focus).
* Secondary Button: **"Support Our Mission"** (NGO/Donation focus).


* **Daily Inspiration:** A dynamically loaded Hadith or Quranic verse (randomized on page load via Grav Twig templates).

---

### **III. Business & E-Commerce Components**

*Grav Implementation: Use the "Snipcart" plugin or "Grav Shopping Cart" for a headless commerce feel.*

* **Service Cards (Bento Grid Layout):**
* Grid layout where cards vary in size based on importance.
* **Components:** Icon, Service Title, Short Description, "Book Now" (connects to a calendar booking system like Calendly or local form).


* **Product Carousel:**
* **Digital Products:** Instant download buttons for eBooks/PDFs.
* **Physical Products:** "Add to Cart" with quick-view modals.


* **Trust Signals:** Verified Payment badges (Stripe/PayPal), SSL certificates.

---

### **IV. Education Bridge (Moodle Integration)**

*Goal: Make the LMS feel like part of the main site without hosting it there.*

* **"Featured Courses" Module:**
* Uses a simple API fetch or RSS feed from your Moodle site to display the top 3 active courses on the Grav homepage.
* **Elements:** Course Thumbnail, Instructor Name, "Enroll" button (redirects to Moodle enrollment page).


* **Student Login Widget:**
* A clean login form on the Grav site that passes credentials to Moodle (via OAuth or LDAP) so students don't feel like they are leaving the site.



---

### **V. NGO & Religious Specifics**

*Essential for trust and community utility.*

* **Khums & Donation Calculator:**
* A JavaScript calculator component allowing users to input savings/assets and calculate Khums liability.
* **Donation Tiers:** Pre-set buttons ($10, $50, $100) + "Custom Amount".
* **Recurring Giving:** Toggle for "Monthly" vs "One-time" (via Stripe/Donorbox integration).


* **Project Timeline/Roadmap:** Visual progress bars showing funding status for specific NGO projects (e.g., "Water Well Project: 75% Funded").
* **Q&A / Istafta Section:**
* Accordion-style FAQ for common religious questions.
* "Ask a Scholar" form with secure/anonymous submission.



---

### **VI. Content & Community**

* **Testimonials/Impact Stories:**
* Video testimonials (lazy-loaded for speed).
* Slider with quotes from students and beneficiaries.


* **Event Calendar:**
* Upcoming Majalis, Seminars, and webinars.
* "Add to Calendar" (Google/Apple) button for each event.


* **Blog/Articles (Grav Modular Pages):**
* Categories: Fiqh, Community News, Tech & Religion.
* **Estimated Reading Time** indicator on posts.



---

### **VII. Footer**

* **Newsletter Signup:** "Join our weekly digest" (Integration with Mailchimp/SendGrid).
* **Quick Links:** Sitemap, Privacy Policy, Terms of Service.
* **Social Media Icons:** YouTube (for lectures), WhatsApp (for quick support), Instagram.
* **Contact Info:** Physical address (Karachi), Phone, Email.
* **Copyright:** "© 2026 [NGO Name]. Built on Grav."

---

### **VIII. Technical "Under the Hood" Components**

*To ensure the site functions as a modern 2026 application.*

* **PWA (Progressive Web App) Manifest:** Allows users to install the website as an app on their phones.
* **SEO Metadata Component:** Automated Schema.org markup for "NGO," "Product," and "Course."
* **Dark Mode Support:** System-aware color themes (CSS variables).
* **WhatsApp Chat Widget:** Floating button for instant communication (highly popular in Pakistan/Middle East).

### **Next Step**

Would you like me to generate the **`modular.yaml` blueprint** or the **Twig template code** for any of these specific sections (like the Hero or Service Cards) to help you get started?