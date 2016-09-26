/*------------------------------------------------------------------------------
 JS Document (https://developer.mozilla.org/en/JavaScript)

 project:    project name
 created:    YYYY-MM-DD
 author:     johdoe

 ----------------------------------------------------------------------------- */
'use strict';

import './base/basics.js';
import './base/ready.js';
import './base/load.js';


/*  =CONSTANTES
 ----------------------------------------------------------------------------- */
//jQuery.noConflict();
var d = document;
var w = window;
window.pm = window.pm || {};
pm.debug = /equesto|local|krypton/.test(document.location.host) && typeof console != 'undefined';

/* END */