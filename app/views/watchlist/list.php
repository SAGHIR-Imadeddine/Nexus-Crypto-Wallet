<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/image/coins.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/market.css">
    <script src="https://kit.fontawesome.com/6e1faf1eda.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>

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
            <h2>My Watchlist</h2>
        </div>

        <div style="overflow-x:auto;" class="cards">
            <?php 
            foreach ($data as $crypto) : ?>
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
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </article>
</body>

</html>
