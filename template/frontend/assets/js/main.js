const tabData = {
  javascript: [
    {
      icon: "JS",
      title: "React",
      version: "18.x",
      type: "UI Library",
      description: "Component-based frontend system for scalable interfaces.",
      cmd: "npm install react react-dom",
      features: ["Reusable components", "Large ecosystem", "Performance tooling"],
      installCommands: ["npm install react react-dom", "pnpm add react react-dom"],
      repoUrl: "https://github.com/facebook/react",
      docsUrl: "https://react.dev/"
    },
    {
      icon: "TW",
      title: "Tailwind CSS",
      version: "3.x",
      type: "Utility CSS",
      description: "Utility-first CSS framework for rapid, consistent styling.",
      cmd: "npm install -D tailwindcss",
      features: ["Utility classes", "Theme customization", "Responsive variants"],
      installCommands: ["npm install -D tailwindcss", "npx tailwindcss init -p"],
      repoUrl: "https://github.com/tailwindlabs/tailwindcss",
      docsUrl: "https://tailwindcss.com/docs"
    }
  ],
  php: [
    {
      icon: "LV",
      title: "Laravel",
      version: "11.x",
      type: "Framework",
      description: "Full-stack PHP framework for modern web applications.",
      cmd: "composer create-project laravel/laravel app",
      features: ["Routing + ORM", "Queue + jobs", "Blade templates"],
      installCommands: ["composer create-project laravel/laravel app"],
      repoUrl: "https://github.com/laravel/laravel",
      docsUrl: "https://laravel.com/docs"
    },
    {
      icon: "SM",
      title: "Symfony",
      version: "7.x",
      type: "Framework",
      description: "Flexible components and robust architecture for enterprise apps.",
      cmd: "composer create-project symfony/skeleton app",
      features: ["Reusable components", "DI container", "CLI tooling"],
      installCommands: ["composer create-project symfony/skeleton app"],
      repoUrl: "https://github.com/symfony/symfony",
      docsUrl: "https://symfony.com/doc"
    }
  ],
  python: [
    {
      icon: "FA",
      title: "FastAPI",
      version: "0.11+",
      type: "API Framework",
      description: "High-performance APIs with modern Python typing support.",
      cmd: "pip install fastapi uvicorn",
      features: ["Async support", "OpenAPI docs", "Type-safe validation"],
      installCommands: ["pip install fastapi uvicorn", "pip install pydantic-settings"],
      repoUrl: "https://github.com/fastapi/fastapi",
      docsUrl: "https://fastapi.tiangolo.com/"
    },
    {
      icon: "DJ",
      title: "Django",
      version: "5.x",
      type: "Framework",
      description: "Batteries-included framework for secure web projects.",
      cmd: "pip install django",
      features: ["Admin UI", "ORM", "Authentication"],
      installCommands: ["pip install django", "django-admin startproject core"],
      repoUrl: "https://github.com/django/django",
      docsUrl: "https://docs.djangoproject.com/"
    }
  ],
  managers: [
    {
      icon: "NM",
      title: "NPM",
      version: "10.x",
      type: "Package Manager",
      description: "JavaScript package manager and script runner.",
      cmd: "npm install <package-name>",
      features: ["Dependency graph", "Scripts", "Version lock files"],
      installCommands: ["npm install <package-name>", "npm uninstall <package-name>"],
      repoUrl: "https://github.com/npm/cli",
      docsUrl: "https://docs.npmjs.com/"
    },
    {
      icon: "PP",
      title: "PyPI",
      version: "pip",
      type: "Package Index",
      description: "Python package repository and installer ecosystem.",
      cmd: "pip install package-name",
      features: ["Huge package index", "Virtual env support", "Simple installs"],
      installCommands: ["pip install package-name", "pip freeze > requirements.txt"],
      repoUrl: "https://github.com/pypa/pip",
      docsUrl: "https://packaging.python.org/"
    },
    {
      icon: "PK",
      title: "Packagist",
      version: "Composer",
      type: "Package Index",
      description: "Default package repository for Composer dependencies.",
      cmd: "composer require vendor/package",
      features: ["Version constraints", "Autoload integration", "PHP ecosystem standard"],
      installCommands: ["composer require vendor/package", "composer update"],
      repoUrl: "https://github.com/composer/composer",
      docsUrl: "https://getcomposer.org/doc/"
    }
  ]
};

