<template>
    <carousel></carousel>
    <recommended></recommended>
</template>

<script>

    var Carousel = require('../home/Carousel.vue');
    var Recommended = require('../home/Recommended.vue');

    export default {
        components: {
            carousel: Carousel,
            recommended: Recommended
        }
    }


</script>
