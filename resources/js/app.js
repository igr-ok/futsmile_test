
import Vue from "vue"
import ExampleComponent from './components/ExampleComponent.vue'
import router from "./router";

require('./bootstrap');


 new Vue({
    el: '#app',

    components:{
        ExampleComponent
    },

    router
});
