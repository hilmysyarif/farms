var Vue = require('vue');
// var VueRouter = require('vue-router');
//
// Vue.use(VueRouter);

var Navigation = require('./components/front/common/Navigation.vue');
var Carousel = require('./components/front/home/Carousel.vue');
var Recommended = require('./components/front/home/Recommended.vue');
var Content = require('./components/front/common/Content.vue');
var Footer = require('./components/front/common/Footer.vue');


// var Foo = Vue.extend({
//     template: '<h1>This is foo!</h1>'
// });
//
// var Bar = Vue.extend({
//     template: '<h1>This is bar!</h1>'
// });

// var App = Vue.extend({});
//
//
// var List = Vue.extend({
//     template: '<h1>This is list!</h1>'
// });
//
// var Login = Vue.extend({
//     template: '<h1>This is login!</h1>'
// });
//
// var Register = Vue.extend({
//     template: '<h1>This is register!</h1>'
// });
//
//
// var router = new VueRouter();
//
//
// router.map({
//     '/list': {
//         component: List
//     },
//     '/login': {
//         component: Login
//     },
//     '/register': {
//         component: Register
//     }
// });
//
// router.start(App, '.navbar');


new Vue({
    el: 'body',
    components: {
        navigation: Navigation,
        content: Content,
        carousel: Carousel,
        recommended: Recommended,
        footersection: Footer
    }
});


//--------------router----------------
// var Vue = require('vue');
// var VueRouter = require('vue-router');
//
// Vue.use(VueRouter);
//
// var List = Vue.extend({
//     template: '<h1>This is a list!</h1>'
// });
// //    var Carousel = require('../home/Carousel.vue');
// //    var Recommended = require('../home/Recommended.vue');
//
//
// // var App = Vue.extend({});
// var router = new VueRouter();
//
// router.map({
//     '/list': {
//         component: List
//     }
// });
//
// router.start(Content, '#navigation');