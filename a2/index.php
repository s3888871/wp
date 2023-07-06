<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Home Page</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
        <img src="shutterstock-cinema.png" alt="Lunardo Cinema Logo">
        <h1>Lunardo Cinema</h1>
    </header>
    <nav id="navbar">
        <a href="#reopening">Reopening</a>
        <a href="#seats">New Seats</a>
        <a href="#system-upgrade">System Upgrade</a>
    </nav>
    <main>
        <section id="reopening">
            <h2>Grand Reopening</h2>
            <p>Place holder text</p>
        </section>
        <section id="seats">
            <h2>Experience Ultimate Comfort</h2>
            <p>Place holder text.</p>
        </section>
        <section id="system-upgrade">
            <h2>Upgraded Projection and Sound Systems</h2>
            <p>Place holder text.</p>
        </section>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script>Put your name(s), student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
