
require('./bootstrap');
// window.Vue = import('vue');
// import Vue from 'vue';
import { createApp } from 'vue';
import PostComponent from "./components/PostComponent.vue";
import PostCreateComponent from "./components/PostCreateComponent.vue";


const app = createApp({
    el: '#app',
});

app.component('post-component',  PostComponent );
app.component('post-create-component', PostCreateComponent);

