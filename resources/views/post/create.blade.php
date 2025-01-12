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

{{-- $(document).ready(function () {
    // Load cart items from local storage on page load
    updateCartDisplay();

    // Add product to cart when button is clicked
    $(".add-to-cart").click(function () {
        // Get the product ID from the parent <li> element
        let productId = $(this).parent().data("id");

        // Get the existing cart from local storage or initialize a new array
        let cart = JSON.parse(localStorage.getItem("cart")) || [];

        // Check if product is already in the cart
        if (!cart.includes(productId)) {
            cart.push(productId); // Add product ID to cart array
            localStorage.setItem("cart", JSON.stringify(cart)); // Save updated cart to local storage
            alert(`Product ${productId} added to cart!`);
        } else {
            alert(`Product ${productId} is already in the cart.`);
        }

        // Update cart display
        updateCartDisplay();
    });

    // Function to update the cart display
    function updateCartDisplay() {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        $("#cart-items").empty(); // Clear current cart display

        if (cart.length > 0) {
            cart.forEach((productId) => {
                $("#cart-items").append(`<li>Product ID: ${productId}</li>`);
            });
        } else {
            $("#cart-items").append("<li>Cart is empty</li>");
        }
    }
}); --}}


{{-- $(document).ready(function () {
    // Handle the button click to fetch products
    $('#fetchProducts').on('click', function () {
        $.ajax({
            url: '/products', // Laravel route
            method: 'GET',
            success: function (data) {
                // Clear the existing rows in the table body
                $('#productTable tbody').empty();

                // Populate the table with product data
                data.forEach(function (product) {
                    let row = `
                        <tr>
                            <td>${product.id}</td>
                            <td>${product.name}</td>
                            <td>${product.price}</td>
                        </tr>
                    `;
                    $('#productTable tbody').append(row);
                });
            },
            error: function (xhr, status, error) {
                console.error('Error fetching products:', error);
            }
        });
    });
}); --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cart</title>
</head>
<body>
    <div class="product" data-id="1" data-name="Product 1" data-price="100">
        <h3>Product 1</h3>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="product" data-id="2" data-name="Product 2" data-price="150">
        <h3>Product 2</h3>
        <button class="add-to-cart">Add to Cart</button>
    </div>

    <script>
        // Function to add product to localStorage with quantity tracking
        function addToCart(productId) {
            // Get the existing cart from localStorage
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Check if the product already exists in the cart
            let productIndex = cart.findIndex(item => item.id === productId);

            if (productIndex !== -1) {
                // If the product is already in the cart, increase the quantity
                cart[productIndex].quantity += 1;
            } else {
                // If the product is not in the cart, add it with quantity 1
                cart.push({ id: productId, quantity: 1 });
            }

            // Store the updated cart back to localStorage
            localStorage.setItem('cart', JSON.stringify(cart));

            // Log to check
            console.log(localStorage.getItem('cart'));
        }

        // Event listener for the 'Add to Cart' button
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                // Get the product ID from the data attribute
                let productId = this.closest('.product').getAttribute('data-id');
                addToCart(Number(productId));
            });
        });
    </script>
</body>
</html> --}}


