# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

MaryJ ATL is a static HTML/CSS website for a real estate agent specializing in divorce and life transition property sales in the Atlanta area. Built with Bootstrap 5 and custom CSS — no build tools, no JavaScript framework.

## Development Commands

```bash
# Preview locally (open in browser)
xdg-open index.html   # Linux
open index.html       # macOS

# Simple local server (Python)
python -m http.server 8000
```

No build step, package manager, or test suite.

## File Structure

- **HTML pages** (root): 10 pages including index.html, about.html, services.html, contact.html, etc.
- **css/styles.css**: Single CSS file with all custom styles built on Bootstrap 5
- **assets/**: Images, icons, and logos
- **semantic-outlines/**: Reference HTML files showing page structure (not deployed)
- **TODO.md**: Active task list
- **CHANGELOG.md**: History of all changes

## External Dependencies (CDN)

- Bootstrap 5.3.2 CSS and JS
- Google Fonts: Playfair Display (headings), Inter (body)

---

## BRAND RULES (LOCKED — FOLLOW EXACTLY)

### Role & Authority

You are acting as an EXECUTION ENGINE, not a creative director.

- Follow instructions exactly
- Do NOT improvise
- Do NOT "improve" wording unless explicitly instructed
- Do NOT add urgency, emotion, or sales language

If there is conflict between instructions, defer to:
1. Brand tone rules
2. Locked copy rules
3. Audience & exclusion rules
4. Layout & semantic rules

### Brand Essence & Voice

Brand qualities:
- Calm
- Editorial
- Restrained
- Neutral
- Strategic
- Authority without dominance

The brand should feel like:
- Guidance, not persuasion
- Strategy, not sales
- Clarity, not urgency

**Never emotionalize divorce. Never promise outcomes. Never exaggerate results.**

### Design & Layout Rules

Canvas:
- White primary background
- Soft cream (#F4EDE1 or #F8F5F0) for contrast sections only
- Gold/beige accent ONLY (never background flood)

Typography:
- Headlines: Editorial serif (Playfair Display)
- Body/UI: Clean sans-serif (Inter)
- No all-caps
- Short paragraphs only (2–3 lines max)

Spacing:
- White space is structural, not decorative
- One idea per section
- If something feels busy, remove it

### Brand Colors

```css
--color-white: #FFFFFF;
--color-cream: #F8F5F0;
--color-black: #1A1A1A;
--color-gold: #C9A227;
--color-text: #2D2D2D;
```

---

## CONTENT RULES (LOCKED)

### Seller-Only Content Rule

This is a **SELLER-FOCUSED WEBSITE ONLY**.

DO NOT include:
- Buying a home content
- Buyer guides or CTAs
- Home search language
- Rental or leasing content
- Rent vs buy discussions
- First-time buyer language
- Buyer funnels of any kind

### Dual-Audience Communication

Primary audience:
- Family law attorneys
- Judges
- Mediators

Secondary audience:
- Homeowners navigating life transitions

**If language differs: ALWAYS choose the attorney/judge-safe version.**

The site must be:
- Appropriate to cite
- Safe to refer
- Professional in tone
- Clear to non-experts

### CTA Language Rules

Attorney-safe CTAs:
- Attorney Resources
- Request Market Documentation
- View Valuation Framework
- Discuss Listing Strategy

Client-safe CTAs:
- Request a Strategy Consult
- Request a Comparative Market Analysis
- Understand Your Home's Market Position

**Never use urgency or promotional CTAs.**

---

## LOCKED HOMEPAGE COPY (VERBATIM ONLY)

Hero Headline:
```
You're Navigating a Life Transition.
I'll Help You Move Forward—Strategically.
```

Hero Subheadline:
```
Real estate guidance for divorce, separation, and major life changes — grounded in data, timing, and clear next steps.
```

Primary CTA: `Request a Strategy Consult`

Areas of Focus:
- Divorce & Separation Home Sales
- Court-Ordered & Time-Sensitive Listings
- Equity & Market Timing Analysis
- High-Conflict / One-Party Cooperation

Evidence-Based Guidance Copy:
```
Every transition is different. Before decisions are made, I help you understand the numbers, the market conditions, and the long-term impact of timing — so you can move forward with clarity.
```

Professional Guidance Bullets:
- Neutral representation in emotionally complex situations
- Market-supported pricing strategy
- Clear documentation for attorneys & decision-makers

Final CTA Copy: `You don't have to navigate this alone.`

---

## FEATURED PROPERTIES RULES

All properties must be framed as: **"Life Transition Sale"**

Secondary status:
- Active Listing
- Completed Sale

**No prices displayed. No performance language. No promotional badges.**

---

## UNCoupled RULES

UNCoupled is a SEPARATE WEBSITE and BRAND.

- Primary site: https://www.uncoupledonline.com
- YouTube: https://www.youtube.com/@maryj-uncoupled

maryjatl must NOT:
- Host full podcast episodes
- Duplicate podcast content
- Act as a podcast hub

### UNCoupled Homepage Reference (Locked)

Section Title: `UNCoupled`

Primary Copy:
```
Divorce doesn't start with paperwork.
It starts with uncertainty.
```

Supporting Line:
```
A podcast exploring clarity, decision-making, and professional perspective during major life transitions.
```

Approved CTAs:
- Visit UNCoupled → https://www.uncoupledonline.com
- Watch on YouTube → https://www.youtube.com/@maryj-uncoupled

---

## SEMANTIC HTML RULES

- Structure using semantic elements (<section>, <article>, <aside>, <figure>)
- One <h1> per page
- Include placeholders for dynamic content
- No buying/renting content anywhere

---

## Development Conventions

- Navigation must be consistent across all 10 HTML pages — update all when adding/removing links
- Property listings use real MLS data and photos where available
- Forms are not yet connected to a backend (submission handling TBD)
- All pages follow the same Bootstrap grid structure and section patterns

## Session Notes

For this project, log session notes in **CHANGELOG.md** (not conversationnotes.md). Add entries at the top of the file following the existing format.
