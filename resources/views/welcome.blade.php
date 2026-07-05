<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The Green Hunters — Micromobility Fleet Service, Bremen</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Expanded:wght@700;800&family=Barlow+Condensed:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">
</head>
<body>

<header>
  <div class="nav-inner">
    <div class="logo"><span class="dot"></span>The Green Hunters</div>
    <nav>
      <ul>
        <li><a href="#services">Services</a></li>
        <li><a href="#fleet">Fleet</a></li>
        <li><a href="#areas">Areas</a></li>
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

<section class="section" id="areas">
  <div class="wrap">
    <div class="section-head">
      <h2>Where we cover</h2>
      <p>Zones are ranked by priority based on scooter density and how often they need a visit — the lower the number, the more often a van is there.</p>
    </div>
    <div id="areas-map"></div>
    <div class="area-legend">
      <span><i class="dot dot-amber"></i> Prio 1–3 · daily coverage</span>
      <span><i class="dot dot-green"></i> Prio 4–6 · regular coverage</span>
      <span><i class="dot dot-open"></i> Prio 7–8 · coverage on request</span>
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

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
  var areas = [
    { lat: 53.0645, lng: 8.8036, prio: 1, name: 'Neustadt',      stat: '3 vans stationed · 42 stops this week', tier: 'high' },
    { lat: 53.1671, lng: 8.6208, prio: 2, name: 'Vegesack',      stat: '2 vans stationed · 26 stops this week', tier: 'high' },
    { lat: 53.0876, lng: 8.8368, prio: 3, name: 'Schwachhausen', stat: '2 vans stationed · 31 stops this week', tier: 'high' },
    { lat: 53.1231, lng: 8.7481, prio: 4, name: 'Überseestadt',  stat: '1 van stationed · 18 stops this week',  tier: 'mid' },
    { lat: 53.1073, lng: 8.7746, prio: 5, name: 'Walle',         stat: '1 van stationed · 15 stops this week',  tier: 'mid' },
    { lat: 53.0703, lng: 8.8459, prio: 6, name: 'Hastedt',       stat: '1 van stationed · 12 stops this week',  tier: 'mid' },
    { lat: 53.0937, lng: 8.8073, prio: 7, name: 'Findorff',      stat: 'No van stationed yet · coverage on request', tier: 'open' },
    { lat: 53.0333, lng: 8.7756, prio: 8, name: 'Obervieland',   stat: 'No van stationed yet · coverage on request', tier: 'open' }
  ];

  var tierColor = { high: '#F2A233', mid: '#3E9B67', open: '#7A8073' };

  function pinIcon(color) {
    var svg = '<svg width="30" height="40" viewBox="0 0 24 32" xmlns="http://www.w3.org/2000/svg">' +
      '<path d="M12 0C6.5 0 2 4.5 2 10c0 7.5 10 20 10 20s10-12.5 10-20C22 4.5 17.5 0 12 0z" ' +
      'fill="' + color + '" stroke="#1E2119" stroke-width="1.6"/>' +
      '<circle cx="12" cy="10" r="4" fill="#1E2119"/></svg>';
    return L.divIcon({
      html: svg,
      className: 'area-pin-icon',
      iconSize: [30, 40],
      iconAnchor: [15, 38],
      popupAnchor: [0, -34]
    });
  }

  var map = L.map('areas-map', { scrollWheelZoom: false }).setView([53.0850, 8.7900], 11);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors',
    maxZoom: 18
  }).addTo(map);

  areas.forEach(function (a) {
    L.marker([a.lat, a.lng], { icon: pinIcon(tierColor[a.tier]) })
      .addTo(map)
      .bindPopup(
        '<div class="map-popup">' +
        '<div class="map-popup-prio">Prio 0' + a.prio + '</div>' +
        '<div class="map-popup-name">' + a.name + '</div>' +
        '<div class="map-popup-stat">' + a.stat + '</div>' +
        '</div>'
      );
  });
</script>

</body>
</html>
