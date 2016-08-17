<template>
    <div>
        <tab :tabs="tabs" :active.sync="active"></tab>

        <div class="col-lg-12">
            <router-view
                    :categories="categories"
                    :active.sync="active"
                    v-on:mutate-active="mutateActive"></router-view>
        </div>
    </div>
</template>
<script>

    var Tab = require('../common/Tab.vue');
    export default{
        components:{
            tab: Tab
        },
        data() {
            return {
                categories: [],
                tabs: [],
                active: 1
            };
        },
        methods: {
            mutateActive: function (val) {
                console.groupCollapsed('List.vue');
                console.info('val: ');
                console.info(val);
                console.groupEnd();
                this.active = val;
                this.$set('active', val);
            }
        },
        ready() {
            this.$http.get('/categories').then((response) => {
                // success
                this.$set('categories', response.data.categories);
                this.$set('tabs', response.data.tabs);
                this.$set('active', response.data.active);
        }, (response) => {
                // error
            })
        }
    }
</script>
