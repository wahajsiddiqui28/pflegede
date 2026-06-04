# PROJECT NOTES — Pflegede (Care Services Directory)

> **Naye laptop / nayi Claude session ke liye:** Pehle yeh file poori padho. Yeh project ka complete context hai — kya banaya, kaise banaya, design decisions, aur kya pending hai. Isay padhne ke baad tum bina puri chat history ke kaam continue kar sakte ho.

---

## 1. Project Kya Hai

**Pflegede** (German: *Pflege* = Care/Nursing) — Germany ke care professionals ke liye ek **paid listing directory** website. Client ek WordPress custom theme chahta tha.

**Client Requirements:**
- Paid listing directory for care professionals in Germany.
- Banner par: "Open for Publications" + "Open for Company Listings" + Contact button.
- Contact page: phone, WhatsApp, aur ek form jisse log listing request bhej sakein.
- **Client khud manually saari listings WordPress admin se add karega** — public self-registration NAHI hai.
- Language: English only (abhi ke liye).
- **Zero / minimum plugins** — koi ACF nahi, koi page builder nahi. Sab custom code.
- 100+ listings expected.
- **Strong security** chahiye.
- Premium, clean white UI. Colors: White + `#002868` (Navy) + `#BF0A30` (Crimson). Bootstrap 5.3. Bootstrap Icons (no emojis).

**User:** Wahaj (wahajsiddiqui28@gmail.com). Hindi/Urdu + English mix mein baat karta hai.

---

## 2. Environment

- **WordPress** pehle se installed hai, local par chal raha hai: `http://localhost:9090/pflegede/`
- **Project path:** `D:\Apache\htdocs\pflegede` (Apache htdocs / XAMPP-style)
- **OS:** Windows 10, PowerShell shell.
- **Theme path:** `D:\Apache\htdocs\pflegede\wp-content\themes\pflegede\`
- Git repo NAHI hai (yeh plain WordPress install hai).

⚠️ **Important:** Bootstrap aur Bootstrap Icons CDN se load NAHI hote the (localhost par CDN block tha pehle). Isliye **sab assets local download kiye gaye hain**. Future mein bhi local hi rakhna. (Internet baad mein available hua — images download ho gayi — par CSS/JS local hi rehne do reliability ke liye.)

---

## 3. Theme Structure (saari files)

```
wp-content/themes/pflegede/
├── style.css                         # Theme header (Theme Name: Pflegede)
├── functions.php                     # Setup, constants, inc/ files load karta hai
├── index.php                         # Fallback template
├── page.php                          # Generic page template
├── front-page.php                    # HOME PAGE (hero slider + categories + featured + latest + CTA)
├── header.php                        # Bootstrap navbar (nav-walker use karta hai)
├── footer.php                        # Dark footer (#0a1628), 4-column grid
├── archive-pflegede_listing.php      # Listings archive (search + category + city filters)
├── single-pflegede_listing.php       # Single listing (2-col: main + sidebar)
├── page-about.php                    # About page (Template Name: About Page)
├── page-contact.php                  # Contact page (Template Name: Contact Page) — AJAX form
├── 404.php
├── template-parts/
│   └── listing-card.php              # Reusable listing card component
├── inc/
│   ├── security.php                  # Security hardening (headers, login limit, etc.)
│   ├── nav-walker.php                # Pflegede_Bootstrap_Nav_Walker + pflegede_fallback_nav()
│   ├── enqueue.php                   # Assets load (Bootstrap + Icons + Inter + main.css/js)
│   ├── cpt-listings.php              # CPT + taxonomy register + default categories
│   ├── meta-boxes.php                # 16 listing fields (no ACF — custom meta boxes)
│   ├── helpers.php                   # Helper functions
│   └── contact-form.php              # AJAX contact handler (nonce + honeypot + rate limit)
└── assets/
    ├── css/
    │   ├── bootstrap.min.css         # Bootstrap 5.3.3 (LOCAL)
    │   ├── bootstrap-icons.min.css   # Bootstrap Icons 1.11.3 (LOCAL, font path fixed)
    │   ├── inter-font.css            # Inter font local fallback
    │   ├── fonts/                     # bootstrap-icons.woff / .woff2
    │   └── main.css                  # ⭐ SAARI custom styling yahan hai
    ├── js/
    │   ├── bootstrap.bundle.min.js   # Bootstrap JS bundle (LOCAL)
    │   ├── main.js                   # Filter auto-submit, card clickable
    │   └── contact-form.js           # AJAX form submit (fetch)
    └── images/
        ├── bg-c.jpg                  # Hero banner background (bright care ward)
        ├── care-1.jpg                # Hero slider: nurse + elderly (Elderly Care slide)
        ├── care-2.jpg                # Hero slider: lady doctor (Healthcare slide)
        ├── care-3.jpg                # Hero slider: male doctor (Medical Services slide)
        └── care-4.jpg                # Spare (caring hands) — abhi use nahi ho rahi
