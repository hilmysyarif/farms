<div id="selects">
    <input type="hidden" name="@{{ name }}" value="@{{ value }}">
    <input type="hidden" name="option_name" value="{{ old('option_name') }}">
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span id="name">@{{ notice }}</span>
            <span class="caret"></span>
        </button>
        <span id="full-address"></span>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li>
                <div class="container-fluid">
                    <ul class="list-unstyled" v-bind:class="groupClass" v-for="(pindex, group) in selects">
                        <li v-for="(cindex, option) in group">
                            <a href="###" v-on:click="loadChildren(option.id, option.name, option.pid)">@{{ option.name }}</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>