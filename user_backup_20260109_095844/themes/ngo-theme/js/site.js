/**
 * 2026 Modernized Theme Logic
 * Vanilla JS | Spatial Awareness | Agentic Stubs
 *
 * @module ThemeCore
 * @description Core theme logic for My 2nd Theme, implemented according to 2026 Premium Standards.
 */

const isTouch = "ontouchstart" in window || navigator.maxTouchPoints > 0;

/**
 * Trigger Haptic Feedback (Vibration API).
 * @param {string} type - The type of vibration: 'light', 'medium', 'error'.
 * @description Provides physical feedback for interactions to satisfy Section 3.2 Haptic Mandate.
 */
function triggerHaptic(type = "light") {
  if (!navigator.vibrate) return;
  switch (type) {
    case "error":
      navigator.vibrate([50, 50, 50]);
      break;
    case "medium":
      navigator.vibrate(30);
      break;
    case "light":
    default:
      navigator.vibrate(10);
      break;
  }
}

// Eco-Mode Logic
const ecoModeKey = "theme_eco_mode";
const focusModeKey = "theme_focus_mode";
const bionicModeKey = "theme_bionic_mode";
const darkModeKey = "theme_dark_mode";

let sessionState = [];
const rollbackLimit = 10;

/**
 * Capture current theme state for rollback.
 * @description Satisfies Rule 2.3 Reversibility via Rollback.
 */
function captureState() {
  const state = {
    eco: document.body.classList.contains("eco-mode"),
    focus: document.body.classList.contains("focus-mode"),
    bionic: document.body.classList.contains("bionic-mode"),
  };
  sessionState.push(state);
  if (sessionState.length > rollbackLimit) sessionState.shift();
  showRollbackUI();
}

/**
 * Show/Hide Rollback UI.
 */
function showRollbackUI() {
  let rollbackBtn = document.getElementById("session-rollback");
  if (!rollbackBtn && sessionState.length > 1) {
    rollbackBtn = document.createElement("button");
    rollbackBtn.id = "session-rollback";
    rollbackBtn.className = "layer-floating glass-panel squishy";
    rollbackBtn.innerHTML = "<span>↺ Rollback State</span>";
    rollbackBtn.className =
      "fixed bottom-20 right-5 px-4 py-2.5 rounded-full text-xs font-medium bg-white/90 backdrop-blur border border-zinc-200 shadow-lg layer-floating glass-panel squishy cursor-pointer";

    document.body.appendChild(rollbackBtn);

    rollbackBtn.addEventListener("click", rollbackSession);
  } else if (rollbackBtn && sessionState.length <= 1) {
    rollbackBtn.remove();
  }
}

/**
 * Rollback to previous session state.
 */
function rollbackSession() {
  if (sessionState.length <= 1) return;

  // Remove current state
  sessionState.pop();
  const prevState = sessionState[sessionState.length - 1];

  triggerHaptic("medium");

  setEcoMode(prevState.eco, false);
  setFocusMode(prevState.focus, false);
  setBionicMode(prevState.bionic, false);

  showRollbackUI();
}

/**
 * Bionic Reading logic: Wraps the first half of words in <b> tags.
 * @param {boolean} enabled
 * @param {boolean} record - Whether to record state for rollback.
 */
function setBionicMode(enabled, record = true) {
  if (enabled) {
    document.body.classList.add("bionic-mode");
    localStorage.setItem(bionicModeKey, "true");
    applyBionicReading();
  } else {
    document.body.classList.remove("bionic-mode");
    localStorage.setItem(bionicModeKey, "false");
    removeBionicReading();
  }
  if (record) captureState();
}

