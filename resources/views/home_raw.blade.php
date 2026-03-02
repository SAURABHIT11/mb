<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dr. Mohit Bhalla | Consultant Urologist & Surgeon</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Outfit:wght@300;400;500;600;700&family=DM+Mono:wght@400;500&display=swap"
        rel="stylesheet" />

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

    <!-- ══════ NAVBAR ══════════════════════════════════════════ -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="#">
                <div class="brand-pill">⚕</div>
                <div>
                    <div class="brand-name">Dr. Mohit Bhalla</div>
                    <div class="brand-tag">MCh Urology · Surgeon</div>
                </div>
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navMenu">
                <i class="bi bi-list fs-4" style="color:var(--navy)"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navMenu">
                <ul class="navbar-nav align-items-lg-center gap-lg-1 me-lg-3 mt-3 mt-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profile">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#media">Media</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Insights</a></li>
                </ul>
                <a href="#contact" class="btn-book nav-link ms-lg-2 mt-2 mt-lg-0 d-inline-block">
                    Book Consult <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- ══════ HERO ════════════════════════════════════════════ -->
    <section id="hero">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>

        <div class="container position-relative">
            <div class="row align-items-center g-5">

                <div class="col-lg-7 order-2 order-lg-1">
                    <div class="hero-eyebrow"><span class="live-dot"></span> Top Rated · Urologist & Surgeon · India
                    </div>
                    <h1 class="hero-title">
                        Advanced Urology.<br>
                        <span class="italic">Compassionate Care.</span>
                    </h1>
                    <p class="hero-desc">
                        Dr. Mohit Bhalla blends academic excellence and surgical mastery to deliver world-class
                        urological outcomes — with a deeply human approach to every patient's healing journey.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-1">
                        <a href="#profile" class="btn-prim">Explore Profile <i class="bi bi-arrow-down"></i></a>
                        <a href="#media" class="btn-sec"><i class="bi bi-play-circle-fill"
                                style="color:var(--teal)"></i> Watch Media</a>
                    </div>
                    <div class="chip-row">
                        <span class="chip"><i class="bi bi-mortarboard-fill"></i> MCh Urology</span>
                        <span class="chip"><i class="bi bi-heart-pulse-fill"></i> Surgical Expert</span>
                        <span class="chip"><i class="bi bi-microscope"></i> Researcher</span>
                        <span class="chip"><i class="bi bi-trophy-fill"></i> Award-Winning</span>
                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 d-flex justify-content-center">
                    <div class="photo-frame">
                        <div class="photo-card">
                            <img src="{{ asset('image/dr-mohit-bhalla.jpeg') }}"
                                style="width:100%;height:450px;object-fit:cover">
                            <div class="photo-bar">
                                <div class="stat-row">
                                    <div class="stat-cell"><span class="stat-n">98%</span><span
                                            class="stat-l">Success</span></div>
                                    <div class="stat-cell"><span class="stat-n">5k+</span><span
                                            class="stat-l">Patients</span></div>
                                    <div class="stat-cell"><span class="stat-n">12+</span><span class="stat-l">Yrs
                                            Exp</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="float-badge">⭐ Best Surgeon 2023</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="divider"></div>

    <section id="profile">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center reveal">
                    <div class="eyebrow justify-content-center">Professional Dashboard</div>
                    <h2 class="sec-title">Expertise at a Glance</h2>
                    <p class="sec-desc">
                        A clear, data-driven overview of clinical competencies,
                        credentials, and career milestones.
                    </p>
                </div>
            </div>

            {{-- ================= ROW 1 ================= --}}
            <div class="bento reveal">

                {{-- SURGERY CARD --}}
                <div class="bcard sky b3">
                    <div class="blbl">
                        <i class="bi bi-activity me-1"></i>Surgeries
                    </div>

                    <div class="big-n teal">
                        {{ $profile->total_surgeries ?? 0 }}+
                    </div>

                    <div class="num-s">Procedures Performed</div>

                    <div class="mt-4">
                        @foreach($procedures as $procedure)
                            <div class="prg-item">
                                <div class="prg-head">
                                    <span class="prg-n">{{ $procedure->name }}</span>
                                    <span class="prg-p">{{ $procedure->percentage }}%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar pb-navy" style="width:0" data-w="{{ $procedure->percentage }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- RADAR CHART --}}
                <div class="bcard b5">
                    <div class="blbl">
                        <i class="bi bi-radar me-1"></i>Competency Radar
                    </div>
                    <div class="btitl">Clinical Proficiency Map</div>
                    <div class="chart-box">
                        <canvas id="radarChart"></canvas>
                    </div>
                </div>

                {{-- TIMELINE --}}
                <div class="bcard b4">
                    <div class="blbl">
                        <i class="bi bi-clock-history me-1"></i>Career Path
                    </div>
                    <div class="btitl">Academic Journey</div>

                    <div class="timeline mt-3">
                        @foreach($timelines as $timeline)
                            <div class="tl-item">
                                <div class="tl-dot" style="background:{{ $timeline->color ?? 'var(--teal)' }};
                                                        box-shadow:0 0 0 2px {{ $timeline->color ?? 'var(--teal)' }}">
                                </div>

                                <div class="tl-yr">{{ $timeline->year_range }}</div>
                                <div class="tl-t">{{ $timeline->title }}</div>
                                <div class="tl-s">{{ $timeline->subtitle }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

            {{-- ================= ROW 2 ================= --}}
            <div class="bento mt-4 reveal">

                {{-- BAR CHART --}}
                <div class="bcard b6">
                    <div class="blbl">
                        <i class="bi bi-bar-chart-fill me-1"></i>Procedure Volume
                    </div>
                    <div class="btitl">Surgical Focus Breakdown</div>
                    <div class="chart-box" style="height:210px">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                {{-- SPECIALIZATIONS --}}
                <div class="bcard mint b3">
                    <div class="blbl">
                        <i class="bi bi-tags-fill me-1"></i>Specializations
                    </div>
                    <div class="btitl">Key Skills</div>

                    <div class="mt-2">
                        @foreach($specializations as $skill)
                            <span class="stag">{{ $skill->name }}</span>
                        @endforeach
                    </div>
                </div>

                {{-- AWARDS --}}
                <div class="bcard warm b3">
                    <div class="blbl">
                        <i class="bi bi-trophy-fill me-1"></i>Recognition
                    </div>
                    <div class="btitl">Awards</div>

                    @foreach($awards as $award)
                        <div class="aw-strip">
                            <div class="aw-ico">
                                <i class="bi bi-trophy-fill"></i>
                            </div>
                            <div>
                                <div class="aw-t">{{ $award->title }}</div>
                                <div class="aw-s">{{ $award->subtitle }}</div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </section>


    <div class="divider"></div>

    <!-- ══════ MEDIA ════════════════════════════════════════════ -->
    <section id="media">
        <div class="container">
            <div class="row justify-content-between align-items-end mb-5 g-4">
                <div class="col-lg-5 reveal">
                    <div class="eyebrow">Social & Media Hub</div>
                    <h2 class="sec-title">Latest Updates</h2>
                    <p class="sec-desc">Surgical tips, health campaigns & milestones from Dr. Bhalla's channels.</p>
                </div>
                <div class="col-lg-6 reveal">
                    <div class="mf-bar justify-content-lg-end">
                        <button class="mf-btn active" data-mf="all">All</button>
                        <button class="mf-btn" data-mf="video">Video</button>
                        <button class="mf-btn" data-mf="image">Photo</button>
                        <button class="mf-btn" data-mf="awareness">Awareness</button>
                    </div>
                </div>
            </div>
            <div class="mgrid reveal">

                @foreach($socialMedia as $content)

                    @php
                        $file = $content->files->first();
                    @endphp

                    @if($file)

                        <div class="mcard" data-type="{{ $file->file_type }}"
                            data-category="{{ optional($content->category)->name }}">

                            <div class="mthumb" style="padding:0">

                                @if($file->file_type === 'video')
                                    <video width="100%" height="100%" style="object-fit:cover" preload="metadata">
                                        <source src="{{ asset('storage/' . $file->file_path) }}" type="video/mp4">
                                    </video>
                                @else
                                    <img src="{{ asset('storage/' . $file->file_path) }}"
                                        style="width:100%;height:100%;object-fit:cover" loading="lazy">
                                @endif

                            </div>

                            <span class="mbadge">
                                {{ $file->file_type === 'video' ? '▶ Video' : '📸 Photo' }}
                            </span>

                            <div class="moverlay">

                                <div class="mcat">
                                    {{ optional($content->category)->name ?? 'GENERAL' }}
                                </div>

                                <div class="mtitle">
                                    {{ $content->title }}
                                </div>

                                <div class="mmeta">
                                    <span>👁 {{ $content->download_count ?? 0 }}</span>
                                    <span>{{ $content->created_at->diffForHumans() }}</span>
                                </div>

                            </div>

                        </div>

                    @endif

                @endforeach

            </div>

            <div class="text-center mt-5 reveal">
                <a href="#" class="btn-sec"><i class="bi bi-instagram"></i> View Full Instagram Feed <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- ══════ BLOG ═════════════════════════════════════════════ -->
    <section id="blog">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-6 text-center reveal">
                    <div class="eyebrow justify-content-center">Knowledge Centre</div>
                    <h2 class="sec-title">Urology Insights</h2>
                    <p class="sec-desc">Educational articles and clinical commentary for patients and medical peers.</p>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-2 mb-5 reveal">
                <button class="fbtn active" data-f="all">All Posts</button>
                <button class="fbtn" data-f="patient">Patient Education</button>
                <button class="fbtn" data-f="clinical">Clinical Cases</button>
                <button class="fbtn" data-f="tech">Technology</button>
            </div>
            <div class="row g-4 reveal">
                @foreach($blogs as $blog)
                    @php
                        $file = $blog->files->first();
                    @endphp

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">

                            {{-- Thumbnail --}}
                            <div class="blog-thumb" style="background:#f0f7ff;">

                                @if($file)
                                    <img src="{{ asset('storage/' . $file->file_path) }}"
                                        style="width:100%; height:100%; object-fit:cover;">
                                @else
                                    📝
                                @endif
                            </div>

                            <div class="blog-body">

                                {{-- Category --}}
                                <span class="blog-badge">
                                    {{ optional($blog->category)->name ?? 'General' }}
                                </span>

                                {{-- Date --}}
                                <div class="blog-date">
                                    {{ $blog->created_at->format('M d, Y') }}
                                </div>

                                {{-- Title --}}
                                <h3 class="blog-title">
                                    {{ $blog->title }}
                                </h3>

                                {{-- Short Description --}}
                                <p class="blog-snip">
                                    {{ \Illuminate\Support\Str::limit($blog->description, 120) }}
                                </p>

                                {{-- Read More --}}
                                <a href="javascript:void(0);" onclick="openBlog('{{ $blog->id }}')" class="blog-link">
                                    Read Article <i class="bi bi-arrow-right"></i>
                                </a>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Blog Modal -->
    <!-- Modern Blog Modal -->
    <div class="modal fade" id="blogModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

                <!-- Header -->
                <div class="modal-header border-0 px-4 pt-4 pb-2">
                    <div>
                        <div id="blogCategory" class="text-uppercase small fw-semibold text-primary mb-1"
                            style="letter-spacing:1px;"></div>

                        <h4 class="modal-title fw-bold" id="blogModalTitle"
                            style="font-family:'Cormorant Garamond', serif;"></h4>

                        <div class="text-muted small mt-1" id="blogMeta"></div>
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Body -->
                <div class="modal-body px-4 pb-4">

                    <!-- Featured Media -->
                    <div id="blogMedia" class="mb-4 rounded-4 overflow-hidden"></div>

                    <!-- Content -->
                    <div id="blogContent" class="blog-content" style="line-height:1.9; font-size:1rem;"></div>

                </div>

            </div>
        </div>
    </div>



    <!-- ══════ CONTACT ══════════════════════════════════════════ -->
    <section id="contact">
        <div class="container position-relative">
            <div class="text-center reveal">
                <div class="eyebrow justify-content-center" style="color:rgba(255,255,255,0.45);">Ready to Help</div>
                <h2 class="cta-title">Start Your Journey<br>to Better Health</h2>
                <p class="cta-sub">Expert consultation for complex procedures or a second opinion — Dr. Bhalla brings
                    world-class urological expertise to every case.</p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="#" class="btn-cw"><i class="bi bi-calendar2-check"></i> Book Appointment</a>
                    <a href="#" class="btn-co"><i class="bi bi-telephone"></i> Contact Office</a>
                </div>
            </div>
            <div class="cgrid reveal">
                <div class="ccard">
                    <div class="cico"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="clbl">Location</div>
                    <div class="cval mb-2">
                        Main Urological Centre, Roorkee
                    </div>

                    <a href="https://www.google.com/maps/dir//Dr+Mohit+Bhalla,+Ramnagar,+Roorkee,+Sunhaira,+Uttarakhand+247667/@29.8613694,77.8948258,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390eb5a1d7a56b1d:0x301f0a128a5ce973!2m2!1d77.8717344!2d29.8747022?hl=en-IN&entry=ttu&g_ep=EgoyMDI2MDIyMi4wIKXMDSoASAFQAw%3D%3D"
                        target="_blank" class="btn btn-sm btn-light rounded-pill px-3">
                        <i class="bi bi-map me-1"></i> View on Map
                    </a>
                </div>

                <div class="ccard">
                    <div class="cico"><i class="bi bi-envelope-fill"></i></div>
                    <div class="clbl">Email</div>
                    <div class="cval">contact@drmohitbhalla.com</div>
                </div>
                <div class="ccard">
                    <div class="cico"><i class="bi bi-phone-fill"></i></div>
                    <div class="clbl">Phone</div>
                    <div class="cval">+91 99999999999</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════ FOOTER ═══════════════════════════════════════════ -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Dr. Mohit Bhalla. All rights reserved.</p>
            <p>Medical Disclaimer: Content is for informational purposes only and does not constitute medical advice.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const mediaPosts = [
            { type: 'video', cat: 'awareness', title: 'Kidney Stone Prevention Tips', views: '2.4k', date: '2 days ago', icon: '▶️', bg: '#e0f7fa' },
            { type: 'image', cat: 'achievement', title: 'Awarded Best Surgeon 2023', views: '5k', date: '1 week ago', icon: '🏆', bg: '#fff8e1', tall: true },
            { type: 'image', cat: 'clinic', title: 'New Laser Technology at Clinic', views: '1.2k', date: '2 weeks ago', icon: '🔬', bg: '#e8f5e9' },
            { type: 'video', cat: 'awareness', title: 'Q&A: All About Prostate Health', views: '3.1k', date: '3 weeks ago', icon: '🎙️', bg: '#f3e5f5' },
            { type: 'image', cat: 'awareness', title: 'World Kidney Day 2024', views: '4.2k', date: '1 month ago', icon: '💙', bg: '#e3f2fd' },
            { type: 'video', cat: 'clinic', title: 'Inside the Robotic Surgery Suite', views: '6.1k', date: '1 month ago', icon: '🤖', bg: '#e8f5e9' },
        ];

        const blogPosts = [
            { title: 'Understanding Minimally Invasive Urology', cat: 'tech', icon: '🤖', snip: 'How robotic assistance and laparoscopy are reducing recovery times and improving outcomes for patients.', date: 'Oct 12, 2023' },
            { title: '5 Signs You Should See a Urologist Today', cat: 'patient', icon: '🩺', snip: 'Early detection is key. Learn the common symptoms that warrant a professional urological consultation.', date: 'Sep 28, 2023' },
            { title: 'Case Study: Complex Reconstruction Surgery', cat: 'clinical', icon: '📋', snip: 'A detailed look at a recent reconstructive procedure performed with a 100% complication-free outcome.', date: 'Sep 15, 2023' },
        ];

        // Navbar scroll
        window.addEventListener('scroll', () => { document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 60); });

        // Reveal
        const ro = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); ro.unobserve(e.target); } }), { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => ro.observe(el));

        // Progress bars
        const po = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.querySelectorAll('[data-w]').forEach(b => b.style.width = b.dataset.w + '%'); po.unobserve(e.target); } }), { threshold: 0.3 });
        document.querySelectorAll('.bcard').forEach(c => po.observe(c));

        // Media
        function renderMedia(f = 'all') {
            const g = document.getElementById('media-grid');
            const posts = f === 'all' ? mediaPosts : mediaPosts.filter(p => p.cat === f || p.type === f);
            g.innerHTML = posts.map(p => `
    <div class="mcard ${p.tall ? 'tall' : ''}">
      <div class="mthumb" style="background:${p.bg}">${p.icon}</div>
      <span class="mbadge">${p.type === 'video' ? '▶ Video' : '📸 Photo'}</span>
      <div class="moverlay">
        <div class="mcat">${p.cat}</div>
        <div class="mtitle">${p.title}</div>
        <div class="mmeta"><span>👁 ${p.views}</span><span>${p.date}</span></div>
      </div>
    </div>`).join('');
        }
        document.querySelectorAll('.mf-btn').forEach(b => b.addEventListener('click', function () {
            document.querySelectorAll('.mf-btn').forEach(x => x.classList.remove('active'));
            this.classList.add('active'); renderMedia(this.dataset.mf);
        }));

        // Blog
        const bgColor = { tech: '#e0f7fa', patient: '#e8f5e9', clinical: '#fff8e1' };
        function renderBlog(f = 'all') {
            const g = document.getElementById('blog-grid');
            const posts = f === 'all' ? blogPosts : blogPosts.filter(p => p.cat === f);
            g.innerHTML = posts.map(p => `
    <div class="col-lg-4 col-md-6">
      <div class="blog-card">
        <div class="blog-thumb" style="background:${bgColor[p.cat] || '#f0f7ff'}">${p.icon}</div>
        <div class="blog-body">
          <span class="blog-badge">${p.cat}</span>
          <div class="blog-date">${p.date}</div>
          <h3 class="blog-title">${p.title}</h3>
          <p class="blog-snip">${p.snip}</p>
          <a href="#" class="blog-link">Read Article <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>`).join('');
        }
        document.querySelectorAll('.fbtn').forEach(b => b.addEventListener('click', function () {
            document.querySelectorAll('.fbtn').forEach(x => x.classList.remove('active'));
            this.classList.add('active'); renderBlog(this.dataset.f);
        }));

        // Charts
        function initCharts() {
            const gc = '#e2eaf3', lf = { family: "'Outfit',sans-serif", size: 11 };

            new Chart(document.getElementById('radarChart'), {
                type: 'radar',
                data: {
                    labels: ['Surgical Precision', 'Patient Empathy', 'Diagnostics', 'Research', 'Technology'],
                    datasets: [{ data: [95, 100, 90, 85, 92], backgroundColor: 'rgba(8,145,178,0.1)', borderColor: '#0891b2', pointBackgroundColor: '#0891b2', pointBorderColor: '#fff', pointRadius: 5, borderWidth: 2 }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    scales: { r: { angleLines: { color: gc }, grid: { color: gc }, pointLabels: { font: lf, color: '#6b829e' }, ticks: { display: false, max: 100 } } },
                    plugins: { legend: { display: false } }
                }
            });

            new Chart(document.getElementById('barChart'), {
                type: 'bar',
                data: {
                    labels: ['Endourology', 'Laparoscopy', 'Uro-Oncology', 'Reconstruction', 'General'],
                    datasets: [{ data: [35, 25, 20, 10, 10], backgroundColor: ['#0c3c6e', '#1a5fa8', '#0891b2', '#22d3ee', '#a5f3fc'], borderRadius: 8, borderSkipped: false }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: { display: false }, tooltip: { callbacks: { label: c => c.parsed.y + '% of Practice' } } },
                    scales: { y: { beginAtZero: true, grid: { color: gc }, ticks: { display: false } }, x: { grid: { display: false }, ticks: { color: '#6b829e', font: lf } } }
                }
            });
        }

        document.addEventListener('DOMContentLoaded', () => { initCharts(); renderMedia(); renderBlog(); });
    </script>
    <script>
        function openBlog(id) {
            fetch("{{ url('blog') }}/" + id)
                .then(response => response.json())
                .then(data => {

                    document.getElementById('blogModalTitle').innerText = data.title;
                    document.getElementById('blogMeta').innerText =
                        data.category + ' • ' + data.date;

                    document.getElementById('blogContent').innerHTML = data.description;

                    let mediaHtml = '';

                    data.media.forEach(m => {

                        if (m.type === 'image') {
                            mediaHtml += `<img src="${m.url}"
                                      class="img-fluid mb-3 rounded">`;
                        }

                        if (m.type === 'video') {
                            mediaHtml += `
                        <video controls class="w-100 mb-3 rounded">
                            <source src="${m.url}">
                        </video>
                    `;
                        }

                    });

                    document.getElementById('blogMedia').innerHTML = mediaHtml;

                    new bootstrap.Modal(document.getElementById('blogModal')).show();
                });
        }
    </script>


</body>

</html>