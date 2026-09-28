
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adriano — Public Profile</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* =========================
           ROOT
        ========================= */

        :root {
            --bg: #080b10;
            --bg-soft: #0d1118;
            --card: rgba(16, 21, 30, 0.78);

            --text: #f4f7fb;
            --muted: #8993a3;
            --muted-light: #b6bfcd;

            --line: rgba(255, 255, 255, 0.09);

            --blue: #4c8dff;
            --purple: #9b6cff;
            --cyan: #50e6ff;

            --radius: 22px;

            --font-main: "Inter", sans-serif;
            --font-display: "Space Grotesk", sans-serif;
        }

        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            background: var(--bg);
            color: var(--text);
            font-family: var(--font-main);
            overflow-x: hidden;
        }

        button,
        a {
            font-family: inherit;
        }

        button {
            cursor: pointer;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* =========================
           BACKGROUND
        ========================= */

        .grid-bg {
            position: fixed;
            inset: 0;
            z-index: -3;

            background-image:
                linear-gradient(
                    rgba(255, 255, 255, 0.025) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255, 255, 255, 0.025) 1px,
                    transparent 1px
                );

            background-size: 50px 50px;

            mask-image: linear-gradient(
                to bottom,
                black,
                transparent 85%
            );
        }

        .glow {
            position: fixed;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            filter: blur(140px);
            opacity: 0.13;
            pointer-events: none;
            z-index: -2;
        }

        .glow-blue {
            background: var(--blue);
            top: -250px;
            left: -200px;
        }

        .glow-purple {
            background: var(--purple);
            top: 500px;
            right: -300px;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: min(1180px, calc(100% - 40px));
            height: 80px;
            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border-bottom: 1px solid var(--line);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 9px;

            font-family: var(--font-display);
            font-size: 20px;
            font-weight: 700;
        }

        .logo-mark {
            width: 30px;
            height: 30px;

            display: grid;
            place-items: center;

            border-radius: 9px;

            background: linear-gradient(
                135deg,
                var(--blue),
                var(--purple)
            );

            color: white;
        }

        .navbar nav {
            display: flex;
            gap: 35px;
        }

        .navbar nav a {
            color: var(--muted);
            font-size: 13px;
            transition: 0.25s;
        }

        .navbar nav a:hover {
            color: white;
        }

        .menu-btn {
            width: 38px;
            height: 38px;

            border: 1px solid var(--line);
            border-radius: 10px;

            background: rgba(255, 255, 255, 0.03);
            color: white;

            font-size: 18px;
        }

        /* =========================
           MAIN
        ========================= */

        main {
            width: min(1180px, calc(100% - 40px));
            margin: auto;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            position: relative;

            min-height: 590px;

            display: grid;
            grid-template-columns: 330px 1fr;
            align-items: center;

            gap: 90px;

            padding: 80px 0;

            border-bottom: 1px solid var(--line);
        }

        .profile-image-wrapper {
            position: relative;

            width: 290px;
            height: 290px;

            display: grid;
            place-items: center;
        }

        .image-ring {
            position: absolute;
            inset: -18px;

            border: 1px solid rgba(76, 141, 255, 0.3);
            border-radius: 50%;

            animation: rotate 18s linear infinite;
        }

        .image-ring::after {
            content: "";

            position: absolute;

            width: 8px;
            height: 8px;

            top: 18px;
            right: 42px;

            border-radius: 50%;

            background: var(--cyan);
            box-shadow: 0 0 20px var(--cyan);
        }

        .profile-image {
            width: 290px;
            height: 290px;

            object-fit: cover;

            border-radius: 50%;

            border: 5px solid #111721;

            filter: saturate(0.9);
        }

        .online-dot {
            position: absolute;

            width: 18px;
            height: 18px;

            right: 25px;
            bottom: 30px;

            border-radius: 50%;

            background: #46e49b;
            border: 4px solid var(--bg);

            box-shadow: 0 0 20px #46e49b;
        }

        @keyframes rotate {
            to {
                transform: rotate(360deg);
            }
        }

        .eyebrow,
        .section-label {
            display: flex;
            align-items: center;
            gap: 10px;

            color: var(--muted);

            font-size: 10px;
            font-weight: 700;

            letter-spacing: 2px;
        }

        .eyebrow span {
            width: 7px;
            height: 7px;

            background: var(--blue);
            border-radius: 50%;

            box-shadow: 0 0 15px var(--blue);
        }

        .profile-content h1 {
            margin-top: 15px;

            font-family: var(--font-display);

            font-size: clamp(52px, 7vw, 88px);
            line-height: 0.95;

            letter-spacing: -5px;
        }

        .profile-content h1 span {
            display: block;

            background: linear-gradient(
                90deg,
                var(--blue),
                var(--purple)
            );

            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .username {
            margin-top: 15px;

            color: var(--blue);

            font-size: 14px;
            font-weight: 600;
        }

        .profile-content h2 {
            margin-top: 23px;

            color: var(--muted-light);

            font-size: 17px;
            font-weight: 500;
        }

        .profile-content h2 span {
            color: var(--purple);
        }

        .bio {
            max-width: 540px;

            margin-top: 18px;

            color: var(--muted);

            line-height: 1.8;
            font-size: 14px;
        }

        .location {
            display: flex;
            align-items: center;
            gap: 8px;

            margin-top: 18px;

            color: var(--muted-light);

            font-size: 13px;
        }

        .location span {
            color: var(--purple);
            font-size: 20px;
        }

        .hero-actions {
            display: flex;
            gap: 12px;

            margin-top: 28px;
        }

        .btn {
            display: flex;
            align-items: center;
            gap: 12px;

            padding: 13px 19px;

            border-radius: 11px;

            font-size: 12px;
            font-weight: 700;

            transition: 0.25s;
        }

        .btn-primary {
            background: white;
            color: #080b10;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255,255,255,0.12);
        }

        .btn-secondary {
            border: 1px solid var(--line);
            background: transparent;
            color: var(--muted-light);
        }

        .btn-secondary:hover {
            border-color: rgba(255,255,255,0.3);
            color: white;
        }

        .profile-number {
            position: absolute;

            right: 0;
            top: 50%;

            transform: translateY(-50%);

            display: flex;
            flex-direction: column;

            color: var(--muted);

            font-size: 10px;
            letter-spacing: 2px;
        }

        .profile-number span {
            color: var(--blue);
            margin-bottom: 8px;
        }

        /* =========================
           SKILLS
        ========================= */

        .skills-section {
            display: flex;
            align-items: center;
            gap: 45px;

            padding: 35px 0;

            border-bottom: 1px solid var(--line);
        }

        .section-label span {
            color: var(--blue);
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .skills span {
            padding: 8px 12px;

            border: 1px solid var(--line);
            border-radius: 8px;

            color: var(--muted-light);

            font-size: 11px;

            background: rgba(255,255,255,0.02);

            transition: 0.25s;
        }

        .skills span:hover {
            color: white;
            border-color: var(--blue);

            transform: translateY(-2px);
        }

        /* =========================
           STATS
        ========================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);

            border-bottom: 1px solid var(--line);
        }

        .stat {
            padding: 35px 20px;

            border-right: 1px solid var(--line);
        }

        .stat:first-child {
            padding-left: 0;
        }

        .stat:last-child {
            border-right: 0;
        }

        .stat strong {
            display: block;

            font-family: var(--font-display);

            font-size: 32px;
        }

        .stat span {
            display: block;

            margin-top: 6px;

            color: var(--muted);

            font-size: 11px;
        }

        /* =========================
           CREATIONS
        ========================= */

        .creations-section {
            padding: 100px 0;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;

            margin-bottom: 45px;
        }

        .section-heading h2 {
            margin-top: 12px;

            font-family: var(--font-display);

            font-size: clamp(38px, 5vw, 60px);
            line-height: 1;

            letter-spacing: -3px;
        }

        .section-heading h2 em {
            color: var(--blue);
            font-style: normal;
        }

        .section-heading > p {
            width: 300px;

            color: var(--muted);

            font-size: 12px;
            line-height: 1.7;
        }

        .projects {
            display: grid;
            grid-template-columns: 1.4fr 1fr;

            gap: 20px;
        }

        .project-card {
            min-width: 0;
        }

        .project-large {
            grid-row: span 2;
        }

        .project-image {
            position: relative;

            min-height: 280px;

            overflow: hidden;

            border-radius: var(--radius);

            border: 1px solid var(--line);

            transition: 0.35s;
        }

        .project-large .project-image {
            min-height: 580px;
        }

        .project-image img {
            width: 100%;
            height: 100%;

            position: absolute;
            inset: 0;

            object-fit: cover;
        }

        .project-image::before {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,0.1),
                    transparent 40%
                );

            z-index: 1;
            pointer-events: none;
        }

        .project-one {
            background:
                radial-gradient(
                    circle at 30% 30%,
                    #4c8dff,
                    transparent 28%
                ),
                linear-gradient(
                    135deg,
                    #111f3b,
                    #15101f
                );
        }

        .project-two {
            background:
                radial-gradient(
                    circle at 70% 40%,
                    #d7ff5c,
                    transparent 22%
                ),
                linear-gradient(
                    135deg,
                    #171b13,
                    #25251d
                );
        }

        .project-three {
            background:
                radial-gradient(
                    circle at 50% 40%,
                    #a16cff,
                    transparent 25%
                ),
                linear-gradient(
                    135deg,
                    #21163a,
                    #101420
                );
        }

        .project-image:hover {
            transform: translateY(-5px);
            border-color: rgba(76,141,255,0.4);
        }

        .project-overlay {
            position: absolute;
            inset: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(5, 8, 12, 0.55);

            opacity: 0;

            transition: 0.3s;

            z-index: 2;
        }

        .project-overlay span {
            padding: 12px 18px;

            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 100px;

            background: rgba(255,255,255,0.08);

            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .project-image:hover .project-overlay {
            opacity: 1;
        }

        .project-number {
            position: absolute;

            top: 20px;
            left: 20px;

            color: rgba(255,255,255,0.5);

            font-size: 11px;
            font-weight: 700;

            z-index: 3;
        }

        .project-info {
            display: flex;
            justify-content: space-between;
            gap: 20px;

            padding: 17px 2px 30px;
        }

        .project-info h3 {
            font-family: var(--font-display);
            font-size: 18px;
        }

        .project-info p {
            margin-top: 5px;

            color: var(--muted);

            font-size: 11px;
        }

        .project-tags {
            display: flex;
            align-items: flex-start;
            gap: 5px;
        }

        .project-tags span {
            padding: 6px 8px;

            border: 1px solid var(--line);
            border-radius: 6px;

            color: var(--muted);

            font-size: 9px;
        }

        .all-creations {
            display: flex;
            justify-content: center;

            margin-top: 25px;
        }

        .all-creations button {
            padding: 15px 22px;

            border: 1px solid var(--line);
            border-radius: 10px;

            background: transparent;
            color: white;

            font-size: 11px;
            font-weight: 700;

            transition: 0.25s;
        }

        .all-creations button span {
            margin-left: 15px;

            color: var(--blue);

            font-size: 18px;
        }

        .all-creations button:hover {
            background: rgba(255,255,255,0.05);
            border-color: var(--blue);
        }

        /* =========================
           LEARNING
        ========================= */

        .learning {
            padding: 35px;

            border: 1px solid var(--line);
            border-radius: var(--radius);

            background: var(--card);

            backdrop-filter: blur(20px);
        }

        .learning-header {
            display: flex;
            justify-content: space-between;

            padding-bottom: 25px;

            border-bottom: 1px solid var(--line);
        }

        .learning-status {
            color: #45df9a;

            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .learning-content {
            display: grid;
            grid-template-columns: 1fr 300px;

            gap: 60px;

            padding-top: 30px;
        }

        .learning h2 {
            font-family: var(--font-display);

            font-size: 27px;
        }

        .learning h2 span {
            color: var(--purple);
        }

        .learning p {
            max-width: 550px;

            margin-top: 10px;

            color: var(--muted);

            font-size: 12px;
            line-height: 1.7;
        }

        .progress-info {
            display: flex;
            justify-content: space-between;

            margin-bottom: 10px;

            color: var(--muted);

            font-size: 10px;
        }

        .progress-info strong {
            color: white;
        }

        .progress-bar {
            height: 5px;

            overflow: hidden;

            border-radius: 100px;

            background: rgba(255,255,255,0.08);
        }

        .progress-fill {
            width: 72%;
            height: 100%;

            border-radius: inherit;

            background: linear-gradient(
                90deg,
                var(--blue),
                var(--purple)
            );

            box-shadow: 0 0 15px var(--blue);
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            width: min(1180px, calc(100% - 40px));

            margin: 100px auto 0;

            padding: 30px 0;

            border-top: 1px solid var(--line);

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-logo {
            font-family: var(--font-display);

            font-size: 20px;
            font-weight: 700;
        }

        .footer-logo span {
            color: var(--blue);
        }

        footer p,
        .footer-right {
            color: var(--muted);

            font-size: 10px;
        }

        .footer-right {
            letter-spacing: 1px;
        }

        /* =========================
           TOAST
        ========================= */

        .toast {
            position: fixed;

            left: 50%;
            bottom: 30px;

            transform: translate(-50%, 100px);

            padding: 12px 18px;

            border: 1px solid var(--line);
            border-radius: 10px;

            background: #151b25;

            color: white;

            font-size: 11px;

            opacity: 0;

            transition: 0.35s;

            z-index: 100;
        }

        .toast.show {
            opacity: 1;
            transform: translate(-50%, 0);
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .hero {
                grid-template-columns: 1fr;

                gap: 55px;

                padding: 65px 0;
            }

            .profile-image-wrapper {
                margin: auto;
            }

            .profile-content {
                text-align: center;
            }

            .eyebrow,
            .location {
                justify-content: center;
            }

            .bio {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-actions {
                justify-content: center;
            }

            .profile-number {
                display: none;
            }

            .skills-section {
                flex-direction: column;
                align-items: flex-start;

                gap: 20px;
            }

            .projects {
                grid-template-columns: 1fr;
            }

            .project-large {
                grid-row: auto;
            }

            .project-large .project-image {
                min-height: 400px;
            }

            .learning-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {

            .navbar,
            main,
            footer {
                width: min(100% - 28px, 1180px);
            }

            .navbar {
                height: 70px;
            }

            .navbar nav {
                display: none;
            }

            .hero {
                min-height: auto;

                padding: 55px 0;
            }

            .profile-image-wrapper,
            .profile-image {
                width: 210px;
                height: 210px;
            }

            .profile-image-wrapper {
                margin-top: 20px;
            }

            .profile-content h1 {
                font-size: 52px;
                letter-spacing: -3px;
            }

            .profile-content h2 {
                font-size: 14px;
                line-height: 1.6;
            }

            .bio {
                font-size: 13px;
            }

            .hero-actions {
                flex-direction: column;
            }

            .btn {
                justify-content: center;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .stat {
                border-bottom: 1px solid var(--line);
            }

            .stat:nth-child(2) {
                border-right: 0;
            }

            .section-heading {
                display: block;
            }

            .section-heading > p {
                width: auto;
                margin-top: 20px;
            }

            .creations-section {
                padding: 70px 0;
            }

            .project-large .project-image,
            .project-image {
                min-height: 300px;
            }

            .learning {
                padding: 23px;
            }

            .learning h2 {
                font-size: 22px;
            }

            footer {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- Background Decoration -->
    <div class="grid-bg"></div>
    <div class="glow glow-blue"></div>
    <div class="glow glow-purple"></div>

    <!-- Navbar -->
    <header class="navbar">

        <div class="logo">
            <span class="logo-mark">e</span>
            <span>Desain</span>
        </div>

        <nav>
            <a href="#profile">Profile</a>
            <a href="#creations">Creations</a>
            <a href="login.php">Login</a>
        </nav>

        <button class="menu-btn" id="themeBtn" aria-label="Toggle theme">
            ◐
        </button>

    </header>


    <main>

        <!-- Profile Hero -->
        <section class="hero" id="profile">

            <div class="profile-image-wrapper">

                <div class="image-ring"></div>

                <img
                    src="foto.jpeg"
                    alt="Foto profil Adriano"
                    class="profile-image"
                >

                <span class="online-dot"></span>

            </div>


            <div class="profile-content">

                <div class="eyebrow">
                    <span></span>
                    CREATIVE PROFILE / 01
                </div>

                <h1>
                    Adriano
                    <span>Gagah.</span>
                </h1>

                <div class="username">
                    @ANOGANAS
                </div>

                <h2>
                    Pelajar SMK
                    <span>·</span>
                    kelas 11
                </h2>

                <p class="bio">
                    Saya Adriano berasal dari Muara Wahau,
                    bersekolah di Samarinda di SMK Airlangga.
                </p>

                <div class="location">
                    <span>⌖</span>
                    Samarinda, Indonesia
                </div>

                <div class="hero-actions">

                    <a href="#creations" class="btn btn-primary">
                        View Creations
                        <span>↗</span>
                    </a>

                    <button class="btn btn-secondary" id="copyBtn">
                        Copy Profile
                    </button>

                </div>

            </div>


            <div class="profile-number">
                <span>ES</span>
                001
            </div>

        </section>


        <!-- Skills -->
        <section class="skills-section">

            <div class="section-label">
                <span>01</span>
                EXPERTISE
            </div>

            <div class="skills">
                <span>WordPress</span>
                <span>Web Design</span>
            </div>

        </section>


        <!-- Stats -->
        <section class="stats">

            <div class="stat">
                <strong>3</strong>
                <span>Creations</span>
            </div>

            <div class="stat">
                <strong>2</strong>
                <span>Projects</span>
            </div>

            <div class="stat">
                <strong>2</strong>
                <span>Years Learning</span>
            </div>

            <div class="stat">
                <strong>2</strong>
                <span>Skills</span>
            </div>

        </section>


        <!-- Creations -->
        <section class="creations-section" id="creations">

            <div class="section-heading">

                <div>

                    <div class="section-label">
                        <span>02</span>
                        SELECTED WORKS
                    </div>

                    <h2>
                        Selected
                        <em>Creations.</em>
                    </h2>

                </div>

                <p>
                    Kumpulan project yang sudah saya buat
                    saat proses belajar coding.
                </p>

            </div>


            <div class="projects">

                <!-- Project 1 -->
                <article class="project-card project-large">

                    <div class="project-image project-one">

                        <img src="lagi.png" alt="Project 1">

                        <div class="project-overlay">
                            <span>VIEW PROJECT ↗</span>
                        </div>

                        <div class="project-number">
                            01
                        </div>

                    </div>

                    <div class="project-info">

                        <div>
                            <h3>Project 1</h3>
                            <p>Melihat kategori tubuh</p>
                        </div>

                        <div class="project-tags">
                            <span>UI/UX</span>
                            <span>Mobile</span>
                        </div>

                    </div>

                </article>


                <!-- Project 2 -->
                <article class="project-card">

                    <div class="project-image project-two">

                        <img src="ganas.png" alt="Project 2">

                        <div class="project-overlay">
                            <span>VIEW PROJECT ↗</span>
                        </div>

                        <div class="project-number">
                            02
                        </div>

                    </div>

                    <div class="project-info">

                        <div>
                            <h3>Project 2</h3>
                            <p>Mendesain di DOM</p>
                        </div>

                        <div class="project-tags">
                            <span>Branding</span>
                        </div>

                    </div>

                </article>


                <!-- Project 3 -->
                <article class="project-card">

                    <div class="project-image project-three">

                        <img src="terakhir.png" alt="Project 3">

                        <div class="project-overlay">
                            <span>VIEW PROJECT ↗</span>
                        </div>

                        <div class="project-number">
                            03
                        </div>

                    </div>

                    <div class="project-info">

                        <div>
                            <h3>Project 3</h3>
                            <p>Menghitung total harga</p>
                        </div>

                        <div class="project-tags">
                            <span>Web</span>
                            <span>Concept</span>
                        </div>

                    </div>

                </article>

            </div>


            <div class="all-creations">

                <button id="allCreationsBtn">
                    Explore Hall of Creations
                    <span>→</span>
                </button>

            </div>

        </section>


        <!-- Learning -->
        <section class="learning">

            <div class="learning-header">

                <div class="section-label">
                    <span>03</span>
                    LEARNING JOURNEY
                </div>

                <span class="learning-status">
                    ● ACTIVE
                </span>

            </div>


            <div class="learning-content">

                <div>

                    <h2>
                        Mempelajari
                        <span>Product Design.</span>
                    </h2>

                    <p>
                        Mempelajari cara desain web,
                        menjelajahi sistem desain.
                    </p>

                </div>


                <div class="progress-wrapper">

                    <div class="progress-info">
                        <span>Progress</span>
                        <strong>50%</strong>
                    </div>

                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- Footer -->
    <footer>

        <div class="footer-logo">
            Desain<span>.</span>
        </div>

        <p>
            Dirancang untuk berkreativitas
        </p>

        <div class="footer-right">
            PROFILE / 2026
        </div>

    </footer>


    <!-- Toast -->
    <div class="toast" id="toast">
        Profile link copied!
    </div>


    <!-- JavaScript -->
    <script>

        // =========================
        // COPY PROFILE
        // =========================

        const copyBtn = document.getElementById("copyBtn");
        const toast = document.getElementById("toast");

        copyBtn.addEventListener("click", async () => {

            const profileUrl = window.location.href;

            try {

                await navigator.clipboard.writeText(profileUrl);

                showToast("Profile link copied!");

            } catch (error) {

                showToast("Unable to copy profile link.");

            }

        });


        function showToast(message) {

            toast.textContent = message;

            toast.classList.add("show");

            setTimeout(() => {
                toast.classList.remove("show");
            }, 2500);

        }


        // =========================
        // THEME
        // =========================

        const themeBtn = document.getElementById("themeBtn");

        let lightMode = false;

        themeBtn.addEventListener("click", () => {

            lightMode = !lightMode;

            if (lightMode) {

                document.documentElement.style.setProperty(
                    "--bg",
                    "#f4f6fa"
                );

                document.documentElement.style.setProperty(
                    "--bg-soft",
                    "#ffffff"
                );

                document.documentElement.style.setProperty(
                    "--text",
                    "#111827"
                );

                document.documentElement.style.setProperty(
                    "--muted",
                    "#667085"
                );

                document.documentElement.style.setProperty(
                    "--muted-light",
                    "#475467"
                );

                document.documentElement.style.setProperty(
                    "--line",
                    "rgba(0, 0, 0, 0.09)"
                );

                themeBtn.style.color = "#111827";

            } else {

                document.documentElement.style.setProperty(
                    "--bg",
                    "#080b10"
                );

                document.documentElement.style.setProperty(
                    "--bg-soft",
                    "#0d1118"
                );

                document.documentElement.style.setProperty(
                    "--text",
                    "#f4f7fb"
                );

                document.documentElement.style.setProperty(
                    "--muted",
                    "#8993a3"
                );

                document.documentElement.style.setProperty(
                    "--muted-light",
                    "#b6bfcd"
                );

                document.documentElement.style.setProperty(
                    "--line",
                    "rgba(255, 255, 255, 0.09)"
                );

                themeBtn.style.color = "white";

            }

        });


        // =========================
        // ALL CREATIONS
        // =========================

        const allCreationsBtn =
            document.getElementById("allCreationsBtn");

        allCreationsBtn.addEventListener("click", () => {

            showToast("More creations coming soon!");

        });

    </script>

</body>
</html>
```
