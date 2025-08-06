<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>FAQ - Dark Web Detector</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.fog.min.js"></script>
<style>
* {margin: 0; padding: 0; box-sizing: border-box;}
body {
  font-family: 'Orbitron', sans-serif;
  color: #0ff;
  overflow-x: hidden;
}
#vanta-bg {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0; left: 0;
  z-index: -1;
}

/* Navbar */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: rgba(18,18,18,0.8);
  padding: 15px 20px;
  position: relative;
  z-index: 1000;
}
nav .logo {
  color: #0ff;
  font-size: 22px;
  font-weight: bold;
}
nav ul {
  display: flex;
  list-style: none;
}
nav ul li {
  margin-left: 20px;
}
nav ul li a {
  text-decoration: none;
  color: #0ff;
  transition: 0.3s;
}
nav ul li a:hover {
  color: #fff;
}
.menu-toggle {
  display: none;
  font-size: 24px;
  cursor: pointer;
  color: #0ff;
}
@media (max-width: 768px) {
  nav ul {
    display: none;
    flex-direction: column;
    background: rgba(0,0,0,0.9);
    position: absolute;
    top: 60px;
    right: 0;
    width: 200px;
    padding: 15px;
    border-left: 1px solid #0ff;
  }
  nav ul.active {display: flex;}
  .menu-toggle {display: block;}
}

/* FAQ Section */
.faq-container {
  max-width: 900px;
  margin: auto;
  padding: 80px 20px;
}
.faq-container h1 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 40px;
  text-shadow: 0 0 10px rgba(0,255,255,0.5);
}

/* Accordion Buttons */
.accordion {
  background: rgba(0, 0, 0, 0.4);
  backdrop-filter: blur(10px);
  color: #0ff;
  cursor: pointer;
  padding: 18px 20px;
  width: 100%;
  border: 1px solid rgba(0,255,255,0.2);
  text-align: left;
  outline: none;
  font-size: 16px;
  font-weight: bold;
  transition: all 0.3s ease;
  margin-bottom: 10px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0,255,255,0.1);
}
.accordion:hover {
  background: rgba(0,255,255,0.05);
  box-shadow: 0 0 15px rgba(0,255,255,0.3);
}

/* Panel */
.panel {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease, padding 0.3s ease;
  background-color: rgba(10,10,10,0.6);
  border-left: 2px solid #0ff;
  border-radius: 0 0 8px 8px;
}
.panel p {
  color: #ccc;
  font-size: 15px;
  line-height: 1.6;
  padding: 0 15px 15px 15px;
}

/* Switch button */
.switch-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background: #0ff;
  color: #000;
  border: none;
  padding: 8px 16px;
  font-size: 14px;
  border-radius: 6px;
  cursor: pointer;
  z-index: 1001;
}
.switch-btn:hover {background: #0cc;}
</style>
</head>
<body>

<div id="vanta-bg"></div>

<nav>
  <div class="logo">Dark Web Detector</div>
  <span class="menu-toggle" onclick="toggleMenu()">☰</span>
  <ul id="menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="features.php">Features</a></li>
    <li><a href="price.php">Pricing</a></li>
    <li><a href="faq.php">FAQ</a></li>
  </ul>
</nav>

<div class="faq-container">
  <h1>Frequently Asked Questions</h1>
  
  <button class="accordion">What is Dark Web Detector?</button>
  <div class="panel">
    <p>Dark Web Detector scans hidden parts of the internet to find if your personal information is being misused or sold.</p>
  </div>

  <button class="accordion">Is my data safe?</button>
  <div class="panel">
    <p>Yes, all scans are fully encrypted, and we never store sensitive user data.</p>
  </div>

  <button class="accordion">How often should I scan?</button>
  <div class="panel">
    <p>We recommend scanning at least once a week to stay ahead of potential threats.</p>
  </div>

  <button class="accordion">What payment methods are supported?</button>
  <div class="panel">
    <p>We support UPI, Credit/Debit Cards, and Net Banking through secure gateways like Razorpay.</p>
  </div>
</div>

<button class="switch-btn" onclick="switchBackground()">Switch Background</button>

<footer style="text-align:center; padding:20px; color:#aaa;">
  © 2025 Dark Web Detector | Stay safe, stay secure 🔒
</footer>

<script>
let vantaEffect;
let currentEffect = "net";

function loadNet() {
  if (vantaEffect) vantaEffect.destroy();
  vantaEffect = VANTA.NET({
    el: "#vanta-bg",
    mouseControls: true,
    touchControls: true,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x00ffff,
    backgroundColor: 0x0a0a0a,
    points: 12.00,
    maxDistance: 20.00,
    spacing: 15.00
  });
}
function loadFog() {
  if (vantaEffect) vantaEffect.destroy();
  vantaEffect = VANTA.FOG({
    el: "#vanta-bg",
    highlightColor: 0x00ffff,
    midtoneColor: 0x0ff,
    lowlightColor: 0x000000,
    baseColor: 0x0a0a0a,
    blurFactor: 0.5,
    speed: 1.50,
    zoom: 0.8
  });
}
function switchBackground() {
  if (currentEffect === "net") { loadFog(); currentEffect = "fog"; }
  else { loadNet(); currentEffect = "net"; }
}
function toggleMenu() {
  document.getElementById("menu").classList.toggle("active");
}

loadNet();

/* Accordion FAQ */
let acc = document.getElementsByClassName("accordion");
for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      panel.style.padding = "0";
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      panel.style.padding = "0 0 15px 0";
    }
  });
}
</script>

</body>
</html>
