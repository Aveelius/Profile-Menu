<?php
$anggota = [
    [
        "nama"  => "Iqbal Fadailto",
        "foto"  => "iqbal.jpeg",
        "prodi" => "Teknologi Informasi",
        "deskripsi" => "Iqbal tertarik masuk Prodi Teknologi Informasi karena sejak kecil ia selalu penasaran dengan cara kerja perangkat digital di sekitarnya. Ia percaya bahwa teknologi adalah kunci untuk memecahkan berbagai permasalahan nyata di masyarakat. Dengan masuk TI, Iqbal ingin membangun sistem dan aplikasi yang tidak hanya canggih secara teknis, tetapi juga berdampak positif bagi kehidupan banyak orang di Indonesia.",
    ],
    [
        "nama"  => "Nizar Maulana",
        "foto"  => "nizar.jpeg",
        "prodi" => "Teknologi Informasi",
        "deskripsi" => "Bagi Nizar, Teknologi Informasi bukan sekadar bidang studi — ini adalah panggilan. Ia sangat tertarik pada dunia jaringan, keamanan siber, dan infrastruktur digital. Motivasinya masuk TI adalah untuk mempelajari bagaimana data dan sistem dapat dijaga dengan aman dan efisien. Nizar bercita-cita menjadi seorang profesional di bidang cybersecurity yang mampu melindungi aset digital bangsa.",
    ],
    [
        "nama"  => "Nizar Rafi",
        "foto"  => "rafi.jpg",
        "prodi" => "Teknologi Informasi",
        "deskripsi" => "Rafi memilih Prodi Teknologi Informasi karena passion-nya yang besar terhadap pengembangan perangkat lunak dan inovasi digital. Ia terinspirasi oleh startup-startup teknologi yang berhasil mengubah cara hidup masyarakat modern. Melalui TI, Rafi ingin menguasai pemrograman, kecerdasan buatan, dan pengembangan aplikasi agar suatu hari bisa mendirikan startup teknologi miliknya sendiri.",
    ],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Anggota — Teknologi Informasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #060c1a;
            --surface: #0d1629;
            --border: #1e2d4a;
            --text: #e2eaf7;
            --muted: #6b82a8;
            --accent-1: #38bdf8;
            --accent-2: #a78bfa;
            --accent-3: #34d399;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Background grid */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(56,189,248,.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(56,189,248,.04) 1px, transparent 1px);
            background-size: 48px 48px;
            pointer-events: none;
            z-index: 0;
        }

        /* Glow blobs */
        body::after {
            content: '';
            position: fixed;
            top: -200px; left: -200px;
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(56,189,248,.12) 0%, transparent 70%);
            pointer-events: none;
            z-index: 0;
        }

        .blob-2 {
            position: fixed;
            bottom: -200px; right: -100px;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(167,139,250,.1) 0%, transparent 70%);
            pointer-events: none;
            z-index: 0;
            border-radius: 50%;
        }

        .wrapper {
            position: relative;
            z-index: 1;
            max-width: 1100px;
            margin: 0 auto;
            padding: 60px 24px;
        }

        /* Header */
        header {
            text-align: center;
            margin-bottom: 72px;
            animation: fadeDown .7s ease both;
        }

        .badge {
            display: inline-block;
            font-family: 'Syne', sans-serif;
            font-size: .7rem;
            font-weight: 600;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--accent-1);
            border: 1px solid rgba(56,189,248,.3);
            padding: 6px 18px;
            border-radius: 100px;
            margin-bottom: 24px;
            background: rgba(56,189,248,.06);
        }

        header h1 {
            font-family: 'Syne', sans-serif;
            font-size: clamp(2rem, 5vw, 3.4rem);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -.02em;
            background: linear-gradient(135deg, #e2eaf7 30%, #38bdf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 16px;
        }

        header p {
            color: var(--muted);
            font-size: 1rem;
            font-weight: 300;
            max-width: 440px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 28px;
        }

        /* Card */
        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 36px 28px 32px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
            animation: fadeUp .6s ease both;
        }

        .card:nth-child(1) { animation-delay: .1s; --accent: var(--accent-1); }
        .card:nth-child(2) { animation-delay: .22s; --accent: var(--accent-2); }
        .card:nth-child(3) { animation-delay: .34s; --accent: var(--accent-3); }

        .card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: var(--accent);
            border-radius: 20px 20px 0 0;
            opacity: .8;
        }

        .card::after {
            content: '';
            position: absolute;
            top: -80px; left: 50%;
            transform: translateX(-50%);
            width: 200px; height: 200px;
            background: radial-gradient(circle, color-mix(in srgb, var(--accent) 15%, transparent) 0%, transparent 70%);
            pointer-events: none;
        }

        .card:hover {
            transform: translateY(-6px);
            border-color: color-mix(in srgb, var(--accent) 40%, transparent);
            box-shadow: 0 24px 60px rgba(0,0,0,.4), 0 0 0 1px color-mix(in srgb, var(--accent) 20%, transparent);
        }

        /* Number badge */
        .number {
            position: absolute;
            top: 20px; right: 22px;
            font-family: 'Syne', sans-serif;
            font-size: .75rem;
            font-weight: 700;
            color: var(--accent);
            opacity: .6;
            letter-spacing: .1em;
        }

        /* Avatar */
        .avatar-wrap {
            position: relative;
            margin-bottom: 22px;
        }

        .avatar-ring {
            width: 100px; height: 100px;
            border-radius: 50%;
            padding: 3px;
            background: linear-gradient(135deg, var(--accent), transparent);
            display: flex; align-items: center; justify-content: center;
        }

        .avatar-ring img {
            width: 94px; height: 94px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--surface);
            display: block;
        }

        /* Name */
        .card-name {
            font-family: 'Syne', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            letter-spacing: -.01em;
            color: #f0f6ff;
            margin-bottom: 8px;
        }

        /* Prodi tag */
        .prodi-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: .72rem;
            font-weight: 500;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--accent);
            background: color-mix(in srgb, var(--accent) 12%, transparent);
            border: 1px solid color-mix(in srgb, var(--accent) 25%, transparent);
            padding: 5px 14px;
            border-radius: 100px;
            margin-bottom: 20px;
        }

        .prodi-tag::before {
            content: '';
            width: 6px; height: 6px;
            border-radius: 50%;
            background: var(--accent);
            display: inline-block;
        }

        /* Divider */
        .divider {
            width: 40px; height: 1px;
            background: var(--border);
            margin: 0 auto 20px;
        }

        /* Description */
        .card-desc {
            font-size: .88rem;
            line-height: 1.75;
            color: var(--muted);
            font-weight: 300;
            text-align: left;
        }

        /* Footer */
        footer {
            text-align: center;
            margin-top: 72px;
            padding-top: 32px;
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: .8rem;
            animation: fadeUp .6s .5s ease both;
        }

        footer span {
            color: var(--accent-1);
            font-weight: 500;
        }

        /* Animations */
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 640px) {
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
<div class="blob-2"></div>

<div class="wrapper">
    <header>
        <div class="badge">Profil Anggota Kelompok</div>
        <h1>Teknologi Informasi</h1>
        <p>Mengenal lebih dekat anggota kelompok kami dan alasan kami memilih Prodi Teknologi Informasi.</p>
    </header>

    <div class="grid">
        <?php foreach ($anggota as $index => $a): ?>
        <div class="card">
            <span class="number"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></span>

            <div class="avatar-wrap">
                <div class="avatar-ring">
                    <img src="<?= htmlspecialchars($a['foto']) ?>"
                         alt="Foto <?= htmlspecialchars($a['nama']) ?>">
                </div>
            </div>

            <h2 class="card-name"><?= htmlspecialchars($a['nama']) ?></h2>

            <span class="prodi-tag"><?= htmlspecialchars($a['prodi']) ?></span>

            <div class="divider"></div>

            <p class="card-desc"><?= htmlspecialchars($a['deskripsi']) ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <p>Dibuat dengan <span>PHP</span> &mdash; Prodi Teknologi Informasi &copy; <?= date('Y') ?></p>
    </footer>
</div>

</body>
</html>