const skills = [
  { name: "Frontend Architecture", level: 95, icon: "UI" },
  { name: "JavaScript / TypeScript", level: 92, icon: "JS" },
  { name: "PHP Ecosystem", level: 88, icon: "PHP" },
  { name: "Python Workflows", level: 84, icon: "PY" },
  { name: "SEO Strategy", level: 86, icon: "SEO" },
  { name: "Digital Marketing", level: 81, icon: "DM" }
];

const projects = [
  {
    title: "Neon Commerce Dashboard",
    desc: "A conversion-focused analytics and campaign dashboard with motion-first UX.",
    link: "https://example.com/demo1",
    thumbnail: "https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=900&q=80",
    tech: ["React", "Charts", "Tailwind"],
    status: "Live"
  },
  {
    title: "Cinematic Product Landing",
    desc: "A premium launch microsite blending 3D-like depth and interactive storytelling.",
    link: "https://example.com/demo2",
    thumbnail: "https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=900&q=80",
    tech: ["GSAP", "WebGL", "Landing"],
    status: "Beta"
  },
  {
    title: "Realtime Ops Panel",
    desc: "An operations HUD interface with status feeds and service monitoring widgets.",
    link: "https://example.com/demo3",
    thumbnail: "https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=900&q=80",
    tech: ["Vue", "Realtime", "Socket"],
    status: "Live"
  }
];

const serviceCategories = [
  {
    id: "web_design",
    label: "Web Design",
    tiers: [
      {
        name: "Starter",
        price: "$199",
        billing: "one-time",
        features: ["UX audit & page goals", "Wireframes (core screens)", "Style guide starter"],
        popular: false,
        cta: "outline"
      },
      {
        name: "Pro",
        price: "$499",
        billing: "one-time",
        features: ["Full UI system + components", "Hi-fi mockups & prototype", "Responsive layout specs"],
        popular: true,
        cta: "gradient"
      },
      {
        name: "Elite",
        price: "$999",
        billing: "one-time",
        features: ["Brand narrative + art direction", "Motion & micro-interaction specs", "Dev handoff & QA checklist"],
        popular: false,
        cta: "outline"
      }
    ]
  },
  {
    id: "web_dev",
    label: "Web Dev",
    tiers: [
      {
        name: "Starter",
        price: "$299",
        billing: "one-time",
        features: ["Landing or marketing site build", "CMS-friendly sections", "Analytics hookup"],
        popular: false,
        cta: "outline"
      },
      {
        name: "Pro",
        price: "$799",
        billing: "one-time",
        features: ["Laravel / API integration", "Auth, roles & admin basics", "Staging + production deploy"],
        popular: true,
        cta: "gradient"
      },
      {
        name: "Elite",
        price: "$1,499",
        billing: "one-time",
        features: ["Multi-service architecture", "Queues, jobs & integrations", "Performance + security hardening"],
        popular: false,
        cta: "outline"
      }
    ]
  },
  {
    id: "marketing",
    label: "Marketing",
    tiers: [
      {
        name: "Starter",
        price: "$149",
        billing: "month",
        features: ["Channel audit", "One campaign setup", "Monthly KPI snapshot"],
        popular: false,
        cta: "outline"
      },
      {
        name: "Pro",
        price: "$399",
        billing: "month",
        features: ["Funnel + landing iteration", "A/B test loops", "Creative refresh cadence"],
        popular: true,
        cta: "gradient"
      },
      {
        name: "Elite",
        price: "$899",
        billing: "month",
        features: ["Multi-channel orchestration", "CRO workshop blocks", "Executive reporting"],
        popular: false,
        cta: "outline"
      }
    ]
  },
  {
    id: "seo",
    label: "SEO",
    tiers: [
      {
        name: "Starter",
        price: "$129",
        billing: "month",
        features: ["Technical crawl audit", "Core on-page fixes", "Baseline rankings"],
        popular: false,
        cta: "outline"
      },
      {
        name: "Pro",
        price: "$349",
        billing: "month",
        features: ["Schema & internal linking plan", "Content briefs (monthly)", "Search console monitoring"],
        popular: true,
        cta: "gradient"
      },
      {
        name: "Elite",
        price: "$699",
        billing: "month",
        features: ["Authority roadmap & outreach", "Advanced structured data", "Competitive gap analysis"],
        popular: false,
        cta: "outline"
      }
    ]
  }
];

