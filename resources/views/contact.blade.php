<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak — AmikomEventHub</title>
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
            max-width: 880px;
            margin: -32px auto 60px;
            padding: 0 32px;
        }

        .card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .card-header {
            padding: 16px 24px;
            border-bottom: 1px solid #F3F4F6;
        }

        .card-header p {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--muted);
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 16px 24px;
            border-bottom: 1px solid #F3F4F6;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .icon-box {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: var(--accent-light);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .info-label {
            font-size: 11px;
            color: var(--muted);
            margin-bottom: 3px;
        }

        .info-val {
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
        }

        input,
        textarea {
            background: var(--surface);
            border: 1px solid var(--border);
            color: var(--text);
            border-radius: 10px;
            padding: 10px 14px;
            font-size: 13px;
            width: 100%;
            outline: none;
            transition: border-color 0.15s, box-shadow 0.15s;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        input::placeholder,
        textarea::placeholder {
            color: #D1D5DB;
        }

        input:focus,
        textarea:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(108, 71, 255, 0.1);
        }

        label {
            font-size: 12px;
            font-weight: 600;
            color: var(--text);
            display: block;
            margin-bottom: 6px;
        }

        .btn-send {
            width: 100%;
            background: linear-gradient(135deg, var(--accent), #9B6BFF);
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            padding: 12px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            font-family: 'Plus Jakarta Sans', sans-serif;
            box-shadow: 0 4px 14px rgba(108, 71, 255, 0.35);
        }

        .btn-send:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(108, 71, 255, 0.4);
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
                <a href="/bantuan" class="nav-link">Bantuan</a>
                <a href="/kontak" class="nav-link active">Kontak</a>
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
            <p class="label-tag">Kontak</p>
            <h1>Hubungi Kami</h1>
            <p>Ada pertanyaan? Tim kami siap membantu kamu.</p>
        </div>
    </div>

    <div class="content-wrap fade2">
        <div style="display:grid;grid-template-columns:1fr 1.1fr;gap:16px;align-items:start;">

            <!-- Info Card -->
            <div class="card">
                <div class="card-header">
                    <p>Informasi Kontak</p>
                </div>

                <div class="info-row">
                    <div class="icon-box">
                        <svg width="16" height="16" fill="none" stroke="var(--accent)" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="info-label">Email</p>
                        <p class="info-val">admin@amikomeventhub.com</p>
                    </div>
                </div>

                <div class="info-row">
                    <div class="icon-box">
                        <svg width="16" height="16" fill="none" stroke="var(--accent)" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div>
                        <p class="info-label">Telepon</p>
                        <p class="info-val">+62 812-3456-7890</p>
                    </div>
                </div>

                <div class="info-row">
                    <div class="icon-box">
                        <svg width="16" height="16" fill="none" stroke="var(--accent)" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="info-label">Jam Operasional</p>
                        <p class="info-val">Senin – Jumat, 08.00 – 16.00</p>
                    </div>
                </div>

                <div class="info-row">
                    <div class="icon-box">
                        <svg width="16" height="16" fill="none" stroke="var(--accent)" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="info-label">Alamat</p>
                        <p class="info-val">Ring Road Utara, Sleman, Yogyakarta</p>
                    </div>
                </div>
            </div>

            <!-- Form Card -->
            <div class="card" style="padding:24px;">
                <div style="margin-bottom:20px;">
                    <p style="font-size:11px;font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:var(--muted);">Kirim Pesan</p>
                </div>
                <div style="display:flex;flex-direction:column;gap:14px;">
                    <div>
                        <label>Nama</label>
                        <input type="text" placeholder="Nama lengkap kamu">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" placeholder="email@kamu.com">
                    </div>
                    <div>
                        <label>Pesan</label>
                        <textarea rows="5" placeholder="Tulis pesanmu di sini..."></textarea>
                    </div>
                    <button class="btn-send">Kirim Pesan</button>
                </div>
            </div>

        </div>
    </div>

</body>

</html>