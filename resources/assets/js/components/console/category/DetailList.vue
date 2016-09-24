<template>
    <div>
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>#</th>
                <th>分类名称</th>
                <th>所属上级</th>
                <th>排序</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>


            <tr v-for="cat in categories">
                <td>{{ cat.id }}</td>
                <td>{{ cat.name }}</td>
                <td>{{ cat.parent_id }}</td>
                <td>{{ cat.sort_order }}</td>
                <td>
                    <a class="btn btn-primary" v-link="{ path: '/category/edit/' }"><i class="fa fa-edit">&nbsp;</i>edit</a>
                    <a class="btn btn-danger" v-link="{ path: '/category/delete/' }"><i class="fa fa-remove">&nbsp;</i>delete</a>
                </td>
            </tr>


            </tbody>
        </table>

        <pagination></pagination>
    </div>
</template>

<script>

    var Pagination = require('../common/Pagination.vue');

    export default{
        props: ['categories'],
        components: {
            pagination: Pagination
        }
    }
</script>