function applyBionicReading() {
  const textNodes = [];
  const walk = document.createTreeWalker(
    document.getElementById("page-wrapper"),
    NodeFilter.SHOW_TEXT,
    null,
    false
  );
  let node;
  while ((node = walk.nextNode())) {
    if (
      node.parentElement.tagName !== "SCRIPT" &&
      node.parentElement.tagName !== "STYLE" &&
      node.textContent.trim().length > 0
    ) {
      textNodes.push(node);
    }
  }

  textNodes.forEach((node) => {
    const span = document.createElement("span");
    span.className = "bionic-text-wrapper";
    const words = node.textContent.split(/\s+/);
    span.innerHTML = words
      .map((word) => {
        if (word.length <= 1) return word;
        const mid = Math.ceil(word.length / 2);
        return `<b>${word.substring(0, mid)}</b>${word.substring(mid)}`;
      })
      .join(" ");

    if (node.parentNode) {
      node.parentNode.replaceChild(span, node);
    }
  });
}

function removeBionicReading() {
  document.querySelectorAll(".bionic-text-wrapper").forEach((wrapper) => {
    const textNode = document.createTextNode(wrapper.textContent);
    wrapper.parentNode.replaceChild(textNode, wrapper);
  });
}

/**
 * Synchronize Eco-Mode state across session and UI.
 * @param {boolean} enabled - Whether Eco-Mode is active.
 * @description Reduces CPU/GPU load by disabling animations and glassmorphism (EU Green UX mandate).
 * Uses CSS Variables for Style Queries (Rule 1.2).
 */
function setEcoMode(enabled, record = true) {
  if (enabled) {
    document.body.classList.add("eco-mode");
    document.body.style.setProperty("--eco-mode", "true");
    localStorage.setItem(ecoModeKey, "true");
  } else {
    document.body.classList.remove("eco-mode");
    document.body.style.removeProperty("--eco-mode");
    localStorage.setItem(ecoModeKey, "false");
  }
  if (record) captureState();
}

/**
 * Synchronize Focus Mode state.
 * @param {boolean} enabled - Whether Focus Mode is active.
 * @description Simplifies layout and reduces sensory input for neurodivergent users.
 * Uses CSS Variables for Style Queries (Rule 1.2).
 */
function setFocusMode(enabled, record = true) {
  if (enabled) {
    document.body.classList.add("focus-mode");
    document.body.style.setProperty("--focus-mode", "true");
    localStorage.setItem(focusModeKey, "true");
  } else {
    document.body.classList.remove("focus-mode");
    document.body.style.removeProperty("--focus-mode");
    localStorage.setItem(focusModeKey, "false");
  }
  if (record) captureState();
}

/**
 * Synchronize Dark Mode state.
 * @param {boolean} enabled - Whether Dark Mode is active.
 * @description Uses Scientific Dark Mode (APCA) colors provided by CSS.
 * Uses CSS Variables for Style Queries (Rule 1.2).
 */
function setDarkMode(enabled, record = true) {
  if (enabled) {
    document.body.classList.add("dark-mode");
    document.body.style.setProperty("--dark-mode", "true");
    localStorage.setItem(darkModeKey, "true");
    // Update toggle icon if exists
    const toggle = document.getElementById("dark-toggle");
    if (toggle) toggle.querySelector("i").className = "las la-sun"; // Switch to sun
  } else {
    document.body.classList.remove("dark-mode");
    document.body.style.removeProperty("--dark-mode");
    localStorage.setItem(darkModeKey, "false");
    const toggle = document.getElementById("dark-toggle");
    if (toggle) toggle.querySelector("i").className = "las la-moon"; // Switch to moon
  }
  if (record) captureState();
}

// Check preferences on load
if (localStorage.getItem(ecoModeKey) === "true") setEcoMode(true, false);
if (localStorage.getItem(focusModeKey) === "true") setFocusMode(true, false);
if (localStorage.getItem(bionicModeKey) === "true") setBionicMode(true, false);
if (localStorage.getItem(darkModeKey) === "true") setDarkMode(true, false);

// Initial state capture
captureState();

