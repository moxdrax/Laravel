<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendyCart - Fashion Store</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    text-align: center;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #33;
    padding: 15px 20px;
}

.navbar .logo {
    color: black;
    font-size: 24px;
    font-weight: bold;
    font-family:cursive;
}

.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin: 0 15px;
}

.nav-links a {
    color: black;
    text-decoration: none;
    font-size: 18px;
    font-family:cursive;
    font-style:bold;
}

/* Hero Banner */
.hero {
    background: url('/uploads/bg.png') no-repeat center center/cover;
    color: black;
    padding: 100px 20px;
    height : 400px;
}

.hero h1 {
    font-size: 48px;
}

.shop-btn {
    background: #ffb3b3;
    color: white;
    padding: 10px 20px;
    border: none;
    font-size: 18px;
    cursor: pointer;
}

/* Products */
.products {
    padding: 50px 20px;
}

.product-grid {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.product {
    border: 1px solid #ddd;
    padding: 15px;
    width: 200px;
}

.product img {
    width: 100%;
}

/* Footer */
footer {
    background: #ffb3b3;
    color: black;
    padding: 15px;
    margin-top: 20px;
}
.product button{
    background: #ffb3b3;
    color: white;
    padding: 10px 20px;
    border: none;
    font-size: 18px;
    cursor: pointer;
}
</style>
<body>

    <!-- Navbar -->
    <header>
    <nav class="navbar">
        <div class="logo">TrendyCart</div>
        <ul class="nav-links">
            <li><a href="/home">Home</a></li>
            
            @if(session()->has('user_id'))
                <li><a href="/logout">Logout</a></li>
            @else
                <li><a href="/login">Sign in</a></li>
            @endif

            <li><a href="#">Cart</a></li>
        </ul>
        </nav>
    </header>


    <!-- Hero Banner -->
    <section class="hero">
        <h1>Find Your Style</h1>
        <p>Exclusive fashion deals for you!</p>
        <button class="shop-btn">Shop Now</button>
    </section>

    <!-- Product Section -->
    <section class="products">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <div class="product">
                <img src="/uploads/prod1.jpg" alt="Product 1"width="200px" height="200px">
                <h3>Casual Jacket</h3>
                <p>Rs 499</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="uploads/prod2.jpg" alt="Product 2"width="200px" height="200px">
                <h3>Casual Sneakers</h3>
                <p>Rs 999</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="uploads/prod3.jpg" alt="Product 3"idth="200px" height="200px">
                <h3>Watch</h3>
                <p>Rs 1999</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="uploads/bag.png" alt="Product 3"idth="200px" height="200px">
                <h3>Bag</h3>
                <p>Rs 899</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="uploads/jeans.jpeg" alt="Product 3"idth="200px" height="200px">
                <h3>Jeans</h3>
                <p>Rs 799</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="uploads/shirt.jpg" alt="Product 3"idth="200px" height="200px">
                <h3>Shirt</h3>
                <p>Rs 999</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 TrendyCart. All rights reserved.</p>
    </footer>

</body>
</html>
