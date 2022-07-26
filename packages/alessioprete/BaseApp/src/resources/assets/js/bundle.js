import $ from  'jquery';
import {TabulatorFull as Tabulator} from 'tabulator-tables';
window.$ = window.jQuery = $; // jQuery
window.Tabulator = Tabulator;
window.Popper = require('popper.js').default; // popper.js for tooltips
window.Noty = require('noty'); // Unobtrusive alert or notification bubbles
window.coreui = require('@coreui/coreui/dist/js/coreui.bundle.js');

require('bootstrap'); // Bootstrap for tabs, dropdowns, carousels etc
require('simplebar');
require('@coreui/utils');
require('bootstrap-table');