/**
 * Doodle Engine: Injects randomized SVG elements for Tactile Maximalism (Rule 1.1).
 * Enhanced for 2026: Organic shapes, persistent floating animations, and OKLCH color support.
 */
function initDoodleEngine() {
  const container = document.getElementById("doodle-container");
  if (!container) return;

  // Clear existing doodles if re-initializing
  container.innerHTML = "";

  // Organic and "NGO-themed" shapes (moons, leaves, curved segments)
  const doodleTypes = [
    '<circle cx="50" cy="50" r="40" fill="none" stroke="currentColor" stroke-width="2" />', // Circle
    '<path d="M20,50 Q50,20 80,50 Q50,80 20,50" fill="none" stroke="currentColor" stroke-width="2" />', // Leaf/Eye
    '<path d="M50,10 A40,40 0 1,1 10,50" fill="none" stroke="currentColor" stroke-width="2" />', // Crescent
    '<path d="M10,10 L90,90 M90,10 L10,90" fill="none" stroke="currentColor" stroke-width="1" stroke-dasharray="4 4" />', // Cross
    '<path d="M30,70 C30,30 70,30 70,70" fill="none" stroke="currentColor" stroke-width="3" />', // Dome
  ];

  const colors = [
    "oklch(0.6 0.18 142 / 0.1)", // Greenish
    "oklch(0.6 0.18 290 / 0.1)", // Purplish
    "oklch(0.7 0.1 200 / 0.1)", // Bluish
  ];

  const count = document.body.classList.contains("eco-mode") ? 5 : 20;

  for (let i = 0; i < count; i++) {
    const doodle = document.createElement("div");
    doodle.className = "doodle pointer-events-none fixed z-0";
    doodle.innerHTML = `<svg viewBox="0 0 100 100" class="w-full h-full">${
      doodleTypes[Math.floor(Math.random() * doodleTypes.length)]
    }</svg>`;

    const size = Math.random() * 100 + 50;
    doodle.style.width = size + "px";
    doodle.style.height = size + "px";
    doodle.style.top = Math.random() * 100 + "vh";
    doodle.style.left = Math.random() * 100 + "vw";
    doodle.style.color = colors[Math.floor(Math.random() * colors.length)];
    doodle.style.transform = `rotate(${Math.random() * 360}deg)`;

    // Premium Floating Animation
    const duration = Math.random() * 20 + 20;
    const delay = Math.random() * -20;
    doodle.style.animation = `doodle-float ${duration}s ease-in-out ${delay}s infinite alternate`;

    container.appendChild(doodle);
  }
}

function scrollHeader() {
  const header = document.getElementById("header");
  if (!header) return;

  if (window.scrollY > 75) {
    header.classList.add("scrolled");
    header.classList.add("glass-panel"); // Add glass effect on scroll
  } else {
    header.classList.remove("scrolled");
    header.classList.remove("glass-panel");
  }
}

function parallaxBackground() {
  const parallax = document.querySelector(".parallax");
  if (parallax) {
    parallax.style.backgroundPositionY = window.scrollY * 0.3 + "px";
  }
}

