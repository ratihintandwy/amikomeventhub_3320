<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil — AmikomEventHub</title>
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
            max-width: 1100px;
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

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 24px;
            border-bottom: 1px solid #F3F4F6;
        }

        .row:last-child {
            border-bottom: none;
        }

        .row .key {
            font-size: 13px;
            color: var(--muted);
        }

        .row .val {
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
        }

        .badge-green {
            font-size: 11px;
            font-weight: 600;
            color: #15803D;
            background: #DCFCE7;
            padding: 4px 12px;
            border-radius: 20px;
            border: 1px solid #BBF7D0;
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
                <a href="/profil" class="nav-link active">Profil</a>
                <a href="/katalog" class="nav-link">Katalog</a>
                <a href="/bantuan" class="nav-link">Bantuan</a>
                <a href="/" class="nav-link">Kontak</a>
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
            <p class="label-tag">Akun</p>
            <h1>Profil Mahasiswa</h1>
            <p>Informasi akademik dan status keanggotaan kamu.</p>
        </div>
    </div>

    <div class="content-wrap fade2">
        <div style="display:grid;grid-template-columns:230px 1fr;gap:16px;align-items:start;">

            <div class="card" style="padding:28px 20px;text-align:center;">
                <div style="width:68px;height:68px;border-radius:18px;background:linear-gradient(135deg,var(--accent),#9B6BFF);display:flex;align-items:center;justify-content:center;margin:0 auto 14px;box-shadow:0 6px 20px rgba(108,71,255,0.3);">
                    <span style="font-size:22px;font-weight:700;color:#fff;">MH</span>
                </div>
                <p style="font-size:15px;font-weight:700;color:var(--text);">Yoga Adiyatma</p>
                <p style="font-size:11px;color:var(--muted);margin-top:4px;font-family:monospace;letter-spacing:0.05em;">24.12.3320</p>
                <div style="margin-top:16px;padding-top:16px;border-top:1px solid var(--border);">
                    <span class="badge-green">● Aktif</span>
                </div>
                <div style="margin-top:14px;padding:12px;background:var(--accent-light);border-radius:12px;border:1px solid #D4C6FF;">
                    <p style="font-size:12px;color:var(--accent);font-weight:700;">Digital Bisnis</p>
                    <p style="font-size:10px;color:var(--muted);margin-top:2px;">SI148 · S1 Sistem Informasi</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <p>Informasi Akademik</p>
                </div>
                <div class="row"><span class="key">Nama Lengkap</span><span class="val">Yoga Adiyatma</span></div>
                <div class="row"><span class="key">NIM</span><span class="val" style="font-family:monospace;letter-spacing:0.05em;">24.12.3320</span></div>
                <div class="row"><span class="key">Program Studi</span><span class="val">S1 Sistem Informasi</span></div>
                <div class="row"><span class="key">Mata Kuliah</span><span class="val">Digital Bisnis <span style="color:var(--muted);font-weight:500;font-size:12px;">SI04</span></span></div>
                <div class="row"><span class="key">Institusi</span><span class="val">Universitas AMIKOM Yogyakarta</span></div>
                <div class="row"><span class="key">Tahun Akademik</span><span class="val">2025 / 2026</span></div>
            </div>

        </div>
    </div>

</body>

</html>