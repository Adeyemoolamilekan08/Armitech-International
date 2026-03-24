/* =============================================
   ARMITECH INTERNATIONAL - MAIN JAVASCRIPT
   ============================================= */

document.addEventListener('DOMContentLoaded', () => {

  /* === NAVBAR SCROLL === */
  const navbar = document.querySelector('.navbar');
  const onScroll = () => {
    navbar?.classList.toggle('scrolled', window.scrollY > 40);
  };
  window.addEventListener('scroll', onScroll, { passive: true });

  /* === MOBILE NAV TOGGLE === */
  const navToggle = document.querySelector('.nav-toggle');
  const navMenu   = document.querySelector('.nav-menu');
  navToggle?.addEventListener('click', () => {
    navToggle.classList.toggle('active');
    navMenu.classList.toggle('open');
    document.body.style.overflow = navMenu.classList.contains('open') ? 'hidden' : '';
  });
  // Close on link click
  document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
      navToggle?.classList.remove('active');
      navMenu?.classList.remove('open');
      document.body.style.overflow = '';
    });
  });

  /* === ACTIVE NAV LINK === */
  const currentPath = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath === '' && href === 'index.php')) {
      link.classList.add('active');
    }
  });

  /* === SCROLL REVEAL === */
  const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  revealElements.forEach(el => revealObserver.observe(el));

  /* === PARTICLE CANVAS (Hero) === */
  const canvas = document.querySelector('#heroCanvas');
  if (canvas) {
    const ctx = canvas.getContext('2d');
    let particles = [];
    let animId;

    const resize = () => {
      canvas.width  = canvas.offsetWidth;
      canvas.height = canvas.offsetHeight;
    };
    resize();
    window.addEventListener('resize', resize);

    class Particle {
      constructor() { this.reset(); }
      reset() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.vx = (Math.random() - 0.5) * 0.4;
        this.vy = (Math.random() - 0.5) * 0.4;
        this.radius = Math.random() * 1.5 + 0.3;
        this.opacity = Math.random() * 0.5 + 0.1;
        this.life = 0;
        this.maxLife = Math.random() * 300 + 200;
      }
      update() {
        this.x += this.vx;
        this.y += this.vy;
        this.life++;
        if (this.life > this.maxLife || this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) {
          this.reset();
        }
      }
      draw() {
        ctx.save();
        ctx.globalAlpha = this.opacity * (1 - this.life / this.maxLife);
        ctx.fillStyle = '#00c8ff';
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fill();
        ctx.restore();
      }
    }

    for (let i = 0; i < 80; i++) particles.push(new Particle());

    const drawConnections = () => {
      for (let i = 0; i < particles.length; i++) {
        for (let j = i + 1; j < particles.length; j++) {
          const dx = particles[i].x - particles[j].x;
          const dy = particles[i].y - particles[j].y;
          const dist = Math.sqrt(dx*dx + dy*dy);
          if (dist < 100) {
            ctx.save();
            ctx.globalAlpha = (1 - dist/100) * 0.08;
            ctx.strokeStyle = '#00c8ff';
            ctx.lineWidth = 0.5;
            ctx.beginPath();
            ctx.moveTo(particles[i].x, particles[i].y);
            ctx.lineTo(particles[j].x, particles[j].y);
            ctx.stroke();
            ctx.restore();
          }
        }
      }
    };

    const animate = () => {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      particles.forEach(p => { p.update(); p.draw(); });
      drawConnections();
      animId = requestAnimationFrame(animate);
    };
    animate();
  }

  /* === COUNTER ANIMATION === */
  const counters = document.querySelectorAll('[data-count]');
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.getAttribute('data-count'));
        const suffix = el.getAttribute('data-suffix') || '';
        let current = 0;
        const increment = target / 60;
        const update = () => {
          current += increment;
          if (current < target) {
            el.textContent = Math.floor(current) + suffix;
            requestAnimationFrame(update);
          } else {
            el.textContent = target + suffix;
          }
        };
        update();
        counterObserver.unobserve(el);
      }
    });
  }, { threshold: 0.5 });
  counters.forEach(c => counterObserver.observe(c));

  /* === TYPED TEXT EFFECT === */
  const typedEl = document.querySelector('[data-typed]');
  if (typedEl) {
    const words = JSON.parse(typedEl.getAttribute('data-typed'));
    let wIndex = 0, cIndex = 0, isDeleting = false;
    const type = () => {
      const word = words[wIndex];
      typedEl.textContent = isDeleting ? word.slice(0, cIndex - 1) : word.slice(0, cIndex + 1);
      if (isDeleting) cIndex--;
      else cIndex++;
      let delay = isDeleting ? 60 : 100;
      if (!isDeleting && cIndex === word.length) { delay = 2000; isDeleting = true; }
      else if (isDeleting && cIndex === 0) { isDeleting = false; wIndex = (wIndex + 1) % words.length; delay = 400; }
      setTimeout(type, delay);
    };
    type();
  }

  /* === CONTACT FORM (AJAX) === */
  const contactForm = document.querySelector('#contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const btn = contactForm.querySelector('[type="submit"]');
      const msgEl = contactForm.querySelector('.form-message');
      btn.disabled = true;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';

      // Basic JS validation
      let valid = true;
      contactForm.querySelectorAll('[required]').forEach(field => {
        field.style.borderColor = '';
        if (!field.value.trim()) {
          field.style.borderColor = 'rgba(255,80,80,0.5)';
          valid = false;
        }
      });
      const emailField = contactForm.querySelector('[type="email"]');
      if (emailField && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailField.value)) {
        emailField.style.borderColor = 'rgba(255,80,80,0.5)';
        valid = false;
      }
      if (!valid) {
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
        showFormMsg(msgEl, 'error', 'Please fill in all fields correctly.');
        return;
      }

      try {
        const data = new FormData(contactForm);
        const response = await fetch('process/contact_form.php', { method: 'POST', body: data });
        const result = await response.json();
        if (result.success) {
          showFormMsg(msgEl, 'success', '✓ Your message has been sent! We\'ll get back to you shortly.');
          contactForm.reset();
        } else {
          showFormMsg(msgEl, 'error', result.message || 'Something went wrong. Please try again.');
        }
      } catch {
        showFormMsg(msgEl, 'error', 'Network error. Please email us directly at armitechinternational@gmail.com');
      }

      btn.disabled = false;
      btn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
    });
  }

  function showFormMsg(el, type, text) {
    if (!el) return;
    el.className = `form-message ${type}`;
    el.textContent = text;
    el.style.display = 'block';
    setTimeout(() => { el.style.display = 'none'; }, 6000);
  }

  /* === SMOOTH SCROLL for anchor links === */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const href = anchor.getAttribute('href');
      if (href === '#') return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const offset = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--navbar-height')) || 80;
        window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
      }
    });
  });

  /* === GLITCH EFFECT (optional hero title) === */
  const glitchEl = document.querySelector('.glitch');
  if (glitchEl) {
    setInterval(() => {
      glitchEl.classList.add('glitching');
      setTimeout(() => glitchEl.classList.remove('glitching'), 200);
    }, 4000);
  }

});