// Main Execution
document.addEventListener("DOMContentLoaded", () => {
  scrollHeader();

  // Respect Theme Settings (Agentic Section)
  const settings = window.themeSettings || {
    ai_disclosure: true,
    focus_mode: false,
    doodle_engine: true,
  };

  if (settings.doodle_engine) {
    initDoodleEngine();
  }

  // AI Chatbot UI (Rule 6.1)
  const initAIChatbot = () => {
    // Drag state variables
    let dragStartX = 0;
    let dragStartY = 0;
    let initialBtnLeft = 0;
    let initialBtnTop = 0;
    let isDragging = false;
    const aiPosKey = "ai_chat_pos";

    // Check if AI assistant is enabled (default: true)
    const isAIEnabled =
      localStorage.getItem("ai_assistant_enabled") !== "false";

    // Create toggle button for enabling/disabling AI assistant
    const aiToggleBtn = document.createElement("button");
    aiToggleBtn.id = "ai-assistant-toggle";
    aiToggleBtn.innerHTML = isAIEnabled ? "🤖 Hide AI" : "🤖 Show AI";
    aiToggleBtn.title = isAIEnabled ? "Hide AI Assistant" : "Show AI Assistant";
    aiToggleBtn.className =
      "fixed top-20 right-5 px-4 py-2 bg-white/90 border border-black/10 rounded-[20px] cursor-pointer text-[0.85rem] font-semibold z-[999] backdrop-blur-md transition-all duration-300 shadow-sm hover:shadow-md";

    // Create chat button
    const chatBtn = document.createElement("button");
    chatBtn.id = "ai-chat-toggle";
    chatBtn.innerHTML = "<span>✨ AI Assistant</span>";
    chatBtn.className =
      "fixed bottom-5 left-5 px-5 py-3 rounded-full glass-panel squishy bg-white/80 backdrop-blur shadow-lg border border-white/20 z-[999] font-bold text-[var(--color-brand-primary)] flex items-center gap-2";
    chatBtn.style.display = isAIEnabled ? "block" : "none";

    // Create chat panel
    const chatPanel = document.createElement("div");
    chatPanel.id = "ai-chat-panel";
    chatPanel.className =
      "fixed bottom-24 left-5 w-[320px] h-[450px] flex flex-col z-[1000] p-4 rounded-2xl glass-panel bg-white/90 backdrop-blur shadow-2xl border border-white/20 hidden transition-all duration-300";

    chatPanel.innerHTML = `
            <div class="flex justify-between items-center mb-4 pb-3 border-b border-gray-100">
                <h4 class="m-0 text-lg font-bold text-[var(--color-brand-dark)]">AI Knowledge Base</h4>
                <button id="close-ai-chat" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 text-gray-500 text-xl transition-colors">×</button>
            </div>
            <div id="ai-chat-messages" class="grow overflow-y-auto text-sm mb-4 space-y-3 p-2 bg-gray-50/50 rounded-lg">
                <p class="text-gray-500 text-center italic mt-10">Ask me anything about this site...</p>
            </div>
            <div class="flex gap-2">
                <input type="text" placeholder="Type a message..." class="grow px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-[var(--color-brand-primary)] focus:border-transparent">
                <button class="px-4 py-2 bg-[var(--color-brand-primary)] text-white rounded-lg hover:bg-[var(--color-brand-secondary)] font-medium transition-colors shadow-sm">Send</button>
            </div>
        `;

    // Append elements to body
    document.body.appendChild(aiToggleBtn);
    if (isAIEnabled) {
      document.body.appendChild(chatBtn);
      document.body.appendChild(chatPanel);
    }

    // Toggle AI assistant visibility
    const toggleChat = () => {
      const currentState =
        localStorage.getItem("ai_assistant_enabled") !== "false";
      const newState = !currentState;

      localStorage.setItem("ai_assistant_enabled", newState);

      if (newState) {
        // Show AI assistant
        aiToggleBtn.innerHTML = "🤖 Hide AI";
        aiToggleBtn.title = "Hide AI Assistant";
        chatBtn.style.display = "block";
        document.body.appendChild(chatBtn);
        document.body.appendChild(chatPanel);

        // Animate in
        setTimeout(() => {
          chatBtn.style.opacity = "1";
          chatBtn.style.transform = "translateY(0)";
        }, 10);
      } else {
        // Hide AI assistant
        aiToggleBtn.innerHTML = "🤖 Show AI";
        aiToggleBtn.title = "Show AI Assistant";

        // Animate out
        chatBtn.style.opacity = "0";
        chatBtn.style.transform = "translateY(20px)";
        chatPanel.style.display = "none";

        setTimeout(() => {
          chatBtn.style.display = "none";
          if (chatBtn.parentNode) chatBtn.parentNode.removeChild(chatBtn);
          if (chatPanel.parentNode) chatPanel.parentNode.removeChild(chatPanel);
        }, 300);
      }

      triggerHaptic("light");

      const rect = chatBtn.getBoundingClientRect();
      initialBtnLeft = rect.left;
      initialBtnTop = rect.top;

      const onDragMove = (moveEvent) => {
        const currentX =
          moveEvent.type === "touchmove"
            ? moveEvent.touches[0].clientX
            : moveEvent.clientX;
        const currentY =
          moveEvent.type === "touchmove"
            ? moveEvent.touches[0].clientY
            : moveEvent.clientY;

        const dx = currentX - dragStartX;
        const dy = currentY - dragStartY;

        if (Math.abs(dx) > 5 || Math.abs(dy) > 5) {
          isDragging = true;
          chatBtn.style.bottom = "auto";
          chatBtn.style.left = initialBtnLeft + dx + "px";
          chatBtn.style.top = initialBtnTop + dy + "px";
          chatBtn.style.cursor = "grabbing";

          // Close panel while dragging for cleaner UX
          chatPanel.style.display = "none";
        }
      };

      const onDragEnd = () => {
        chatBtn.style.cursor = "move";
        document.removeEventListener("mousemove", onDragMove);
        document.removeEventListener("mouseup", onDragEnd);
        document.removeEventListener("touchmove", onDragMove);
        document.removeEventListener("touchend", onDragEnd);

        if (isDragging) {
          // Save new position
          const rect = chatBtn.getBoundingClientRect();
          localStorage.setItem(
            aiPosKey,
            JSON.stringify({
              x: rect.left,
              y: rect.top,
            })
          );
        } else {
          toggleChat();
        }
      };

      document.addEventListener("touchmove", onDragMove, { passive: false });
      document.addEventListener("touchend", onDragEnd);
    };

    aiToggleBtn.addEventListener("click", toggleChat);

    const onDragStart = (e) => {
      isDragging = false;
      dragStartX = e.type === "touchstart" ? e.touches[0].clientX : e.clientX;
      dragStartY = e.type === "touchstart" ? e.touches[0].clientY : e.clientY;
    };

    chatBtn.style.cursor = "move";
    chatBtn.addEventListener("mousedown", onDragStart);
    chatBtn.addEventListener("touchstart", onDragStart, { passive: false });

    chatPanel.querySelector("#close-ai-chat").addEventListener("click", () => {
      chatPanel.style.display = "none";
    });
  };

  // Only initialize AI chatbot if enabled in admin settings
  if (settings.ai_assistant) {
    initAIChatbot();
  }

  if (settings.focus_mode) {
    setFocusMode(true, false); // Apply Focus Mode if enabled in Admin
  }

  // Scroll Events
  if (!isTouch) {
    window.addEventListener(
      "scroll",
      () => {
        requestAnimationFrame(() => {
          scrollHeader();
          parallaxBackground();
        });
      },
      { passive: true }
    ); // Performance: Passive listener
  } else {
    // Touch scroll optimization
    window.addEventListener(
      "touchmove",
      () => {
        requestAnimationFrame(scrollHeader);
      },
      { passive: true }
    );
  }

  // Smooth Scroll to Start
  const toStart = document.getElementById("to-start");
  if (toStart) {
    toStart.addEventListener("click", (e) => {
      e.preventDefault();
      const start = document.getElementById("start");
      if (start) {
        const headerOffset = 45;
        const elementPosition = start.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.scrollY - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });
      }
    });
  }

  // Smooth Scroll to Top
  const toTop = document.getElementById("to-top");
  if (toTop) {
    toTop.addEventListener("click", (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // Responsive Menu
  const toggle = document.getElementById("toggle");
  const overlay = document.getElementById("overlay");
  const body = document.body;

  if (toggle) {
    toggle.addEventListener("click", () => {
      triggerHaptic("light"); // Section 3.2 Haptic Mandate

      // Rule 4.1: Use data attributes for state
      const isActive = toggle.getAttribute("data-state") === "active";
      const newState = isActive ? "inactive" : "active";

      toggle.setAttribute("data-state", newState);
      toggle.setAttribute("aria-expanded", newState === "active");

      if (overlay) {
        overlay.setAttribute("data-state", isActive ? "closed" : "open");
        overlay.setAttribute("aria-hidden", isActive ? "true" : "false");
      }

      body.classList.toggle("mobile-nav-open");
    });
  }

  // Eco-Mode Toggle Listener
  const ecoToggle = document.getElementById("eco-toggle");
  if (ecoToggle) {
    ecoToggle.addEventListener("click", (e) => {
      e.preventDefault();
      triggerHaptic("medium"); // Physical confirmation for state change
      const isEco = document.body.classList.contains("eco-mode");
      setEcoMode(!isEco);
    });
  }

  // Focus Mode Toggle Listener
  const focusToggle = document.getElementById("focus-toggle");
  if (focusToggle) {
    focusToggle.addEventListener("click", (e) => {
      e.preventDefault();
      triggerHaptic("medium");
      const isFocus = document.body.classList.contains("focus-mode");
      setFocusMode(!isFocus);
    });
  }

  // Bionic Mode Toggle Listener
  const bionicToggle = document.getElementById("bionic-toggle");
  if (bionicToggle) {
    bionicToggle.addEventListener("click", (e) => {
      e.preventDefault();
      triggerHaptic("medium");
      const isBionic = document.body.classList.contains("bionic-mode");
      setBionicMode(!isBionic);
    });
  }

  // Dark Mode Toggle Listener
  const darkToggle = document.getElementById("dark-toggle");
  if (darkToggle) {
    darkToggle.addEventListener("click", (e) => {
      e.preventDefault();
      triggerHaptic("medium");
      const isDark = document.body.classList.contains("dark-mode");
      setDarkMode(!isDark);
    });
  }

  // Squishy Physics Listener
  document.querySelectorAll(".btn, .donate-btn, .social-btn").forEach((btn) => {
    btn.classList.add("squishy");
    btn.addEventListener("click", () => triggerHaptic("light"));
  });

  // Spatial / Agentic Stubs - Upgraded for 2026

  // 1. WebXR Detection
  if (navigator.xr) {
    navigator.xr.isSessionSupported("immersive-vr").then((supported) => {
      if (supported) {
        document.body.classList.add("xr-supported");

        // Inject Spatial Entry Button (Rule 2.1 Hardware Handshake)
        const xrButton = document.createElement("button");
        xrButton.id = "xr-entry-button";
        xrButton.classList.add(
          "fixed",
          "bottom-5",
          "right-5",
          "px-5",
          "py-3",
          "rounded-full",
          "cursor-pointer",
          "flex",
          "items-center",
          "gap-2",
          "glass-panel",
          "squishy",
          "z-[999]",
          "bg-white/90",
          "backdrop-blur",
          "border",
          "border-zinc-200",
          "shadow-xl",
          "font-bold",
          "text-[var(--color-brand-dark)]"
        );
        xrButton.innerHTML = "<span>🥽 Enter Spatial Mode</span>";
        xrButton.setAttribute("aria-label", "Enter WebXR Immersive Experience");

        document.body.appendChild(xrButton);

        xrButton.addEventListener("click", () => {
          triggerHaptic("medium");
          // In a full implementation, this triggers navigator.xr.requestSession('immersive-vr')
          console.log("WebXR Session Requested");
          alert("WebXR Mode Requested. (Hardware placeholder)");
        });
      }
    });
  }

  // 2. Gaze-Aware & Speculation Rules API
  // Using IntersectionObserver for viewport awareness + Mouse/Hover for desktop gaze

  const speculationScript = document.createElement("script");
  speculationScript.type = "speculationrules";
  document.head.appendChild(speculationScript);

  const updateSpeculationRules = (urls) => {
    if (
      HTMLScriptElement.supports &&
      HTMLScriptElement.supports("speculationrules")
    ) {
      const rules = {
        prefetch: [
          {
            source: "list",
            urls: urls,
          },
        ],
        prerender: [
          {
            source: "list",
            urls: urls,
            score: 0.5, // Lower confidence for gaze
          },
        ],
      };
      speculationScript.textContent = JSON.stringify(rules);
    }
  };

  document.querySelectorAll("a").forEach((link) => {
    link.addEventListener("mouseenter", () => {
      // Simulated "Gaze" intent
      if (
        !document.body.classList.contains("eco-mode") &&
        !document.body.classList.contains("focus-mode")
      ) {
        link.classList.add("gaze-aware");
      }

      // Predictive Prefetching via Speculation Rules
      const href = link.getAttribute("href");
      if (href && href.startsWith("/") && !href.startsWith("#")) {
        updateSpeculationRules([href]);
      }
    });

    link.addEventListener("mouseleave", () => {
      link.classList.remove("gaze-aware");
    });
  });

  // Vanilla JS TreeMenu Replacement
  // Looks for .tree class and adds expanding functionality
  const trees = document.querySelectorAll(".tree");
  trees.forEach((tree) => {
    // Find all LIs that contain a nested UL
    const parents = tree.querySelectorAll("li:has(ul)"); // Modern CSS selector

    parents.forEach((parent) => {
      // Add a toggle button or make the link togglable
      // Strategy: Add a toggle icon/span
      const link = parent.querySelector("a");
      const submenu = parent.querySelector("ul");

      if (link && submenu) {
        // Determine if already active
        if (
          link.classList.contains("active") ||
          submenu.querySelector(".active")
        ) {
          parent.classList.add("open");
        }

        // Create toggle
        const toggle = document.createElement("span");
        toggle.className = "tree-toggle";
        toggle.innerHTML = "+"; // Simple text icon, can be replaced with SVG

        // Style the toggle (inline for now, or move to CSS)
        toggle.style.cursor = "pointer";
        toggle.style.float = "right";
        toggle.style.marginLeft = "10px";

        // Insert toggle after the link text but inside the anchor if possible, or after
        link.appendChild(toggle);

        // Event Listener
        toggle.addEventListener("click", (e) => {
          e.preventDefault();
          e.stopPropagation();
          parent.classList.toggle("open");
          toggle.innerHTML = parent.classList.contains("open") ? "-" : "+";
        });
      }
    });
  });

  // Newsletter Haptic Trigger
  const newsletterForm = document.querySelector(".footer-form");
  if (newsletterForm) {
    newsletterForm.addEventListener("submit", (e) => {
      triggerHaptic("medium");
    });
  }

  // =========================================================================
  // PERFORMANCE MONITORING (Priority 3)
  // =========================================================================
  if ("PerformanceObserver" in window) {
    // Track Core Web Vitals
    const vitalsObserver = new PerformanceObserver((list) => {
      for (const entry of list.getEntries()) {
        // Log to console (in production, send to analytics)
        console.log(
          `[Performance] ${entry.name}:`,
          entry.startTime.toFixed(2) + "ms"
        );

        // Store in sessionStorage for debugging
        const vitals = JSON.parse(
          sessionStorage.getItem("core_web_vitals") || "{}"
        );
        vitals[entry.name] = entry.startTime;
        sessionStorage.setItem("core_web_vitals", JSON.stringify(vitals));
      }
    });

    // Observe paint events
    vitalsObserver.observe({
      entryTypes: ["paint", "largest-contentful-paint"],
    });

    // Track Interaction to Next Paint (INP)
    if ("PerformanceEventTiming" in window) {
      const inpObserver = new PerformanceObserver((list) => {
        for (const entry of list.getEntries()) {
          if (entry.duration > 200) {
            console.warn(
              `[Performance] Slow interaction detected: ${entry.duration.toFixed(
                2
              )}ms`
            );
          }
        }
      });
      inpObserver.observe({ type: "event", buffered: true });
    }
  }

  // =========================================================================
  // MAGIC WINDOW - Device Orientation (Priority 3)
  // =========================================================================
  if (window.DeviceOrientationEvent && !isTouch) {
    // Request permission on iOS 13+
    const requestOrientationPermission = () => {
      if (typeof DeviceOrientationEvent.requestPermission === "function") {
        DeviceOrientationEvent.requestPermission()
          .then((permissionState) => {
            if (permissionState === "granted") {
              enableMagicWindow();
            }
          })
          .catch(console.error);
      } else {
        // Non-iOS devices
        enableMagicWindow();
      }
    };

    const enableMagicWindow = () => {
      window.addEventListener(
        "deviceorientation",
        (e) => {
          if (!document.body.classList.contains("eco-mode")) {
            const tilt = e.beta; // -180 to 180 (front-back tilt)
            const turn = e.gamma; // -90 to 90 (left-right tilt)

            // Apply subtle 3D parallax to hero sections
            document.querySelectorAll(".parallax-3d, .hero").forEach((el) => {
              const intensity = 0.05; // Subtle movement
              el.style.transform = `
                            perspective(1000px)
                            rotateX(${tilt * intensity}deg) 
                            rotateY(${turn * intensity}deg)
                        `;
            });
          }
        },
        { passive: true }
      );
    };

    // Auto-enable or wait for user gesture
    if (typeof DeviceOrientationEvent.requestPermission !== "function") {
      enableMagicWindow();
    } else {
      // Add button to request permission (iOS requirement)
      const magicWindowBtn = document.createElement("button");
      magicWindowBtn.textContent = "🎯 Enable 3D View";
      magicWindowBtn.className =
        "fixed top-20 right-5 z-[100] px-3 py-1.5 text-xs font-medium bg-white/90 backdrop-blur rounded-full border border-gray-200 shadow-sm layer-floating glass-panel transition-all hover:bg-white";
      magicWindowBtn.addEventListener("click", () => {
        requestOrientationPermission();
        magicWindowBtn.remove();
      });
      // Only show on mobile devices
      if (window.innerWidth < 768) {
        document.body.appendChild(magicWindowBtn);
      }
    }
  }
});

/**
 * 2026 Prayer Widget Logic (Alpine.js)
 */
function prayerWidget() {
  return {
    hijriDate: "--",
    gregorianDate: "--",
    nextPrayerName: "Asr",
    nextPrayerTime: "15:45",
    init() {
      this.updateDates();
      setInterval(() => this.updateDates(), 60000);
      // In a real app, this would fetch from an API
      console.log("[Religious Utility] Prayer Widget Initialized");
    },
    updateDates() {
      const now = new Date();
      this.gregorianDate = now.toLocaleDateString("en-US", {
        weekday: "short",
        month: "short",
        day: "numeric",
      });
      this.hijriDate = new Intl.DateTimeFormat("en-TN-u-ca-islamic", {
        day: "numeric",
        month: "long",
        year: "numeric",
      }).format(now);
    },
  };
}

/**
 * 2026 Khums Calculator Logic (Alpine.js)
 */
function khumsCalculator() {
  return {
    savings: 0,
    assets: 0,
    rate: 20, // Default 20%
    currency: "$",
    get total() {
      const amount =
        (parseFloat(this.savings) || 0) + (parseFloat(this.assets) || 0);
      return Math.round(amount * (this.rate / 100));
    },
    get formattedTotal() {
      return this.currency + this.total.toLocaleString();
    },
  };
}

// Global scope expose for Alpine.js
window.prayerWidget = prayerWidget;
window.khumsCalculator = khumsCalculator;
