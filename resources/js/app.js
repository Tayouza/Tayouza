import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus'
import Chart from 'chart.js/auto';

window.Chart = Chart;

Alpine.plugin(focus)
window.Alpine = Alpine;
Alpine.start();

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);