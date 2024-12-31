<x-layout>
    <section class="banner inner-page">
        <div class="banner-img"><img src="images/banner/register-bannerImg.jpg" alt=""></div>
        <div class="page-title">
            <div class="container">
                <h1>Login</h1>
            </div>
        </div>
    </section>
    <section class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </section>
    <section class="login-view">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Login</h2>
                        <p>Sign In - continue</p>
                    </div>
                    <form action="{{ route('login') }}" method="POST" >
                        @csrf

                        <div class="input-box">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>
                        <div class="input-box">
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        <div class="check-slide">
                        	<label class="label_check" for="checkbox-01"><input id="checkbox-01" type="checkbox" name="remember"> Remember Me</label>
                            <div class="right-link">
                            	<a href="#">Lost Password? </a>
                            </div>
                        </div>

                        <div class="submit-slide">
                            <input type="submit" value="Login" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>

