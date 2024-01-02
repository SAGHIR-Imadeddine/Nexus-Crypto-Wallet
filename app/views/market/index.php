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
    <article>
        <div class="header">
            <h2>Welcome, Lorem!</h2>
            <div class="actions">
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Search...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="notif">
                    <button type="button"><i class="fa-regular fa-bell"></i></button>
                    <div class="badge"></div>
                </div>
                <div class="profile">
                    <button type="button">
                        <img src="<?php echo URLROOT; ?>/image/profile.jpg" alt="profile">
                    </button>
                </div>
            </div>
        </div>
        <div style="overflow-x:auto;" class="cards">
            <?php foreach ($data as $crypto) : ?>
                <div class="card-container">
                    <div class="card">
                        <div class="front-content">
                            <h2><?= $crypto['name'] ?></h2>
                            <div class="data">
                                <h4>Price : <?= number_format($crypto['quote']['USD']['price'], 2) ?></h4>
                                <p>Market Cap : <?= number_format($crypto['quote']['USD']['market_cap'], 2) ?></p>
                                <p>24h Volume : <?= number_format($crypto['quote']['USD']['volume_24h'], 2) ?></p>

                            </div>
                        </div>
                        <div class="content">
                            <p class="heading">Rank : <?= $crypto['cmc_rank'] ?></p>
                            <p>Max Supply : <?= number_format($crypto['max_supply'], 2) ?></p>
                            <p>Circulating Supply : <?= number_format($crypto['circulating_supply'], 2) ?></p>
                            <p>Total Supply : <?= number_format($crypto['total_supply'], 2) ?></p>
                            <div class="btns">
                                <button id="addToWatchlistBtn" onclick="addToWatchlist(2,<?php echo $crypto['id']; ?>)">Add To Watchlist</button>
                                <a href="#">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </article>
    <script>
        function addToWatchlist(user_id, crypto_id) {
            fetch('<?php echo URLROOT; ?>watchlists/list', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        id: crypto_id,
                    }),
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text(); // Get the entire response text
                })
                .then(responseText => {
                    console.log('Response Text:', responseText); // Log the response text
                    return JSON.parse(responseText); // Parse the JSON
                })
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