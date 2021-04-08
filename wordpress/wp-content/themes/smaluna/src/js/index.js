import "../scss/style.scss";
import {CreateSprie} from "./createSprie";
import MoveSwiper from "./moveSwiper";
import SetAttribute from "./setAttribute";
import SeeMore from "./seeMore";

import '@fortawesome/fontawesome-free/js/fontawesome';
import '@fortawesome/fontawesome-free/js/solid';
import '@fortawesome/fontawesome-free/js/regular';
import '@fortawesome/fontawesome-free/js/brands';

document.addEventListener('DOMContentLoaded', (event) => {
  new CreateSprie().init();
  new SetAttribute.init();
  new MoveSwiper.initSwiper();
  new SeeMore.init();
});

//jquery読み込み
const $ = require('jquery');
$(function() {
  //$('html,body').animate({ scrollTop: 0 }, '1');
});
