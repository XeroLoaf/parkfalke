<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ParkFalke vernetzt Parkplätze in Wien: Finden, Buchen und Vermieten in einer App.">
  <meta name="theme-color" content="#1b3a73">
  <title>ParkFalke – Platz gesichtet. Platz gebucht.</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Manrope:wght@700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="site-header">
    <nav class="nav container" aria-label="Hauptnavigation">
      <a class="brand" href="#start">Park<span>Falke</span></a>
      <button class="menu-toggle" aria-label="Menü öffnen" aria-expanded="false" aria-controls="nav-links"><span></span><span></span></button>
      <div class="nav-links" id="nav-links">
        <a href="#idee">Idee</a>
        <a href="#funktionen">Funktionen</a>
        <a href="#anbieter">Für Anbieter</a>
        <a href="#team">Team</a>
        <a class="nav-cta" href="#kontakt">Kontakt</a>
      </div>
    </nav>
  </header>

  <main>
    <section class="hero" id="start">
      <div class="container hero-inner">
        <div class="hero-copy">
          <h1>Parken in Wien. <span>Einfacher gedacht.</span></h1>
          <p class="slogan">Platz gesichtet. Platz gebucht.</p>
          <p>ParkFalke vernetzt Parkplätze in Wien: Finden, Buchen und Vermieten in einer App.</p>
          <div class="hero-actions"><a class="button button-orange" href="#funktionen">Funktionen ansehen</a><a class="button button-ghost" href="#team">Das Team</a></div>
        </div>

        <div class="hero-visual">
          <img src="bilder/falke.jpg" width="1000" height="954" alt="Der ParkFalke hält ein Smartphone mit Parkplatzkarte und Buchen-Button">
        </div>
      </div>
      <svg class="skyline" viewBox="0 0 1200 140" preserveAspectRatio="none" aria-hidden="true">
        <path fill="#2f5aa8" fill-opacity=".35" d="M0 140V100h60V84h50v16h60V90h40v10h80V70l10-40 10 40v30h90V86h60V64l8-34 8 34v36h120V90h60v10h90V76h40v24h60V50l6-30 6 30v50h90V90h60v10h70V80h50v20h70V92h60v48z"/>
        <circle cx="880" cy="86" r="26" fill="none" stroke="#2f5aa8" stroke-opacity=".5" stroke-width="3"/>
      </svg>
    </section>

    <section class="idee section container" id="idee">
      <h2>Ein Parkplatz steht leer. Jemand anderer sucht genau diesen.</h2>
      <div class="idee-text">
        <p>In Wien gibt es viele Parkflächen, die nicht allgemein zugänglich sind: Stellplätze von Unternehmen, private Garagen oder Flächen bei Geschäften. Gleichzeitig kostet die Suche nach einem Parkplatz oft Zeit und Nerven.</p>
        <p><strong>ParkFalke verbindet beide Seiten:</strong> Die App macht vorhandene Parkmöglichkeiten sichtbar und lässt dich passende Stellplätze direkt buchen.</p>
      </div>
    </section>

    <section class="steps container" aria-label="So funktioniert es">
      <ol>
        <li><b>1</b><div><h3>Finden</h3><p>Ziel eingeben, Stellplätze in der Nähe sehen.</p></div></li>
        <li><b>2</b><div><h3>Buchen</h3><p>Platz reservieren und in der App bezahlen.</p></div></li>
        <li><b>3</b><div><h3>Parken</h3><p>Hinfahren, parken, bewerten.</p></div></li>
      </ol>
    </section>

    <section class="funktionen section container" id="funktionen">
      <h2>Alles rund ums Parken. In einer App.</h2>
      <div class="grid">
        <article><span class="ico"><svg viewBox="0 0 24 24"><circle cx="10" cy="10" r="6"/><path d="m15 15 6 6"/></svg></span><h3>Parkplatzsuche</h3><p>Zieladresse eingeben und Parkplätze in der Umgebung finden.</p></article>
        <article><span class="ico"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M3 10h18M8 2v4M16 2v4"/></svg></span><h3>Wiederkehrende Reservierungen</h3><p>Routinen einmal anlegen, jede Woche zum gleichen Platz.</p></article>
        <article><span class="ico"><svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></span><h3>Bezahlung in der App</h3><p>Reservieren und direkt sicher bezahlen.</p></article>
        <article><span class="ico"><svg viewBox="0 0 24 24"><rect x="3" y="6" width="18" height="12" rx="3"/><path d="M7 18v2M17 18v2M3 12h18"/></svg></span><h3>Park &amp; Ride für Pendler</h3><p>Stellplatz am Stadtrand inklusive passender Öffi-Verbindung.</p></article>
        <article><span class="ico"><svg viewBox="0 0 24 24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17l-5.4 2.9 1-6.1L3.2 9.5l6.1-.9z"/></svg></span><h3>Bewertungen</h3><p>Sauberkeit, Auffindbarkeit und Qualität – für mehr Transparenz.</p></article>
        <article class="accent"><span class="ico"><svg viewBox="0 0 24 24"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/></svg></span><h3>Dashboard für Anbieter</h3><p>Eigene Stellplätze, Buchungen, Auslastung und Preise verwalten.</p></article>
      </div>
    </section>

    <section class="pendler">
      <div class="container pendler-inner">
        <div>
          <h2>Pendeln ohne Stress.</h2>
          <p>Mit Park &amp; Ride parkst du am Stadtrand und siehst gleich die passende Öffi-Verbindung ins Zentrum. Wer regelmäßig fährt, legt seinen Platz einfach als wiederkehrende Reservierung an.</p>
        </div>
        <div class="route" aria-label="Beispiel: Park and Ride mit Öffi-Verbindung">
          <span class="stop"><i>P</i>Park &amp; Ride</span><span class="line"></span><span class="stop"><i>U</i>Öffi</span><span class="line"></span><span class="stop"><i>★</i>Ziel</span>
        </div>
      </div>
    </section>

    <section class="anbieter" id="anbieter">
      <div class="container anbieter-inner">
        <div>
          <h2>Du hast einen Stellplatz?</h2>
          <p>Private Personen und Unternehmen bieten freie Stellplätze an und behalten im Dashboard den Überblick.</p>
        </div>
        <div class="dash" aria-label="Vorschau des Anbieter-Dashboards">
          <div class="dash-top"><strong>Mein Stellplatz</strong><span>€ 4,50 / Std.</span></div>
          <div class="bars"><i style="--h:40%"></i><i style="--h:65%"></i><i style="--h:50%"></i><i style="--h:85%"></i><i style="--h:70%"></i><i style="--h:30%"></i><i style="--h:20%"></i></div>
          <div class="dash-days"><span>Mo</span><span>Di</span><span>Mi</span><span>Do</span><span>Fr</span><span>Sa</span><span>So</span></div>
          <p class="dash-note">Auslastung diese Woche · Beispieldarstellung</p>
        </div>
      </div>
    </section>

    <section class="team section container" id="team">
      <h2>Ein Diplomarbeitsprojekt der HTL Wien West</h2>
      <div class="team-photos">
        <figure><div class="ph"><img src="bilder/Dragan_gut.png" alt="Dragan Djurovic" loading="lazy" onerror="this.remove()"></div><figcaption>Dragan Djurovic</figcaption></figure>
        <figure><div class="ph"><img src="bilder/Arthur_gut.png" alt="Arthur Engel" loading="lazy" onerror="this.remove()"></div><figcaption>Arthur Engel</figcaption></figure>
        <figure><div class="ph"><img src="bilder/Stephan_gut.png" alt="Stephan Tantchev" loading="lazy" onerror="this.remove()"></div><figcaption>Stephan Tantchev</figcaption></figure>
      </div>
      <p class="muted">Betreuer: Markus Witt, Jürgen Lorenz · Informationstechnologie</p>
    </section>

    <section class="contact" id="kontakt">
      <div class="container contact-inner">
        <div><h2>Fragen zu ParkFalke?</h2><p>Du möchtest mehr über unser Projekt erfahren? Schreib uns.</p></div>
        <a class="button button-orange" href="mailto:kontakt@parkfalke.at">E-Mail schreiben</a>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container footer-inner">
      <span>ParkFalke – Platz gesichtet. Platz gebucht.</span>
      <span>© <span id="year"></span> ParkFalke</span>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>
