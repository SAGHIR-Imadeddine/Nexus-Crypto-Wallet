<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/image/coins.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/market.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
        <table>
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Price (USD)</th>
                    <th>Market Cap (USD)</th>
                    <th>24h Volume (USD)</th>
                </tr>
            </thead>
            <tbody id="cryptoTable">
                <?php foreach ($data as $crypto) : ?>
                    <tr>
                        <td><?= $crypto['cmc_rank'] ?></td>
                        <td><?= $crypto['name'] ?></td>
                        <td><?= $crypto['symbol'] ?></td>
                        <td><?= number_format($crypto['quote']['USD']['price'], 2) ?></td>
                        <td><?= number_format($crypto['quote']['USD']['market_cap'], 2) ?></td>
                        <td><?= number_format($crypto['quote']['USD']['volume_24h'], 2) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </article>
</body>

</html>