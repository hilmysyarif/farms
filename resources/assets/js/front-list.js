var Vue = require('vue');
var VueResource = require('vue-resource');

Vue.use(VueResource);

var Navigation = require('./components/front/common/Navigation.vue');
var Footer = require('./components/front/common/Footer.vue');
var BreadCrumb = require('./components/front/common/BreadCrumb.vue');
var List = require('./components/front/list/List.vue');
var Pagination = require('./components/common/Pagination.vue');


new Vue({
    el: 'body',
    components: {
        navigation: Navigation,
        breadcrumb: BreadCrumb,
        list: List,
        pagination: Pagination,
        footersection: Footer
    },
    ready() {
        this.$http.get('/test').then((response) => {
            // success
            console.log(response);
            console.log(response.data);
        }, (response) => {
            // error
            console.log(response);
        })
    }
});