const projectPhases = [
  {
    days: "Days 1–2",
    title: "Discovery & strategy",
    description:
      "Align on goals, constraints, and success metrics. Lock scope and communication rhythm for the build."
  },
  {
    days: "Days 3–5",
    title: "Wireframe & visual direction",
    description:
      "Structure key flows, approve the HUD visual language, and validate layout before production work."
  },
  {
    days: "Days 6–10",
    title: "Build & integration",
    description:
      "Implement features, connect APIs and content, and keep staging aligned with approved milestones."
  },
  {
    days: "Days 11–12",
    title: "QA & revisions",
    description:
      "Cross-browser checks, accessibility pass, and focused revision cycles so nothing ships half-polished."
  },
  {
    days: "Days 13–14",
    title: "Launch protocol",
    description:
      "Production deploy, monitoring hooks, handoff docs, and a clean cutover so your signal stays live."
  }
];

const faqs = [
  {
    q: "How quickly can a project start?",
    a: "Most projects start within 48 hours after scope and payment confirmation."
  },
  {
    q: "Can I customize service tiers?",
    a: "Yes, every package can be reconfigured based on business objectives and budget."
  },
  {
    q: "Do you provide maintenance?",
    a: "Ongoing maintenance and growth retainers are available for all completed projects."
  }
];

const typeLines = [
  "Senior Laravel and PHP Specialist",
  "Software Architect Engineer",
  "Backend System Strategist"
];

const state = {
  tab: "javascript",
  serviceCategory: "web_design"
};

let revealObserver = null;

function el(id) {
  return document.getElementById(id);
}

function createCard(title, body, command) {
  const wrapper = document.createElement("article");
  wrapper.className = "hud-card";
  wrapper.innerHTML = `
    <h4 class="font-['Orbitron'] text-cyanx tracking-[0.08em]">${title}</h4>
    <p class="text-sm text-slate-400 mt-2">${body}</p>
    <code class="block text-sm mt-3 text-violetx break-all">${command}</code>
    <button class="hud-btn mt-4 text-xs copy-btn" data-copy="${command}">
      Copy Command
    </button>
  `;
  return wrapper;
}

function createPackageCard(pkg) {
  const wrapper = document.createElement("article");
  wrapper.className = "hud-card";
  wrapper.innerHTML = `
    <div class="flex items-center justify-between">
      <h4 class="font-['Orbitron'] text-cyanx tracking-[0.08em]">${pkg.icon} ${pkg.title}</h4>
      <span class="chip">${pkg.version}</span>
    </div>
    <p class="text-xs text-slate-400 mt-1">${pkg.type}</p>
    <p class="text-sm text-slate-300 mt-2">${pkg.description}</p>
    <code class="block text-sm mt-3 text-violetx break-all">${pkg.cmd}</code>
    <div class="mt-4 flex gap-2">
      <button class="hud-btn text-xs copy-btn" data-copy="${pkg.cmd}">Copy</button>
      <button class="hud-btn text-xs pkg-details-btn" data-pkg="${encodeURIComponent(JSON.stringify(pkg))}">Details</button>
    </div>
  `;
  return wrapper;
}

function renderTabs() {
  const panel = el("tabPanels");
  panel.innerHTML = "";
  tabData[state.tab].forEach((item) => {
    panel.appendChild(createPackageCard(item));
  });
}

function bindTabs() {
  const tabs = [...document.querySelectorAll(".tab-btn")];
  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      state.tab = tab.dataset.tab;
      tabs.forEach((t) => {
        const active = t === tab;
        t.classList.toggle("active", active);
        t.setAttribute("aria-selected", String(active));
      });
      renderTabs();
    });
  });

  const parent = tabs[0]?.parentElement;
  parent?.addEventListener("keydown", (event) => {
    const currentIndex = tabs.findIndex((t) => t.classList.contains("active"));
    if (event.key !== "ArrowRight" && event.key !== "ArrowLeft") return;
    event.preventDefault();
    const nextIndex =
      event.key === "ArrowRight"
        ? (currentIndex + 1) % tabs.length
        : (currentIndex - 1 + tabs.length) % tabs.length;
    tabs[nextIndex].focus();
    tabs[nextIndex].click();
  });
}

function renderSkills() {
  const grid = el("skillsGrid");
  skills.forEach((skill) => {
    const card = document.createElement("article");
    card.className = "hud-card";
    card.innerHTML = `
      <div class="flex items-center justify-between">
        <h4 class="font-['Orbitron'] text-base">${skill.name}</h4>
        <span class="text-cyanx font-bold">${skill.icon}</span>
      </div>
      <div class="skill-bar mt-4">
        <div class="skill-fill" data-level="${skill.level}"></div>
      </div>
      <p class="text-sm mt-2 text-slate-300">${skill.level}%</p>
    `;
    grid.appendChild(card);
  });
}

