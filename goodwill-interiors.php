<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Goodwill Interiors</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root{
    --cream-top:#FDF0DC;
    --cream-bot:#F8DEB8;
    --ink:#2B2B2B;
    --red:#E63329;
    --card:#FFFFFF;
    --font:"Poppins",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    --bg-img:url("https://goodwillinteriors.com/assets/images/background.png");
  }

  *{margin:0;padding:0;box-sizing:border-box;}

  html,body{height:100%;font-family:var(--font);color:var(--ink);-webkit-font-smoothing:antialiased;}

  /* ---- FULL-SCREEN STAGE: bg image covers whole viewport, centered ---- */
  .stage{
    position:relative;
    width:100%;
    height:100vh;
    height:100dvh;
    background-image:var(--bg-img);
    background-size:cover;
    background-position:center center;
    background-repeat:no-repeat;
    overflow:hidden;
    display:flex;
    flex-direction:column;
  }

  /* warm cream colour overlay on top of the image */
  .stage::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(180deg,
      rgba(253,240,220,.90) 0%,
      rgba(253,240,220,.82) 35%,
      rgba(248,222,184,.78) 100%);
    z-index:0;
    pointer-events:none;
  }

  /* centered content column */
  .content{
    position:relative;z-index:1;
    width:100%;
    max-width:520px;
    margin:0 auto;          /* center on desktop */
    flex:1;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    padding:14px 35px 65px; /* bottom space for social bar */
    overflow:hidden;
  }

  /* ---------- LOGO ---------- */
  .logo{display:flex;justify-content:right;margin-bottom:8px;}
  .logo img{height:34px;width:auto;object-fit:contain;}

  /* ---------- INTRO ---------- */
  .intro{
      font-size:12.5px;
      line-height:1.3;
      font-weight:400;
      color:#3a3a3a;
      margin-bottom:10px;
      text-align:justify;
  }
  .intro b{font-weight:600;color:#222;}

  /* ---------- HEADING ---------- */
  .range-title{
    text-align:center;color:var(--red);font-weight:700;
    font-size:18px;letter-spacing:.5px;
  }

  /* ---------- PRODUCT BUTTONS (all centered, equal width) ---------- */
  .products{display:flex;flex-direction:column;align-items:center;gap:7px;flex:1;justify-content:center;}
  .pbtn{
    width:100%;
    max-width:380px;
    display:flex;align-items:center;justify-content:center;text-align:center;
    background:var(--card);
    border:1.2px solid var(--red);
    border-radius:10px;
    padding:15px 12px;
    font-size:13.5px;
    font-weight:600;
    line-height:1.15;
    letter-spacing:.2px;
    color:#222;
    text-decoration:none;
    box-shadow:0 3px 9px rgba(0,0,0,.08);
    transition:transform .18s ease,box-shadow .18s ease,background .18s ease;
  }
  .pbtn:active{transform:scale(.98);}
  .pbtn:hover{background:#fff7ef;box-shadow:0 6px 14px rgba(230,51,41,.18);}
  .pbtn:focus-visible{outline:2px solid var(--red);outline-offset:2px;}

  /* ---------- SHOWROOM ---------- */
  .showroom{position:relative;z-index:1;margin-top:10px;text-align:center;}
  .showroom h3{color:var(--red);font-size:14px;font-weight:700;letter-spacing:.5px;margin-bottom:2px;}
  .showroom p{font-size:11px;line-height:1.3;color:#2a2a2a;font-weight:500;}
  .showroom a{color:#2a2a2a;text-decoration:none;}

  /* ---------- STICKY SOCIAL BAR (full-width, always bottom) ---------- */
  .social-bar{
    position:fixed;
    bottom:0;left:0;right:0;
    display:flex;
    z-index:50;
    box-shadow:0 -3px 12px rgba(0,0,0,.18);
  }
  .social-bar a{
    flex:1;display:flex;align-items:center;justify-content:center;gap:5px;
    padding:9px 6px;
    color:#fff;font-weight:600;font-size:12.5px;
    text-decoration:none;letter-spacing:.3px;font-family:var(--font);
  }
  .social-bar a.fb{background:#1877F2;}
  .social-bar a.ig{background:linear-gradient(135deg,#f9ce34 0%,#ee2a7b 45%,#6228d7 100%);}
  .social-bar a:active{filter:brightness(.92);}
  .social-bar svg{width:14px;height:14px;fill:#fff;}
</style>
</head>
<body>
  <div class="stage">
    <div class="content">

      <!-- LOGO -->
      <div class="logo">
        <img src="https://goodwillinteriors.com/assets/images/logos/dark-logo.png" alt="Goodwill Interiors" />
      </div>

      <!-- INTRO -->
      <p class="intro">
        <b>GOODWILL INTERIORS</b> A trusted name in premium interior surface
        solutions. Specializing in Wooden Flooring, Wall Paneling &amp; Decking,
        we proudly serve customers nationwide through our authorized dealers and
        distributors.
      </p>

     

      <!-- BUTTONS -->
      <div class="products">
           <!-- HEADING -->
      <h2 class="range-title">OUR PRODUCTS RANGE</h2>
        <a class="pbtn" href="https://drive.google.com/drive/folders/1mhsRbo8AlJnPq0ICqqWJFlKFPT7x1t1Y?usp=drive_link" target="_blank">DELACOUR WPC DECKING &amp; CLADDING</a>
        <a class="pbtn" href="https://drive.google.com/drive/folders/1yMXJFY1FGHmyAZEz7p-rkSIFhvKtPiCW?usp=drive_link" target="_blank">TRUECOUR FLOORS</a>
        <a class="pbtn" href="https://drive.google.com/drive/folders/19WNcIL9Ccbw7djEJCzeBFCvDzi1xdjYU?usp=drive_link" target="_blank">DECKWALK WOOD</a>
        <a class="pbtn" href="https://drive.google.com/drive/folders/1B1Z_YzrpMdx48sHMIMwiDV1eGJQSzxic?usp=drive_link" target="_blank">TRUECOUR VENEERS</a>
        <a class="pbtn" href="https://drive.google.com/drive/folders/1Ff9TJFzunPLmzzmXAw9fkCzajUtUE9BN?usp=drive_link" target="_blank">COMPANY PROFILE</a>
      </div>

      <!-- SHOWROOM -->
      <div class="showroom">
        <h3>SHOWROOM :</h3>
        <p>288, Block B, Sector 26A, Gurugram, Haryana 122002<br>
        <a href="https://www.goodwillinterior.com" target="_blank" rel="noopener">www.goodwillinterior.com</a></p>
      </div>
    </div>

    <!-- STICKY SOCIAL BAR -->
    <nav class="social-bar" aria-label="Social links">
      <a class="fb" href="https://www.facebook.com/profile.php?id=61574343180297" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z"/></svg>
        Facebook
      </a>
      <a class="ig" href="https://www.instagram.com/goodwill.interiors/" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.7 3.7 0 0 1-1.38-.9 3.7 3.7 0 0 1-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16zm0 3.68A6.16 6.16 0 1 0 18.16 12 6.16 6.16 0 0 0 12 5.84zm0 10.16A4 4 0 1 1 16 12a4 4 0 0 1-4 4zm6.41-10.84a1.44 1.44 0 1 0 1.44 1.44 1.44 1.44 0 0 0-1.44-1.44z"/></svg>
        Instagram
      </a>
    </nav>
  </div>
</body>
</html>