import './bootstrap';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import focus from '@alpinejs/focus';
import Chart from 'chart.js/auto';

window.Chart = Chart;
window.Alpine = Alpine;
window.Livewire = Livewire;

Alpine.plugin(focus)
Livewire.start();

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

// ===========================
// Scroll Reveal Observer
// ===========================
document.addEventListener('DOMContentLoaded', () => {
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Stagger delay for siblings
                const parent = entry.target.parentElement;
                const siblings = parent ? Array.from(parent.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale')) : [];
                const siblingIndex = siblings.indexOf(entry.target);
                const delay = siblingIndex >= 0 ? siblingIndex * 100 : 0;

                setTimeout(() => {
                    entry.target.classList.add('active');
                }, delay);

                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));

    // ===========================
    // Progress Bar Animation
    // ===========================
    const progressBars = document.querySelectorAll('.progress-bar-fill');

    const progressObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const width = entry.target.dataset.width;
                entry.target.classList.add('animate');
                requestAnimationFrame(() => {
                    entry.target.style.width = width + '%';
                });
                progressObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });

    progressBars.forEach(bar => progressObserver.observe(bar));
});