function renderProjects() {
  const grid = el("projectGrid");
  projects.forEach((project, index) => {
    const card = document.createElement("article");
    card.className = "hud-card project-card";
    card.innerHTML = `
      <img class="thumb" src="${project.thumbnail}" alt="${project.title} thumbnail" />
      <h4 class="font-['Orbitron'] text-cyanx">${project.title}</h4>
      <div class="mt-2 flex flex-wrap gap-2">
        <span class="chip">${project.status}</span>
        ${project.tech.map((t) => `<span class="chip">${t}</span>`).join("")}
      </div>
      <p class="mt-2 text-slate-300">${project.desc}</p>
      <button class="hud-btn mt-4 text-xs preview-btn" data-title="${project.title}" data-desc="${project.desc}" data-link="${project.link}" data-thumb="${project.thumbnail}" data-tech="${project.tech.join(", ")}">
        Live Preview
      </button>
    `;
    grid.appendChild(card);
  });
}

function observeRevealNode(node) {
  if (revealObserver && node) {
    revealObserver.observe(node);
  }
}

function renderServices() {
  const grid = el("serviceGrid");
  if (!grid) return;
  grid.innerHTML = "";
  const cat = serviceCategories.find((c) => c.id === state.serviceCategory);
  if (!cat) return;

  cat.tiers.forEach((tier, index) => {
    const card = document.createElement("article");
    const popularClass = tier.popular ? " pricing-card--popular" : "";
    card.className = `pricing-card reveal${popularClass}`;

    const badge = tier.popular
      ? '<span class="pricing-badge" aria-hidden="true">POPULAR</span>'
      : "";

    const billingLabel = tier.billing === "month" ? "per month" : "one-time";

    const ctaClasses =
      tier.cta === "gradient"
        ? "hud-btn btn-gradient text-xs pricing-cta"
        : "hud-btn hud-btn-alt text-xs pricing-cta";

    card.innerHTML = `
      ${badge}
      <p class="pricing-name">${tier.name}</p>
      <p class="pricing-price">${tier.price}</p>
      <p class="pricing-billing">${billingLabel}</p>
      <ul class="feature-list">
        ${tier.features.map((f) => `<li>${f}</li>`).join("")}
      </ul>
      <button type="button" class="${ctaClasses}">Select plan</button>
    `;
    grid.appendChild(card);
    observeRevealNode(card);
  });
}

function bindServiceTabs() {
  const tabs = [...document.querySelectorAll(".service-tab")];
  const panel = el("serviceGrid");
  if (!tabs.length) return;

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      state.serviceCategory = tab.dataset.category || state.serviceCategory;
      tabs.forEach((t) => {
        const active = t === tab;
        t.classList.toggle("active", active);
        t.setAttribute("aria-selected", String(active));
      });
      panel?.setAttribute("aria-labelledby", tab.id);
      renderServices();
    });
  });

  const parent = tabs[0]?.parentElement;
  parent?.addEventListener("keydown", (event) => {
    const currentIndex = tabs.findIndex((t) => t.classList.contains("active"));
    if (event.key !== "ArrowRight" && event.key !== "ArrowLeft") return;
    event.preventDefault();
    const nextIndex =
      event.key === "ArrowRight"
        ? (currentIndex + 1) % tabs.length
        : (currentIndex - 1 + tabs.length) % tabs.length;
    tabs[nextIndex].focus();
    tabs[nextIndex].click();
  });

  if (tabs[0] && panel) {
    panel.setAttribute("aria-labelledby", tabs[0].id);
  }
}

function renderProjectTimeline() {
  const mount = el("projectTimeline");
  if (!mount) return;
  mount.innerHTML = "";
  mount.className = "timeline-project-wrap timeline-mount";

  const spine = document.createElement("div");
  spine.className = "timeline-spine";
  spine.setAttribute("aria-hidden", "true");
  mount.appendChild(spine);

  projectPhases.forEach((phase, index) => {
    const side = phase.side || (index % 2 === 0 ? "left" : "right");
    const row = document.createElement("div");
    row.className =
      side === "right" ? "timeline-phase timeline-phase--right reveal" : "timeline-phase reveal";

    const node = document.createElement("div");
    node.className = "timeline-node";
    node.setAttribute("aria-hidden", "true");

    const card = document.createElement("div");
    card.className = "timeline-card";
    card.innerHTML = `
      <p class="timeline-days">${phase.days}</p>
      <h4 class="timeline-title">${phase.title}</h4>
      <p class="timeline-desc">${phase.description}</p>
    `;

    row.appendChild(node);
    row.appendChild(card);
    mount.appendChild(row);
  });
}

