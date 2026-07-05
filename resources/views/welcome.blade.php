<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The Green Hunters — Micromobility Fleet Service, Bremen</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Expanded:wght@700;800&family=Barlow+Condensed:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --concrete:#E7E4DA;
    --concrete-dim:#D9D5C8;
    --ink:#1E2119;
    --asphalt:#2B2E28;
    --asphalt-2:#3A3E35;
    --amber:#F2A233;
    --amber-dim:#c9841f;
    --green:#3E9B67;
    --green-dim:#2F7A4F;
    --steel:#7A8073;
    --white:#FAF9F4;
    --danger:#C1502E;

    --display: 'Archivo Expanded', sans-serif;
    --condensed: 'Barlow Condensed', sans-serif;
    --body: 'Inter', sans-serif;
    --mono: 'IBM Plex Mono', monospace;
  }

  *{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    background:var(--concrete);
    color:var(--ink);
    font-family:var(--body);
    line-height:1.5;
    -webkit-font-smoothing:antialiased;
  }
  a{color:inherit;text-decoration:none;}
  img{max-width:100%;display:block;}

  .wrap{max-width:1180px;margin:0 auto;padding:0 28px;}

  ::selection{background:var(--amber);color:var(--ink);}
  :focus-visible{outline:3px solid var(--amber);outline-offset:2px;}

  /* ---------- NAV ---------- */
  header{
    position:sticky;top:0;z-index:50;
    background:var(--concrete);
    border-bottom:2px solid var(--ink);
  }
  .nav-inner{
    display:flex;align-items:center;justify-content:space-between;
    padding:16px 28px;max-width:1180px;margin:0 auto;
  }
  .logo{
    font-family:var(--condensed);
    font-weight:700;
    font-size:22px;
    letter-spacing:0.02em;
    display:flex;align-items:center;gap:10px;
    text-transform:uppercase;
  }
  .logo .dot{
    width:12px;height:12px;background:var(--green);
    display:inline-block;
    border:2px solid var(--ink);
  }
  nav ul{list-style:none;display:flex;gap:28px;}
  nav a{
    font-family:var(--condensed);
    font-size:17px;font-weight:600;
    text-transform:uppercase;letter-spacing:0.04em;
    padding:6px 2px;border-bottom:2px solid transparent;
    transition:border-color .15s ease;
  }
  nav a:hover{border-color:var(--amber);}
  .nav-cta{
    background:var(--ink);color:var(--white);
    padding:10px 18px;
    font-family:var(--condensed);font-weight:700;font-size:16px;
    text-transform:uppercase;letter-spacing:0.03em;
  }
  .nav-toggle{display:none;background:none;border:none;cursor:pointer;}

  /* ---------- HERO ---------- */
  .hero{
    padding:64px 0 56px;
    border-bottom:2px solid var(--ink);
  }
  .hero-grid{
    display:grid;grid-template-columns:1.1fr 1fr;gap:56px;align-items:end;
  }
  .eyebrow{
    font-family:var(--mono);font-size:13px;letter-spacing:0.12em;
    text-transform:uppercase;color:var(--green-dim);
    display:flex;align-items:center;gap:8px;margin-bottom:18px;
  }
  .eyebrow::before{
    content:"";width:8px;height:8px;background:var(--green);
    border-radius:50%;
    box-shadow:0 0 0 3px rgba(62,155,103,0.25);
  }
  h1{
    font-family:var(--display);
    font-size:clamp(38px,5vw,64px);
    line-height:1.02;
    letter-spacing:-0.01em;
    margin-bottom:22px;
  }
  h1 em{
    font-style:normal;color:var(--green-dim);
  }
  .hero p.lede{
    font-size:18px;color:#4A4D42;max-width:46ch;margin-bottom:28px;
  }
  .hero-actions{display:flex;gap:14px;flex-wrap:wrap;margin-bottom:36px;}
  .btn{
    font-family:var(--condensed);font-weight:700;font-size:18px;
    text-transform:uppercase;letter-spacing:0.03em;
    padding:14px 24px;
    border:2px solid var(--ink);
    display:inline-block;
    transition:transform .12s ease, box-shadow .12s ease;
  }
  .btn-primary{background:var(--amber);color:var(--ink);}
  .btn-primary:hover{transform:translate(-2px,-2px);box-shadow:4px 4px 0 var(--ink);}
  .btn-ghost{background:transparent;color:var(--ink);}
  .btn-ghost:hover{transform:translate(-2px,-2px);box-shadow:4px 4px 0 var(--ink);}

  .hero-meta{
    display:flex;gap:32px;font-family:var(--mono);font-size:13px;color:var(--steel);
  }
  .hero-meta strong{
    display:block;font-family:var(--display);font-size:26px;color:var(--ink);
  }

  /* ---- fleet board (signature element) ---- */
  .fleet-board{
    background:var(--ink);
    border:2px solid var(--ink);
    color:var(--white);
    font-family:var(--mono);
  }
  .fb-head{
    display:flex;justify-content:space-between;align-items:center;
    padding:12px 16px;border-bottom:1px solid var(--asphalt-2);
    font-size:12px;letter-spacing:0.1em;text-transform:uppercase;color:var(--steel);
  }
  .fb-head .live{color:var(--green);display:flex;align-items:center;gap:6px;}
  .fb-head .live::before{
    content:"";width:7px;height:7px;background:var(--green);border-radius:50%;
    animation:pulse 1.6s infinite;
  }
  @keyframes pulse{0%,100%{opacity:1;}50%{opacity:0.3;}}
  .van-row{
    display:grid;grid-template-columns:56px 1fr auto auto;
    gap:10px;align-items:center;
    padding:11px 16px;border-bottom:1px solid var(--asphalt-2);
    font-size:13px;
  }
  .van-row:last-child{border-bottom:none;}
  .van-id{color:var(--steel);}
  .van-task{color:var(--white);}
  .van-loc{color:var(--steel);font-size:12px;}
  .status{
    font-size:11px;padding:3px 8px;letter-spacing:0.06em;text-transform:uppercase;
    border:1px solid currentColor;white-space:nowrap;
  }
  .status.charging{color:var(--amber);}
  .status.transit{color:#6FA8DC;}
  .status.service{color:var(--green);}
  .status.standby{color:var(--steel);}
  .fb-foot{
    padding:10px 16px;font-size:12px;color:var(--steel);
    display:flex;justify-content:space-between;
    border-top:1px solid var(--asphalt-2);
  }

  /* ---------- SERVICES ---------- */
  .section{padding:72px 0;border-bottom:2px solid var(--ink);}
  .section-head{
    display:flex;justify-content:space-between;align-items:flex-end;
    margin-bottom:40px;gap:24px;flex-wrap:wrap;
  }
  h2{
    font-family:var(--display);font-size:clamp(28px,3.4vw,42px);
    letter-spacing:-0.01em;
  }
  .section-head p{max-width:40ch;color:#4A4D42;font-size:16px;}

  .services-grid{
    display:grid;grid-template-columns:repeat(3,1fr);gap:0;
    border:2px solid var(--ink);
  }
  .service-card{
    padding:28px 24px;border-right:2px solid var(--ink);border-bottom:2px solid var(--ink);
    background:var(--white);
    position:relative;
    transition:background .15s ease;
  }
  .services-grid .service-card:nth-child(3n){border-right:none;}
  .services-grid .service-card:nth-last-child(-n+3){border-bottom:none;}
  .service-card:hover{background:var(--concrete-dim);}
  .service-ticket{
    font-family:var(--mono);font-size:12px;color:var(--steel);
    letter-spacing:0.06em;margin-bottom:14px;
    display:flex;justify-content:space-between;
  }
  .service-card h3{
    font-family:var(--condensed);font-size:23px;font-weight:700;
    text-transform:uppercase;letter-spacing:0.01em;margin-bottom:10px;
  }
  .service-card p{font-size:15px;color:#4A4D42;}
  .service-card .tag{
    display:inline-block;margin-top:14px;font-family:var(--mono);font-size:11px;
    text-transform:uppercase;letter-spacing:0.06em;color:var(--green-dim);
    border:1px solid var(--green-dim);padding:3px 8px;
  }

  /* ---------- CAPACITY ---------- */
  .capacity{background:var(--asphalt);color:var(--white);}
  .capacity h2{color:var(--white);}
  .capacity .section-head p{color:#B9BDAF;}
  .cap-grid{
    display:grid;grid-template-columns:repeat(4,1fr);gap:2px;
    background:var(--asphalt-2);border:2px solid var(--asphalt-2);
  }
  .cap-cell{background:var(--asphalt);padding:26px 20px;}
  .cap-num{
    font-family:var(--display);font-size:42px;color:var(--amber);line-height:1;
  }
  .cap-label{
    font-family:var(--mono);font-size:12px;color:var(--steel);
    text-transform:uppercase;letter-spacing:0.08em;margin-top:8px;
  }
  .warehouse-note{
    margin-top:32px;padding:22px;border:1px solid var(--asphalt-2);
    display:flex;gap:18px;align-items:flex-start;
    font-family:var(--body);
  }
  .warehouse-note .icon{
    font-family:var(--mono);color:var(--green);font-size:13px;
    border:1px solid var(--green);padding:6px 9px;flex-shrink:0;
  }
  .warehouse-note p{color:#D3D6C9;font-size:15px;}

  /* ---------- PROCESS ---------- */
  .process-list{border-top:2px solid var(--ink);}
  .process-row{
    display:grid;grid-template-columns:100px 1fr 1.4fr;gap:24px;
    padding:26px 0;border-bottom:2px solid var(--ink);align-items:center;
  }
  .process-row .p-num{
    font-family:var(--mono);font-size:14px;color:var(--steel);
  }
  .process-row h4{
    font-family:var(--condensed);font-size:24px;font-weight:600;text-transform:uppercase;
  }
  .process-row p{color:#4A4D42;font-size:15px;max-width:52ch;}

  /* ---------- CONTACT ---------- */
  .contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:56px;}
  .contact-info h3{
    font-family:var(--condensed);font-size:22px;text-transform:uppercase;margin-bottom:14px;
  }
  .contact-info p{color:#4A4D42;margin-bottom:22px;max-width:42ch;}
  .info-row{
    display:flex;justify-content:space-between;padding:14px 0;
    border-bottom:1px solid var(--steel);font-family:var(--mono);font-size:14px;
  }
  .info-row span:first-child{color:var(--steel);text-transform:uppercase;letter-spacing:0.06em;font-size:12px;}

  form{display:flex;flex-direction:column;gap:16px;}
  label{
    font-family:var(--mono);font-size:12px;text-transform:uppercase;
    letter-spacing:0.06em;color:var(--steel);margin-bottom:6px;display:block;
  }
  input,select,textarea{
    width:100%;padding:12px 14px;border:2px solid var(--ink);
    background:var(--white);font-family:var(--body);font-size:15px;color:var(--ink);
  }
  textarea{resize:vertical;min-height:100px;}
  input:focus,select:focus,textarea:focus{outline:3px solid var(--amber);outline-offset:0;}
  .submit-btn{
    align-self:flex-start;background:var(--ink);color:var(--white);
    font-family:var(--condensed);font-weight:700;font-size:17px;text-transform:uppercase;
    letter-spacing:0.03em;padding:14px 26px;border:2px solid var(--ink);cursor:pointer;
  }
  .submit-btn:hover{background:var(--green-dim);border-color:var(--green-dim);}
  .form-note{font-family:var(--mono);font-size:12px;color:var(--steel);}

  footer{padding:28px 0;}
  .foot-inner{
    display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;
    font-family:var(--mono);font-size:12px;color:var(--steel);
  }

  @media (max-width:860px){
    .hero-grid{grid-template-columns:1fr;}
    .services-grid{grid-template-columns:1fr;}
    .services-grid .service-card{border-right:none !important;}
    .services-grid .service-card:not(:last-child){border-bottom:2px solid var(--ink) !important;}
    .cap-grid{grid-template-columns:1fr 1fr;}
    .process-row{grid-template-columns:1fr;gap:8px;}
    .contact-grid{grid-template-columns:1fr;}
    nav ul{display:none;}
    .nav-cta{font-size:14px;padding:8px 14px;}
  }
</style>
</head>
<body>

<header>
  <div class="nav-inner">
    <div class="logo"><span class="dot"></span>The Green Hunters</div>
    <nav>
      <ul>
        <li><a href="#services">Services</a></li>
        <li><a href="#fleet">Fleet</a></li>
        <li><a href="#process">Process</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <a href="#contact" class="nav-cta">Request Service</a>
  </div>
</header>

<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <div class="eyebrow">Bremen · On-street micromobility service</div>
      <h1>Every scooter<br>back on the street,<br><em>clean, charged, working.</em></h1>
      <p class="lede">We handle the parts of running a scooter fleet that don't happen on an app: cleaning, rebalancing, battery swaps, transport, and repair — six vans deep, every day.</p>
      <div class="hero-actions">
        <a href="#contact" class="btn btn-primary">Request Service</a>
        <a href="#services" class="btn btn-ghost">See What We Do</a>
      </div>
      <div class="hero-meta">
        <div><strong>6</strong>Service vans</div>
        <div><strong>5</strong>Service lines</div>
        <div><strong>1</strong>Charging warehouse</div>
      </div>
    </div>

    <div class="fleet-board">
      <div class="fb-head">
        <span>Fleet Status — Today</span>
        <span class="live">Live</span>
      </div>
      <div class="van-row">
        <span class="van-id">VAN 01</span>
        <span><span class="van-task">Battery swap route</span><br><span class="van-loc">Neustadt district</span></span>
        <span class="status service">Servicing</span>
      </div>
      <div class="van-row">
        <span class="van-id">VAN 02</span>
        <span><span class="van-task">Depleted units pickup</span><br><span class="van-loc">Warehouse loading bay</span></span>
        <span class="status charging">Loading</span>
      </div>
      <div class="van-row">
        <span class="van-id">VAN 03</span>
        <span><span class="van-task">Cleaning circuit</span><br><span class="van-loc">Vegesack</span></span>
        <span class="status service">Servicing</span>
      </div>
      <div class="van-row">
        <span class="van-id">VAN 04</span>
        <span><span class="van-task">Repair pickup — brake fault</span><br><span class="van-loc">Schwachhausen</span></span>
        <span class="status transit">En route</span>
      </div>
      <div class="van-row">
        <span class="van-id">VAN 05</span>
        <span><span class="van-task">Rebalancing — demand shift</span><br><span class="van-loc">Hbf → Überseestadt</span></span>
        <span class="status transit">En route</span>
      </div>
      <div class="van-row">
        <span class="van-id">VAN 06</span>
        <span><span class="van-task">Awaiting dispatch</span><br><span class="van-loc">Warehouse</span></span>
        <span class="status standby">Standby</span>
      </div>
      <div class="fb-foot">
        <span>Warehouse: 340 batteries on charge</span>
        <span>Updated 6 min ago</span>
      </div>
    </div>
  </div>
</section>

<section class="section" id="services">
  <div class="wrap">
    <div class="section-head">
      <h2>Five services.<br>One fleet doing all of them.</h2>
      <p>No subcontracting between jobs. The van that cleans a scooter can swap its battery and flag a repair in the same stop.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-ticket"><span>WO-01</span><span>Cleaning</span></div>
        <h3>Cleaning</h3>
        <p>Deck, wheels, and housing degreased and washed on a fixed rotation, so units don't sit out looking abandoned.</p>
        <span class="tag">On-street</span>
      </div>
      <div class="service-card">
        <div class="service-ticket"><span>WO-02</span><span>Rebalance</span></div>
        <h3>Rebalancing</h3>
        <p>We move scooters from low-demand corners to where riders actually are, tracked zone by zone through the day.</p>
        <span class="tag">Route-based</span>
      </div>
      <div class="service-card">
        <div class="service-ticket"><span>WO-03</span><span>Battery</span></div>
        <h3>Battery Swap</h3>
        <p>Depleted packs pulled and replaced with fully charged ones from the warehouse — no unit taken off the street to charge.</p>
        <span class="tag">Warehouse-backed</span>
      </div>
      <div class="service-card">
        <div class="service-ticket"><span>WO-04</span><span>Transport</span></div>
        <h3>Transport</h3>
        <p>Fleet relocation between zones, storage, or your depot, run by the same six vans that handle daily service.</p>
        <span class="tag">Van fleet</span>
      </div>
      <div class="service-card">
        <div class="service-ticket"><span>WO-05</span><span>Repair</span></div>
        <h3>Repair</h3>
        <p>Brakes, tires, throttle and electrical faults diagnosed on-site or pulled back to the warehouse for a full fix.</p>
        <span class="tag">Field + workshop</span>
      </div>
      <div class="service-card">
        <div class="service-ticket"><span>WO-06</span><span>Custom</span></div>
        <h3>Custom Scope</h3>
        <p>Running a fleet that needs something outside these five? Tell us the shape of the problem and we'll quote it.</p>
        <span class="tag">Talk to us</span>
      </div>
    </div>
  </div>
</section>

<section class="section capacity" id="fleet">
  <div class="wrap">
    <div class="section-head">
      <h2>What we run day to day</h2>
      <p>A dedicated warehouse and a fixed van fleet, sized for consistent daily coverage — not a one-off callout service.</p>
    </div>
    <div class="cap-grid">
      <div class="cap-cell"><div class="cap-num">06</div><div class="cap-label">Service vans</div></div>
      <div class="cap-cell"><div class="cap-num">01</div><div class="cap-label">Charging warehouse</div></div>
      <div class="cap-cell"><div class="cap-num">05</div><div class="cap-label">Service lines</div></div>
      <div class="cap-cell"><div class="cap-num">HB</div><div class="cap-label">Based in Bremen</div></div>
    </div>
    <div class="warehouse-note">
      <span class="icon">WH</span>
      <p>Every van runs out of one warehouse where swapped batteries are charged, tested, and staged for the next route — so a battery pulled off the street this morning can be back out on a different scooter by afternoon.</p>
    </div>
  </div>
</section>

<section class="section" id="process">
  <div class="wrap">
    <div class="section-head">
      <h2>How a job moves</h2>
      <p>From request to a scooter back in service.</p>
    </div>
    <div class="process-list">
      <div class="process-row">
        <span class="p-num">01</span>
        <h4>Request</h4>
        <p>You send us the scope — a zone to clean, a fault ticket, a rebalance target, or a standing daily route.</p>
      </div>
      <div class="process-row">
        <span class="p-num">02</span>
        <h4>Dispatch</h4>
        <p>A van gets assigned based on location and current load — most stops combine two or three service types at once.</p>
      </div>
      <div class="process-row">
        <span class="p-num">03</span>
        <h4>On-site work</h4>
        <p>Cleaning, battery swap, and minor repair happen where the scooter stands. Anything bigger goes back to the warehouse.</p>
      </div>
      <div class="process-row">
        <span class="p-num">04</span>
        <h4>Report back</h4>
        <p>You get confirmation of what was done, per unit, so your fleet records stay accurate without you chasing us for updates.</p>
      </div>
    </div>
  </div>
</section>

<section class="section" id="contact">
  <div class="wrap contact-grid">
    <div class="contact-info">
      <h3>Get your fleet on our route</h3>
      <p>Tell us your zone, your fleet size, and what's slipping — cleaning, batteries, rebalancing, or repairs. We'll come back with a plan and a quote.</p>
      <div class="info-row"><span>Company</span><span>The Green Hunters UG</span></div>
      <div class="info-row"><span>Base</span><span>Bremen, Germany</span></div>
      <div class="info-row"><span>Coverage</span><span>Bremen &amp; surrounding districts</span></div>
      <div class="info-row"><span>Response</span><span>Within 1 business day</span></div>
    </div>
    <form>
      <div>
        <label for="name">Your name</label>
        <input id="name" type="text" placeholder="Full name" required>
      </div>
      <div>
        <label for="company">Company / fleet operator</label>
        <input id="company" type="text" placeholder="Operator name">
      </div>
      <div>
        <label for="email">Email</label>
        <input id="email" type="email" placeholder="you@company.com" required>
      </div>
      <div>
        <label for="need">What do you need?</label>
        <select id="need">
          <option>Cleaning</option>
          <option>Rebalancing</option>
          <option>Battery swap</option>
          <option>Transport</option>
          <option>Repair</option>
          <option>Not sure yet — general inquiry</option>
        </select>
      </div>
      <div>
        <label for="details">Details</label>
        <textarea id="details" placeholder="Fleet size, zone, how often you need us"></textarea>
      </div>
      <button type="submit" class="submit-btn">Send Request</button>
      <span class="form-note">This form doesn't send yet — connect it to your inbox or CRM to go live.</span>
    </form>
  </div>
</section>

<footer>
  <div class="wrap foot-inner">
    <span>© 2026 The Green Hunters UG — Bremen, Germany</span>
    <span>Scooter fleet service · Cleaning · Rebalance · Battery · Transport · Repair</span>
  </div>
</footer>

<script>
  document.querySelector('form').addEventListener('submit', function(e){
    e.preventDefault();
    alert('Thanks — this form is a template. Wire it up to your email or CRM to receive real requests.');
  });
</script>

</body>
</html>
