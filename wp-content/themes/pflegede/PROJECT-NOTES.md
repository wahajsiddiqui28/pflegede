# PROJECT NOTES — Pflegede (German Care Information Portal)

> **Naye laptop / nayi Claude session ke liye:** Pehle yeh file poori padho. Yeh project ka complete context hai — kya banaya, kaise banaya, design decisions, aur kya pending hai.

---

## 1. Project Kya Hai — UPDATED

**Pflegede** (German: *Pflege* = Care/Nursing) — Germany ke care (Pflege) ke baare mein ek **information/knowledge portal** website. Yeh pehle paid listing directory tha, lekin ab **completely redesign** ho chuka hai ek German Pflege information portal ke tor par.

**Naya Concept:**
- German care system (Pflegegrade, Pflegeleistungen, Pflegearten, Pflegeberufe) ke baare mein authoritative information.
- Target audience: Pflegebedürftige (care recipients), Angehörige (family members), Fachkräfte (professionals).
- Still WordPress custom theme, **zero plugins** philosophy maintain hai.
- Listings CPT abhi bhi exist karta hai (directory feature for "Pflegedienst finden").
- Language: **German only** (puri site German mein).

**Naya Brand:**
- Color: **Deep Forest Teal** `#0a5743` (primary), `#1F8B6E` (mid), `#D8EFE6` (light mint).
- Pehla Navy `#002868` aur Crimson `#BF0A30` scheme completely **replaced** ho gaya.
- CSS variables: `--pf-teal`, `--pf-teal-dark`, `--pf-teal-mid`, `--pf-teal-light`.

---

## 2. Environment

- **WordPress** local par chal raha hai: `http://localhost:9090/pflegede/`
- **Project path:** `D:\Apache\htdocs\pflegede`
- **OS:** Windows 10, PowerShell shell
- **Theme path:** `D:\Apache\htdocs\pflegede\wp-content\themes\pflegede\`
- **Version:** `PFLEGEDE_VERSION = '2.10.5'` (functions.php mein)

⚠️ Bootstrap aur Bootstrap Icons **local hain** (CDN nahi). Sab assets local download kiye hain.

---

## 3. Theme Structure

```
wp-content/themes/pflegede/
├── style.css                         # Theme header
├── functions.php                     # Setup, v2.10.5, dummy-generator admin-only load
├── index.php                         # Fallback template
├── page.php                          # Generic page template
├── front-page.php                    # ⭐ HOME PAGE — German Pflege portal (8 sections)
├── header.php                        # Bootstrap navbar — "pflege.de" brand, "Pflegedienst finden" CTA
├── footer.php                        # Dark teal footer, 5-column grid, DE legal disclaimer
├── archive-pflegede_listing.php      # Listings archive (search + category + city filters)
├── single-pflegede_listing.php       # Single listing (2-col: main + sidebar)
├── page-about.php                    # About page
├── page-contact.php                  # Contact page — AJAX form
├── 404.php
├── template-parts/
│   └── listing-card.php              # Reusable listing card component
├── inc/
│   ├── security.php                  # Security hardening
│   ├── nav-walker.php                # Pflegede_Bootstrap_Nav_Walker
│   ├── enqueue.php                   # Assets load
│   ├── cpt-listings.php              # CPT + taxonomy (still active for directory)
│   ├── meta-boxes.php                # 16 listing fields (no ACF)
│   ├── helpers.php                   # Helper functions
│   ├── contact-form.php              # AJAX contact handler
│   └── dummy-generator.php           # ⚠️ DEV ONLY — admin-only dummy data generator
└── assets/
    ├── css/
    │   ├── bootstrap.min.css         # Bootstrap 5.3.3 (LOCAL)
    │   ├── bootstrap-icons.min.css   # Bootstrap Icons 1.11.3 (LOCAL)
    │   ├── inter-font.css            # Inter font local fallback
    │   ├── fonts/                    # bootstrap-icons.woff / .woff2
    │   └── main.css                  # ⭐ SAARI custom styling (2685 lines)
    ├── js/
    │   ├── bootstrap.bundle.min.js   # Bootstrap JS bundle (LOCAL)
    │   ├── main.js                   # Filter auto-submit, card clickable
    │   └── contact-form.js           # AJAX form submit (fetch)
    └── images/
        ├── bg-c.jpg                  # (old hero bg — may not be used in new home)
        ├── care-1.jpg                # Hero slider image
        ├── care-2.jpg                # Hero slider image
        ├── care-3.jpg                # Hero slider image
        ├── care-4.jpg                # Spare
        ├── favicon.svg               # SVG favicon
        ├── pflegegrade-section.jpg   # Pflegegrad section / spotlight banner image
        ├── quick-leistungen.jpg      # Quick finder tile: Leistungen
        ├── quick-pflegearten.jpg     # Quick finder tile: Pflegearten
        ├── quick-pflegegrad.jpg      # Quick finder tile: Pflegegrad
        └── quick-ratgeber.jpg        # Quick finder tile: Ratgeber
