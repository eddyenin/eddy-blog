<x-layout>
    <section class="banner inner-page">
        <div class="banner-img"><img src="images/banner/blog.jpg" alt=""></div>
        <div class="page-title">
            <div class="container">
                <h1>Blog</h1>
            </div>
        </div>
    </section>
    <section class="breadcrumb dark-bg">
        <div class="container">
            <ul>
                <li><a href="{{route('posts.create')}}">Create post</a></li>
                <li><a href="{{route('posts.index')}}">Blog</a></li>
            </ul>
        </div>
    </section>
    <section class="login-view">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="section-title">
                        <h2>Create post</h2>
                    </div>
                    <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="input-box">
                            <select name="category" id="">
                                @foreach ($category as $cat )
                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-box">
                            <input type="text" name="title" placeholder="Title" value="{{ old('title')}}"  class="@error('title') is-invalid @enderror">
                        </div>
                        <div class="input-box">
                            <input type="file" name="image"  class="@error('image') is-invalid @enderror" >
                        </div>
                        <div class="input-box">
                            <textarea type="text" rows="10" cols="50" name="body" value="{{ old('body')}}" placeholder="Body"  class="@error('body') is-invalid @enderror"></textarea>
                        </div>

                        <div class="submit-slide">
                            <input type="submit" value="submit" class="btn">

                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>
</x-layout>
