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