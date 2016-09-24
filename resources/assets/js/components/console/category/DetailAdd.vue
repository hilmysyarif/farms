<template>
    <form class="form-horizontal" method="post" action="/categories/add">

        <div class="form-group">
            <label for="name" class="col-md-2 control-label">name</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="name" value="" />
            </div>
        </div>

        <div class="form-group">
            <label for="category_id" class="col-md-2 control-label">superiror</label>

            <form-select></form-select>
        </div>

        <div class="form-group">
            <label for="sort_order" class="col-md-2 control-label">sort</label>
            <div class="col-md-10">
                <input id="name" type="text" class="form-control" name="sort_order" value="" />
            </div>
        </div>

        <form-button></form-button>
    </form>
</template>

<script>
    var FormSelect = require('../common/FormSelect.vue');
    var FormButton = require('../common/FormButton.vue');

    export default{
        props: {
            active: {
                twoWay: true
            }
        },
        components: {
            formSelect: FormSelect,
            formButton: FormButton
        },
        ready() {
            this.$dispatch('mutate-active', 1);
        }
    }
</script>
