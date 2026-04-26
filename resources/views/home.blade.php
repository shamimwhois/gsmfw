<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover" />
    <meta name="description" content="Advanced Science Fiction Motion Graphic Portfolio of MD SHAMIM HOSSAIN." />
    <meta name="theme-color" content="#05070f" />
    <meta name="color-scheme" content="dark" />
    <title>MD SHAMIM HOSSAIN | Advanced Sci-Fi HUD Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;800&family=Rajdhani:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              night: "#05070f",
              panel: "#091322",
              cyanx: "#2af6ff",
              magx: "#ff3a98",
              violetx: "#9657ff"
            }
          }
        }
      };
    </script>
    <link rel="stylesheet" href="./assets/css/styles.css" />
  </head>
  <body class="bg-night text-slate-200 selection:bg-cyanx/30" data-theme="dark_cyan">
    <div id="matrixBg" class="matrix-bg" aria-hidden="true"></div>
    <div id="hudLoader" class="hud-loader" role="status" aria-live="polite" style="display: none;">
      <div class="hud-loader-core">
        <div class="loader-ring"></div>
        <div class="loader-ring loader-ring-alt"></div>
        <p class="font-['Orbitron'] text-cyanx tracking-[0.15em] text-sm">HUD BOOT SEQUENCE</p>
        <p id="loaderStatus" class="text-slate-300 mt-2 text-sm">Initializing Core</p>
      </div>
    </div>
    <div class="hud-grid" aria-hidden="true"></div>
    <header class="site-header sticky top-0 z-40 border-b border-cyanx/20 backdrop-blur bg-black/25">
      <nav
        class="max-w-7xl mx-auto px-4 sm:px-6 py-3 md:py-4 flex items-center justify-between gap-2 md:gap-3"
        aria-label="Primary"
      >
        <a
          href="#hero"
          class="font-['Orbitron'] tracking-[0.2em] text-cyanx text-sm sm:text-base shrink-0 min-w-0"
        >
          MD SHAMIM HOSSAIN
        </a>
        <div class="flex items-center gap-2 md:gap-4 md:flex-1 md:justify-end">
          <ul
            class="hidden md:flex gap-4 lg:gap-6 text-sm font-semibold uppercase tracking-wider flex-wrap justify-end"
          >
            <li><a href="#hero" class="nav-link">Home</a></li>
            <li><a href="#about" class="nav-link">About</a></li>
            <li><a href="#stack" class="nav-link">Packages</a></li>
            <li><a href="#skills" class="nav-link">Skills</a></li>
            <li><a href="#projects" class="nav-link">Projects</a></li>
            <li><a href="#services" class="nav-link">Services</a></li>
            <li><a href="#timeline" class="nav-link">Timeline</a></li>
            <li><a href="#faq-section" class="nav-link">FAQ</a></li>
            <li><a href="./blog.html" class="nav-link">Blog</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
          </ul>
          <button
            type="button"
            id="navMobileToggle"
            class="nav-mobile-toggle md:hidden hud-btn text-xs shrink-0"
            aria-expanded="false"
            aria-controls="navMobilePanel"
            aria-label="Open site menu"
          >
            Menu
          </button>
          <select id="themeSelect" class="hud-select text-xs shrink-0 max-w-[9.5rem]" aria-label="Theme Switcher"></select>
        </div>
      </nav>
      <div
        id="navMobileBackdrop"
        class="nav-mobile-backdrop"
        aria-hidden="true"
        hidden
      ></div>
      <div
        id="navMobilePanel"
        class="nav-mobile-panel"
        role="dialog"
        aria-modal="true"
        aria-labelledby="navMobileTitle"
        hidden
      >
        <p id="navMobileTitle" class="nav-mobile-panel-title">Navigate</p>
        <ul class="nav-mobile-list" role="list">

          <li><a href="#hero" class="nav-mobile-link">Home</a></li>
          <li><a href="#about" class="nav-mobile-link">About</a></li>
          <li><a href="#stack" class="nav-mobile-link">Packages</a></li>
          <li><a href="#skills" class="nav-mobile-link">Skills</a></li>
          <li><a href="#projects" class="nav-mobile-link">Projects</a></li>
          <li><a href="#services" class="nav-mobile-link">Services</a></li>
          <li><a href="#timeline" class="nav-mobile-link">Timeline</a></li>
          <li><a href="#faq-section" class="nav-mobile-link">FAQ</a></li>
          <li><a href="./blog.html" class="nav-mobile-link">Blog</a></li>
        </ul>
      </div>
    </header>

    <main>
      <div class="corner-accent top-left" aria-hidden="true"></div>
      <div class="corner-accent top-right" aria-hidden="true"></div>
      <div class="corner-accent bottom-left" aria-hidden="true"></div>
      <div class="corner-accent bottom-right" aria-hidden="true"></div>
      <div id="particles" class="particles" aria-hidden="true"></div>
      <section
        id="hero"
        class="max-w-7xl mx-auto px-4 sm:px-6 py-8 sm:py-12 lg:py-16 grid lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-10 items-center"
      >
        <div class="space-y-6 reveal hero-content">
          <p class="text-cyanx tracking-[0.3em] uppercase text-xs font-semibold">Online // Portfolio</p>
          <div class="hero-name-wrap">
            <h1 class="hero-name-line glitch-text" id="glitchText"></h1>
            <span class="cursor-blink" id="cursorBlink"></span>
          </div>
          <h2 class="font-['Orbitron'] text-xl sm:text-2xl text-violetx subtitle" id="heroSubtitle">
            <span id="typewriter"></span><span class="cursor-bar">|</span>
          </h2>
          <p class="max-w-xl text-slate-300 text-lg">
            Senior Laravel and PHP Specialist, Software Architect Engineer delivering
            high-performance systems with futuristic design precision.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="#projects" class="hud-btn">View Projects</a>
            <a href="#services" class="hud-btn hud-btn-alt">Buy Services</a>
          </div>
        </div>
        <div class="relative flex justify-center reveal">
          <div class="floating">
            <div class="electric-frame">
              <img
                src="/assets/image/pic.jpg"
                alt="Portrait of MD SHAMIM HOSSAIN"
                class="w-full h-full object-cover"
                loading="lazy"
              />
            </div>
          </div>
        </div>
      </section>

      <section
        id="about"
        class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-20 section-hud-frame reveal scroll-anchor"
      >
        <h3 class="split-heading">ABOUT<span class="split-heading__gap" aria-hidden="true">_</span>ME</h3>
        <p class="hud-kicker">// mission profile</p>
        <div class="about-panel">
          <div class="about-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M12 3l8 4v6c0 5-3.5 9-8 10-4.5-1-8-5-8-10V7l8-4z" />
              <path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="about-copy text-theme">
            <p>
              I am <strong>MD SHAMIM HOSSAIN</strong>, a Senior Laravel and PHP Specialist and Software
              Architect Engineer focused on resilient backend architecture, scalable API design, and
              polished user-first digital systems.
            </p>
            <p>
              This HUD portfolio represents my mission profile: engineer reliable software platforms,
              optimize delivery pipelines, and transform business goals into production-grade
              applications with measurable impact.
            </p>
          </div>
          <div class="about-stat-grid">
            <div class="about-stat reveal">
              <p class="about-stat__value about-stat__value--cyan">8+</p>
              <p class="about-stat__label">Years online</p>
            </div>
            <div class="about-stat reveal">
              <p class="about-stat__value about-stat__value--mag">150+</p>
              <p class="about-stat__label">Projects shipped</p>
            </div>
            <div class="about-stat reveal">
              <p class="about-stat__value about-stat__value--cyan">24/7</p>
              <p class="about-stat__label">Support mindset</p>
            </div>
            <div class="about-stat reveal">
              <p class="about-stat__value about-stat__value--mag">100%</p>
              <p class="about-stat__label">Mission focus</p>
            </div>
          </div>
        </div>
      </section>

      <section id="stack" class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-20 reveal scroll-anchor">
        <h3 class="section-title">Package & Tech Command Center</h3>
        <div class="mt-8 flex flex-wrap gap-3" role="tablist" aria-label="Tech stack tabs">
          <button class="tab-btn active" data-tab="javascript" role="tab" aria-selected="true">JavaScript</button>
          <button class="tab-btn" data-tab="php" role="tab" aria-selected="false">PHP</button>
          <button class="tab-btn" data-tab="python" role="tab" aria-selected="false">Python</button>
          <button class="tab-btn" data-tab="managers" role="tab" aria-selected="false">Package Managers</button>
        </div>
        <div id="tabPanels" class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-5"></div>
      </section>

      <section id="skills" class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-20 reveal scroll-anchor">
        <h3 class="section-title">Skills Matrix</h3>
        <div id="skillsGrid" class="mt-8 grid md:grid-cols-2 gap-6"></div>
      </section>

      <section id="projects" class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-20 reveal scroll-anchor">
        <h3 class="section-title">Project Previews</h3>
        <div id="projectGrid" class="mt-8 grid lg:grid-cols-3 gap-6"></div>
      </section>

      <section id="services" class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-20 reveal scroll-anchor">
        <h3 class="split-heading">SERVICES</h3>
        <p class="hud-kicker">// choose your plan</p>
        <div class="service-tabs-wrap">
          <div
            class="service-tabs"
            role="tablist"
            aria-label="Service categories"
          >
            <button
              type="button"
              class="service-tab active"
              role="tab"
              id="service-tab-web-design"
              aria-selected="true"
              aria-controls="serviceGrid"
              data-category="web_design"
            >
              Web Design
            </button>
            <button
              type="button"
              class="service-tab"
              role="tab"
              id="service-tab-web-dev"
              aria-selected="false"
              aria-controls="serviceGrid"
              data-category="web_dev"
            >
              Web Dev
            </button>
            <button
              type="button"
              class="service-tab"
              role="tab"
              id="service-tab-marketing"
              aria-selected="false"
              aria-controls="serviceGrid"
              data-category="marketing"
            >
              Marketing
            </button>
            <button
              type="button"
              class="service-tab"
              role="tab"
              id="service-tab-seo"
              aria-selected="false"
              aria-controls="serviceGrid"
              data-category="seo"
            >
              SEO
            </button>
          </div>
        </div>
        <div id="serviceGrid" class="pricing-grid" role="tabpanel" aria-label="Pricing tiers"></div>
      </section>

      <section
        id="timeline"
        class="max-w-7xl mx-auto px-4 sm:px-6 py-16 sm:py-24 section-hud-frame reveal scroll-anchor section-post-services"
      >
        <h3 class="timeline-section-title">Project Timeline</h3>
        <div id="projectTimeline" class="timeline-mount"></div>
      </section>

      <section
        id="faq-section"
        class="max-w-7xl mx-auto px-4 sm:px-6 py-16 sm:py-24 reveal scroll-anchor section-post-services"
      >
        <h3 class="split-heading split-heading--sm">FAQ Protocol</h3>
        <p class="hud-kicker">// common signals</p>
        <div id="faq" class="faq-mount space-y-4"></div>
      </section>
    </main>

    <footer id="contact" class="border-t border-cyanx/20 mt-12 sm:mt-20 footer-shell scroll-anchor">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-14 relative">
        <p class="font-['Orbitron'] text-2xl glitch" data-text="Transmit Contact Signal">
          Transmit Contact Signal
        </p>
        <div class="grid md:grid-cols-3 gap-8 mt-6">
          <div>
            <p class="text-slate-300">deendayalan.pv@example.com</p>
            <p class="text-slate-300">+91 90000 00000</p>
          </div>
          <div>
            <p class="font-['Orbitron'] text-cyanx text-sm uppercase tracking-[0.15em]">Quick Access</p>
            <div class="mt-3 flex flex-col gap-2 text-sm">
              <a href="./blog.html" class="nav-link">Blog Nodes</a>
              <a href="./admin.html" class="nav-link">Admin Console</a>
              <a href="#stack" class="nav-link">Package Center</a>
            </div>
          </div>
          <div>
            <p class="font-['Orbitron'] text-cyanx text-sm uppercase tracking-[0.15em]">Social Streams</p>
            <div class="mt-3 flex-justify-content-space-between gap-4 text-sm">
              <a href="https://www.facebook.com/{username}" class="nav-link">FaceBook</a>
              <a href="https://github.com/{username}" class="nav-link">GitHub</a>
              <a href="https://t.me/{username}" class="nav-link">Telegram</a>
              <a href="https://wa.me/{number}" class="nav-link">WhatsApp</a>
            </div>
          </div>
        </div>
        <p class="mt-8 text-xs text-slate-500 tracking-[0.2em] uppercase">
          MD SHAMIM HOSSAIN | Senior Laravel & PHP Specialist | Software Architect Engineer
        </p>
      </div>
    </footer>

    <button id="assistantToggle" class="assistant-toggle hud-btn text-xs" aria-expanded="false">
      Support AI
    </button>
    <aside id="assistantPanel" class="assistant-panel" aria-hidden="true">
      <p class="font-['Orbitron'] text-cyanx text-sm">Customer Support AI</p>
      <div class="mt-3 space-y-2 text-sm">
        <button class="hud-btn text-xs w-full assistant-action" data-action="pricing">Pricing Guidance</button>
        <button class="hud-btn text-xs w-full assistant-action" data-action="delivery">Delivery Time</button>
        <button class="hud-btn text-xs w-full assistant-action" data-action="package">Best Package Help</button>
        <button class="hud-btn text-xs w-full assistant-action" data-action="status">Project Status</button>
      </div>
      <div class="mt-3 flex gap-2">
        <input id="assistantInput" class="hud-input text-sm" placeholder="Ask pricing, delivery, or packages..." />
        <button id="assistantSend" class="hud-btn text-xs">Send</button>
      </div>
      <p id="assistantResponse" class="mt-3 text-slate-300 text-sm"></p>
    </aside>

    <dialog id="packageModal" class="preview-modal" aria-labelledby="packageTitle">
      <div class="preview-shell">
        <button id="closePackageModal" class="hud-btn text-xs ml-auto">Close</button>
        <h5 id="packageTitle" class="font-['Orbitron'] text-cyanx mt-4 text-xl"></h5>
        <p id="packageDescription" class="mt-3 text-slate-300"></p>
        <ul id="packageFeatures" class="mt-4 list-disc pl-5 text-slate-300 text-sm"></ul>
        <div id="packageCommands" class="mt-4 space-y-2"></div>
        <div class="mt-4 flex gap-3">
          <a id="packageDocs" href="#" target="_blank" rel="noreferrer" class="hud-btn text-xs">Docs</a>
          <a id="packageRepo" href="#" target="_blank" rel="noreferrer" class="hud-btn text-xs">Repository</a>
        </div>
      </div>
    </dialog>

    <dialog id="previewModal" class="preview-modal">
      <div class="preview-shell">
        <button id="closeModal" class="hud-btn text-xs ml-auto">Close</button>
        <h5 id="modalTitle" class="font-['Orbitron'] text-cyanx mt-4 text-xl"></h5>
        <img id="modalThumb" src="" alt="" class="w-full h-52 object-cover mt-4 border border-cyanx/30" />
        <p id="modalDesc" class="mt-3 text-slate-300"></p>
        <div id="modalTech" class="mt-3 flex flex-wrap gap-2"></div>
        <a id="modalLink" href="#" target="_blank" rel="noreferrer" class="hud-btn mt-6 inline-block">Open Live Demo</a>
      </div>
    </dialog>

    <script src="./assets/js/hud-chrome.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var mobileLogout = document.getElementById('logoutBtnMobile');
        if (mobileLogout) {
          mobileLogout.addEventListener('click', function(e) {
            e.preventDefault();
            Auth.logout();
          });
        }
      });
    </script>
  </body>
</html>