```

---

## 4. Custom Post Type & Taxonomy

Registered in `inc/cpt-listings.php`:

- **CPT:** `pflegede_listing`
  - Slug: `listing`, Archive: `listings`
- **Taxonomy:** `pflegede_category` (slug: `listing-category`)
- Theme activate hone par: rewrite rules flush hoti hain + **6 default categories** insert hoti hain:
  - Healthcare, Nursing, Caregiving, Elderly Care, Home Care, Medical Services

---

## 5. Listing Fields (16 — sab custom meta boxes, NO ACF)

`inc/meta-boxes.php` mein 4 meta boxes. Meta key prefix: `_pflegede_`. Saari fields sanitized (`sanitize_text_field`, `esc_url_raw`, `sanitize_email`, `sanitize_textarea_field`), nonce + `current_user_can` check ke saath save hoti hain.

| Field | Meta Key |
|-------|----------|
| Phone | `_pflegede_phone` |
| WhatsApp | `_pflegede_whatsapp` |
| Email | `_pflegede_email` |
| Website | `_pflegede_website` |
| City / Location | `_pflegede_city` |
| Services Offered | `_pflegede_services` |
| Languages Spoken | `_pflegede_languages` |
| Working Hours | `_pflegede_working_hours` |
| Google Maps Link | `_pflegede_maps_link` |
| Facebook | `_pflegede_facebook` |
| Instagram | `_pflegede_instagram` |
| LinkedIn | `_pflegede_linkedin` |
| Type (company/individual) | `_pflegede_type` |
| Featured (1/0) | `_pflegede_featured` |

Plus: Logo/Photo = WordPress **featured image**, Name = post title, Description = post content, Category = taxonomy.

---

## 6. Helper Functions (`inc/helpers.php`)

- `pflegede_get_listing_meta($post_id, $key)` — meta padhne ka shortcut (`_pflegede_` prefix lagata hai)
- `pflegede_get_categories($post_id)` — listing ke terms
- `pflegede_is_featured($post_id)` — featured check
- `pflegede_get_type_label($post_id)` — "Company" / "Individual"
- `pflegede_get_category_icon($slug)` — category slug se Bootstrap Icon `<i>` return karta hai
- `pflegede_truncate($text, $length)` — excerpt truncate
- `pflegede_whatsapp_url($number)` — `https://wa.me/...` URL banata hai
- `pflegede_get_all_cities()` — distinct published cities (filter dropdown ke liye)
- `pflegede_pagination($query)` — paginate_links wrapper

**Category icon mapping** (helpers.php mein):
```
healthcare       => bi-hospital
nursing          => bi-clipboard2-pulse
caregiving       => bi-person-heart
elderly-care     => bi-person-wheelchair   ⚠️ (bi-person-cane EXIST NAHI karta 1.11.3 mein — isliye wheelchair use kiya)
home-care        => bi-house-heart
medical-services => bi-capsule
```
⚠️ **Lesson:** Naya Bootstrap Icon use karne se pehle confirm karo ke woh 1.11.3 mein exist karta hai, warna blank box dikhta hai.