function renderFaq() {
  const faqEl = el("faq");
  if (!faqEl) return;
  faqEl.innerHTML = "";
  faqs.forEach((faq) => {
    const item = document.createElement("details");
    item.className = "faq-item hud-card";
    item.innerHTML = `
      <summary class="font-['Orbitron'] faq-summary">${faq.q}</summary>
      <p class="mt-3 text-muted-theme">${faq.a}</p>
    `;
    faqEl.appendChild(item);
  });
}

function initTypewriter() {
  const target = el("typewriter");
  if (!target) return;
  
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  let word = 0;
  let idx = 0;
  let deleting = false;
  let timeoutId = null;

  function tick() {
    const current = typeLines[word];
    target.textContent = deleting ? current.slice(0, idx--) : current.slice(0, idx++);
    const doneTyping = !deleting && idx > current.length;
    const doneDeleting = deleting && idx < 0;
    let delay = deleting ? 40 : 80;
    if (doneTyping) {
      deleting = true;
      delay = 1000;
    }
    if (doneDeleting) {
      deleting = false;
      word = (word + 1) % typeLines.length;
      idx = 0;
      delay = 280;
    }
    if (reducedMotion) {
      target.textContent = typeLines.join(' | ');
      return;
    }
    if (!deleting && idx > 0 && idx <= current.length && idx % 2 === 0) {
      // Silent - only click.mp3 on click
    }
    timeoutId = window.setTimeout(tick, delay);
  }

  tick();
}

function initReveal() {
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  
  if (reducedMotion) {
    document.querySelectorAll(".reveal, .hud-card, .pricing-card, .timeline-phase, .about-stat").forEach((node) => {
      node.classList.add("visible");
      if (node.querySelector(".skill-fill")) {
        node.querySelectorAll(".skill-fill").forEach((fill) => {
          fill.style.width = `${fill.dataset.level}%`;
        });
      }
    });
    return;
  }
  
  revealObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          if (entry.target.querySelector(".skill-fill")) {
            entry.target.querySelectorAll(".skill-fill").forEach((fill) => {
              fill.style.width = `${fill.dataset.level}%`;
            });
          }
          revealObserver.unobserve(entry.target);
        }
      });
    },
    { 
      threshold: 0.18, 
      rootMargin: window.innerWidth <= 768 ? "0px 0px -100px 0px" : "0px 0px -50px 0px"
    }
  );

  document
    .querySelectorAll(".reveal, .hud-card, .pricing-card, .timeline-phase, .about-stat")
    .forEach((node) => revealObserver.observe(node));
}

function initParallax() {
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const allLayers = [...document.querySelectorAll("[data-speed]")];
  let ticking = false;
  
  // Filter out elements with CSS animations or scroll-reveal transitions to prevent transform conflicts
  const layers = allLayers.filter((layer) => {
    const computedStyle = window.getComputedStyle(layer);
    const hasAnimation = computedStyle.animationName !== 'none' && computedStyle.animationName !== '';
    // Exclude elements with floating animation or reveal transitions (both use transform)
    return !hasAnimation && !layer.classList.contains('floating') && !layer.classList.contains('reveal');
  });

  // Remove data-speed attribute from all layers immediately on mobile
  // to prevent any future parallax calculations
  if (window.innerWidth <= 767 || reducedMotion) {
    allLayers.forEach((layer) => {
      layer.style.transform = "none";
      layer.style.willChange = "auto";
      layer.removeAttribute("data-speed");
    });
    return;
  }

  function update() {
    // Double-check mobile status on every frame
    if (window.innerWidth <= 767) {
      allLayers.forEach((layer) => {
        layer.style.transform = "none";
        layer.style.willChange = "auto";
      });
      return;
    }

    const y = window.scrollY;
    layers.forEach((layer) => {
      const speed = Number(layer.dataset.speed || 0);
      // Use conservative parallax factor (0.1 instead of 0.2) to minimize bounce effect
      const offset = y * speed * 0.1;
      layer.style.transform = `translate3d(0, ${offset}px, 0)`;
    });
    ticking = false;
  }

  window.addEventListener("scroll", () => {
    if (!ticking) {
      ticking = true;
      window.requestAnimationFrame(update);
    }
  }, { passive: true });

  // Cleanup on resize - completely remove transforms on mobile
  window.addEventListener("resize", () => {
    if (window.innerWidth <= 767) {
      allLayers.forEach((layer) => {
        layer.style.transform = "none";
        layer.style.willChange = "auto";
      });
    }
  });
}

