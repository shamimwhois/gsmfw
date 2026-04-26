/**
 * Shared HUD theme switcher + UI click audio (Arwes sci-fi sounds).
 */
(function (global) {
  const CLICK_MP3_URL = "assets/audio/click.mp3";
    const ASSEMBLE_MP3_URL = "assets/audio/assemble.mp3";
    const TYPE_MP3_URL = "assets/audio/type.mp3";

  const HUD_THEMES = [
    "dark_cyan",
    "dark_magenta",
    "dark_violet",
    "dark_emerald",
    "dark_amber",
    "light_ice",
    "light_slate",
    "light_pearl",
    "light_lavender",
    "light_sand"
  ];

  const CLICK_POOL_SIZE = 6;
  const ASSEMBLE_POOL_SIZE = 4;
  const TYPE_POOL_SIZE = 5;

  let audioArmed = false;
  const clickPool = [];
  const assemblePool = [];
  const typePool = [];
  let poolIndex = 0;
  let assembleIndex = 0;
  let typeIndex = 0;
  let lastClickTime = 0;
  let lastAssembleTime = 0;
  let lastTypeTime = 0;
  const THROTTLE_MS = 50;

  // Web Audio fallback
  let audioCtx = null;
  const audioBuffers = {
    click: null,
    assemble: null,
    type: null
  };
  let buffersPrewarmed = false;

  async function loadAndDecode(url) {
    try {
      const resp = await fetch(url);
      const arrayBuffer = await resp.arrayBuffer();
      if (!audioCtx) audioCtx = new (window.AudioContext || window.webkitAudioContext)();
      return await audioCtx.decodeAudioData(arrayBuffer);
    } catch (err) {
      console.debug("HudChrome: loadAndDecode failed for", url, err);
      return null;
    }
  }

  function playBuffer(buf, volume = 1, playbackRate = 1) {
    if (!buf || !audioCtx) return false;
    try {
      const src = audioCtx.createBufferSource();
      src.buffer = buf;
      src.playbackRate.value = playbackRate;
      const gain = audioCtx.createGain();
      gain.gain.value = Math.min(1, Math.max(0, volume));
      src.connect(gain).connect(audioCtx.destination);
      src.start(0);
      return true;
    } catch (err) {
      console.debug("HudChrome: playBuffer failed", err);
      return false;
    }
  }

  function createAudioNode(src) {
    try {
      const a = new Audio(src);
      a.preload = "auto";
      a.addEventListener("error", (e) => { console.debug("HudChrome: audio error", src, e); });
      return a;
    } catch (err) {
      console.debug("HudChrome: createAudioNode failed:", err);
      return null;
    }
  }

  function ensureClickPool() {
    if (clickPool.length) return;
    const a = createAudioNode(CLICK_MP3_URL);
    if (a) clickPool.push(a);
  }

  function ensureAssemblePool() {
    if (assemblePool.length) return;
    const a = createAudioNode(ASSEMBLE_MP3_URL);
    if (a) assemblePool.push(a);
  }

  function ensureTypePool() {
    if (typePool.length) return;
    const a = createAudioNode(TYPE_MP3_URL);
    if (a) typePool.push(a);
  }

  function playUiSound(volume = 1) {
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;
    if (!audioArmed) return;
    const now = Date.now();
    if (now - lastClickTime < THROTTLE_MS) return;
    lastClickTime = now;
    ensureClickPool();
    // Grow pool lazily if the selected slot doesn't exist yet
    const targetIndex = poolIndex % CLICK_POOL_SIZE;
    if (clickPool.length <= targetIndex && clickPool.length < CLICK_POOL_SIZE) {
      const more = createAudioNode(CLICK_MP3_URL);
      if (more) clickPool.push(more);
    }
    const node = clickPool[poolIndex % clickPool.length];
    poolIndex += 1;
    const jitter = 0.88 + Math.random() * 0.12;
    const rate = 0.97 + Math.random() * 0.06;
    // Prefer Web Audio playback if decoded
    if (audioBuffers.click && playBuffer(audioBuffers.click, Math.min(1, Math.max(0, volume * jitter)), rate)) {
      return;
    }
    if (node) {
      node.playbackRate = rate;
      node.volume = Math.min(1, Math.max(0, volume * jitter));
      node.currentTime = 0;
      node.play().catch((err) => { console.debug("HudChrome: click play failed:", err); });
    }
  }

  function playAssembleSound(volume = 0.8) {
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;
    if (!audioArmed) return;
    const now = Date.now();
    if (now - lastAssembleTime < THROTTLE_MS * 2) return;
    lastAssembleTime = now;
    ensureAssemblePool();
    const targetIndexA = assembleIndex % ASSEMBLE_POOL_SIZE;
    if (assemblePool.length <= targetIndexA && assemblePool.length < ASSEMBLE_POOL_SIZE) {
      const more = createAudioNode(ASSEMBLE_MP3_URL);
      if (more) assemblePool.push(more);
    }
    const node = assemblePool[assembleIndex % assemblePool.length];
    assembleIndex += 1;
    const jitter = 0.9 + Math.random() * 0.1;
    const rate = 0.95 + Math.random() * 0.08;
    if (audioBuffers.assemble && playBuffer(audioBuffers.assemble, Math.min(1, Math.max(0, volume * jitter)), rate)) {
      return;
    }
    if (node) {
      node.playbackRate = rate;
      node.volume = Math.min(1, Math.max(0, volume * jitter));
      node.currentTime = 0;
      node.play().catch((err) => { console.debug("HudChrome: assemble play failed:", err); });
    }
  }

  function playTypeSound(volume = 0.5) {
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;
    if (!audioArmed) return;
    const now = Date.now();
    if (now - lastTypeTime < THROTTLE_MS) return;
    lastTypeTime = now;
    ensureTypePool();
    const targetIndexT = typeIndex % TYPE_POOL_SIZE;
    if (typePool.length <= targetIndexT && typePool.length < TYPE_POOL_SIZE) {
      const more = createAudioNode(TYPE_MP3_URL);
      if (more) typePool.push(more);
    }
    const node = typePool[typeIndex % typePool.length];
    typeIndex += 1;
    const jitter = 0.92 + Math.random() * 0.08;
    const rate = 0.98 + Math.random() * 0.04;
    if (audioBuffers.type && playBuffer(audioBuffers.type, Math.min(1, Math.max(0, volume * jitter)), rate)) {
      return;
    }
    if (node) {
      node.playbackRate = rate;
      node.volume = Math.min(1, Math.max(0, volume * jitter));
      node.currentTime = 0;
      node.play().catch((err) => { console.debug("HudChrome: type play failed:", err); });
    }
  }

  function volumeForClickTarget(target) {
    const interactive = target.closest("a, button, summary, [role='tab']");
    if (!interactive) return 1;
    if (interactive.matches("[role='tab']")) return 0.9;
    if (interactive.matches("a")) return 1;
    if (interactive.matches("summary")) return 0.9;
    return 1;
  }

  function initAudioArm() {
    const arm = () => {
      if (audioArmed) return;
      audioArmed = true;
      // Prewarm a single HTMLAudio node quickly, then decode with Web Audio in background
      try {
        // create one element quickly so clicks immediately have a source
        if (!clickPool.length) {
          const a = createAudioNode(CLICK_MP3_URL);
          if (a) clickPool.push(a);
        }
      } catch (e) {
        console.debug("HudChrome: prewarm html audio failed", e);
      }

      // Decode buffers on idle to avoid blocking UI
      if (!buffersPrewarmed && typeof fetch === "function") {
        buffersPrewarmed = true;
        if (window.requestIdleCallback) {
          requestIdleCallback(() => {
            loadAndDecode(CLICK_MP3_URL).then((b) => { audioBuffers.click = b; });
            loadAndDecode(ASSEMBLE_MP3_URL).then((b) => { audioBuffers.assemble = b; });
            loadAndDecode(TYPE_MP3_URL).then((b) => { audioBuffers.type = b; });
          });
        } else {
          setTimeout(() => {
            loadAndDecode(CLICK_MP3_URL).then((b) => { audioBuffers.click = b; });
            loadAndDecode(ASSEMBLE_MP3_URL).then((b) => { audioBuffers.assemble = b; });
            loadAndDecode(TYPE_MP3_URL).then((b) => { audioBuffers.type = b; });
          }, 200);
        }
      }
    };
    document.addEventListener("pointerdown", arm, { once: true, passive: true });
  }

  function initUiClickSounds() {
    document.addEventListener(
      "click",
      (event) => {
        if (!audioArmed) return;
        const t = event.target;
        if (t.closest("select")) return;
        if (t.closest("a, button, summary, [role='tab']")) {
          playUiSound(volumeForClickTarget(t));
        }
      },
      true
    );
  }

  function initThemes() {
    const select = document.getElementById("themeSelect");
    if (!select) return;
    select.innerHTML = "";
    HUD_THEMES.forEach((theme) => {
      const opt = document.createElement("option");
      opt.value = theme;
      opt.textContent = theme.replace("_", " ");
      select.appendChild(opt);
    });
    const stored = localStorage.getItem("hud.theme");
    if (stored && HUD_THEMES.includes(stored)) {
      document.body.dataset.theme = stored;
    }
    if (!document.body.dataset.theme && HUD_THEMES[0]) {
      document.body.dataset.theme = HUD_THEMES[0];
    }
    select.value = document.body.dataset.theme;
    if (select.value !== document.body.dataset.theme) {
      document.body.dataset.theme = HUD_THEMES[0];
      select.value = HUD_THEMES[0];
    }
    select.addEventListener("change", () => {
      document.body.dataset.theme = select.value;
      localStorage.setItem("hud.theme", select.value);
      playUiSound(0.55);
    });
  }

  global.HudChrome = {
    CLICK_MP3_URL,
    ASSEMBLE_MP3_URL,
    TYPE_MP3_URL,
    HUD_THEMES,
    playUiSound,
    playAssembleSound,
    playTypeSound,
    initAudioArm,
    initUiClickSounds,
    initThemes
  };
})(typeof window !== "undefined" ? window : this);


