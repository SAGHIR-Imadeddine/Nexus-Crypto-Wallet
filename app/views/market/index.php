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
            <a href="<?php echo URLROOT; ?>/transaction/Buy_sell_page"><i class="fa-solid fa-store"></i> BUY/sell </a>
            <a href="#"><i class="fa-solid fa-wallet"></i> Wallet</a>
            <a href="<?php echo URLROOT; ?>watchlists/index"><i class="fa-solid fa-chart-simple"></i> Watchlist</a>
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
                                <form id="addToWatchlistForm" method="POST" action="<?php echo URLROOT; ?>watchlists/list">
                                    <input type="hidden" name="crypto_id" value="<?php echo $crypto['id']; ?>">
                                    <button style=" background-color: #fafafa70;
                                                    padding: 7px 12px;
                                                    text-decoration: none;
                                                    border-radius: 5px;
                                                    letter-spacing: 1px;
                                                    color: #fafafa;
                                                    font-weight: 500;
                                                    border : none;" type="submit">Add To Watchlist</button>
                                </form>
                                <a href="#">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </article>
</body>

</html>