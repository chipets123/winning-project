<?php include 'layouts/header.html'; ?>

<?php
// This is the PHP section (if needed for dynamic content or processing)
$menu_items = [
    "Tacos" => "$5.99",
    "Fries" => "$2.49",
    "Pizza" => "$8.99",
    "Soda" => "$1.49",
    "Hot Dog" => "$3.49",
    "Salad" => "$4.99",
    "Chicken Wings" => "$6.99",
    "Chicken Nugets" => "$3.99",
    "Ice Cream Sundae" => "$2.99"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Food Restaurant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #ff6347;
        }
        .slider {
            width: 100%;
            height: 300px;
            overflow: hidden;
            position: relative;
            background-color: #333;
        }
        .slider img {
            width: 30%;
            height: 0%;
            object-fit: cover;
            animation: slide 30s infinite;
        }
        @keyframes slide {
            0% {transform: translateX(-100);}
            25% {transform: translateX(-200%);}
            50% {transform: translateX(-300%);}
            75% {transform: translateX(-400%);}
            100% {transform: translateX(0);}
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 20px;
        }
        .grid-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .grid-item:hover {
            transform: scale(1.05);
        }
        .menu-item {
            font-size: 1.2em;
            color: #333;
        }
        .price {
            font-size: 1.1em;
            color: #ff6347;
        }
    </style>
</head>
<body>

    <h1>Welcome to Fast Food Restaurant!</h1>

    <!-- Image slider -->
    <div class="slider">
        <img src="https://media.istockphoto.com/id/459396345/photo/taco.jpg?b=1&s=612x612&w=0&k=20&c=wDLMWoljNsyoKKYUYyMjSZxIJ5BaX0dKyAVIF4wueA4=" alt="Tacos Lovers">
        <img src="https://img.freepik.com/premium-photo/french-fries-portionxaxa_575980-34546.jpg?ga=GA1.1.112714775.1738649949&semt=ais_incoming" alt="Fresh Fries">
        <img src="https://img.freepik.com/free-photo/pizza-with-ham-mushrooms-olives_2829-10324.jpg?ga=GA1.1.112714775.1738649949&semt=ais_incoming" alt="Pizza Time">
        <img src="https://img.freepik.com/premium-photo/ultimate-birthday-dessert-creation_1267495-9203.jpg?ga=GA1.1.112714775.1738649949&semt=ais_incoming" alt="Delicious Drinks">
    </div>

    <!-- Menu Grid -->
    <div class="grid">
        <?php foreach ($menu_items as $item => $price): ?>
            <div class="grid-item">
                <img src="https://img.freepik.com/premium-photo/close-up-paper-container-against-white-background_1048944-8741516.jpg?uid=R186610582&ga=GA1.1.112714775.1738649949&semt=ais_incoming<?php echo $item; ?>" alt="<?php echo $item; ?>" height="100px">
                <p class="menu-item"><?php echo $item; ?></p>
                <p class="price"><?php echo $price; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        // JavaScript to handle any interactivity (e.g., click events, animations)
        document.querySelectorAll('.grid-item').forEach(item => {
            item.addEventListener('click', () => {
                alert("You clicked on " + item.querySelector('.menu-item').textContent);
            });
        });
    </script>

</body>
</html>


<?php include 'layouts/footer.html'; ?>