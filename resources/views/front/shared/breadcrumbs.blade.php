<ol class="breadcrumb">
    @foreach ($breadcrumbs as $key => $breadcrumb)
        @if ($key == count($breadcrumbs) - 1)
            <li>{{ $breadcrumb['name'] }}</li>
        @else
            <li><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a></li>
        @endif
    @endforeach
</ol>