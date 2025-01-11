@props(['posts','day','month','start'])

<?php echo $start; ?>

@foreach ($posts as $post )
<?php

    $d = $post->created_at;
    $unix = strtotime($d);
    $date = getDate($unix);
    $month = $date['month'];
    $day = $date['mday'];
?>
<div class="blog-slide">
    <div class="img">
        <img src="{{ asset('images/photos/'. $post->image) }}" alt="">
        <div class="date">{{ $day }}
            @if (strlen($month) >= 7)
            <span>{{ substr($month, 0, -4) }}</span>
            @else
            <span>{{ $month }}</span>
            @endif
        </div>
    </div>
    <div class="info">

        <div class="category">{{ $post->category->title }}</div>
        <div class="name">{{ $post->title }}</div>
        <div class="post-info">
            <span><a href="#"><i class="fa fa-user"></i>info@gmail.com</a></span>
            <span><a href="#"><i class="fa fa-tag"></i>Music</a></span>
            <span><a href="#"><i class="fa fa-comments"></i>78  Comment</a></span>
        </div>
        <p>{{ $post->body }}</p>
        <a href="{{ route('posts.show', $post) }}" class="btn2">view More</a>
    </div>

</div>
@endforeach

