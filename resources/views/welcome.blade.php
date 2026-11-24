<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#201a17">
    <meta name="description" content="A quiet, bilingual book of sincere apologies and personal reflections.">
    <title>3,000 Pages of Apology — A Collection of Sincere Apologies and Personal Reflections</title>
    <style>
        :root {
            color-scheme: dark;
            --ink: #271f1a;
            --muted-ink: #796c5d;
            --paper: #f3ead7;
            --paper-shadow: #dfd1b8;
            --gold: #c9a76b;
            --gold-light: #ead4a6;
            --room: #201a17;
            --room-soft: #2a231e;
            --rule: rgba(235, 218, 187, .14);
            font-family: Georgia, "Times New Roman", serif;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            color: #eee5d8;
            background:
                radial-gradient(ellipse at 50% 42%, rgba(108, 79, 49, .19), transparent 49%),
                linear-gradient(145deg, #211b17 0%, #171310 72%, #211a15 100%);
        }

        button, input { font: inherit; }
        button { color: inherit; }
        button:focus-visible, input:focus-visible {
            outline: 2px solid var(--gold-light);
            outline-offset: 4px;
        }

        .site-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 76px;
            padding: 0 clamp(20px, 5vw, 72px);
            border-bottom: 1px solid var(--rule);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #f1e4ce;
            text-decoration: none;
        }

        .brand-mark {
            display: grid;
            width: 34px;
            height: 34px;
            place-items: center;
            border: 1px solid rgba(201, 167, 107, .72);
            border-radius: 50%;
            color: var(--gold-light);
            font-size: 15px;
        }

        .brand-name {
            font-size: 11px;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .edition-label, .eyebrow {
            color: #b7a58d;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: .2em;
            text-transform: uppercase;
        }

        .edition-label { text-align: right; line-height: 1.8; }
        .edition-label span { display: block; color: #786c5e; letter-spacing: .12em; }

        .layout {
            display: grid;
            grid-template-columns: 220px minmax(0, 1fr);
            gap: clamp(24px, 4vw, 58px);
            width: min(1380px, 100%);
            margin: 0 auto;
            padding: 48px clamp(20px, 5vw, 72px) 36px;
        }

        .chapter-rail { padding-top: 12px; }
        .rail-heading { margin: 0 0 20px; color: #a89882; }
        .chapter-list { display: grid; gap: 4px; }

        .chapter-link {
            display: grid;
            grid-template-columns: 27px minmax(0, 1fr);
            gap: 10px;
            width: 100%;
            padding: 11px 9px;
            border: 0;
            border-left: 1px solid transparent;
            background: transparent;
            color: #918475;
            text-align: left;
            cursor: pointer;
            transition: color .2s ease, background .2s ease, border-color .2s ease;
        }

        .chapter-link:hover, .chapter-link[aria-current="true"] {
            border-left-color: var(--gold);
            background: rgba(201, 167, 107, .07);
            color: #e8dcc8;
        }

        .chapter-number {
            padding-top: 2px;
            color: #766b5f;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: .08em;
        }

        .chapter-name { font-size: 12px; line-height: 1.45; }
        .chapter-range {
            display: block;
            margin-top: 3px;
            color: #786c5e;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: .08em;
        }

        .reading-room { min-width: 0; }
        .room-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            margin: 0 auto 28px;
            max-width: 920px;
        }

        .room-heading h1 {
            margin: 7px 0 0;
            color: #f0e5d5;
            font-size: clamp(24px, 3vw, 35px);
            font-weight: 400;
            letter-spacing: -.025em;
        }

        .room-heading p {
            margin: 7px 0 0;
            color: #a99a86;
            font-size: 13px;
            font-style: italic;
        }

        .reading-status {
            flex: 0 0 auto;
            color: #bca987;
            font-family: Arial, sans-serif;
            font-size: 10px;
            letter-spacing: .12em;
            text-align: right;
            text-transform: uppercase;
        }

        .book-scene {
            display: grid;
            place-items: center;
            perspective: 1800px;
        }

        .book {
            position: relative;
            width: min(100%, 820px, 72vh);
            height: auto;
            min-height: 0;
            aspect-ratio: 1;
            padding: 17px 18px 17px 25px;
            border-radius: 5px 13px 13px 5px;
            background: linear-gradient(90deg, #271d17 0 2%, #765536 2.2% 2.8%, #211813 3% 100%);
            box-shadow: 0 30px 70px rgba(0, 0, 0, .48), 0 8px 18px rgba(0, 0, 0, .3);
            transform-style: preserve-3d;
        }

        .book::before {
            position: absolute;
            z-index: 1;
            top: 20px;
            right: 7px;
            bottom: 20px;
            width: 14px;
            border-radius: 0 5px 5px 0;
            background: repeating-linear-gradient(90deg, #e8dec9 0, #e8dec9 1px, #cfc0a6 2px, #eee5d3 3px);
            content: "";
            box-shadow: 3px 1px 5px rgba(0, 0, 0, .28);
        }

        .book-interior {
            position: relative;
            height: 100%;
            min-height: 0;
            margin-right: 7px;
            padding: clamp(24px, 4.3vw, 52px) clamp(23px, 5.2vw, 66px) 27px;
            overflow-x: hidden;
            overflow-y: auto;
            overscroll-behavior: contain;
            scrollbar-width: thin;
            color: var(--ink);
            background:
                radial-gradient(ellipse at 50% 10%, rgba(255, 255, 255, .54), transparent 58%),
                linear-gradient(90deg, #e4d7bf, var(--paper) 5%, #f6efdf 50%, #eee4d0);
            box-shadow: inset 0 0 25px rgba(83, 61, 35, .1);
        }

        .page-content { position: relative; z-index: 0; }
        .page-content.page-turn { animation: pageTurn .42s ease both; }
        @keyframes pageTurn {
            0% { opacity: .25; transform: translateX(14px) rotateY(-3deg); }
            100% { opacity: 1; transform: translateX(0) rotateY(0); }
        }

        .paper-meta {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            padding-bottom: 16px;
            border-bottom: 1px solid rgba(93, 73, 50, .2);
            color: #8d7a60;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .page-heading {
            margin: 25px 0 5px;
            color: #34281d;
            font-size: clamp(24px, 3vw, 34px);
            font-weight: 400;
            letter-spacing: -.02em;
        }

        .page-subtitle {
            margin: 0 0 20px;
            color: #89775e;
            font-size: 14px;
            font-style: italic;
        }

        .reflection-copy {
            display: grid;
            gap: 13px;
            max-width: 740px;
        }

        .reflection-copy p {
            margin: 0;
            color: #3b3025;
            font-size: clamp(14px, 1.38vw, 16px);
            line-height: 1.68;
        }

        .reflection-copy .translation {
            margin-top: -7px;
            color: #776856;
            font-size: clamp(12px, 1.18vw, 13px);
            line-height: 1.65;
        }

        .paper-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 23px;
            padding-top: 12px;
            border-top: 1px solid rgba(93, 73, 50, .2);
            color: #8d7a60;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .book-cover {
            position: absolute;
            z-index: 3;
            inset: 0 0 0 0;
            transform: rotateY(0deg);
            transform-origin: left center;
            transform-style: preserve-3d;
            transition: transform 1.1s cubic-bezier(.2, .75, .2, 1);
        }

        .is-open .book-cover { transform: rotateY(-162deg); }
        .cover-face {
            position: absolute;
            inset: 0;
            display: grid;
            place-items: center;
            overflow: hidden;
            border: 1px solid rgba(222, 188, 125, .32);
            border-radius: 4px 11px 11px 4px;
            backface-visibility: hidden;
        }

        .cover-front {
            background:
                linear-gradient(115deg, rgba(255,255,255,.025), transparent 35%, rgba(0,0,0,.2)),
                repeating-linear-gradient(0deg, #35251a 0, #35251a 2px, #39281c 3px, #342419 5px);
            box-shadow: inset 7px 0 13px rgba(0,0,0,.42), inset 0 0 50px rgba(0,0,0,.24);
        }

        .cover-front::before {
            position: absolute;
            inset: 22px;
            border: 1px solid rgba(201, 167, 107, .46);
            content: "";
            pointer-events: none;
        }

        .cover-inside {
            transform: rotateY(180deg);
            background: linear-gradient(90deg, #bba985, #eee4d0 8%, #f3ead7 75%, #d7c7ac);
            box-shadow: inset 0 0 28px rgba(75, 50, 25, .16);
        }

        .cover-content {
            display: grid;
            justify-items: center;
            max-width: 550px;
            padding: 52px 25px;
            text-align: center;
        }

        .cover-ornament {
            display: grid;
            width: 43px;
            height: 43px;
            margin-bottom: 31px;
            place-items: center;
            border: 1px solid rgba(201, 167, 107, .68);
            border-radius: 50%;
            color: var(--gold-light);
            font-size: 18px;
        }

        .cover-kicker {
            margin: 0 0 16px;
            color: #c4a774;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: .28em;
            text-transform: uppercase;
        }

        .cover-title {
            margin: 0;
            color: #ead7ad;
            font-size: clamp(34px, 6vw, 62px);
            font-weight: 400;
            letter-spacing: .035em;
            line-height: 1.08;
            text-shadow: 0 2px 9px rgba(0,0,0,.55);
        }

        .cover-subtitle {
            margin: 17px 0 0;
            color: #cbb994;
            font-size: clamp(14px, 2vw, 18px);
            font-style: italic;
            line-height: 1.5;
        }

        .cover-indonesian {
            margin: 7px 0 0;
            color: #958268;
            font-size: 12px;
            font-style: italic;
        }

        .open-book {
            margin-top: 44px;
            padding: 13px 24px;
            border: 1px solid rgba(201, 167, 107, .63);
            border-radius: 2px;
            background: rgba(15, 11, 8, .26);
            color: #ead7ad;
            font-family: Arial, sans-serif;
            font-size: 10px;
            letter-spacing: .17em;
            text-transform: uppercase;
            cursor: pointer;
            transition: background .2s ease, color .2s ease;
        }

        .open-book:hover { background: var(--gold); color: #211811; }
        .open-book span { display: block; margin-top: 5px; font-family: Georgia, serif; font-size: 11px; font-style: italic; letter-spacing: 0; text-transform: none; }

        .book-controls {
            display: grid;
            grid-template-columns: 1fr minmax(180px, 1.7fr) 1fr;
            align-items: center;
            gap: 18px;
            max-width: 920px;
            margin: 24px auto 0;
        }

        .control-button {
            padding: 11px 14px;
            border: 1px solid rgba(205, 184, 151, .25);
            border-radius: 2px;
            background: rgba(255, 255, 255, .025);
            color: #e2d4bf;
            font-family: Arial, sans-serif;
            font-size: 10px;
            letter-spacing: .08em;
            cursor: pointer;
            transition: border-color .2s ease, background .2s ease, opacity .2s ease;
        }

        .control-button:hover:not(:disabled) { border-color: var(--gold); background: rgba(201,167,107,.1); }
        .control-button:disabled { opacity: .34; cursor: not-allowed; }
        .control-button.next { justify-self: end; }

        .progress-wrap { display: grid; grid-template-columns: auto 1fr auto; align-items: center; gap: 12px; }
        .progress-label, .progress-count {
            color: #a99a86;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: .08em;
            white-space: nowrap;
        }

        .progress-track {
            height: 2px;
            overflow: hidden;
            background: rgba(225, 209, 182, .19);
        }

        .progress-fill { width: .033%; height: 100%; background: var(--gold); transition: width .25s ease; }

        .jump-row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 9px;
            margin: 17px 0 0;
            color: #978a78;
            font-family: Arial, sans-serif;
            font-size: 10px;
        }

        .jump-input {
            width: 66px;
            padding: 6px 7px;
            border: 1px solid rgba(205, 184, 151, .24);
            border-radius: 2px;
            background: rgba(0,0,0,.18);
            color: #eee5d8;
            text-align: center;
        }

        .jump-button {
            padding: 6px 10px;
            border: 1px solid rgba(205, 184, 151, .24);
            border-radius: 2px;
            background: transparent;
            color: #c8b99f;
            font-size: 10px;
            cursor: pointer;
        }

        .quiet-note {
            max-width: 700px;
            margin: 32px auto 0;
            color: #766b5f;
            font-size: 12px;
            font-style: italic;
            line-height: 1.7;
            text-align: center;
        }

        .site-footer {
            padding: 20px;
            border-top: 1px solid var(--rule);
            color: #766b5f;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: .12em;
            text-align: center;
            text-transform: uppercase;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        @media (max-width: 900px) {
            .layout { grid-template-columns: minmax(0, 1fr); gap: 22px; padding-top: 30px; }
            .chapter-rail, .chapter-list, .reading-room, .book-scene { min-width: 0; }
            .chapter-rail { padding: 0; }
            .chapter-list {
                display: flex;
                max-width: 100%;
                gap: 7px;
                overflow-x: auto;
                padding: 2px 2px 10px;
                overscroll-behavior-x: contain;
                scrollbar-width: thin;
                touch-action: pan-x;
            }
            .rail-heading { margin-bottom: 9px; }
            .chapter-link { flex: 0 0 180px; border-left: 0; border-top: 1px solid transparent; }
            .chapter-link:hover, .chapter-link[aria-current="true"] { border-top-color: var(--gold); border-left-color: transparent; }
            .book { width: min(100%, 820px, 72vh); min-width: 0; }
        }

        @media (max-width: 600px) {
            .site-header { min-height: 65px; align-items: flex-start; flex-direction: column; gap: 8px; padding: 12px 16px; }
            .brand-name { font-size: 9px; letter-spacing: .16em; }
            .edition-label { max-width: 100%; font-size: 8px; text-align: left; }
            .layout { gap: 18px; padding: 22px 14px 28px; }
            .room-heading { display: grid; grid-template-columns: minmax(0, 1fr); gap: 9px; margin-bottom: 17px; }
            .room-heading > div { min-width: 0; }
            .room-heading .eyebrow { line-height: 1.6; }
            .room-heading h1 { font-size: 25px; }
            .room-heading p { max-width: 230px; font-size: 12px; }
            .reading-status { padding-top: 0; font-size: 8px; text-align: left; }
            .book-scene { perspective: 1100px; }
            .book { width: min(100%, 72vh); padding: 9px 10px 9px 15px; }
            .book-interior { margin-right: 5px; padding: 18px 14px 14px; }
            .book::before { top: 13px; right: 4px; bottom: 13px; width: 9px; }
            .paper-meta { flex-wrap: wrap; font-size: 8px; }
            .page-heading { margin-top: 20px; font-size: 25px; }
            .page-subtitle { margin-bottom: 17px; font-size: 13px; }
            .reflection-copy { gap: 11px; }
            .reflection-copy p { font-size: 14px; line-height: 1.58; }
            .reflection-copy .translation { font-size: 12px; line-height: 1.55; }
            .paper-footer { margin-top: 18px; }
            .book-controls { grid-template-columns: auto 1fr auto; gap: 7px; margin-top: 18px; }
            .control-button { padding: 10px 8px; font-size: 9px; letter-spacing: .02em; }
            .progress-wrap { grid-template-columns: 1fr; gap: 6px; justify-items: center; }
            .progress-label { display: none; }
            .progress-count { font-size: 8px; }
            .progress-track { width: 100%; }
            .jump-row { flex-wrap: wrap; }
            .quiet-note { margin-top: 23px; }
            .cover-content { padding: 12px 10px; }
            .cover-front::before { inset: 13px; }
            .cover-ornament { width: 26px; height: 26px; margin-bottom: 8px; font-size: 13px; }
            .cover-kicker { margin-bottom: 8px; font-size: 8px; letter-spacing: .18em; }
            .cover-title { font-size: clamp(27px, 8vw, 34px); line-height: 1.02; }
            .cover-subtitle { margin-top: 8px; font-size: 12px; line-height: 1.3; }
            .cover-indonesian { margin-top: 4px; font-size: 10px; }
            .open-book { margin-top: 10px; padding: 9px 13px; font-size: 9px; }
            .open-book span { margin-top: 3px; font-size: 10px; }
            .site-footer { line-height: 1.7; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; animation-duration: .01ms !important; transition-duration: .01ms !important; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <a class="brand" href="#" aria-label="Three Thousand Pages of Apology, home">
            <span class="brand-mark" aria-hidden="true">A</span>
            <span class="brand-name">A quiet reflection</span>
        </a>
        <div class="edition-label">A personal digital book<span>Three thousand pages · English / Indonesian</span></div>
    </header>

    <main class="layout">
        <aside class="chapter-rail" aria-label="Chapter navigation">
            <p class="eyebrow rail-heading">Contents · Daftar isi</p>
            <nav class="chapter-list" id="chapterList"></nav>
        </aside>

        <section class="reading-room" aria-label="Interactive apology book">
            <div class="room-heading">
                <div>
                    <p class="eyebrow">A collection of sincere apologies and personal reflections</p>
                    <h1>3,000 Pages of Apology</h1>
                    <p>Kumpulan permintaan maaf tulus dan refleksi pribadi</p>
                </div>
                <div class="reading-status" id="readingStatus" aria-live="polite">The book is closed</div>
            </div>

            <div class="book-scene">
                <div class="book" id="book">
                    <article class="book-interior" aria-label="Current book page">
                        <div class="page-content" id="pageContent" aria-live="polite"></div>
                    </article>
                    <div class="book-cover" id="bookCover">
                        <div class="cover-face cover-front">
                            <div class="cover-content">
                                <span class="cover-ornament" aria-hidden="true">✦</span>
                                <p class="cover-kicker">A personal written apology</p>
                                <h2 class="cover-title">3,000 Pages<br>of Apology</h2>
                                <p class="cover-subtitle">A Collection of Sincere Apologies<br>and Personal Reflections</p>
                                <p class="cover-indonesian">Kumpulan permintaan maaf dan refleksi pribadi</p>
                                <button class="open-book" id="openBook" type="button">Open the book<span>Buka buku</span></button>
                            </div>
                        </div>
                        <div class="cover-face cover-inside" aria-hidden="true"></div>
                    </div>
                </div>
            </div>

            <div class="book-controls" aria-label="Page controls">
                <button class="control-button" id="previousPage" type="button" aria-label="Go to previous page">← Previous</button>
                <div class="progress-wrap">
                    <span class="progress-label">Reading progress</span>
                    <div class="progress-track" role="progressbar" id="progressBar" aria-label="Reading progress" aria-valuemin="1" aria-valuemax="3000" aria-valuenow="1">
                        <div class="progress-fill" id="progressFill"></div>
                    </div>
                    <span class="progress-count" id="progressCount">1 / 3,000</span>
                </div>
                <button class="control-button next" id="nextPage" type="button" aria-label="Go to next page">Next →</button>
            </div>

            <form class="jump-row" id="jumpForm">
                <label for="pageJump">Go to page · Ke halaman</label>
                <input class="jump-input" id="pageJump" type="number" min="1" max="3000" value="1" inputmode="numeric" aria-label="Page number">
                <button class="jump-button" type="submit">Open · Buka</button>
                <span>Use ← and → keys to turn pages</span>
            </form>

            <p class="quiet-note">These pages are a personal acknowledgment of my own choices. They do not ask for a reply, forgiveness, or anything in return.<br>Halaman-halaman ini adalah pengakuan pribadi atas pilihan saya. Tidak ada permintaan untuk membalas, memaafkan, atau memberikan apa pun.</p>
        </section>
    </main>

    <footer class="site-footer">A sincere apology, without expectation · Permintaan maaf yang tulus, tanpa tuntutan</footer>

    <script>
        const chapters = [
            { title: "A Simple Beginning", start: 1, end: 300, focus: "why I am writing this", id: "alasan saya menulis ini" },
            { title: "Recognizing My Mistakes", start: 301, end: 600, focus: "recognizing my mistakes", id: "menyadari kesalahan saya" },
            { title: "Understanding My Immaturity", start: 601, end: 900, focus: "understanding my immaturity", id: "memahami ketidakdewasaan saya" },
            { title: "Things I Should Have Thought About", start: 901, end: 1200, focus: "what deserved more thought", id: "hal-hal yang seharusnya saya pikirkan" },
            { title: "My Sincere Apology to You", start: 1201, end: 1500, focus: "offering a sincere apology", id: "menyampaikan permintaan maaf dengan tulus" },
            { title: "Taking Responsibility Without Excuses", start: 1501, end: 1800, focus: "taking responsibility without excuses", id: "bertanggung jawab tanpa mencari alasan" },
            { title: "Reflecting on My Actions", start: 1801, end: 2100, focus: "reflecting on my actions", id: "merenungkan tindakan saya" },
            { title: "Learning From My Mistakes", start: 2101, end: 2400, focus: "learning from my mistakes", id: "belajar dari kesalahan saya" },
            { title: "A Promise to Be More Considerate", start: 2401, end: 2700, focus: "becoming more considerate", id: "berusaha lebih bijaksana" },
            { title: "My Final Apology", start: 2701, end: 3000, focus: "ending with a clear apology", id: "mengakhiri dengan permintaan maaf yang jelas" }
        ];

        const reflections = {
            openings: [
                ["I am using this page to look honestly at my own choices, not to make a small situation sound larger. A clear acknowledgment matters more to me than finding polished words or trying to explain myself.", "Saya menggunakan halaman ini untuk melihat pilihan saya sendiri dengan jujur, bukan untuk membuat situasi sederhana terdengar lebih besar. Pengakuan yang jelas lebih penting daripada mencari kata-kata indah atau berusaha menjelaskan diri."],
                ["Writing slowly gives me room to notice what I once passed over too quickly. This reflection is about my conduct and the care I should have taken, rather than a claim about anyone else's experience.", "Menulis dengan perlahan memberi saya ruang untuk melihat hal-hal yang dulu saya lewatkan terlalu cepat. Refleksi ini membahas sikap saya dan kehati-hatian yang semestinya saya tunjukkan, bukan menyimpulkan pengalaman orang lain."],
                ["I want these words to remain grounded in what I can honestly say: I made choices, and I can examine them. I do not need to turn that recognition into a dramatic account to take it seriously.", "Saya ingin kata-kata ini tetap berpegang pada hal yang bisa saya katakan dengan jujur: saya membuat pilihan dan dapat memeriksanya kembali. Saya tidak perlu mengubah pengakuan itu menjadi cerita dramatis untuk menganggapnya penting."],
                ["The purpose of this reflection is modest. I am trying to name my part clearly, consider what I could have done better, and let that understanding guide how I act in future conversations.", "Tujuan refleksi ini sederhana. Saya berusaha menyebut bagian saya dengan jelas, mempertimbangkan apa yang bisa saya lakukan dengan lebih baik, dan menjadikan pemahaman itu panduan dalam percakapan mendatang."],
                ["I am not writing to define the situation for anyone else. I can only speak for myself: I have been reviewing the way I approached people online and the thoughtfulness that should have accompanied it.", "Saya tidak menulis untuk menentukan arti situasi ini bagi orang lain. Saya hanya dapat berbicara tentang diri sendiri: saya meninjau kembali cara saya mendekati orang secara daring dan sikap penuh pertimbangan yang semestinya menyertainya."]
            ],
            noticing: [
                ["Looking back, I can see that good intentions are not the same as careful judgment. I should have paused, considered the context, and been more attentive to whether my approach was appropriate before choosing what to say.", "Saat melihat kembali, saya menyadari bahwa niat baik tidak sama dengan pertimbangan yang matang. Saya semestinya berhenti sejenak, memikirkan konteks, dan lebih memperhatikan apakah pendekatan saya pantas sebelum menentukan kata-kata."],
                ["It is easy to remember what I meant to communicate and overlook how little thought I gave to the way I communicated it. I am responsible for that gap, even when I cannot know how anyone interpreted it.", "Mudah bagi saya mengingat maksud yang ingin disampaikan dan mengabaikan betapa sedikitnya saya memikirkan cara menyampaikannya. Saya bertanggung jawab atas kekurangan itu, sekalipun saya tidak tahu bagaimana orang lain memahaminya."],
                ["I can admit that I acted without enough patience. A more measured approach would have meant listening, noticing boundaries, and accepting that a conversation should not be guided only by what I wanted to say.", "Saya dapat mengakui bahwa saya bertindak tanpa cukup kesabaran. Pendekatan yang lebih terukur berarti mendengarkan, memperhatikan batasan, dan menerima bahwa percakapan tidak seharusnya hanya mengikuti apa yang ingin saya sampaikan."],
                ["Some choices look different when I give them the time and attention they deserved. I am trying to review them without turning uncertainty into an assumption or using it to avoid examining my own behavior.", "Beberapa pilihan tampak berbeda ketika saya memberi waktu dan perhatian yang semestinya. Saya berusaha meninjaunya tanpa mengubah ketidakpastian menjadi asumsi atau menggunakannya untuk menghindari pemeriksaan atas sikap saya sendiri."],
                ["I should have been more aware that online communication still involves real people and real boundaries. A screen does not make thoughtfulness optional; I could have brought more care to how I initiated and continued a conversation.", "Saya semestinya lebih menyadari bahwa komunikasi daring tetap melibatkan orang sungguhan dan batasan yang nyata. Layar tidak membuat sikap penuh pertimbangan menjadi pilihan; saya bisa lebih berhati-hati saat memulai dan melanjutkan percakapan."]
            ],
            accountability: [
                ["That is mine to acknowledge without shifting responsibility elsewhere. Circumstances can provide context, but they do not make my decisions disappear. I can be honest about my part without inventing details or overstating what followed.", "Itu adalah bagian yang harus saya akui tanpa mengalihkan tanggung jawab kepada pihak lain. Keadaan dapat memberi konteks, tetapi tidak menghapus keputusan saya. Saya dapat jujur tentang peran saya tanpa mengarang detail atau membesar-besarkan akibatnya."],
                ["I do not want to hide behind uncertainty or turn an explanation into a defense. The useful question is what I chose, what I failed to consider, and what I can change in my own conduct from here.", "Saya tidak ingin bersembunyi di balik ketidakpastian atau mengubah penjelasan menjadi pembelaan. Pertanyaan yang berguna adalah apa yang saya pilih, apa yang luput saya pertimbangkan, dan apa yang dapat saya ubah dalam sikap saya."],
                ["Responsibility does not require me to claim that I know another person's thoughts. It asks me to be precise about my own actions and to accept that acting carelessly is worth reflecting on, even without making claims about its impact.", "Bertanggung jawab tidak mengharuskan saya mengaku tahu isi pikiran orang lain. Saya perlu tepat tentang tindakan sendiri dan menerima bahwa sikap kurang hati-hati patut direnungkan, tanpa membuat klaim tentang dampaknya."],
                ["I cannot revise the choices already made by describing them differently now. What I can do is speak plainly about my part, recognize where my judgment fell short, and avoid using regret as a substitute for better conduct.", "Saya tidak dapat mengubah pilihan yang telah dibuat dengan menggambarkannya secara berbeda sekarang. Yang dapat saya lakukan adalah berbicara terus terang tentang bagian saya, menyadari kekurangan pertimbangan saya, dan tidak menjadikan penyesalan sebagai pengganti sikap yang lebih baik."],
                ["I am not looking for a reason that would make my actions someone else's responsibility. I made my own decisions, and acknowledging that clearly is a more respectful starting point than searching for a convenient excuse.", "Saya tidak mencari alasan yang menjadikan tindakan saya tanggung jawab orang lain. Saya mengambil keputusan sendiri, dan mengakuinya dengan jelas adalah awal yang lebih menghormati daripada mencari alasan yang mudah."]
            ],
            consideration: [
                ["A more considerate person would leave room for the other person to set the pace and limits of an interaction. I should not treat access to a conversation as permission to keep going without paying attention.", "Sikap yang lebih bijaksana akan memberi ruang bagi orang lain untuk menentukan ritme dan batas interaksi. Saya tidak seharusnya menganggap kesempatan untuk berbicara sebagai izin untuk terus melanjutkan tanpa memperhatikan keadaan."],
                ["Respect is practical: it means choosing words with care, noticing when to pause, and not assuming that my interest should direct an exchange. Those are ordinary responsibilities I can practice without asking anyone else to teach me.", "Rasa hormat itu nyata dalam tindakan: memilih kata dengan hati-hati, menyadari kapan perlu berhenti, dan tidak menganggap minat saya harus mengarahkan percakapan. Itu tanggung jawab sederhana yang dapat saya latih tanpa meminta orang lain mengajari saya."],
                ["In future conversations, I want to be more attentive to reciprocity and context. If I am unsure whether something is welcome, I can choose restraint instead of treating uncertainty as a reason to press ahead.", "Dalam percakapan mendatang, saya ingin lebih memperhatikan timbal balik dan konteks. Jika saya ragu apakah sesuatu diterima dengan baik, saya dapat memilih menahan diri daripada menjadikan keraguan sebagai alasan untuk terus maju."],
                ["I should remember that communication is not only about expressing myself. It also asks me to respect another person's time, attention, and boundaries, and to accept that a conversation may not develop in the way I expect.", "Saya perlu mengingat bahwa komunikasi bukan hanya tentang mengekspresikan diri. Saya juga perlu menghormati waktu, perhatian, dan batas orang lain, serta menerima bahwa percakapan mungkin tidak berkembang seperti yang saya harapkan."],
                ["Being considerate includes knowing that no response is something I must respect, not a puzzle I am entitled to solve. I can take responsibility for my approach and allow other people their own space.", "Bersikap bijaksana berarti memahami bahwa tidak adanya balasan harus saya hormati, bukan teka-teki yang berhak saya pecahkan. Saya dapat bertanggung jawab atas pendekatan saya dan memberi orang lain ruang mereka sendiri."]
            ],
            growth: [
                ["I want this reflection to lead to a small, real change: pause before acting, consider the other person's perspective without pretending to know it, and choose a more respectful course when the situation is unclear.", "Saya ingin refleksi ini menghasilkan perubahan yang sederhana dan nyata: berhenti sejenak sebelum bertindak, mempertimbangkan sudut pandang orang lain tanpa berpura-pura mengetahuinya, dan memilih sikap yang lebih menghormati saat situasinya tidak jelas."],
                ["Learning from a mistake is not a declaration that I have become flawless. It is a commitment to notice familiar habits, question them sooner, and make better decisions through practice rather than promises alone.", "Belajar dari kesalahan bukan pernyataan bahwa saya telah menjadi sempurna. Ini adalah komitmen untuk mengenali kebiasaan yang berulang, mempertanyakannya lebih awal, dan mengambil keputusan yang lebih baik melalui latihan, bukan sekadar janji."],
                ["I can carry this lesson forward without asking anyone else to reassure me. The work belongs to me: becoming more patient, communicating with greater care, and accepting boundaries without treating them as a personal challenge.", "Saya dapat membawa pelajaran ini ke depan tanpa meminta siapa pun menenangkan saya. Upaya itu adalah tanggung jawab saya: menjadi lebih sabar, berkomunikasi dengan lebih hati-hati, dan menerima batasan tanpa menganggapnya sebagai tantangan pribadi."],
                ["The change I can control is how I behave next time. I can be clearer, less presumptive, and more willing to stop and reflect. That is a more honest response to regret than writing as though words alone repair everything.", "Perubahan yang dapat saya kendalikan adalah cara saya bersikap nanti. Saya dapat berkomunikasi lebih jelas, tidak mudah berasumsi, serta bersedia berhenti dan berpikir. Itu adalah tanggapan yang lebih jujur terhadap penyesalan daripada menulis seolah kata-kata saja dapat memperbaiki semuanya."],
                ["I am learning to treat reflection as the beginning of responsibility, not its conclusion. Better judgment will take continued attention in ordinary moments, especially when I am tempted to act quickly or put my own wishes first.", "Saya belajar menjadikan refleksi sebagai awal tanggung jawab, bukan akhirnya. Pertimbangan yang lebih baik memerlukan perhatian terus-menerus dalam keseharian, terutama ketika saya tergoda bertindak terburu-buru atau mendahulukan keinginan sendiri."]
            ],
            closings: [
                ["For my part in this, I am sincerely sorry. I do not expect a reply or forgiveness; I only want to acknowledge my own shortcomings clearly and let this reflection guide more considerate choices.", "Atas bagian saya dalam hal ini, saya sungguh meminta maaf. Saya tidak mengharapkan balasan atau pengampunan; saya hanya ingin mengakui kekurangan diri dengan jelas dan menjadikan refleksi ini panduan untuk pilihan yang lebih bijaksana."],
                ["I can keep the apology simple and mean it. I am sorry for the ways I could have acted with more care, and I will take responsibility for doing better without asking anything in return.", "Saya dapat menyampaikan permintaan maaf dengan sederhana dan sungguh-sungguh. Maaf karena saya bisa bersikap dengan lebih hati-hati. Saya akan bertanggung jawab untuk memperbaiki diri tanpa meminta imbalan apa pun."],
                ["This page does not settle everything or speak for anyone but me. It records a lesson I need to remember: take responsibility, respect boundaries, and approach people with more thought than I did before.", "Halaman ini tidak menyelesaikan semuanya dan tidak berbicara atas nama siapa pun selain saya. Halaman ini mencatat pelajaran yang perlu saya ingat: bertanggung jawab, menghormati batasan, dan mendekati orang dengan lebih banyak pertimbangan."],
                ["I am sorry for my mistakes and for not giving my choices enough thought. I can acknowledge that plainly, then focus on becoming more careful in the ways I communicate and relate to others.", "Saya minta maaf atas kesalahan saya dan karena tidak cukup memikirkan pilihan-pilihan saya. Saya dapat mengakuinya dengan terus terang, lalu berfokus untuk lebih berhati-hati saat berkomunikasi dan berhubungan dengan orang lain."],
                ["There is nothing I need from the people I approached. The apology is mine to offer, and the responsibility for learning from my actions remains mine as well. I am sincerely sorry.", "Saya tidak mengharapkan apa pun dari orang-orang yang pernah saya dekati. Permintaan maaf ini saya sampaikan, dan tanggung jawab untuk belajar dari tindakan saya tetap ada pada diri saya. Saya sungguh meminta maaf."]
            ],
            details: [
                ["One part of this lesson is the difference between wanting to be understood and communicating in a way that is considerate. I can examine that difference without assuming what another person thought or felt.", "Salah satu bagian dari pelajaran ini adalah perbedaan antara ingin dipahami dan berkomunikasi dengan penuh pertimbangan. Saya dapat memeriksa perbedaan itu tanpa berasumsi tentang pikiran atau perasaan orang lain."],
                ["I also need to notice how quickly a conversation can become centered on my expectations. Remembering that helps me leave room for another person to decide what feels comfortable to them.", "Saya juga perlu menyadari betapa cepat percakapan dapat berpusat pada harapan saya. Mengingat hal itu membantu saya memberi ruang bagi orang lain untuk menentukan apa yang terasa nyaman bagi mereka."],
                ["There is value in asking whether my words are necessary, respectful, and well-timed before I send them. A brief pause can help me avoid acting only from impulse or impatience.", "Ada manfaatnya mempertimbangkan apakah kata-kata saya perlu disampaikan, tetap menghormati, dan tepat waktunya sebelum mengirimkannya. Jeda singkat dapat mencegah saya bertindak hanya karena dorongan sesaat atau ketidaksabaran."],
                ["I can recognize that good communication depends on attention as much as expression. Listening to context and noticing limits are practical responsibilities, not details I should leave for someone else to manage.", "Saya dapat menyadari bahwa komunikasi yang baik bergantung pada perhatian, bukan hanya penyampaian. Mendengarkan konteks dan memperhatikan batasan adalah tanggung jawab nyata, bukan hal yang seharusnya saya serahkan kepada orang lain."],
                ["A respectful approach does not require certainty about how I will be received. It requires me to be measured, avoid assumptions, and accept the other person's freedom to engage or not engage.", "Pendekatan yang menghormati orang lain tidak mensyaratkan kepastian tentang bagaimana saya akan diterima. Saya perlu bersikap terukur, menghindari asumsi, dan menerima kebebasan orang lain untuk menanggapi ataupun tidak."],
                ["I want to separate what I intended from what I actually chose to do. That distinction lets me take responsibility for my behavior without exaggerating it or using intention as an excuse.", "Saya ingin membedakan niat saya dari tindakan yang benar-benar saya pilih. Perbedaan itu membantu saya bertanggung jawab atas perilaku sendiri tanpa membesar-besarkannya atau menjadikan niat sebagai alasan."],
                ["It is possible to regret a choice calmly. I do not need to turn regret into self-punishment; I can use it to identify a specific habit and practice a more thoughtful alternative.", "Saya dapat menyesali pilihan dengan tenang. Saya tidak perlu mengubah penyesalan menjadi hukuman bagi diri sendiri; saya dapat menggunakannya untuk mengenali kebiasaan tertentu dan melatih pilihan yang lebih bijaksana."],
                ["I should be careful not to make another person's silence into a story about them. My responsibility is simpler: notice the boundary, respect it, and avoid treating my unanswered questions as permission to continue.", "Saya harus berhati-hati agar tidak mengarang cerita tentang orang lain dari sikap diam mereka. Tanggung jawab saya lebih sederhana: memperhatikan batasan, menghormatinya, dan tidak menganggap pertanyaan yang belum terjawab sebagai izin untuk terus melanjutkan."],
                ["This reflection also reminds me that maturity is shown in ordinary decisions. Patience, restraint, and consideration matter in the small moments when nobody is asking me to explain myself.", "Refleksi ini juga mengingatkan saya bahwa kedewasaan terlihat dalam keputusan sehari-hari. Kesabaran, pengendalian diri, dan kepedulian penting dalam momen sederhana ketika tidak ada yang meminta saya menjelaskan diri."],
                ["I can be honest about not having handled something well while staying proportionate. Taking my conduct seriously does not require me to claim that the situation was more severe than I know it to be.", "Saya dapat jujur bahwa saya tidak menyikapi sesuatu dengan baik sambil tetap bersikap sewajarnya. Menganggap perilaku saya penting untuk diperbaiki tidak mengharuskan saya mengklaim bahwa situasinya lebih berat daripada yang saya ketahui."],
                ["A useful apology names my part plainly, then leaves the other person free from any obligation to respond. That is the kind of clarity and restraint I want to bring to my words.", "Permintaan maaf yang baik menyebut bagian saya dengan jelas, lalu membebaskan orang lain dari kewajiban untuk menanggapi. Kejelasan dan pengendalian diri seperti itulah yang ingin saya hadirkan dalam kata-kata."],
                ["I want to be attentive to whether I am approaching someone as a person or simply following my own curiosity. Remembering that distinction can help me communicate with more respect and less assumption.", "Saya ingin memperhatikan apakah saya mendekati seseorang sebagai pribadi atau sekadar mengikuti rasa ingin tahu sendiri. Mengingat perbedaan itu dapat membantu saya berkomunikasi dengan lebih hormat dan lebih sedikit berasumsi."],
                ["The reflection is not complete just because I have found words for it. I need to carry the practical lesson into future choices and allow changed behavior, rather than repeated explanation, to show what I have learned.", "Refleksi ini belum selesai hanya karena saya telah menemukan kata-kata untuknya. Saya perlu membawa pelajaran praktis ini ke pilihan mendatang dan membiarkan perubahan sikap, bukan penjelasan berulang, menunjukkan apa yang telah saya pelajari."]
            ],
            practices: [
                ["Before contacting someone, I can ask whether my reason is considerate and whether this is an appropriate moment. If I cannot answer with care, waiting is a reasonable and respectful choice.", "Sebelum menghubungi seseorang, saya dapat bertanya apakah alasan saya penuh pertimbangan dan apakah ini waktu yang tepat. Jika saya belum dapat menjawabnya dengan baik, menunggu adalah pilihan yang wajar dan menghormati."],
                ["I can keep future messages clear and measured instead of sending more words simply because I want certainty. That practice helps me respect time, attention, and boundaries beyond my own.", "Saya dapat menjaga pesan mendatang tetap jelas dan terukur, alih-alih mengirim lebih banyak kata hanya karena menginginkan kepastian. Kebiasaan itu membantu saya menghormati waktu, perhatian, dan batas orang lain."],
                ["When a conversation does not continue, I can accept that without looking for a way to restart it. Respecting an ending is part of communicating thoughtfully, even when I would prefer a different outcome.", "Ketika percakapan tidak berlanjut, saya dapat menerimanya tanpa mencari cara untuk memulainya kembali. Menghormati akhir percakapan adalah bagian dari komunikasi yang bijaksana, sekalipun saya menginginkan hasil yang berbeda."],
                ["I can review what I plan to say and remove anything that pressures, presumes, or asks for reassurance. That simple check keeps my words focused on honest communication rather than my own comfort.", "Saya dapat meninjau pesan yang ingin disampaikan dan menghapus bagian yang menekan, berasumsi, atau meminta peneguhan. Pemeriksaan sederhana itu menjaga kata-kata saya tetap berfokus pada komunikasi yang jujur, bukan kenyamanan diri."],
                ["I want to practice listening as carefully as I speak. That means responding to what is actually communicated, not filling gaps with a story that makes my assumptions feel justified.", "Saya ingin berlatih mendengarkan dengan saksama seperti saat berbicara. Artinya, saya menanggapi hal yang benar-benar disampaikan, bukan mengisi kekosongan dengan cerita yang membenarkan asumsi saya."],
                ["A better habit is to pause when I feel impatient and give the situation room. I can decide later, with a clearer mind, whether any message is appropriate at all.", "Kebiasaan yang lebih baik adalah berhenti sejenak ketika merasa tidak sabar dan memberi ruang bagi keadaan. Dengan pikiran lebih jernih, saya dapat menentukan apakah pesan apa pun memang pantas disampaikan."],
                ["I can keep accountability specific: identify my choice, recognize the consideration I missed, and choose a different action next time. Specific reflection is more useful than repeating broad criticism of myself.", "Saya dapat membuat tanggung jawab tetap spesifik: mengenali pilihan saya, menyadari pertimbangan yang terlewat, dan memilih tindakan berbeda nanti. Refleksi yang spesifik lebih berguna daripada terus mengkritik diri secara umum."],
                ["I will try to let another person's boundaries stand without negotiation. Respect is clearest when I accept a limit without asking for an explanation or trying to make an exception for myself.", "Saya akan berusaha membiarkan batas orang lain tetap berlaku tanpa negosiasi. Rasa hormat paling jelas terlihat ketika saya menerima batasan tanpa meminta penjelasan atau mencoba membuat pengecualian bagi diri sendiri."],
                ["It helps to remember that a sincere apology is not a request in disguise. I can express regret once, calmly, and accept that the next decision belongs to the person receiving it.", "Saya perlu mengingat bahwa permintaan maaf yang tulus bukanlah permintaan terselubung. Saya dapat menyampaikan penyesalan sekali dengan tenang dan menerima bahwa keputusan selanjutnya adalah hak orang yang menerimanya."],
                ["I can give more attention to timing and context. A message may be grammatically polite and still be poorly considered, so I should think about whether sending it is respectful, not only how it sounds.", "Saya dapat lebih memperhatikan waktu dan konteks. Sebuah pesan mungkin sopan secara tata bahasa tetapi tetap kurang dipertimbangkan, jadi saya perlu memikirkan apakah mengirimnya menghormati orang lain, bukan hanya bagaimana bunyinya."],
                ["I want to make room for a different perspective without claiming I know it. I can ask myself what I might be overlooking and then choose the course that makes fewer assumptions.", "Saya ingin memberi ruang bagi sudut pandang berbeda tanpa mengaku mengetahuinya. Saya dapat bertanya pada diri sendiri apa yang mungkin terlewat, lalu memilih sikap yang paling sedikit berasumsi."],
                ["If I recognize a familiar impulse, I can slow down before acting on it. Learning to notice that moment gives me a chance to respond thoughtfully rather than repeat a choice automatically.", "Jika menyadari dorongan yang sudah dikenal, saya dapat memperlambat diri sebelum menindaklanjutinya. Belajar mengenali momen itu memberi saya kesempatan merespons dengan bijaksana, bukan mengulangi pilihan secara otomatis."],
                ["I can measure improvement by whether I behave with more care, not by whether I receive a particular response. My responsibility is to practice respect consistently, regardless of recognition or reward.", "Saya dapat mengukur kemajuan dari sikap yang lebih hati-hati, bukan dari apakah saya menerima tanggapan tertentu. Tanggung jawab saya adalah mempraktikkan rasa hormat secara konsisten, tanpa bergantung pada pengakuan atau imbalan."],
                ["I should avoid turning an apology into a long explanation that asks another person to take care of my guilt. I can process that feeling privately and keep the apology focused on my responsibility.", "Saya sebaiknya tidak mengubah permintaan maaf menjadi penjelasan panjang yang meminta orang lain mengurus rasa bersalah saya. Saya dapat memproses perasaan itu sendiri dan menjaga permintaan maaf tetap berfokus pada tanggung jawab saya."],
                ["A considerate approach leaves enough room for someone not to engage. I can treat that possibility as normal and refrain from making my own desire for conversation the center of the situation.", "Pendekatan yang bijaksana memberi ruang bagi seseorang untuk tidak terlibat. Saya dapat menganggap kemungkinan itu sebagai hal yang wajar dan tidak menjadikan keinginan saya untuk berbicara sebagai pusat situasi."],
                ["I can return to this lesson when I communicate online: be clear, be respectful, and stop when continuing would disregard a boundary. Those ordinary choices are where personal growth becomes visible.", "Saya dapat mengingat pelajaran ini saat berkomunikasi daring: bersikap jelas, menghormati orang lain, dan berhenti ketika melanjutkan berarti mengabaikan batasan. Pilihan sederhana itulah yang menunjukkan pertumbuhan pribadi."],
                ["My aim is not to present myself as changed through words alone. I want to practice patience and better judgment over time, and accept responsibility when I notice that I have fallen short again.", "Tujuan saya bukan menyatakan diri telah berubah hanya melalui kata-kata. Saya ingin melatih kesabaran dan pertimbangan yang lebih baik dari waktu ke waktu, serta bertanggung jawab ketika menyadari kekurangan lagi."]
            ]
        };

        const samplePages = {
            1: {
                title: "Why I'm Writing This",
                subtitle: "A simple beginning · Awal yang sederhana",
                paragraphs: [
                    ["I honestly don't know where to begin, but I think the simplest thing I can say is that I'm sorry.", "Sejujurnya aku tidak tahu harus memulai dari mana, tetapi kurasa hal paling sederhana yang bisa aku katakan adalah aku minta maaf."],
                    ["I've been thinking about my actions, and I realize that there were things I could have handled much better. Maybe at the time I didn't think carefully enough about what I was doing, but looking back now, I can see my own shortcomings.", "Aku sudah memikirkan tindakanku, dan aku menyadari bahwa ada beberapa hal yang sebenarnya bisa aku sikapi dengan jauh lebih baik. Mungkin saat itu aku tidak cukup memikirkan apa yang sedang kulakukan, tetapi ketika melihatnya kembali sekarang, aku bisa melihat kekuranganku sendiri."],
                    ["I'm not writing this to make the situation seem bigger than it is. I'm writing because I genuinely feel that I should acknowledge my mistakes instead of simply pretending that nothing happened.", "Aku tidak menulis ini untuk membuat situasinya terlihat lebih besar daripada kenyataannya. Aku menulis karena benar-benar merasa perlu mengakui kesalahanku daripada berpura-pura tidak pernah terjadi apa-apa."],
                    ["I know that I am not a perfect person. I still have a lot to learn, and sometimes I make decisions that I later regret. This is one of those moments that made me reflect on myself.", "Aku tahu bahwa aku bukan manusia yang sempurna. Masih banyak hal yang harus aku pelajari, dan terkadang aku mengambil keputusan yang kemudian aku sesali. Ini adalah salah satu kejadian yang membuatku kembali merenungkan diriku sendiri."],
                    ["So, before anything else, I sincerely apologize.", "Jadi, sebelum mengatakan hal lainnya, aku dengan tulus meminta maaf."]
                ]
            },
            2: {
                title: "I Should Have Been More Thoughtful",
                subtitle: "Recognizing what I could have done better · Menyadari hal yang bisa kulakukan dengan lebih baik",
                paragraphs: [
                    ["Sometimes I wonder why I didn't think things through more carefully. I could have approached the situation differently, made better decisions, and been more aware of how my actions might appear to others.", "Terkadang aku bertanya-tanya kenapa dulu aku tidak memikirkan semuanya dengan lebih matang. Aku sebenarnya bisa menyikapi situasinya dengan cara berbeda, mengambil keputusan yang lebih baik, dan lebih menyadari bagaimana tindakanku mungkin terlihat bagi orang lain."],
                    ["I am not trying to find excuses. Whatever the circumstances were, I still have to acknowledge my own decisions.", "Aku tidak sedang mencari alasan. Apa pun keadaannya, aku tetap harus mengakui keputusan yang sudah aku ambil sendiri."],
                    ["Perhaps this situation is a reminder that being mature is not just about growing older. It is also about learning to consider other people, understanding boundaries, and knowing when to act more carefully.", "Mungkin kejadian ini menjadi pengingat bahwa menjadi dewasa bukan sekadar bertambahnya usia. Menjadi dewasa juga berarti belajar mempertimbangkan orang lain, memahami batasan, dan mengetahui kapan harus bertindak dengan lebih hati-hati."],
                    ["I regret not being more thoughtful at the time, and I am genuinely sorry.", "Aku menyesal karena saat itu tidak lebih bijaksana, dan aku benar-benar meminta maaf."]
                ]
            },
            3000: {
                title: "My Final Apology",
                subtitle: "The last page · Halaman terakhir",
                paragraphs: [
                    ["And finally, after all these pages, I want to say the same thing I wanted to say from the beginning.", "Dan akhirnya, setelah semua halaman ini, aku ingin mengatakan hal yang sama seperti yang ingin aku sampaikan sejak awal."],
                    ["I'm sorry.", "Aku minta maaf."],
                    ["I'm sorry for my mistakes, my lack of consideration, and the things I could have handled differently.", "Maaf atas kesalahanku, kurangnya pertimbanganku, dan segala hal yang sebenarnya bisa aku sikapi dengan cara berbeda."],
                    ["I know that writing all these words does not change what happened. I also know that an apology does not automatically erase a mistake.", "Aku tahu bahwa menulis semua kata ini tidak akan mengubah apa yang sudah terjadi. Aku juga tahu bahwa sebuah permintaan maaf tidak otomatis menghapus kesalahan."],
                    ["I simply wanted to take the time to acknowledge what I did and express my regret properly.", "Aku hanya ingin meluangkan waktu untuk mengakui apa yang sudah aku lakukan dan menyampaikan penyesalanku dengan baik."],
                    ["I don't expect anything in return. I don't need this to become a bigger matter than it already is.", "Aku tidak mengharapkan apa pun sebagai balasannya. Aku juga tidak ingin persoalan ini menjadi lebih besar daripada yang sebenarnya."],
                    ["I just hope that my apology can be understood for what it is: a genuine acknowledgment of my own mistakes.", "Aku hanya berharap permintaan maaf ini bisa dipahami sebagaimana mestinya: sebagai bentuk pengakuan yang tulus atas kesalahan diriku sendiri."],
                    ["Thank you for taking the time to read this.", "Terima kasih sudah meluangkan waktu untuk membaca ini."],
                    ["Once again, I'm sincerely sorry.", "Sekali lagi, aku benar-benar minta maaf."]
                ]
            }
        };

        const pageContent = document.getElementById("pageContent");
        const book = document.getElementById("book");
        const bookInterior = document.querySelector(".book-interior");
        const readingStatus = document.getElementById("readingStatus");
        const chapterList = document.getElementById("chapterList");
        const pageJump = document.getElementById("pageJump");
        const progressFill = document.getElementById("progressFill");
        const progressBar = document.getElementById("progressBar");
        const progressCount = document.getElementById("progressCount");
        const previousButton = document.getElementById("previousPage");
        const nextButton = document.getElementById("nextPage");
        let currentPage = 1;
        let isOpen = false;

        function chapterFor(page) {
            return chapters.find(function (chapter) {
                return page >= chapter.start && page <= chapter.end;
            });
        }

        function addParagraph(text, className) {
            const paragraph = document.createElement("p");
            paragraph.className = className || "";
            paragraph.textContent = text;
            pageContent.appendChild(paragraph);
        }

        function renderPage(page, animate) {
            currentPage = Math.max(1, Math.min(3000, Number(page) || 1));
            const chapter = chapterFor(currentPage);
            const sample = samplePages[currentPage];
            pageContent.replaceChildren();

            const meta = document.createElement("div");
            meta.className = "paper-meta";
            const chapterLabel = document.createElement("span");
            chapterLabel.textContent = chapter.title;
            const folio = document.createElement("span");
            folio.textContent = "Page " + currentPage.toLocaleString("en-US") + " of 3,000";
            meta.append(chapterLabel, folio);
            pageContent.appendChild(meta);

            const heading = document.createElement("h2");
            heading.className = "page-heading";
            heading.textContent = sample ? sample.title : chapter.title;
            pageContent.appendChild(heading);

            const subtitle = document.createElement("p");
            subtitle.className = "page-subtitle";
            subtitle.textContent = sample ? sample.subtitle : "Reflection " + (currentPage - chapter.start + 1) + " · " + chapter.focus + " / " + chapter.id;
            pageContent.appendChild(subtitle);

            const copy = document.createElement("div");
            copy.className = "reflection-copy";
            pageContent.appendChild(copy);

            let paragraphs;
            if (sample) {
                paragraphs = sample.paragraphs;
            } else {
                const index = currentPage - chapter.start;
                const banks = ["openings", "noticing", "accountability", "consideration", "growth", "closings"].map(function (key) { return reflections[key]; });
                paragraphs = banks.map(function (bank, bankIndex) {
                    return bank[(index * (bankIndex * 2 + 3) + chapter.start) % bank.length];
                });
                paragraphs.splice(3, 0, reflections.details[(index * 7 + chapter.start) % reflections.details.length]);
                paragraphs.splice(5, 0, reflections.practices[(index * 11 + chapter.start) % reflections.practices.length]);
            }

            paragraphs.forEach(function (pair) {
                const english = document.createElement("p");
                english.textContent = pair[0];
                copy.appendChild(english);
                const indonesian = document.createElement("p");
                indonesian.className = "translation";
                indonesian.lang = "id";
                indonesian.textContent = pair[1];
                copy.appendChild(indonesian);
            });

            const footer = document.createElement("div");
            footer.className = "paper-footer";
            const left = document.createElement("span");
            left.textContent = "A personal reflection";
            const right = document.createElement("span");
            right.textContent = "3,000 pages of apology";
            footer.append(left, right);
            pageContent.appendChild(footer);

            pageContent.classList.remove("page-turn");
            if (animate) {
                void pageContent.offsetWidth;
                pageContent.classList.add("page-turn");
            }

            bookInterior.scrollTop = 0;
            updateControls(chapter);
        }

        function updateControls(activeChapter) {
            progressCount.textContent = currentPage.toLocaleString("en-US") + " / 3,000";
            progressFill.style.width = (currentPage / 3000 * 100) + "%";
            progressBar.setAttribute("aria-valuenow", String(currentPage));
            pageJump.value = String(currentPage);
            previousButton.disabled = !isOpen;
            previousButton.setAttribute("aria-label", isOpen && currentPage === 1 ? "Return to book cover" : "Go to previous page");
            nextButton.disabled = currentPage === 3000;
            readingStatus.textContent = isOpen ? "Reading · " + currentPage.toLocaleString("en-US") + " / 3,000" : "The book is closed";
            chapterList.querySelectorAll(".chapter-link").forEach(function (button, index) {
                const active = chapters[index] === activeChapter;
                button.setAttribute("aria-current", active ? "true" : "false");
            });
        }

        chapters.forEach(function (chapter, index) {
            const button = document.createElement("button");
            button.className = "chapter-link";
            button.type = "button";
            button.setAttribute("aria-current", index === 0 ? "true" : "false");
            button.setAttribute("aria-label", "Open pages " + chapter.start + " to " + chapter.end + ", " + chapter.title);
            const number = document.createElement("span");
            number.className = "chapter-number";
            number.textContent = String(index + 1).padStart(2, "0");
            const title = document.createElement("span");
            title.className = "chapter-name";
            title.textContent = chapter.title;
            const range = document.createElement("span");
            range.className = "chapter-range";
            range.textContent = chapter.start.toLocaleString("en-US") + " — " + chapter.end.toLocaleString("en-US");
            title.appendChild(range);
            button.append(number, title);
            button.addEventListener("click", function () {
                if (!isOpen) openBook();
                renderPage(chapter.start, true);
            });
            chapterList.appendChild(button);
        });

        function openBook() {
            if (isOpen) return;
            isOpen = true;
            book.classList.add("is-open");
            updateControls(chapterFor(currentPage));
            readingStatus.textContent = "Opening the book";
            window.setTimeout(function () {
                if (isOpen) {
                    readingStatus.textContent = "Reading · " + currentPage.toLocaleString("en-US") + " / 3,000";
                }
            }, 850);
        }

        function closeBook() {
            if (!isOpen) return;

            isOpen = false;
            book.classList.remove("is-open");
            readingStatus.textContent = "The book is closed";
            updateControls(chapterFor(currentPage));
        }

        document.getElementById("openBook").addEventListener("click", openBook);
        previousButton.addEventListener("click", function () {
            if (currentPage === 1) {
                closeBook();
                return;
            }

            renderPage(currentPage - 1, true);
        });
        nextButton.addEventListener("click", function () {
            if (!isOpen) {
                openBook();
                return;
            }

            renderPage(currentPage + 1, true);
        });
        document.getElementById("jumpForm").addEventListener("submit", function (event) {
            event.preventDefault();
            const requestedPage = Number(pageJump.value);
            if (!Number.isInteger(requestedPage) || requestedPage < 1 || requestedPage > 3000) {
                pageJump.setCustomValidity("Enter a page number from 1 to 3,000.");
                pageJump.reportValidity();
                return;
            }
            pageJump.setCustomValidity("");
            if (!isOpen) openBook();
            renderPage(requestedPage, true);
        });
        pageJump.addEventListener("input", function () { pageJump.setCustomValidity(""); });

        document.addEventListener("keydown", function (event) {
            if (!isOpen || event.altKey || event.ctrlKey || event.metaKey || event.target.matches("input")) return;
            if (event.key === "ArrowLeft" && currentPage > 1) renderPage(currentPage - 1, true);
            else if (event.key === "ArrowLeft") closeBook();
            if (event.key === "ArrowRight" && currentPage < 3000) renderPage(currentPage + 1, true);
        });

        renderPage(1, false);
    </script>
</body>
</html>
