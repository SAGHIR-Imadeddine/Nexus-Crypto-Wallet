<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/image/coins.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/market.css">
    <script src="https://kit.fontawesome.com/6e1faf1eda.js" crossorigin="anonymous"></script>
</head>

<body>
    <aside>
        <div class="head">
            <img src="<?php echo URLROOT; ?>/image/coins.png" alt="logo">
            <h2>Nexus</h2>
        </div>
        <nav>
            <a href="#"><i class="fa-solid fa-house"></i> Home</a>
            <a href="#"><i class="fa-solid fa-store"></i> Market</a>
            <a href="#"><i class="fa-solid fa-wallet"></i> Wallet</a>
            <a href="#"><i class="fa-solid fa-chart-simple"></i> Watchlist</a>
            <a href="#"><i class="fa-solid fa-clock-rotate-left"></i> History</a>
        </nav>
        <div class="footer">

        </div>
    </aside>
<!-- <button id="addToWatchlistBtn" onclick="addToWatchlist(<?php echo $user_id; ?>, <?php echo $crypto_id; ?>)">Add to Watchlist</button> -->

<script>
    function addToWatchlist(user_id, crypto_id) {

        fetch('path-to-your-php-endpoint', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                user_id: user_id,
                crypto_id: crypto_id,
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('addToWatchlistBtn').innerText = 'Added Successfully';
                document.getElementById('addToWatchlistBtn').style.backgroundColor = 'green';
            } else {
                alert('This cryptocurrency is already in your watchlist.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>


</body>
</html>