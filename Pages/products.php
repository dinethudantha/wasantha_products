<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Wasantha Products | Passionate About Taste</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../assets/img/Wasantha Products Gray Logo.png" rel="icon">
  <link href="../assets/img/Wasantha Products Gray Logo.png" rel="wasantha-products-logo">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" />

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/main-section.css">
  <link rel="stylesheet" href="../assets/css/products-page.css">


  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->




</head>

<body class="index-page">

  <!-- Here the main section -->

  <?php

  include_once("../main-section.php");

  ?>

  <header id="header" class="header d-flex align-items-center sticky-top" style="display: none !important;">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/Wasantha Products Gray Logo.png" style="width: 75px; height: 75px !important;" alt="">

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-get-started" href="index.html#book-a-table">Get In Touch</a>

    </div>
  </header>

  <main class="main">

    <!-- Procuts Section -->
    <section class="section px-5">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>PRODUCTS</h2>
        <p><span>Our</span><span class="description-title"> Products</span></p>
      </div>
      <!-- End Section Title -->

      <div class="container">

        <div class="products-grid" id="productsGrid">
          <!-- Products will be loaded here -->
        </div>
      </div>

    </section>

    <!-- Contact Section -->
    <?php
    include_once('../contact-us.php');
    ?>
    <!-- /Contact Section -->

  </main>

  <!-- Footer Start -->
  <?php
  include_once('../footer.php')
  ?>
  <!-- Footer End -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

  <script>
    const products = [{
        id: 1,
        img: "Mixture Murukku.jpeg",
        title: "Mixture Murukku",
        sinhalaName: "මික්ස්චර් මුරුක්කු",
        description: "A flagship product with strong consumer demand. Our Mixture is a crunchy, flavorful blend made with gram flour, peanuts, green peas, lentils, garlic, chili powder, and seasoned with vegetable oil and permitted food colorings (E102, INS133). Available in Rs.20/-, Rs.50/-, Rs.100/-, and 1kg packs.",
        price: 3.99,
        originalPrice: 4.99,
        category: "chips",
        badge: "sale",
        rating: 4.5,
        reviews: 128
      },
      {
        id: 2,
        img: "Garlic Murukku.jpeg",
        title: "Garlik Murukku",
        sinhalaName: "ගාර්ලික් මුරුක්කු",
        description: "Highly popular among our customers, Garlic Bites are made from wheat flour, garlic powder, chili, salt, and water, and fried in vegetable oil to a perfect crisp. Available in Rs.20/-, Rs.50/-, Rs.100/-, and 1kg packs.",
        price: 5.99,
        originalPrice: null,
        category: "cookies",
        badge: "popular",
        rating: 4.8,
        reviews: 256
      },
      {
        id: 3,
        img: "Taste Cracker.jpeg",
        title: "Taste Cracker",
        sinhalaName: "ටේස්ට් ක්‍රැකර්",
        description: "A top-seller known for its crisp texture and spicy taste. Made with wheat flour, vegetable oil, yeast, chili powder, salt, and permitted colorings (E102, E133). Available in Rs.20/-, Rs.50/-, Rs.100/-, and 1kg packs.",
        price: 2.99,
        originalPrice: null,
        category: "candy",
        badge: "new",
        rating: 4.3,
        reviews: 89
      },
      {
        id: 4,
        img: "Sugar Murukku.jpeg",
        title: "Sugar Murukku",
        sinhalaName: "සීනි මුරුක්කු",
        description: "This colorful, sweet snack is a customer favorite, especially for its unique appearance and flavor. Made from wheat flour, vegetable oil, sugar, and salt, and colored with approved colorings (E102, E110, E133). Available only in 1kg packs in Green, Red, Yellow, and White.",
        price: 8.99,
        originalPrice: 10.99,
        category: "nuts",
        badge: "sale",
        rating: 4.7,
        reviews: 178
      },
      {
        id: 5,
        img: "Manioc Chips.jpeg",
        title: "Manioc Chips",
        sinhalaName: "මඤ්ඤොක්කා චිප්ස්",
        description: "Prepared from premium cassava and seasoned with salt and chili powder, our manioc chips are fried in vegetable oil to give a distinct and satisfying crunch. Available in 1kg packs only.",
        price: 4.49,
        originalPrice: null,
        category: "popcorn",
        badge: "popular",
        rating: 4.6,
        reviews: 203
      },
      {
        id: 6,
        img: "Coil Murukku.jpeg",
        title: "Coil Murukku",
        sinhalaName: "කොයිල් මුරුක්කු",
        description: "One of our most in-demand snacks, Coil Murukku is sold exclusively in bottles. Each bottle contains 80 pieces, priced at Rs.10/=. Made from rice flour, wheat flour, potato flour, vegetable oil, salt, chili powder, and permitted colorings (E102, INS133).",
        price: 4.29,
        originalPrice: null,
        category: "chips",
        badge: "new",
        rating: 4.2,
        reviews: 94
      },
      {
        id: 7,
        img: "Daiya Kokis.jpeg",
        title: "Daiya Taste Kokis",
        sinhalaName: "දයියා ටේස්ට් කොකිස්",
        description: "A traditional delicacy crafted with a spicy twist. Our Kokis are made from rice flour, wheat flour, potato flour, vegetable oil, salt, chili powder, and permitted colorings (E102, INS133). No artificial flavorings added. Available only in bottles.",
        price: 4.99,
        originalPrice: null,
        category: "cookies",
        badge: null,
        rating: 4.4,
        reviews: 156
      },
      {
        id: 8,
        img: "Green Peas.jpeg",
        title: "Grean Peas",
        sinhalaName: "ග්‍රීන් පීස්",
        description: "One of our longest-standing products, green peas are lightly seasoned and fried to crispy perfection. Though demand has grown gradually, it remains consistent. Made with green peas, vegetable oil, salt, and permitted coloring (E102, INS133). Available in Rs.20/-, Rs.50/-, Rs.100/-, and 1kg packs.",
        price: 3.49,
        originalPrice: 3.99,
        category: "candy",
        badge: "sale",
        rating: 4.5,
        reviews: 312
      },
      {
        id: 8,
        img: "Green Peas.jpeg",
        title: "Grean Peas",
        sinhalaName: "ග්‍රීන් පීස්",
        description: "One of our longest-standing products, green peas are lightly seasoned and fried to crispy perfection. Though demand has grown gradually, it remains consistent. Made with green peas, vegetable oil, salt, and permitted coloring (E102, INS133). Available in Rs.20/-, Rs.50/-, Rs.100/-, and 1kg packs.",
        price: 3.49,
        originalPrice: 3.99,
        category: "candy",
        badge: "sale",
        rating: 4.5,
        reviews: 312
      },
      {
        id: 9,
        img: "Roasted Gram.jpeg",
        title: "Roasted Gram",
        sinhalaName: "රෝස්ටඩ් ග්‍රෑම්",
        description: "The product that started it all. Our roasted gram remains a high-demand item, loved for its simplicity and flavor. Made with gram, turmeric powder, and salt. Available in Rs.20/-, Rs.50/-, and 1kg packs.",
        price: 3.49,
        originalPrice: 3.99,
        category: "candy",
        badge: "sale",
        rating: 4.5,
        reviews: 312
      },
      {
        id: 10,
        img: "Dhal Bites.jpeg",
        title: "Dhal Bites",
        sinhalaName: "පරිප්පු බයිට්",
        description: "Another classic from our early days, Dhal Bites are made from high-quality dhal, chili powder, salt, and vegetable oil. A popular snack across all ages. Available in Rs.20/-, Rs.50/-, and 1kg packs.",
        price: 3.49,
        originalPrice: 3.99,
        category: "candy",
        badge: "sale",
        rating: 4.5,
        reviews: 312
      },
      {
        id: 11,
        img: "Daiya Taste Fried Peanuts.jpeg",
        title: "Daiya Taste Fried Peanuts",
        sinhalaName: "දයියා ටේස්ට් බැඳපු රටකජු",
        description: "Our most premium product. Taste Peanuts are carefully prepared with peanuts, vegetable oil, salt, and chili powder. With exceptionally high and growing demand, they are available in Rs.50/-, Rs.100/-, and 1kg packs.",
        price: 3.49,
        originalPrice: 3.99,
        category: "candy",
        badge: "sale",
        rating: 4.5,
        reviews: 312
      },
      {
        id: 12,
        img: "Ring Murukku.jpeg",
        title: "Ring Murukku",
        sinhalaName: "රින්ග් මුරුක්කු",
        description: "A crispy and colorful snack loved by many. Made from wheat flour, chili, salt, vegetable oil, yeast, and permitted colorings (INS102, INS110). Available in Rs.50/-, Rs.100/-, and 1kg packs.",
        price: 3.49,
        originalPrice: 3.99,
        category: "candy",
        badge: "sale",
        rating: 4.5,
        reviews: 312
      },
      {
        id: 13,
        img: "Ball Murukku.jpeg",
        title: "Ball Murukku",
        sinhalaName: "බෝල මුරුක්කු",
        description: "Similar in taste and popularity to our Ring Bites, these are offered exclusively in 1kg packs. Made from wheat flour, chili, salt, vegetable oil, yeast, and permitted colorings (INS102, INS110).",
        price: 3.49,
        originalPrice: 3.99,
        category: "candy",
        badge: "sale",
        rating: 4.5,
        reviews: 312
      },
      {
        id: 14,
        img: "Taste Gram.jpeg",
        title: "Taste Gram",
        sinhalaName: "ටේස්ට් ග්‍රෑම්",
        description: "Although lower in demand, Taste Gram remains a staple product in our range. Made from gram, vegetable oil, salt, chili powder, and approved colorings (E102, INS133). Available in Rs.50/-, Rs.100/-, and 1kg packs.",
        price: 3.49,
        originalPrice: 3.99,
        category: "candy",
        badge: "sale",
        rating: 4.5,
        reviews: 312
      },
      {
        id: 15,
        img: "Sticks Murukku.jpeg",
        title: "Sticks Murukku",
        sinhalaName: "ස්ටික්ස් මුරුක්කු",
        description: "A favorite snack with a distinct flavor unique to Wasantha Products. Made from wheat flour, vegetable oil, yeast, chili powder, salt, and permitted colorings (E102, E133). Available in Rs.50/-, Rs.100/-, and 1kg packs.",
        price: 3.49,
        originalPrice: 3.99,
        category: "candy",
        badge: "sale",
        rating: 4.5,
        reviews: 312
      }
    ];

    function renderProducts(productsToShow) {
      const grid = document.getElementById('productsGrid');

      if (productsToShow.length === 0) {
        grid.innerHTML = '<div class="no-products">No products found in this category.</div>';
        return;
      }

      grid.innerHTML = productsToShow.map(product => `
                <div class="product-card" >
                    <div class="product-image" style="background-image: url('../assets/img/Products/Snacks/${product.img}'); background-size: cover; background-position: center;">   
                    </div>
                    <div class="product-info">
                        <h5 class="product-title">${product.title}</h5>
                        <h2 class="product-title">${product.sinhalaName}</h2>
                        <p class="product-description">${product.description}</p>
                    </div>
                </div>
            `).join('');
    }

    function filterProducts(category) {
      const filteredProducts = category === 'all' ? products : products.filter(p => p.category === category);
      renderProducts(filteredProducts);
    }

    function addToCart(productId) {
      const product = products.find(p => p.id === productId);
      alert(`Added "${product.title}" to cart!`);
    }

    function viewDetails(productId) {
      const product = products.find(p => p.id === productId);
      alert(`Viewing details for "${product.title}"`);
    }

    // Initialize filters
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', (e) => {
        // Update active state
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        e.target.classList.add('active');

        // Filter products
        const filter = e.target.dataset.filter;
        filterProducts(filter);
      });
    });

    // Initial render
    renderProducts(products);
  </script>

</body>

</html>