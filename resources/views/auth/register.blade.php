<x-layout>
    <section class="banner inner-page">
        <div class="banner-img"><img src="images/banner/register-bannerImg.jpg" alt=""></div>
        <div class="page-title">
            <div class="container">
                <h1>Register</h1>
            </div>
        </div>
    </section>
    <section class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </section>
    <section class="login-view">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Register</h2>
                        <p>Register now - Completely free</p>
                    </div>
                    <form action="{{ route('register') }}" method="POST" >
                        @csrf
                        <div class="input-box">
                            <input type="text" placeholder="Full name" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Username" name="username">
                            @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input type="email" placeholder="Email Address" name="email">

                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input type="password" placeholder="Password" name="password">

                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input type="password" placeholder="Confirm password" name="password_confirmation">
                        </div>

                        <div class="submit-slide">
                            <input type="submit" value="Register" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>