function copyToast(msg) {
  const toast = document.createElement("div");
  toast.className = "copy-toast";
  toast.textContent = msg;
  document.body.appendChild(toast);
  window.setTimeout(() => toast.remove(), 1300);
}

function initClipboard() {
  document.addEventListener("click", async (event) => {
    const btn = event.target.closest(".copy-btn");
    if (!btn) return;
    const text = btn.dataset.copy || "";
    try {
      await navigator.clipboard.writeText(text);
      copyToast("Command copied.");
    } catch {
      copyToast("Copy failed. Please copy manually.");
    }
  });
}

function initModal() {
  const modal = el("previewModal");
  const closeBtn = el("closeModal");
  document.addEventListener("click", (event) => {
    const btn = event.target.closest(".preview-btn");
    if (!btn) return;
    el("modalTitle").textContent = btn.dataset.title || "";
    el("modalDesc").textContent = btn.dataset.desc || "";
    el("modalLink").href = btn.dataset.link || "#";
    el("modalThumb").src = btn.dataset.thumb || "";
    el("modalThumb").alt = `${btn.dataset.title || "Project"} thumbnail`;
    el("modalTech").innerHTML = (btn.dataset.tech || "")
      .split(",")
      .filter(Boolean)
      .map((t) => `<span class="chip">${t.trim()}</span>`)
      .join("");
    modal.showModal();
  });

  closeBtn.addEventListener("click", () => modal.close());
  modal.addEventListener("click", (e) => {
    if (e.target === modal) modal.close();
  });
}

function initPackageModal() {
  const modal = el("packageModal");
  const closeBtn = el("closePackageModal");
  document.addEventListener("click", (event) => {
    const btn = event.target.closest(".pkg-details-btn");
    if (!btn) return;
    const pkg = JSON.parse(decodeURIComponent(btn.dataset.pkg || "{}"));
    el("packageTitle").textContent = `${pkg.title} (${pkg.version})`;
    el("packageDescription").textContent = pkg.description || "";
    el("packageFeatures").innerHTML = (pkg.features || []).map((f) => `<li>${f}</li>`).join("");
    el("packageCommands").innerHTML = (pkg.installCommands || [])
      .map((c) => `<code class="block text-sm text-violetx break-all">${c}</code>`)
      .join("");
    el("packageDocs").href = pkg.docsUrl || "#";
    el("packageRepo").href = pkg.repoUrl || "#";
    modal.showModal();
  });
  closeBtn.addEventListener("click", () => modal.close());
  modal.addEventListener("click", (e) => {
    if (e.target === modal) modal.close();
  });
}

function initMobileNav() {
  const toggle = el("navMobileToggle");
  const panel = el("navMobilePanel");
  const backdrop = el("navMobileBackdrop");
  if (!toggle || !panel || !backdrop) return;

  const mq = window.matchMedia("(min-width: 768px)");

  function isMdUp() {
    return mq.matches;
  }

  function setOpen(open) {
    if (isMdUp()) {
      open = false;
      document.body.classList.remove("nav-mobile-open");
      document.body.style.overflow = "";
      panel.hidden = true;
      backdrop.hidden = true;
      toggle.setAttribute("aria-expanded", "false");
      toggle.setAttribute("aria-label", "Open site menu");
      toggle.textContent = "Menu";
      return;
    }
    
    const willOpen = open;
    document.body.classList.toggle("nav-mobile-open", willOpen);
    document.body.style.overflow = willOpen ? "hidden" : "";
    toggle.setAttribute("aria-expanded", String(willOpen));
    toggle.setAttribute("aria-label", willOpen ? "Close site menu" : "Open site menu");
    toggle.textContent = willOpen ? "Close" : "Menu";
    panel.hidden = !willOpen;
    backdrop.hidden = !willOpen;
    
    if (willOpen) {
      window.requestAnimationFrame(() => {
        panel.querySelector(".nav-mobile-link")?.focus();
      });
    }
  }

  toggle.addEventListener("click", () => {
    setOpen(!document.body.classList.contains("nav-mobile-open"));
  });
  backdrop.addEventListener("click", () => setOpen(false));
  panel.querySelectorAll(".nav-mobile-link").forEach((link) => {
    link.addEventListener("click", () => setOpen(false));
  });
  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && document.body.classList.contains("nav-mobile-open")) {
      setOpen(false);
    }
  });
  mq.addEventListener("change", () => setOpen(false));
}

