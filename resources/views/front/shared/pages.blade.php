<div class="container page">
    <ul class="pagination">
        @foreach ($pages as $page)
            <li class="{{ $page['liClass'] }}">
                <a href="{{ $page['url'] }}" class="{{ $page['aClass'] }}">{{ $page['text'] }}</a>
            </li>
        @endforeach
    </ul>
</div>