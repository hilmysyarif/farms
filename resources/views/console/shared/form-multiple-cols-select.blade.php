<div id="selects">
    <input type="hidden" name="@{{ name }}" value="@{{ value }}">
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span id="name">@{{ notice }}</span>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li>
                <div class="container-fluid">
                    <ul class="list-unstyled" v-bind:class="groupClass" v-for="(pindex, group) in selects">
                        <li v-for="(cindex, option) in group">
                            <a href="###" v-on:click="loadChildren(option.id, option.name)">@{{ option.name }}-@{{ pindex * size + cindex }}</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>



{{--<ul id="multicol-menu" class="nav pull-right">--}}
    {{--<li class="dropdown">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">MultiCol Menu <b class="caret"></b></a>--}}
        {{--<ul class="dropdown-menu">--}}
            {{--<li>--}}
                {{--<div class="row" style="width: 400px;">--}}
                    {{--<ul class="list-unstyled col-md-4">--}}
                        {{--<li><a href="#">test1-1</a></li>--}}
                        {{--<li><a href="#">test1-2</a></li>--}}
                        {{--<li><a href="#">test1-3</a></li>--}}
                    {{--</ul>--}}
                    {{--<ul class="list-unstyled col-md-4">--}}
                        {{--<li><a href="#">test2-1</a></li>--}}
                        {{--<li><a href="#">test2-2</a></li>--}}
                        {{--<li><a href="#">test2-3</a></li>--}}
                    {{--</ul>--}}
                    {{--<ul class="list-unstyled col-md-4">--}}
                        {{--<li><a href="#">test3-1</a></li>--}}
                        {{--<li><a href="#">test3-2</a></li>--}}
                        {{--<li><a href="#">test3-3</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</li>--}}
{{--</ul>--}}