<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The Green Hunters — Micromobility Fleet Service, Bremen</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Expanded:wght@700;800&family=Barlow+Condensed:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    <form id="contact-form">
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
      <span class="form-note">This form doesn't send yet — hook it up to a route/controller to go live.</span>
    </form>
  </div>
</section>

<footer>
  <div class="wrap foot-inner">
    <span>© 2026 The Green Hunters UG — Bremen, Germany</span>
    <span>Scooter fleet service · Cleaning · Rebalance · Battery · Transport · Repair</span>
  </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
