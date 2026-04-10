<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog — AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --accent: #6C47FF;
            --accent-light: #EEE9FF;
            --dark: #0F0E17;
            --text: #1a1a2e;
            --muted: #6B7280;
            --border: #E5E7EB;
            --surface: #F9FAFB;
        }

        * {
            font-family: 'Plus Jakarta Sans', sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: #F4F3FF;
            color: var(--text);
            min-height: 100vh;
        }

        header {
            background: #fff;
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 1px 8px rgba(0, 0, 0, 0.04);
        }

        .nav-inner {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            height: 64px;
        }

        .logo {
            font-size: 17px;
            font-weight: 700;
            color: var(--dark);
            letter-spacing: -0.3px;
            text-decoration: none;
        }

        .logo span {
            color: var(--accent);
        }

        nav {
            display: flex;
            align-items: center;
            gap: 2px;
        }

        .nav-link {
            font-size: 13px;
            font-weight: 500;
            color: var(--muted);
            padding: 7px 14px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.15s;
        }

        .nav-link:hover {
            color: var(--text);
            background: var(--surface);
        }

        .nav-link.active {
            color: var(--accent);
            background: var(--accent-light);
        }

        .avatar-sm {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent), #9B6BFF);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .page-hero {
            background: linear-gradient(135deg, var(--accent) 0%, #9B6BFF 100%);
            padding: 48px 32px 64px;
        }

        .page-hero-inner {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .label-tag {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 8px;
        }

        .page-hero h1 {
            font-size: 30px;
            font-weight: 700;
            color: #fff;
            letter-spacing: -0.5px;
        }

        .page-hero p {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
            margin-top: 6px;
        }

        .count-badge {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 20px;
            backdrop-filter: blur(4px);
        }

        .content-wrap {
            max-width: 1100px;
            margin: -32px auto 60px;
            padding: 0 32px;
        }

        .grid-cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }

        .event-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 20px;
            transition: all 0.2s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            display: flex;
            flex-direction: column;
        }

        .event-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(108, 71, 255, 0.12);
            border-color: #C9B8FF;
        }

        .event-type {
            font-size: 11px;
            font-weight: 600;
            color: var(--muted);
            background: var(--surface);
            padding: 3px 10px;
            border-radius: 20px;
            border: 1px solid var(--border);
        }

        .badge-free {
            font-size: 11px;
            font-weight: 600;
            color: #15803D;
            background: #DCFCE7;
            padding: 3px 10px;
            border-radius: 20px;
            border: 1px solid #BBF7D0;
        }

        .badge-paid {
            font-size: 11px;
            font-weight: 600;
            color: #92400E;
            background: #FEF3C7;
            padding: 3px 10px;
            border-radius: 20px;
            border: 1px solid #FDE68A;
        }

        .badge-prize {
            font-size: 11px;
            font-weight: 600;
            color: #1E40AF;
            background: #DBEAFE;
            padding: 3px 10px;
            border-radius: 20px;
            border: 1px solid #BFDBFE;
        }

        .event-card h3 {
            font-size: 14px;
            font-weight: 700;
            color: var(--text);
            margin: 12px 0 6px;
            line-height: 1.3;
        }

        .event-card p {
            font-size: 12px;
            color: var(--muted);
            line-height: 1.6;
            flex: 1;
        }

        .event-meta {
            border-top: 1px solid #F3F4F6;
            margin-top: 14px;
            padding-top: 12px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .meta-row {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .meta-row span {
            font-size: 11px;
            color: #9CA3AF;
        }

        .btn-daftar {
            margin-top: 14px;
            width: 100%;
            background: var(--accent);
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            padding: 9px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            transition: all 0.15s;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .btn-daftar:hover {
            background: #5a38e0;
            transform: translateY(-1px);
        }

        .fade {
            animation: up 0.35s ease both;
        }

        .fade2 {
            animation: up 0.35s ease 0.1s both;
        }

        @keyframes up {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="nav-inner">
            <a href="/" class="logo">AmikomEvent<span>Hub</span></a>
            <nav>
                <a href="/" class="nav-link">Home</a>
                <a href="/profil" class="nav-link">Profil</a>
                <a href="/katalog" class="nav-link active">Katalog</a>
                <a href="/bantuan" class="nav-link">Bantuan</a>
                <a href="/kontak" class="nav-link">Kontak</a>
            </nav>
            <div style="display:flex;align-items:center;gap:10px;">
                <div class="avatar-sm">MH</div>
                <div>
                    <p style="font-size:12px;font-weight:600;color:var(--text);line-height:1.2;">Yoga Adiyatma</p>
                    <p style="font-size:10px;color:var(--muted);">24.12.3320</p>
                </div>
            </div>
        </div>
    </header>

    <div class="page-hero">
        <div class="page-hero-inner fade">
            <div>
                <p class="label-tag">Event</p>
                <h1>Katalog Event</h1>
                <p>Temukan dan daftarkan dirimu ke event terbaik AMIKOM.</p>
            </div>
            <span class="count-badge">4 event aktif</span>
        </div>
    </div>

    <div class="content-wrap fade2">
        <div class="grid-cards">

            <div class="event-card">
                <div style="display:flex;align-items:center;justify-content:space-between;">
                    <span class="event-type">Seminar</span>
                    <span class="badge-free">Gratis</span>
                </div>
                <h3>Seminar Teknologi AI</h3>
                <p>Perkembangan kecerdasan buatan di era digital bisnis dan dampaknya terhadap industri masa kini.</p>
                <div class="event-meta">
                    <div class="meta-row">
                        <svg width="11" height="11" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>20 Juli 2026</span>
                    </div>
                    <div class="meta-row">
                        <svg width="11" height="11" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Auditorium AMIKOM</span>
                    </div>
                </div>
                <button class="btn-daftar">Daftar Sekarang</button>
            </div>

            <div class="event-card">
                <div style="display:flex;align-items:center;justify-content:space-between;">
                    <span class="event-type">Workshop</span>
                    <span class="badge-paid">Rp 50.000</span>
                </div>
                <h3>Workshop Laravel</h3>
                <p>Membangun aplikasi web modern dengan Laravel dan Tailwind CSS dalam sesi intensif bersama praktisi.</p>
                <div class="event-meta">
                    <div class="meta-row">
                        <svg width="11" height="11" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>5 Agustus 2026</span>
                    </div>
                    <div class="meta-row">
                        <svg width="11" height="11" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Lab Komputer Lt. 3</span>
                    </div>
                </div>
                <button class="btn-daftar">Daftar Sekarang</button>
            </div>

            <div class="event-card">
                <div style="display:flex;align-items:center;justify-content:space-between;">
                    <span class="event-type">Kompetisi</span>
                    <span class="badge-prize">Hadiah 5 Juta</span>
                </div>
                <h3>Kompetisi UI/UX Design</h3>
                <p>Lomba desain antarmuka bertema smart city, terbuka untuk mahasiswa aktif seluruh perguruan tinggi.</p>
                <div class="event-meta">
                    <div class="meta-row">
                        <svg width="11" height="11" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>12 September 2026</span>
                    </div>
                    <div class="meta-row">
                        <svg width="11" height="11" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Online</span>
                    </div>
                </div>
                <button class="btn-daftar">Daftar Sekarang</button>
            </div>

            <div class="event-card">
                <div style="display:flex;align-items:center;justify-content:space-between;">
                    <span class="event-type">Bootcamp</span>
                    <span class="badge-paid">Rp 150.000</span>
                </div>
                <h3>Bootcamp Digital Marketing</h3>
                <p>Pelajari SEO, strategi media sosial, dan iklan digital selama 3 hari bersama mentor berpengalaman.</p>
                <div class="event-meta">
                    <div class="meta-row">
                        <svg width="11" height="11" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>1 Oktober 2026</span>
                    </div>
                    <div class="meta-row">
                        <svg width="11" height="11" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Gedung B AMIKOM</span>
                    </div>
                </div>
                <button class="btn-daftar">Daftar Sekarang</button>
            </div>

        </div>
    </div>

</body>

</html>