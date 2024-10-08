<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Funk Gruppe Event | Funk Connect 2024</title>
    <meta name="description" content="Funk Gruppe Event | Funk Connect 2024">
    <?php require_once 'head.php'; ?>
</head>

<body>
    <header>
        <div class="event-title">
          <h1 class="header">Funk Connect</h1>
          <h2 class="header">Aus der Praxis für die Praxis</h2>
          <h2 class="fix">20. November 2024</h2>
          <div class="event-container-img"></div> 
        </div>
        <button class="homebutton"> <a class="goto" href="#anmeldung">zur Anmeldung</a> </button>
    </header>

    <section>
      <article class="intro">
        <h1>Persönliche Einladung <br> Herausforderung Inklusion für Wirtschaft und Gesellschaft</h1>
        <p>
          <span>
          Sehr geehrte Damen und Herren
          </span>
          <span>
          Wir freuen uns, Sie zu unserem zweiten &laquo;Funk Connect&raquo; Event in unserer Niederlassung in Basel einzuladen. Unsere wiederkehrende Eventreihe &laquo;Funk Connect&raquo; bietet Einblicke von der Praxis für die Praxis. Knüpfen Sie wertvolle Kontakte in einem angenehmen und persönlichen Rahmen.
          </span>
          <span>
          Erleben Sie ein spannendes Impulsreferat zum Thema Inklusion (UN-Konvention) von Menschen mit Beeinträchtigungen - Herausforderung für die Wirtschaft und Gesellschaft. Welche Transformation ist dazu nötig und wichtig? Erfahren Sie praxisnahe Vorgehensweisen und Einblicke von <strong>Herrn Rolf Müller,</strong> einem ausgewiesenen Kenner der Thematik aus unterschiedlichen Blickwinkeln.
          </span>
          <span>
          Im Anschluss laden wir Sie herzlich zu einem Apéro Riche ein, bei dem ausreichend Zeit für ungezwungene Gespräche und Vernetzung bleibt.
          </span>
          <span>
          Wir freuen uns auf einen interessanten Austausch und einen gemütlichen Abend mit Ihnen.<br><br>
          <strong>Philipp Buser</strong><br>
          Leiter Niederlassung Basel</p>
          </span>
          
        </p>
      </article>

      <article>
        <div class="acctitle">
          <h2>Programm</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid02">
              <p><strong>Datum</strong> </p>
              <p><strong>Mittwoch, 20. November 2024</strong></p>
              <p>17:45 Uhr</p>
              <p>Eintreffen der Gäste</p>
              <p>18:00 Uhr</p>
              <p>Begrüssung / Referat Rolf Müller</p>
              <p class="noline" >19:00 Uhr</p>
              <p class="noline" >Apéro Riche / Networking</p>
            </div>
          </div>
        </div>
        <div class="acctitle">
          <h2>Referent</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid02 center">
              <img src="./img/rolf-mueller.jpg" alt="rolf-mueller">
              <p class="noline">
                <strong>Rolf Müller</strong> <br> Rolf Müller aus Oberägeri ist ein erfahrener Experte im Sozialbereich mit einer langjährigen Berufstätigkeit als CEO sozialer Einrichtungen. Er verfügt über tiefgehendes Wissen über die Entwicklungen im Sozialsektor und deren gesellschaftliche Anforderungen und Auswirkungen. Zusätzlich ist er in verschiedenen Vorstands- und Verwaltungsratsmandaten tätig, darunter bei ARTISET, dem nationalen Dachverband von Institutionen für Menschen mit Unterstützungsbedarf, dem Schweizerischen Arbeitgeberverband (SAV) und als Verwaltungsratspräsident der Conclood AG.
              </p>
            </div>
          </div>
        </div>
        <div class="acctitle">
          <h2>Anreise</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid01">
              <p>
                <strong>Funk Gruppe</strong> <br>
                Henric Petri-Strasse 12, 4051 Basel
              </p>
              <p>
                <strong>Anreise mit dem ÖV:</strong> <br>
                Ab Bahnhof SBB mit 1er-Tram bis Kirschgarten, 3 Gehminuten entfernt
              </p>
              <p class="noline">
                <strong>Anreise mit dem PW:</strong> <br> Parkhaus Drachencenter oder Parkhaus Anfos</p>
            </div>
          </div>
        </div>
      </article>
      
      <div id="anmeldung" class="containerform">
            <h2>Anmeldung</h2>
            <p>Die Teilnehmerzahl ist beschränkt. Die Anmeldungen werden nach Eingang berücksichtigt.</p>
            <?php require_once('form.php'); ?>

            <form id="contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
              
              <fieldset class="checkbox">
                <div>
                  <input class="radio" type="radio" id="checkbox1" name="teilnahme" value="Ja, ich nehme gerne teil" tabindex="1" 
                  <?= (isset($teilnahme) && $teilnahme == "Ja, ich nehme gerne teil") ? "checked" : "" ?>>
                  <label for="checkbox1">Ja, ich nehme gerne teil</label>
                </div>
                <div>
                  <input class="radio" type="radio" id="checkbox2" name="teilnahme" value="Leider bin ich verhindert" tabindex="2"
                  <?= (isset($teilnahme) && $teilnahme == "Leider bin ich verhindert") ? "checked" : "" ?>>
                  <label for="checkbox2">Leider bin ich verhindert</label>
                </div>
                <span class="error"><?= isset($errors["teilnahme"]) ? $errors["teilnahme"] : $teilnahme_error ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Vorname&#42;" type="text" name="vorname" value="<?= htmlspecialchars($vorname) ?>" tabindex="5" autofocus>
                <span class="error"><?= isset($errors["vorname"]) ? htmlspecialchars($errors["vorname"]) : htmlspecialchars($vorname_error) ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Name&#42;" type="text" name="name" value="<?= htmlspecialchars($name) ?>" tabindex="6">
                <span class="error"><?= isset($errors["name"]) ? htmlspecialchars($errors["name"]) : htmlspecialchars($name_error) ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Firma&#42;" type="text" name="firma" value="<?= htmlspecialchars($firma) ?>" tabindex="7">
                <span class="error"><?= isset($errors["firma"]) ? htmlspecialchars($errors["firma"]) : htmlspecialchars($firma_error) ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Email&#42;" type="text" name="email" value="<?= htmlspecialchars($email) ?>" tabindex="8">
                <span class="error"><?= isset($errors["email"]) ? htmlspecialchars($errors["email"]) : htmlspecialchars($email_error) ?></span>
              </fieldset>

              <fieldset>
                <textarea placeholder="Mitteilung" name="mitteilung" tabindex="9" rows="5"><?= htmlspecialchars($mitteilung) ?></textarea>
                <span class="error"><?= isset($errors["mitteilung"]) ? htmlspecialchars($errors["mitteilung"]) : htmlspecialchars($mitteilung_error) ?></span>
              </fieldset>

              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Anfrage senden</button>
              </fieldset>
            </form>

            <div id="popup" class="popup">
              <h1>Vielen Dank für Ihr Interesse!</h1> 
              <p>Ihre An- oder Abmeldung haben wir erhalten. Eine persönliche Bestätigung Ihrer Anmeldung erhalten Sie in den nächsten Tagen per E-Mail.<br><br>
              Herzliche Grüsse <br>
              Philipp Buser <br>
              Leiter Niederlassung Basel</p>
              <button id="closePopup">Alles klar!</button>
            </div>
      </div> 
    </section>

    <script>
      function showPopup() {
          document.getElementById('popup').style.display = 'block';
      }
      document.getElementById('closePopup').addEventListener('click', function() {
          document.getElementById('popup').style.display = 'none';
      });

      <?php if (isset($success)) { ?>
          showPopup();
      <?php } ?>
    </script>

    <?php require_once 'footer.php'; ?>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.6.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>