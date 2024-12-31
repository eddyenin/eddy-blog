@props(['posts','categories'])



@if (!$posts)
<div class="blog-page">
    <div class="container">
        <p>No posts!!!</p>
    </div>
</div>
@else
<div class="blog-page">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <x-postInfo  :$posts/>

                <div class="pagination">
                    <ul>
                        <li class="next"><a href="#"><i class="fa fa-angle-left"></i><span>Next</span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="prev"><a href="#"><span>prev</span> <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-4">
                <div class="right-slide">
                    <div class="search-box">
                        <input type="text" placeholder="Search">
                        <input type="submit" value="">
                    </div>
                    <h3>Catagories</h3>
                        <x-category  :$categories />

                    <h3>Recent Posts</h3>
                    <div class="recent-post">
                        <div class="post-slide">
                            <div class="img"><img src="images/blog/post-img1.jpg" alt=""></div>
                            <p><a href="#">when an unknown printer took a galley of type and scrambled</a></p>
                            <div class="date">12 Jan</div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endif


