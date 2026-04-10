<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan — AmikomEventHub</title>
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

        .content-wrap {
            max-width: 760px;
            margin: -32px auto 60px;
            padding: 0 32px;
        }

        details {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
            transition: box-shadow 0.2s;
        }

        details[open] {
            box-shadow: 0 4px 16px rgba(108, 71, 255, 0.1);
            border-color: #C9B8FF;
        }

        details summary {
            cursor: pointer;
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 22px;
            user-select: none;
        }

        details summary::-webkit-details-marker {
            display: none;
        }

        details summary span {
            font-size: 14px;
            font-weight: 600;
            color: var(--text);
        }

        .chevron {
            transition: transform 0.25s ease;
            flex-shrink: 0;
        }

        details[open] .chevron {
            transform: rotate(180deg);
        }

        details[open] summary span {
            color: var(--accent);
        }

        .answer {
            padding: 0 22px 18px;
            border-top: 1px solid #F3F4F6;
        }

        .answer p {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.8;
            padding-top: 14px;
        }

        .cta-box {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 22px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
        }

        .btn-hubungi {
            font-size: 13px;
            font-weight: 600;
            color: #fff;
            background: var(--accent);
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            white-space: nowrap;
            transition: all 0.15s;
        }

        .btn-hubungi:hover {
            background: #5a38e0;
            transform: translateY(-1px);
        }

        .faq-num {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .q-num {
            width: 24px;
            height: 24px;
            border-radius: 8px;
            background: var(--accent-light);
            color: var(--accent);
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
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
                <a href="/katalog" class="nav-link">Katalog</a>
                <a href="/bantuan" class="nav-link active">Bantuan</a>
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
            <p class="label-tag">FAQ</p>
            <h1>Pusat Bantuan</h1>
            <p>Pertanyaan yang sering diajukan seputar AmikomEventHub.</p>
        </div>
    </div>

    <div class="content-wrap fade2">
        <div style="display:flex;flex-direction:column;gap:10px;">

            <details open>
                <summary>
                    <div class="faq-num">
                        <span class="q-num">1</span>
                        <span>Apa itu AmikomEventHub?</span>
                    </div>
                    <svg class="chevron" width="16" height="16" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>
                <div class="answer">
                    <p>Platform digital untuk mengelola, mendaftarkan, dan memantau event di lingkungan Universitas AMIKOM Yogyakarta — mulai dari seminar, workshop, hingga kompetisi.</p>
                </div>
            </details>

            <details>
                <summary>
                    <div class="faq-num">
                        <span class="q-num">2</span>
                        <span>Bagaimana cara mendaftar event?</span>
                    </div>
                    <svg class="chevron" width="16" height="16" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>
                <div class="answer">
                    <p>Buka halaman Katalog, pilih event yang diminati, klik "Daftar Sekarang", dan isi form dengan data diri. Konfirmasi akan dikirim ke email kamu.</p>
                </div>
            </details>

            <details>
                <summary>
                    <div class="faq-num">
                        <span class="q-num">3</span>
                        <span>Apakah semua event berbayar?</span>
                    </div>
                    <svg class="chevron" width="16" height="16" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>
                <div class="answer">
                    <p>Tidak. Banyak event tersedia gratis untuk mahasiswa aktif AMIKOM. Informasi harga tercantum jelas pada setiap event di halaman Katalog.</p>
                </div>
            </details>

            <details>
                <summary>
                    <div class="faq-num">
                        <span class="q-num">4</span>
                        <span>Bagaimana cara mendapatkan sertifikat?</span>
                    </div>
                    <svg class="chevron" width="16" height="16" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>
                <div class="answer">
                    <p>Sertifikat digital dikirim ke email maksimal 7 hari setelah event selesai. Pastikan kamu melakukan absensi saat hari pelaksanaan.</p>
                </div>
            </details>

            <details>
                <summary>
                    <div class="faq-num">
                        <span class="q-num">5</span>
                        <span>Bisakah membatalkan pendaftaran?</span>
                    </div>
                    <svg class="chevron" width="16" height="16" fill="none" stroke="#9CA3AF" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>
                <div class="answer">
                    <p>Pembatalan dapat dilakukan maksimal H-3 sebelum event dimulai melalui halaman Kontak dengan menyertakan nama, NIM, dan nama event.</p>
                </div>
            </details>

        </div>

        <div style="margin-top:20px;">
            <div class="cta-box">
                <div>
                    <p style="font-size:14px;font-weight:700;color:var(--text);">Masih ada pertanyaan?</p>
                    <p style="font-size:12px;color:var(--muted);margin-top:3px;">Senin – Jumat, 08.00 – 16.00 WIB</p>
                </div>
                <a href="/kontak" class="btn-hubungi">Hubungi Kami →</a>
            </div>
        </div>
    </div>

</body>

</html>