```

---

## 4. Home Page (`front-page.php`) — 8 Sections

1. **Hero (2-col):**
   - Left: eyebrow ("Ihr Pflegeportal auf Deutsch"), title ("Pflege verstehen für Betroffene..."), subtitle, search bar (auto-rotating placeholders), 2 CTAs (Pflegegrad ermitteln + Zum Ratgeber).
   - Right (`d-none d-lg-block`): Bootstrap carousel slider — 3 slides (care-2/1/3), teal badge, slides mein: Expertenwissen, Ratgeber, Pflegeleistungen theme.
   - Placeholder rotation: inline JS script, 2800ms interval.
   - Background: subtle dot grid overlay, teal gradient blobs.

2. **Trust Bar:** 4 items — Medizinisch geprüft, Regelmäßig aktualisiert, Expertenwissen, Kostenlos & unabhängig.

3. **Quick Finder:** 4 image tiles — Pflegegrad, Leistungen, Pflegearten, Ratgeber. Har tile mein real photo + floating icon chip.

4. **Pflegegrade 1–5:**
   - Spotlight banner: `pflegegrade-section.jpg` + PG 2–5 Pflegegeld amounts (332/573/765/947 €).
   - 5 grade cards (PG 1–5) with color coding.
   - Full table: Pflegegeld + Sachleistung per grade (SGB XI 2024/2025).

5. **Statistiken:** 4 stat cards — 5.6 Mio Pflegebedürftige, 3.4 Mio Angehörige, 16.000+ Pflegeheime, 15.800+ Pflegedienste.

6. **Meistgelesene Ratgeber:** 3 article cards (hardcoded links: pflegegrad-beantragen, pflegegeld-tabelle-2025, mdk-begutachtung).

7. **Themenbereiche:** 6 topic links — Ambulante/Stationäre Pflege, Demenz, Pflegende Angehörige, Pflegeberufe, Recht & Finanzen.

8. **Newsletter:** Left side: bullets + info. Right side: email form (currently placeholder — no backend connected).

Schema.org JSON-LD: Organization + WebSite + BreadcrumbList.

---

## 5. Brand & Design System

**CSS Variables** (`:root` in `main.css`):
```css
--pf-teal:          #0a5743   /* PRIMARY brand */
--pf-teal-dark:     #073d2f
--pf-teal-mid:      #1F8B6E
--pf-teal-light:    #D8EFE6   /* light mint bg/badge */
--pf-teal-50:       #B7DBC9

--pf-navy:          #0a5743   /* alias = teal (backward compat) */
--pf-navy-dark:     #073d2f
--pf-navy-light:    #D8EFE6
--pf-red:           #0a5743   /* alias = teal (accent now same) */

--pf-bg:            #F4FAF7   /* page background */
--pf-bg-alt:        #E8F2EC
--pf-text:          #0F1F1A
--pf-text-mid:      #2F4039
--pf-text-light:    #6B7B74
--pf-text-muted:    #9CA8A2
--pf-border:        #DCEAE3
```

**Logo/Brand:** "pflege.de" wordmark (SVG cross+heart icon, teal gradient). No longer showing "Get Listed" in red — now "Pflegedienst finden" in teal CTA button.

**Footer:** Dark teal gradient (`#062418` → `#041a12`), 4px teal border-top. 5 columns: Brand + Pflegegrade + Pflegearten + Leistungen + Über uns. German legal disclaimer box.

---

## 6. CPT & Listing System (Still Active)

CPT `pflegede_listing` aur taxonomy `pflegede_category` abhi bhi hain. Header mein "Pflegedienst finden" button `/verzeichnis/` page par jaata hai. 16 meta fields same hain. Dummy generator (`inc/dummy-generator.php`) add kiya gaya hai dev ke liye — **production se remove karna hai**.

---

## 7. Dummy Generator (`inc/dummy-generator.php`)

- Admin-only (sirf `is_admin()` check ke baad load hota hai).
- WP Admin > Listings > "Dummy Data" submenu se access.
- Generate: realistic German listings (65% companies, 35% individuals), 16 meta fields, random categories, random featured images (theme images se copy karta hai uploads mein).
- Delete: sirf `_pflegede_dummy = 1` wale posts delete karta hai — real data safe.
- **⚠️ Production se pehle: `inc/dummy-generator.php` delete karo + `functions.php` se `require_once` line hatao.**

---

## 8. Key Sections — Internal URLs

Home page CTAs yeh URLs assume karti hain (content abhi create karna hai):
- `/pflegegrade/pflegegrad-ermitteln/` — Pflegegrad tool
- `/ratgeber/` — Ratgeber section
- `/pflegegrade/pflegegrad-1/` through `/pflegegrad-5/` — individual grade pages
- `/leistungen/pflegegeld/pflegegeld-tabelle-2025/` — table page
- `/pflegearten/ambulante-pflege/`, `/stationaere-pflege/` etc.
- `/verzeichnis/` — listings directory
- `/impressum/`, `/datenschutz/`, `/kontakt/`, `/newsletter/` — standard German legal pages

---

## 9. Security (unchanged from v1)

- WP version removed everywhere
- XML-RPC disabled
- Security headers + CSP
- Login attempt limiting (5/IP, 15min lockout)
- Author enumeration blocked
- Uploads PHP execution blocked

---

## 10. Pending / TODO

- [ ] **Newsletter form backend** — abhi `action="#"` placeholder hai, koi backend connected nahi.
- [ ] **Content pages create karna** — all the internal links (/pflegegrade/, /leistungen/, /ratgeber/ etc.) need actual WordPress pages with content.
- [ ] **Dummy generator remove** before production launch.
- [ ] **`/verzeichnis/` page** — listings directory page create karna.
- [ ] Real listings add karna (after directory is set up).
- [ ] Email delivery (WP Mail SMTP) for contact form.

---

## 11. Conventions

- **Cache busting:** CSS/JS change ke baad `PFLEGEDE_VERSION` bump karo `functions.php` mein (abhi `2.10.5`). User ko `Ctrl+Shift+R` bolo.
- German text everywhere (user-facing) — `esc_html_e()` wrapped.
- Bootstrap classes + `pf-*` custom classes. New components = new CSS class in `main.css`.
- Naye Bootstrap Icon use karne se pehle v1.11.3 existence confirm karo.
- User Hindi/Urdu mein reply pasand karta hai. Premium UI par focus.
