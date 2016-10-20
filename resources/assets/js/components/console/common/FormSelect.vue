<template>
    <div class="col-md-10">
        <input type="hidden" name="" value="">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                请选择
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="javascript:;" onclick="choose(this, 0)">无</a></li>

                <li><a href="javascript:;" onclick="choose(this, 1)">foo</a></li>
                <li><a href="javascript:;" onclick="choose(this, 2)">bar</a></li>
                <li><a href="javascript:;" onclick="choose(this, 3)">baz</a></li>
            </ul>
        </div>
    </div>
</template>

<script>
    function choose(ele, id) {
        var title = $(ele).html();
        var titleButton = $(ele).parent().parent().prev('button');
        var input = $(ele).parent().parent().parent().parent().prev('input');

        input.val(id);
        titleButton.html(title + '<span class="caret"></span>');
    }

    export default{

    }


</script>