---

## 7. Design System / Colors

**CSS variables** (`assets/css/main.css` ke top par `:root`):
```css
--pf-navy:       #002868   /* primary: buttons, links, active nav, category icons */
--pf-navy-dark:  #001a4a
--pf-navy-light: #EEF2FF
--pf-red:        #BF0A30   /* CRIMSON — accents ke liye, kam use (taste se) */
--pf-red-dark:   #9a0825
--pf-red-light:  #fff0f3
--pf-white:      #FFFFFF
--pf-bg:         #F7F8FC
--pf-text:       #0d1b2a
--pf-border:     #E2E8F0
--pf-whatsapp:   #25D366
```
Bootstrap `--bs-primary` ko navy se override kiya gaya hai.

**Color philosophy (client ne explicitly bola):** Website "color-full" nahi honi chahiye. Navy primary hai. Crimson `#BF0A30` SIRF accents mein:
- Header "Get Listed" button
- CTA banner button
- Featured badge / featured card border
- Hero badge dots, category-card hover top-line, hero gradient blobs, slider category pill

**Font:** Inter (Google Fonts CDN + local fallback `inter-font.css`).

**Design principles (user feedback se seekha):** Premium look chahiye, "simple par bachkana nahi". Fonts chhote/refined, spacing tight, cards mein depth (subtle shadows), gradients. User ne specifically bola tha pehla version "kisi bache ne banaya" lagta tha — buttons/fonts bahut bade the. Ab sab tighten kiya hua hai.

---

## 8. Home Page (`front-page.php`) — Current State

1. **Hero (2-column):**
   - Left: badges (crimson dot ke saath), bada title ("Across Germany" par crimson underline highlight), subtitle, elevated search bar (white card), 2 CTA buttons, stats (listings/categories/DE).
   - Right (`d-lg-block`, mobile par hidden): **Bootstrap carousel slider** — 3 provider slides real photos ke saath (care-2/care-1/care-3), auto-rotate 3.5s. Har slide: image + green "Verified" badge + gradient overlay + category pill + name + location + rating. Niche slide dots (active = crimson). Slider ke peeche tilted navy gradient backdrop. Floating "Featured Listings" chip (top-right) + "Trusted & Verified" badge (bottom-left).
   - ⚠️ Slider ke 3 providers abhi **MOCK/DEMO** data hain (`$hero_slides` array front-page.php mein hardcoded). Real featured listings se dynamic karna pending hai (agar user chahe).
   - **Background:** poore hero ke peeche `bg-c.jpg` (bright care ward), upar left-to-right white gradient overlay (left text readable, right image halki dikhti hai). Mobile par alag uniform overlay.
2. **Categories section:** centered "Categories" eyebrow + heading, 6 category cards (hover par crimson+navy top accent, icon gradient fill, lift).
3. **Featured Listings:** sirf jab featured listings hon (`_pflegede_featured = 1`). Eyebrow + heading + listing cards.
4. **Latest Listings:** 9 latest, listing cards.
5. **CTA banner:** navy gradient + crimson glow, "Want to Get Listed?", crimson button.

---

## 9. Security (`inc/security.php`)

- WP version har jagah se remove
- XML-RPC disabled, RSD/wlwmanifest links removed
- Security HTTP headers: X-Content-Type-Options, X-Frame-Options (SAMEORIGIN), X-XSS-Protection, Referrer-Policy, Permissions-Policy, **CSP**
- REST API unauthenticated users ke liye restricted
- PHP file uploads blocked, upload filenames sanitized
- **Login attempt limiting:** 5 attempts / IP, 15-min lockout (transients)
- Author enumeration (`?author=N`) blocked
- Login error details hidden
- Uploads dir mein `.htaccess` (PHP execution + directory listing block)
- `DISALLOW_FILE_EDIT = true`