// Safely initialize the typewriter: prefer the site's `initTypewriter()` if present.
(function () {
  const options = {
    loop: true,
    delay: 75,
    deleteSpeed: 50,
    strings: [
      "Full-Stack Developer",
      "Software Engineer",
      "Tech Enthusiast",
      "Problem Solver",
      "Lifelong Learner"
    ]
  };

  if (typeof initTypewriter === "function") {
    try {
      if (initTypewriter.length === 0) {
        initTypewriter();
      } else {
        const el = document.getElementById("typewriter");
        initTypewriter(el, options);
      }
    } catch (err) {
      console.debug("HudChrome: initTypewriter call failed:", err);
    }
  }
})();

HudChrome.initAudioArm();
HudChrome.initUiClickSounds();
HudChrome.initThemes();

// Safely initialize glitch: prefer `initGlitchEffect()` (main.js) then fallback to `glitchText()`.
(function () {
  if (typeof initGlitchEffect === "function") {
    try { initGlitchEffect(); } catch (err) { console.debug("HudChrome: initGlitchEffect failed:", err); }
    return;
  }

  const el = document.getElementById("glitchText") || document.getElementById("glitchName");
  const opts = {
    chars: "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()",
    glitchDuration: 500,
    glitchInterval: 1000
  };
  if (el && typeof glitchText === "function") {
    try { glitchText(el, opts); } catch (err) { console.debug("HudChrome: glitchText failed:", err); }
  }
})();

