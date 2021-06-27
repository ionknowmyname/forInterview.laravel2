require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
Vue.use(VueRouter);

import VueAxios from "vue-axios";
import axios from "axios";

import App from "./App.vue";
Vue.use(VueAxios, axios);

import CreateClient from "./components/CreateClient.vue";
import AllClient from "./components/AllClient.vue";
import SingleClient from "./components/SingleClient.vue";

const routes = [
    {
        name: "createclient",
        path: "/createclient",
        component: CreateClient
    },
    {
        name: "allclient",
        path: "/allclient",
        component: AllClient
    },
    {
        name: "singleclient",
        path: "/singleclient/:id",
        component: SingleClient
    }
];

const router = new VueRouter({ mode: "history", routes: routes });
const app = new Vue(Vue.util.extend({ router }, App)).$mount("#app");

/* Vue.component(
    "create-component",
    require("./components/CreateClient.vue").default
); */

/* const app = new Vue({
    el: "#app"
});
 */