⚠️ Agar background/hero images load na hon to **CSP `img-src`** check karna (same-origin `'self'` allowed hona chahiye).

---

## 10. Contact Form (`inc/contact-form.php` + `assets/js/contact-form.js`)

- AJAX (fetch). Nonce: `pflegede_contact_nonce`.
- **Honeypot:** `pflegede_hp_field` (agar bhara to silently success — bot).
- **Rate limit:** 3 submissions / hour / IP (transient `pflegede_contact_` + md5 IP).
- Required: your_name, listing_name, email, phone, category, city, description.
- `wp_mail()` se admin_email ko bhejta hai, Reply-To header ke saath.
- contact-form.js sirf contact page par load hota hai (enqueue.php conditional).
- ⚠️ **Email delivery:** `wp_mail()` localhost par actually nahi bhejta. Production mein **WP Mail SMTP** plugin ya SMTP config chahiye hoga (discussed, abhi setup nahi).

---

## 11. Phone / WhatsApp Numbers

Contact page aur footer phone/WhatsApp `get_theme_mod( 'pflegede_phone' )` aur `pflegede_whatsapp` se padhte hain.
⚠️ Yeh **Customizer settings** abhi register NAHI hui (koi `inc/customizer.php` nahi banaya). Isliye numbers abhi empty hain. **PENDING:** Customizer support add karna taa-ke client admin se phone/WhatsApp set kar sake. (Filhaal numbers tab tak show nahi honge.)

---

## 12. Important Errors Jo Fix Hue (dobara mat karna)

1. **Class not found (Pflegede_Bootstrap_Nav_Walker):** Class header.php mein define + use karne se PHP hoist nahi kar paata. → Class `inc/nav-walker.php` mein move ki, functions.php se load ki.
2. **Bootstrap CDN load nahi hua localhost par:** navbar mein bullet points dikhe. → Bootstrap CSS/JS + Icons sab **local download** kiye.
3. **Bootstrap Icons boxes dikhe:** font path galat tha. → `bootstrap-icons.min.css` mein `url("fonts/` ko `url("../css/fonts/` kiya, woff/woff2 local rakhe.
4. **Elderly Care icon blank box:** `bi-person-cane` 1.11.3 mein exist nahi. → `bi-person-wheelchair` kiya.

---

## 13. PENDING / TODO (jo abhi baaki hai)

- [ ] **Customizer support** (`inc/customizer.php`) — phone/WhatsApp/social numbers admin se set karne ke liye. (Sabse zaroori — abhi numbers empty hain.)
- [ ] **Hero slider ko dynamic karna** — abhi mock data hai; real featured listings se auto-pull kar sakte hain.
- [ ] **WP Mail SMTP** setup — contact form emails reliably bhejne ke liye (production).
- [ ] Real listings add karna (client ka kaam) — abhi 0 listings hain, isliye Featured/Latest sections aur stats khaali (0+) dikhte hain.
- [ ] (Optional) German language support — abhi English only.

---

## 14. Conventions / Working Style

- **Cache busting:** CSS/JS change ke baad `functions.php` mein `PFLEGEDE_VERSION` bump karo (abhi `1.3.0`). User ko `Ctrl+Shift+R` (hard refresh) bolo.
- Bootstrap classes + custom classes mix. Naye button/section styles ke liye `main.css` mein dedicated class banate hain (e.g. `btn-get-listed`, `hero-btn-primary`, `btn-cta`, `contact-submit-btn`, `about-cta-btn`, `section-eyebrow`).
- Sab user-facing text `esc_html_e( '...', 'pflegede' )` / `esc_html__()` (translation-ready).
- Output escaping har jagah (esc_url, esc_attr, esc_html).
- User Hindi/Urdu mein reply pasand karta hai. Premium UI par bahut focus hai — screenshots bhej kar feedback deta hai.
</content>
</invoke>
