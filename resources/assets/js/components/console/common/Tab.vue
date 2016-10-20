<template>
    <div class="col-lg-12 gap-bottom">
        <ul class="nav nav-tabs">
            <li
                    :class="{'active': $index == active }"
                    v-for="tab in tabs"
                    v-on:click="changeActive($index)"
                    role="presentation"><a href="#!{{ tab.url }}">{{ tab.name }}</a></li>
        </ul>
    </div>
</template>

<style lang="sass">
    .focus {
        a {
            outline: none;
        }
    }
</style>

<script>
    export default {
        props: {
            active: {
                twoWay: true
            },
            tabs: {
                type: Array
            }
        },
        methods: {
            changeActive: function(index) {
                this.active = index;
            }
        },
        ready() {
            console.groupCollapsed('Tab.vue');
            console.info('active: ');
            console.info(this.active);
            console.groupEnd();
        }
    }
</script>