<x-layout>

    <section class="banner inner-page">
        <div class="banner-img"><img src="{{ asset('images/photos/blogImg.webp')}}" alt=""></div>
        <div class="page-title">
            <div class="container">
                <h1>Blog</h1>
            </div>
        </div>
    </section>
    <section class="breadcrumb white-bg">
        <div class="container">
            <ul>
                <li><a href="{{route('posts.index')}}">Blog</a></li>
                <li><a href="{{route('posts.create')}}">Create post</a></li>
            </ul>
        </div>
    </section>

    <x-blog-page :$posts :$categories  :$start/>

</x-layout>
