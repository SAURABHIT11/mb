// Bootstrap 5 JS (includes Popper)
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

// Alpine.js
import Alpine from 'alpinejs';
window.Alpine = Alpine;

// Chart.js
import Chart from 'chart.js/auto';
window.Chart = Chart;

// =============================================
// ALPINE — NAV STORE
// =============================================
Alpine.store('nav', {
    open: false,
    scrolled: false,
    toggle() { this.open = !this.open; },
    close() { this.open = false; },
});

window.addEventListener('scroll', () => {
    const scrolled = window.scrollY > 60;
    Alpine.store('nav').scrolled = scrolled;

    // Also add/remove class on actual navbar for BS collapse support
    const navbar = document.querySelector('.navbar-main');
    if (navbar) navbar.classList.toggle('scrolled', scrolled);
});

// =============================================
// ALPINE — BLOG FILTER
// =============================================
Alpine.data('blogFilter', () => ({
    active: 'all',
    posts: [
        { id: 1, title: 'Understanding Minimally Invasive Urology', category: 'tech', categoryLabel: 'Technology', snippet: 'How robotic assistance and laparoscopy are changing recovery times and outcomes for patients.', date: 'Oct 12, 2024', readTime: '5 min', icon: '🤖' },
        { id: 2, title: '5 Warning Signs You Should See a Urologist', category: 'patient', categoryLabel: 'Patient Education', snippet: 'Early detection is the cornerstone of successful treatment. These common symptoms warrant professional evaluation.', date: 'Sep 28, 2024', readTime: '4 min', icon: '🩺' },
        { id: 3, title: 'Case Study: Complex Urethral Reconstruction', category: 'clinical', categoryLabel: 'Clinical Cases', snippet: 'A detailed review of a reconstructive surgery employing cutting-edge tissue engineering techniques.', date: 'Sep 15, 2024', readTime: '8 min', icon: '📋' },
        { id: 4, title: 'Hydration & Kidney Health: What Science Says', category: 'patient', categoryLabel: 'Patient Education', snippet: 'Separating fact from myth — optimal fluid intake, stone prevention, and evidence-based hydration strategies.', date: 'Aug 30, 2024', readTime: '3 min', icon: '💧' },
        { id: 5, title: 'AI-Assisted Diagnosis in Urological Oncology', category: 'tech', categoryLabel: 'Technology', snippet: 'How machine learning models are enhancing early detection rates in bladder and kidney cancers.', date: 'Aug 12, 2024', readTime: '6 min', icon: '🧬' },
        { id: 6, title: 'Rare Presentation of Ureteric Duplication', category: 'clinical', categoryLabel: 'Clinical Cases', snippet: 'An unusual anatomical variant encountered during laparoscopic surgery and the modified approach adopted.', date: 'Jul 22, 2024', readTime: '7 min', icon: '🔬' },
    ],
    get filtered() {
        return this.active === 'all' ? this.posts : this.posts.filter(p => p.category === this.active);
    },
    setFilter(cat) { this.active = cat; },
}));

// =============================================
// ALPINE — MEDIA FEED
// =============================================
Alpine.data('mediaFeed', () => ({
    posts: [
        { id: 1, type: 'video', category: 'Awareness',   title: 'Kidney Stone Prevention Tips',  views: '2.4k', date: '2 days ago',   emoji: '🪨' },
        { id: 2, type: 'image', category: 'Achievement', title: 'Best Surgeon Award 2024',         views: '5.1k', date: '1 week ago',   emoji: '🏆' },
        { id: 3, type: 'image', category: 'Clinic',      title: 'New Laser Suite Inauguration',   views: '1.2k', date: '2 weeks ago',  emoji: '⚡' },
        { id: 4, type: 'video', category: 'Q&A',         title: 'Prostate Health Q&A Session',    views: '3.1k', date: '3 weeks ago',  emoji: '💬' },
    ],
}));

// =============================================
// CHARTS — lazy init via IntersectionObserver
// =============================================
window.initCharts = function () {
    initRadarChart();
    initBarChart();
};

function initRadarChart() {
    const el = document.getElementById('skillsChart');
    if (!el || el.dataset.init) return;
    el.dataset.init = '1';
    new Chart(el.getContext('2d'), {
        type: 'radar',
        data: {
            labels: ['Surgical\nPrecision', 'Patient\nEmpathy', 'Diagnostics', 'Research', 'Technology'],
            datasets: [{
                label: 'Proficiency',
                data: [95, 100, 90, 85, 92],
                backgroundColor: 'rgba(230,184,74,0.12)',
                borderColor: '#e6b84a',
                borderWidth: 2,
                pointBackgroundColor: '#e6b84a',
                pointBorderColor: '#080f20',
                pointBorderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6,
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            animation: { duration: 1200, easing: 'easeInOutQuart' },
            scales: {
                r: {
                    angleLines:  { color: 'rgba(255,255,255,0.07)' },
                    grid:        { color: 'rgba(255,255,255,0.07)' },
                    pointLabels: { font: { size: 11, family: '"DM Sans", sans-serif', weight: '500' }, color: 'rgba(255,255,255,0.5)' },
                    ticks:       { display: false, max: 100, min: 0 },
                },
            },
            plugins: { legend: { display: false } },
        },
    });
}

function initBarChart() {
    const el = document.getElementById('experienceChart');
    if (!el || el.dataset.init) return;
    el.dataset.init = '1';
    new Chart(el.getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['Endourology', 'Laparoscopy', 'Uro-Oncology', 'Reconstruction', 'General'],
            datasets: [{
                label: 'Case %',
                data: [35, 25, 20, 10, 10],
                backgroundColor: ['#e6b84a', '#c9962c', '#a07320', '#7a5218', '#4e3410'],
                borderRadius: 8,
                borderSkipped: false,
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            animation: { duration: 1200, easing: 'easeOutQuart', delay: ctx => ctx.dataIndex * 80 },
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#0d1b35',
                    borderColor: 'rgba(230,184,74,0.3)',
                    borderWidth: 1,
                    titleColor: '#e6b84a',
                    bodyColor: 'rgba(255,255,255,0.7)',
                    callbacks: { label: ctx => `${ctx.parsed.y}% of practice` },
                },
            },
            scales: {
                y: { beginAtZero: true, grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { display: false } },
                x: { grid: { display: false }, ticks: { color: 'rgba(255,255,255,0.4)', font: { family: '"DM Sans", sans-serif', size: 11 } } },
            },
        },
    });
}

// =============================================
// SCROLL REVEAL — lightweight IntersectionObserver
// =============================================
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('revealed');
            revealObserver.unobserve(e.target);
        }
    });
}, { threshold: 0.12 });

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.scroll-reveal').forEach(el => revealObserver.observe(el));

    // Chart trigger
    const chartSection = document.getElementById('profile');
    if (chartSection) {
        const chartObserver = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                initCharts();
                chartObserver.disconnect();
            }
        }, { threshold: 0.2 });
        chartObserver.observe(chartSection);
    }
});

// =============================================
// SMOOTH SCROLL HELPER
// =============================================
window.scrollToSection = function (id) {
    const el = document.getElementById(id);
    if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
};

// =============================================
// BOOT ALPINE
// =============================================
Alpine.start();
