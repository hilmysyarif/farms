var Vue = require('vue');
var VueResource = require('vue-resource');
var VueRouter = require('vue-router');

Vue.use(VueResource);
Vue.use(VueRouter);

var Menu = require('./components/console/common/Menu.vue');
var Navigation = require('./components/console/common/Navigation.vue');


// Define component.
var CategoryList = require('./components/console/category/List.vue');
var CategoryDetailList = require('./components/console/category/DetailList.vue');
var CategoryDetailAdd = require('./components/console/category/DetailAdd.vue');

// Define a root component.
var Root = Vue.extend({
    components: {
        navigation: Navigation,
        menu: Menu
    }
})

// Create a router instance
var router = new VueRouter();

// Define rule of router.
router.map({
    '/categories': {
        component: CategoryList,

        // new add
        subRoutes: {
            '/': {
                component: CategoryDetailList
            },
            '/list': {
                component: CategoryDetailList
            },
            '/add': {
                component: CategoryDetailAdd
            }
        }
        // new add end

    }
});

// Launch application.
router.start(Root, 'body');


