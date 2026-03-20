<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Primary SEO -->
    <title>Best Urologist in Roorkee | Dr. Mohit Bhalla | Consultant Urologist & Surgeon</title>

    <meta name="description"
        content="Dr. Mohit Bhalla is a leading urologist in Roorkee providing advanced urology treatment including kidney stone treatment, prostate surgery, urinary infections and minimally invasive urology procedures.">

    <meta name="keywords"
        content="Urologist in Roorkee, Best Urologist Roorkee, Kidney Stone Doctor Roorkee, Prostate Specialist Roorkee, Urology Clinic Roorkee, Dr Mohit Bhalla">

    <meta name="author" content="Dr Mohit Bhalla">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph (Facebook / WhatsApp) -->
    <meta property="og:title" content="Best Urologist in Roorkee | Dr Mohit Bhalla">
    <meta property="og:description"
        content="Expert urology treatment in Roorkee including kidney stone treatment, prostate surgery and urinary disorders.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/dr-mohit-bhalla.jpg') }}">
    <meta property="og:site_name" content="Dr Mohit Bhalla Urology Clinic">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Urologist in Roorkee | Dr Mohit Bhalla">
    <meta name="twitter:description"
        content="Consult Dr Mohit Bhalla for kidney stones, prostate surgery and advanced urology treatment in Roorkee.">
    <meta name="twitter:image" content="{{ asset('images/dr-mohit-bhalla.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Outfit:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @verbatim
            <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Physician",
          "name": "Dr Mohit Bhalla",
          "medicalSpecialty": "Urology",
          "url": "https://yourdomain.com",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Roorkee",
            "addressRegion": "Uttarakhand",
            "addressCountry": "India"
          }
        }
        </script>
    @endverbatim

    <style>
        :root {
            --sky: #f0f7ff;
            --sky-md: #dbeeff;
            --navy: #0c3c6e;
            --navy-lt: #1a5fa8;
            --teal: #0891b2;
            --teal-lt: #e0f7fa;
            --mint: #00b09b;
            --sand: #faf8f5;
            --stroke: #e2eaf3;
            --muted: #6b829e;
            --body: #2d3f54;
            --surface: #ffffff;
            --card-sh: 0 4px 24px rgba(12, 60, 110, 0.07);
            --card-sh-h: 0 12px 40px rgba(12, 60, 110, 0.14);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--sand);
            color: var(--body);
            font-family: 'Outfit', sans-serif;
            font-weight: 400;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Cormorant Garamond', serif;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--sky);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--sky-md);
            border-radius: 4px;
        }

        /* ── NAVBAR ───────────────────────────────────────── */
        .navbar {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--stroke);
            padding: 0.85rem 0;
            transition: box-shadow 0.3s;
        }

        .navbar.scrolled {
            box-shadow: 0 4px 24px rgba(12, 60, 110, 0.1);
        }

        .brand-pill {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--navy), var(--teal));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .brand-name {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--navy);
            line-height: 1.1;
        }

        .brand-tag {
            font-family: 'DM Mono', monospace;
            font-size: 0.58rem;
            color: var(--teal);
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .nav-link {
            color: var(--muted) !important;
            font-size: 0.875rem;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: color 0.2s;
        }

        .nav-link:hover {
            color: var(--navy) !important;
        }

        .btn-book {
            background: linear-gradient(135deg, var(--navy), var(--navy-lt));
            color: #fff !important;
            font-size: 0.82rem;
            font-weight: 600;
            padding: 0.5rem 1.4rem;
            border-radius: 50px;
            border: none;
            box-shadow: 0 4px 16px rgba(12, 60, 110, 0.25);
            transition: all 0.3s;
        }

        .btn-book:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(12, 60, 110, 0.35);
        }

        /* ── HERO ─────────────────────────────────────────── */
        #hero {
            min-height: 100vh;
            background: linear-gradient(160deg, #f0f7ff 0%, #faf8f5 50%, #e8f5f3 100%);
            display: flex;
            align-items: center;
            padding: 110px 0 70px;
            position: relative;
            overflow: hidden;
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            filter: blur(72px);
            opacity: 0.6;
        }

        .blob-1 {
            width: 550px;
            height: 550px;
            background: radial-gradient(circle, #c7e8ff, transparent 65%);
            top: -160px;
            right: -60px;
            animation: blobF 12s ease-in-out infinite;
        }

        .blob-2 {
            width: 360px;
            height: 360px;
            background: radial-gradient(circle, #b2ece4, transparent 65%);
            bottom: -90px;
            left: -50px;
            animation: blobF 16s ease-in-out infinite reverse;
        }

        .blob-3 {
            width: 240px;
            height: 240px;
            background: radial-gradient(circle, #fde8c8, transparent 65%);
            top: 45%;
            left: 35%;
            animation: blobF 20s ease-in-out infinite;
        }

        @keyframes blobF {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(20px, -25px) scale(1.06);
            }
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(8, 145, 178, 0.1);
            border: 1px solid rgba(8, 145, 178, 0.25);
            color: var(--teal);
            font-family: 'DM Mono', monospace;
            font-size: 0.63rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 50px;
            margin-bottom: 24px;
        }

        .live-dot {
            width: 7px;
            height: 7px;
            background: var(--teal);
            border-radius: 50%;
            animation: lp 2s infinite;
        }

        @keyframes lp {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.4;
                transform: scale(0.75);
            }
        }

        .hero-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2.8rem, 6.5vw, 5.5rem);
            font-weight: 700;
            line-height: 1.02;
            color: var(--navy);
            margin-bottom: 22px;
        }

        .hero-title .italic {
            font-style: italic;
            color: var(--teal);
        }

        .hero-desc {
            font-size: 1.05rem;
            color: var(--muted);
            line-height: 1.85;
            max-width: 510px;
            margin-bottom: 38px;
        }

        .btn-prim {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, var(--navy), var(--navy-lt));
            color: #fff;
            font-weight: 600;
            font-size: 0.88rem;
            padding: 14px 30px;
            border-radius: 50px;
            text-decoration: none;
            border: none;
            box-shadow: 0 8px 28px rgba(12, 60, 110, 0.25);
            transition: all 0.3s;
        }

        .btn-prim:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 40px rgba(12, 60, 110, 0.35);
            color: #fff;
        }

        .btn-sec {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #fff;
            color: var(--navy);
            font-weight: 600;
            font-size: 0.88rem;
            padding: 13px 28px;
            border-radius: 50px;
            text-decoration: none;
            border: 1.5px solid var(--stroke);
            box-shadow: var(--card-sh);
            transition: all 0.3s;
        }

        .btn-sec:hover {
            border-color: var(--navy);
            color: var(--navy);
            box-shadow: var(--card-sh-h);
        }

        /* Photo Card */
        .photo-frame {
            position: relative;
            width: 360px;
            max-width: 100%;
        }

        .photo-card {
            border-radius: 28px;
            overflow: hidden;
            border: 6px solid #fff;
            box-shadow: 0 40px 80px rgba(12, 60, 110, 0.18), 0 0 0 1px var(--stroke);
        }

        .photo-ph {
            width: 100%;
            height: 450px;
            background: linear-gradient(160deg, var(--sky-md), var(--teal-lt));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .photo-ph i {
            font-size: 5rem;
            color: var(--teal);
            opacity: 0.35;
        }

        .photo-ph span {
            font-size: 0.78rem;
            color: var(--muted);
        }

        .photo-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(255, 255, 255, 0.97), rgba(255, 255, 255, 0.6));
            backdrop-filter: blur(10px);
            padding: 18px 18px 16px;
        }

        .stat-row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1px;
            background: var(--stroke);
            border-radius: 14px;
            overflow: hidden;
        }

        .stat-cell {
            background: rgba(255, 255, 255, 0.95);
            padding: 12px 8px;
            text-align: center;
        }

        .stat-n {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--navy);
            display: block;
            line-height: 1;
        }

        .stat-l {
            font-family: 'DM Mono', monospace;
            font-size: 0.58rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .float-badge {
            position: absolute;
            top: 20px;
            right: -16px;
            background: #fff6e0;
            color: #b45309;
            font-family: 'DM Mono', monospace;
            font-size: 0.62rem;
            font-weight: 700;
            padding: 8px 14px;
            border-radius: 50px;
            border: 1.5px solid #fde68a;
            box-shadow: 0 6px 20px rgba(180, 83, 9, 0.15);
            animation: bf 3.5s ease-in-out infinite;
            z-index: 2;
        }

        @keyframes bf {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .chip-row {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 28px;
        }

        .chip {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #fff;
            border: 1.5px solid var(--stroke);
            color: var(--body);
            font-size: 0.78rem;
            font-weight: 500;
            padding: 7px 15px;
            border-radius: 50px;
            box-shadow: 0 2px 8px rgba(12, 60, 110, 0.06);
            transition: all 0.2s;
        }

        .chip:hover {
            border-color: var(--teal);
            color: var(--teal);
        }

        .chip i {
            color: var(--teal);
        }

        /* ── SHARED ───────────────────────────────────────── */
        section {
            padding: 90px 0;
        }

        .divider {
            height: 1px;
            background: var(--stroke);
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'DM Mono', monospace;
            font-size: 0.63rem;
            color: var(--teal);
            letter-spacing: 2.5px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .eyebrow::before {
            content: '';
            width: 20px;
            height: 1.5px;
            background: var(--teal);
        }

        .sec-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            color: var(--navy);
            line-height: 1.15;
            margin-bottom: 14px;
        }

        .sec-desc {
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.8;
        }

        /* ── BENTO ────────────────────────────────────────── */
        #profile {
            background: #fff;
        }

        .bento {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 16px;
        }

        .b3 {
            grid-column: span 3;
        }

        .b4 {
            grid-column: span 4;
        }

        .b5 {
            grid-column: span 5;
        }

        .b6 {
            grid-column: span 6;
        }

        .b7 {
            grid-column: span 7;
        }

        .b12 {
            grid-column: span 12;
        }

        @media(max-width:1199px) {
            .b3 {
                grid-column: span 6;
            }

            .b4 {
                grid-column: span 6;
            }
        }

        @media(max-width:992px) {

            .b3,
            .b4,
            .b5,
            .b6,
            .b7 {
                grid-column: span 12;
            }
        }

        .bcard {
            background: var(--surface);
            border: 1.5px solid var(--stroke);
            border-radius: 20px;
            padding: 26px;
            transition: all 0.3s;
            overflow: hidden;
        }

        .bcard:hover {
            border-color: rgba(8, 145, 178, 0.3);
            box-shadow: var(--card-sh-h);
            transform: translateY(-3px);
        }

        .bcard.sky {
            background: linear-gradient(135deg, var(--sky) 0%, #fff 65%);
        }

        .bcard.mint {
            background: linear-gradient(135deg, var(--teal-lt) 0%, #fff 65%);
        }

        .bcard.warm {
            background: linear-gradient(135deg, #fff8ee 0%, #fff 65%);
        }

        .blbl {
            font-family: 'DM Mono', monospace;
            font-size: 0.6rem;
            color: var(--teal);
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 14px;
            opacity: 0.8;
        }

        .btitl {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 10px;
        }

        .bbody {
            color: var(--muted);
            font-size: 0.875rem;
            line-height: 1.7;
        }

        .big-n {
            font-family: 'Cormorant Garamond', serif;
            font-size: 3.4rem;
            font-weight: 700;
            line-height: 1;
            color: var(--navy);
        }

        .big-n.teal {
            color: var(--teal);
        }

        .num-s {
            font-family: 'DM Mono', monospace;
            font-size: 0.65rem;
            color: var(--muted);
            letter-spacing: 1px;
            margin-top: 4px;
        }

        .prg-item {
            margin-bottom: 16px;
        }

        .prg-head {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
        }

        .prg-n {
            font-size: 0.82rem;
            color: var(--body);
        }

        .prg-p {
            font-family: 'DM Mono', monospace;
            font-size: 0.72rem;
            color: var(--teal);
        }

        .progress {
            height: 5px;
            background: var(--sky-md);
            border-radius: 4px;
        }

        .pb-navy {
            background: linear-gradient(90deg, var(--navy), var(--navy-lt));
            transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .pb-teal {
            background: linear-gradient(90deg, var(--teal), #22d3ee);
            transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .pb-mint {
            background: linear-gradient(90deg, var(--mint), #34d399);
            transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .chart-box {
            position: relative;
            height: 240px;
        }

        .timeline {
            position: relative;
            padding-left: 26px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 6px;
            top: 8px;
            bottom: 8px;
            width: 1.5px;
            background: linear-gradient(to bottom, var(--teal), var(--sky-md));
        }

        .tl-item {
            position: relative;
            margin-bottom: 22px;
        }

        .tl-dot {
            position: absolute;
            left: -26px;
            top: 4px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: var(--teal);
            border: 3px solid #fff;
            box-shadow: 0 0 0 2px var(--teal);
        }

        .tl-yr {
            font-family: 'DM Mono', monospace;
            font-size: 0.6rem;
            color: var(--teal);
            letter-spacing: 1px;
            margin-bottom: 3px;
        }

        .tl-t {
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--navy);
        }

        .tl-s {
            font-size: 0.76rem;
            color: var(--muted);
            margin-top: 1px;
        }

        .stag {
            display: inline-block;
            background: var(--sky);
            border: 1.5px solid var(--sky-md);
            color: var(--navy);
            font-size: 0.72rem;
            font-weight: 500;
            padding: 4px 12px;
            border-radius: 50px;
            margin: 3px;
            font-family: 'DM Mono', monospace;
            transition: all 0.2s;
        }

        .stag:hover {
            background: var(--teal-lt);
            border-color: var(--teal);
            color: var(--teal);
        }

        .aw-strip {
            background: linear-gradient(135deg, #fff8ee, #fffdf9);
            border: 1.5px solid #fde68a;
            border-radius: 14px;
            padding: 14px 16px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 10px;
        }

        .aw-ico {
            width: 34px;
            height: 34px;
            background: #fef3c7;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d97706;
            font-size: 0.95rem;
            flex-shrink: 0;
        }

        .aw-t {
            font-size: 0.82rem;
            font-weight: 600;
            color: var(--navy);
        }

        .aw-s {
            font-size: 0.75rem;
            color: var(--muted);
        }

        /* ── MEDIA ────────────────────────────────────────── */
        #media {
            background: var(--sky);
        }

        .mf-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .mf-btn {
            background: #fff;
            border: 1.5px solid var(--stroke);
            color: var(--muted);
            font-size: 0.75rem;
            font-weight: 500;
            padding: 7px 18px;
            border-radius: 50px;
            cursor: pointer;
            font-family: 'DM Mono', monospace;
            transition: all 0.2s;
        }

        .mf-btn.active,
        .mf-btn:hover {
            background: var(--navy);
            border-color: var(--navy);
            color: #fff;
            box-shadow: 0 4px 12px rgba(12, 60, 110, 0.2);
        }

        .mgrid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }

        @media(max-width:992px) {
            .mgrid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width:576px) {
            .mgrid {
                grid-template-columns: 1fr;
            }
        }

        .mcard {
            border-radius: 18px;
            overflow: hidden;
            background: #fff;
            border: 1.5px solid var(--stroke);
            box-shadow: var(--card-sh);
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
        }

        .mcard:hover {
            transform: translateY(-5px);
            box-shadow: var(--card-sh-h);
            border-color: rgba(8, 145, 178, 0.25);
        }

        .mcard.tall {
            grid-row: span 2;
        }

        .mthumb {
            width: 100%;
            aspect-ratio: 1/1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.2rem;
        }

        .mcard.tall .mthumb {
            aspect-ratio: auto;
            min-height: 340px;
        }

        .moverlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(12, 60, 110, 0.88) 0%, rgba(12, 60, 110, 0.1) 55%, transparent 100%);
            opacity: 0;
            transition: opacity 0.3s;
            padding: 18px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .mcard:hover .moverlay {
            opacity: 1;
        }

        .mcat {
            font-family: 'DM Mono', monospace;
            font-size: 0.58rem;
            color: #7dd3fc;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .mtitle {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.05rem;
            color: #fff;
            line-height: 1.3;
            margin-bottom: 8px;
        }

        .mmeta {
            display: flex;
            justify-content: space-between;
            font-size: 0.68rem;
            color: rgba(255, 255, 255, 0.6);
            font-family: 'DM Mono', monospace;
        }

        .mbadge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(255, 255, 255, 0.9);
            color: var(--navy);
            font-size: 0.62rem;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 50px;
            font-family: 'DM Mono', monospace;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* ── BLOG ─────────────────────────────────────────── */
        #blog {
            background: #fff;
        }

        .fbtn {
            background: var(--sky);
            border: 1.5px solid var(--sky-md);
            color: var(--muted);
            font-size: 0.75rem;
            font-weight: 500;
            padding: 8px 20px;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .fbtn.active,
        .fbtn:hover {
            background: var(--navy);
            border-color: var(--navy);
            color: #fff;
        }

        .blog-card {
            background: #fff;
            border: 1.5px solid var(--stroke);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--card-sh);
            height: 100%;
            transition: all 0.3s;
        }

        .blog-card:hover {
            border-color: rgba(8, 145, 178, 0.3);
            transform: translateY(-4px);
            box-shadow: var(--card-sh-h);
        }

        .blog-thumb {
            height: 170px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
        }

        .blog-badge {
            display: inline-block;
            background: var(--teal-lt);
            border: 1px solid rgba(8, 145, 178, 0.25);
            color: var(--teal);
            font-size: 0.62rem;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 50px;
            font-family: 'DM Mono', monospace;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .blog-body {
            padding: 22px;
        }

        .blog-date {
            font-family: 'DM Mono', monospace;
            font-size: 0.63rem;
            color: var(--muted);
            margin: 10px 0 12px;
        }

        .blog-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--navy);
            line-height: 1.35;
            margin-bottom: 10px;
        }

        .blog-snip {
            font-size: 0.85rem;
            color: var(--muted);
            line-height: 1.7;
            margin-bottom: 18px;
        }

        .blog-link {
            color: var(--teal);
            font-size: 0.78rem;
            font-weight: 600;
            text-decoration: none;
            font-family: 'DM Mono', monospace;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: gap 0.2s;
        }

        .blog-link:hover {
            color: var(--navy);
            gap: 10px;
        }

        /* ── CTA ──────────────────────────────────────────── */
        #contact {
            background: linear-gradient(160deg, var(--navy) 0%, #0a4f8c 50%, #0c3c6e 100%);
            position: relative;
            overflow: hidden;
        }

        #contact::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 70% 50% at 50% 0%, rgba(255, 255, 255, 0.06), transparent 60%);
        }

        .cta-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2.2rem, 5vw, 3.8rem);
            font-weight: 700;
            color: #fff;
            line-height: 1.1;
            margin-bottom: 18px;
        }

        .cta-sub {
            color: rgba(255, 255, 255, 0.65);
            font-size: 1rem;
            line-height: 1.8;
            max-width: 560px;
            margin: 0 auto 38px;
        }

        .btn-cw {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            background: #fff;
            color: var(--navy);
            font-weight: 700;
            font-size: 0.875rem;
            padding: 15px 34px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
        }

        .btn-cw:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 40px rgba(0, 0, 0, 0.3);
            color: var(--navy);
        }

        .btn-co {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            background: transparent;
            color: #fff;
            font-weight: 600;
            font-size: 0.875rem;
            padding: 14px 34px;
            border-radius: 50px;
            text-decoration: none;
            border: 1.5px solid rgba(255, 255, 255, 0.25);
            transition: all 0.3s;
        }

        .btn-co:hover {
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
            border-color: rgba(255, 255, 255, 0.4);
        }

        .cgrid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 56px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 48px;
        }

        @media(max-width:768px) {
            .cgrid {
                grid-template-columns: 1fr;
            }
        }

        .ccard {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 22px;
            text-align: center;
            transition: border-color 0.2s;
        }

        .ccard:hover {
            border-color: rgba(255, 255, 255, 0.2);
        }

        .cico {
            width: 42px;
            height: 42px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.1rem;
            margin: 0 auto 12px;
        }

        .clbl {
            font-family: 'DM Mono', monospace;
            font-size: 0.58rem;
            color: rgba(255, 255, 255, 0.45);
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .cval {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.88rem;
        }

        /* ── FOOTER ───────────────────────────────────────── */
        footer {
            background: var(--navy);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding: 28px 0;
            text-align: center;
        }

        footer p {
            color: rgba(255, 255, 255, 0.35);
            font-size: 0.78rem;
            margin: 0;
        }

        footer p+p {
            margin-top: 4px;
            font-size: 0.7rem;
        }

        /* ── REVEAL ───────────────────────────────────────── */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .reveal.in {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>

</html>