function initAssistant() {
  const toggle = el("assistantToggle");
  const panel = el("assistantPanel");
  const response = el("assistantResponse");
  const input = el("assistantInput");
  const send = el("assistantSend");
  const replies = {
    pricing: "For budget fit, start with Pro tier. It balances speed, architecture quality, and scalability.",
    delivery: "Typical delivery is 7-14 days based on complexity, revisions, and integration needs.",
    package: "For full-stack projects, Web Development Pro + SEO Starter gives best launch coverage.",
    status: "Active builds sync within 24-48h. Share your ticket ID for a precise milestone readout."
  };
  
  function updatePanelPosition() {
    if (window.innerWidth <= 480) {
      panel.style.width = "calc(100vw - 1rem)";
      panel.style.right = "0.5rem";
      panel.style.bottom = "4.4rem";
    } else {
      panel.style.width = "min(320px, calc(100vw - 2rem))";
      panel.style.right = "1rem";
      panel.style.bottom = "4.4rem";
    }
  }
  
  toggle.addEventListener("click", () => {
    const open = panel.classList.toggle("open");
    panel.setAttribute("aria-hidden", String(!open));
    toggle.setAttribute("aria-expanded", String(open));
    if (open) {
      updatePanelPosition();
    }
  });
  
  window.addEventListener("resize", () => {
    if (panel.classList.contains("open")) {
      updatePanelPosition();
    }
  });
  
  document.addEventListener("click", (event) => {
    const action = event.target.closest(".assistant-action");
    if (!action) return;
    response.textContent = replies[action.dataset.action] || "How can I help with your project today?";
  });

  const replyForText = (text) => {
    const q = text.trim().toLowerCase();
    if (!q) return "Ask about pricing, delivery timelines, recommended packages, or project status.";
    if (q.includes("price")) return replies.pricing;
    if (q.includes("deliver")) return replies.delivery;
    if (q.includes("package") || q.includes("service")) return replies.package;
    if (q.includes("status") || q.includes("ticket")) return replies.status;
    return "Support received. Try keywords: pricing, delivery, package, or status.";
  };

  send?.addEventListener("click", () => {
    response.textContent = replyForText(input?.value || "");
  });

  input?.addEventListener("keydown", (event) => {
    if (event.key !== "Enter") return;
    event.preventDefault();
    response.textContent = replyForText(input.value);
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && panel.classList.contains("open")) {
      panel.classList.remove("open");
      panel.setAttribute("aria-hidden", "true");
      toggle.setAttribute("aria-expanded", "false");
    }
  });
}



function initMatrixBackground() {
  const container = document.getElementById("matrixBg");
  if (!container) return;

  const chars = "01アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン";
  const columnCount = Math.floor(window.innerWidth / 18);
  const duration = 12 + Math.random() * 8;
  const delay = Math.random() * 4;

  for (let i = 0; i < columnCount; i++) {
    const column = document.createElement("div");
    column.className = "matrix-column";
    column.style.left = `${(i / columnCount) * 100}%`;
    column.style.animationDuration = `${duration + Math.random() * 6}s`;
    column.style.animationDelay = `${-delay - Math.random() * duration}s`;
    column.style.opacity = 0.25 + Math.random() * 0.3;

    let text = "";
    const length = 15 + Math.floor(Math.random() * 25);
    for (let j = 0; j < length; j++) {
      text += chars[Math.floor(Math.random() * chars.length)] + "\u2003";
    }
    column.textContent = text;
    container.appendChild(column);
  }
}

