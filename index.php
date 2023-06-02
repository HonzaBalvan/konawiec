<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konawiec</title>
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
      font-family: 'Playfair Display', serif;
    }

    header h1 {
      margin: 0;
    }

    main {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .product {
      border: 1px solid #ddd;
      border-radius: 5px;
      margin: 10px;
      padding: 20px;
      width: 300px;
      text-align: center;
    }

    .product img {
      width: 200px;
      height: 200px;
      margin-bottom: 10px;
    }

    .product h2 {
      margin: 0;
      font-size: 18px;
    }

    .product p {
      margin: 10px 0;
    }

    .toolbar{
      width: 100%;
      height: 30px;
      background-color: #606060;
      border-bottom-style: solid;
      border-bottom-width: 2px;
    }

    .langButton{
      float: left;
      height:90%;
      width: 50px;
      border-style: solid;
      border-width: 2px;
      font-size: 15px;
      text-align: center;
    }

    .langButton:hover{
      background-color: #838383;
    }
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <h1 id="header1">Witamy w naszym Eshopie</h1>
  </header>
  <div class="toolbar">
    <div class="langButton" onclick="changeLanguage('cz')">CZ</div>
    <div class="langButton" onclick="changeLanguage('pl')">PL</div>
  </div>

  <main>

    <script src="languageChanger.js"></script>
    <div class="product">
      <img src="product1.jpg" alt="Product 1">
      <h2>Product 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p>$19.99</p>
      <button>Add to Cart</button>
    </div>

    <div class="product">
      <img src="product2.jpg" alt="Product 2">
      <h2>Product 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p>$24.99</p>
      <button>Add to Cart</button>
    </div>

    <div class="product">
      <img src="product3.jpg" alt="Product 3">
      <h2>Product 3</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p>$29.99</p>
      <button>Add to Cart</button>
    </div>
  </main>

  <footer>
    <p>&copy; 2023 My E-Shop. All rights reserved.</p>
  </footer>
</body>

</html>
