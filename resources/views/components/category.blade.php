@props(['categories'])

<ul class="catagorie-list">
    @foreach ($categories as $cat )
    <li><a href="javascript:void(0)">{{ ucfirst($cat->title) }}</a></li>
    @endforeach
</ul>