function initGlitchEffect() {
  const glitchEl = document.getElementById("glitchText");
  const cursorEl = document.getElementById("cursorBlink");
  const subtitleEl = document.getElementById("heroSubtitle");
  if (!glitchEl) return;

  const targetText = "MD SHAMIM HOSSAIN";
  const chars = "!<>-_\\/[]{}—=+*^?#________";
  let iteration = 0;
  let intervalId = null;
  let hasCompleted = false;

  function scramble() {
    const display = targetText
      .split("")
      .map((char, idx) => {
        if (idx < Math.floor(iteration)) return targetText[idx];
        return chars[Math.floor(Math.random() * chars.length)];
      })
      .join("");

    glitchEl.textContent = display;
    
    if (Math.floor(iteration) > 0 && Math.floor(iteration) <= targetText.length) {
      // Silent - only click.mp3 on click
    }
    
    iteration += 1 / 3;

    if (Math.floor(iteration) >= targetText.length) {
      glitchEl.textContent = targetText;
      clearInterval(intervalId);
      intervalId = null;
      hasCompleted = true;
      if (cursorEl) {
        setTimeout(() => {
          cursorEl.style.opacity = "0";
          cursorEl.style.transition = "opacity 0.6s ease";
        }, 1200);
      }
    }
  }

  function start() {
    iteration = 0;
    hasCompleted = false;
    glitchEl.textContent = "";
    glitchEl.classList.remove("visible");
    glitchEl.style.opacity = "0";
    glitchEl.style.transform = "translateY(20px)";
    glitchEl.style.transition = "opacity 0.8s ease-out, transform 0.8s ease-out";

    if (cursorEl) {
      cursorEl.style.opacity = "1";
      cursorEl.style.transition = "none";
    }

    if (subtitleEl) {
      subtitleEl.classList.remove("visible");
      subtitleEl.style.opacity = "0";
      subtitleEl.style.transform = "translateY(15px)";
      subtitleEl.style.transition = "opacity 0.8s ease-out 0.3s, transform 0.8s ease-out 0.3s";
    }

    if (intervalId) clearInterval(intervalId);
    intervalId = setInterval(scramble, 50);

    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        glitchEl.classList.add("visible");
        glitchEl.style.opacity = "1";
        glitchEl.style.transform = "translateY(0)";
      });
    });

    setTimeout(() => {
      if (subtitleEl) {
        requestAnimationFrame(() => {
          requestAnimationFrame(() => {
            subtitleEl.classList.add("visible");
            subtitleEl.style.opacity = "0.8";
            subtitleEl.style.transform = "translateY(0)";
          });
        });
      }
    }, 300);
  }

  function addHoverGlitch() {
    if (!glitchEl) return;
    glitchEl.addEventListener("mouseenter", () => {
      if (hasCompleted) {
        glitchEl.style.transform = "translate(2px, -1px)";
        glitchEl.style.transition = "transform 0.08s ease, text-shadow 0.08s ease";
        setTimeout(() => {
          glitchEl.style.transform = "translate(-2px, 1px)";
        }, 80);
        setTimeout(() => {
          glitchEl.style.transform = "translate(0, 0)";
        }, 160);
      }
    });
    glitchEl.addEventListener("mouseleave", () => {
      glitchEl.style.transform = "translate(0, 0)";
    });
  }

  function addKeyboardTrigger() {
    document.addEventListener("keydown", (e) => {
      if (e.key === "r" || e.key === "R") {
        if (document.activeElement === document.body || document.activeElement.tagName === "BODY") {
          if (cursorEl) {
            cursorEl.style.opacity = "1";
            cursorEl.style.transition = "none";
          }
          start();
        }
      }
    });
  }

  setTimeout(start, 400);
  addHoverGlitch();
  addKeyboardTrigger();

  window.triggerGlitch = function() {
    if (cursorEl) {
      cursorEl.style.opacity = "1";
      cursorEl.style.transition = "none";
    }
    start();
  };
}

function initParticles() {
  const container = document.getElementById("particles");
  if (!container) return;

  const colors = ["var(--line)", "var(--hot)", "var(--violet)", "var(--line)", "var(--hot)"];
  const particleCount = 30;

  for (let i = 0; i < particleCount; i++) {
    const particle = document.createElement("div");
    particle.className = "particle";
    const size = Math.random() * 4 + 1.5;
    particle.style.width = size + "px";
    particle.style.height = size + "px";
    particle.style.left = Math.random() * 100 + "%";
    particle.style.background = colors[Math.floor(Math.random() * colors.length)];
    particle.style.boxShadow = `0 0 ${size * 3}px ${colors[Math.floor(Math.random() * colors.length)]}`;
    particle.style.animationDuration = Math.random() * 8 + 6 + "s";
    particle.style.animationDelay = Math.random() * 10 + "s";
    container.appendChild(particle);
  }
}

function boot() {
  initMatrixBackground();
  initGlitchEffect();
  initParticles();
  window.HudChrome?.initAudioArm?.();
  window.HudChrome?.initUiClickSounds?.();
  window.HudChrome?.initThemes();
  renderTabs();
  bindTabs();
  renderSkills();
  renderProjects();
  renderProjectTimeline();
  renderServices();
  renderFaq();
  bindServiceTabs();
  initTypewriter();
  initReveal();
  initParallax();
  initClipboard();
  initModal();
  initPackageModal();
  initAssistant();
  initMobileNav();
}

boot();
