
<div id="selects">
    <input type="hidden" name="@{{ name }}" value="@{{ value }}">
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span id="name">@{{ notice }}</span>
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li v-for="option in selects">
                <a href="javascript:;" v-on:click="loadSubs(option.id, option.name, $index)">@{{ option.name }}</a>
            </li>
        </ul>
    </div>
</div>
