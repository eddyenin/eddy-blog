<x-layout>
    <section class="banner inner-page">
        <div class="banner-img"><img src="{{ asset('images/banner/blog-details.jpg')}}" alt=""></div>
        <div class="page-title">
            <div class="container">
                <h1>Blog Detail</h1>
            </div>
        </div>
    </section>
    <section class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
    </section>
    <div class="blog-page blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-slide">
                        <div class="img">
                            <img src="{{ asset('images/photos/'. $post->image)}}" alt="">
                            <div class="date">12<span>Jan</span></div>
                        </div>
                        <div class="info">
                            <div class="category">{{ $post->category->title }}</div>
                            <div class="name">{{$post->title}}</div>
                            @auth
                                <div class="">
                                    <a href="{{ route('posts.edit',$post)}}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{route('posts.destroy',$post)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            @endauth

                            <div class="post-info">
                                <span><a href="#"><i class="fa fa-user"></i>{{ $post->user->name}}</a></span>
                                <span><a href="#"><i class="fa fa-tag"></i>Music</a></span>
                                <span><a href="#"><i class="fa fa-comments"></i>78  Comment</a></span>
                            </div>
                            <p>{{ $post->body }}</p>


                            <div class="blog-bottom">
                                <div class="view-info"><i class="fa fa-eye"></i>400 Views</div>
                                <ul class="sosiyal-mediya">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comment-view">
                        <h3>COMMENT</h3>
                        <div class="comment-slide">
                            <div class="comment-box">
                                <div class="img"><img src="images/user-img/img1.jpg" alt=""></div>
                                <div class="replay"><a href="#"><i class="fa fa-mail-reply"></i>Replay</a></div>
                                <div class="name">Finibus Bonorum</div>
                                <div class="date">Dec 25, 2015</div>
                                <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in</p>
                            </div>
                        </div>
                        <div class="comment-slide ans">
                            <div class="comment-box">
                                <div class="img"><img src="images/user-img/img2.jpg" alt=""></div>
                                <div class="replay"><a href="#"><i class="fa fa-mail-reply"></i>Replay</a></div>
                                <div class="name">Finibus Bonorum</div>
                                <div class="date">Dec 25, 2015</div>
                                <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in</p>
                            </div>
                        </div>
                        <div class="comment-slide">
                            <div class="comment-box">
                                <div class="img"><img src="images/user-img/img3.jpg" alt=""></div>
                                <div class="replay"><a href="#"><i class="fa fa-mail-reply"></i>Replay</a></div>
                                <div class="name">Finibus Bonorum</div>
                                <div class="date">Dec 25, 2015</div>
                                <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in</p>
                            </div>
                        </div>
                        <div class="comment-slide">
                            <div class="comment-box">
                                <div class="img"><img src="images/user-img/img4.jpg" alt=""></div>
                                <div class="replay"><a href="#"><i class="fa fa-mail-reply"></i>Replay</a></div>
                                <div class="name">Finibus Bonorum</div>
                                <div class="date">Dec 25, 2015</div>
                                <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in</p>
                            </div>
                        </div>
                        <div class="comment-slide ans">
                            <div class="comment-box">
                                <div class="img"><img src="images/user-img/img5.jpg" alt=""></div>
                                <div class="replay"><a href="#"><i class="fa fa-mail-reply"></i>Replay</a></div>
                                <div class="name">Finibus Bonorum</div>
                                <div class="date">Dec 25, 2015</div>
                                <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h3>LEAVE A REPLY</h3>
                        <div class="input-box">
                            <input type="text" placeholder="Your Name">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Your Email">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Your Comment">
                            <i class="fa fa-comment"></i>
                        </div>
                        <div class="submit-slide">
                            <button class="btn2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
