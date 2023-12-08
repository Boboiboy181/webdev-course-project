import "./bootstrap";

import "../sass/app.scss";

import * as bootstrap from "bootstrap";

import "./auth.js";
import "./cart.js";
import "./checkout.js";

import { backToTop } from "./partials/back-to-top";
import { sticky } from "./partials/sticky";
import { modal } from "./partials/modal";

backToTop();
sticky();
modal();
