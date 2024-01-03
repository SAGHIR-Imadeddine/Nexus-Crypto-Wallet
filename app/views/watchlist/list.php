<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/image/coins.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/market.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/watchlist.css">

    <script src="https://kit.fontawesome.com/6e1faf1eda.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="<?php echo URLROOT; ?>/image/favicon.svg" type="image/svg+xml">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

</head>

<body>
    <aside>
        <div class="head">
            <img src="<?php echo URLROOT; ?>/image/coins.png" alt="logo">
            <h2>Nexus</h2>
        </div>
        <nav>
            <a href="#"><i class="fa-solid fa-house"></i> Home</a>
            <a href="<?php echo URLROOT; ?>Cryptos/index"><i class="fa-solid fa-store"></i> Market</a>
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

        <section class="section market" aria-label="market update" data-section>
            <div class="container">
                <div class="market-tab">
                    <table class="market-table">
                        <thead class="table-head">
                            <tr class="table-row table-title">
                                <th class="table-heading"></th>
                                <th class="table-heading" scope="col">#</th>
                                <th class="table-heading" scope="col">Name</th>
                                <th class="table-heading" scope="col">Last Price</th>
                                <th class="table-heading" scope="col">Market Cap</th>
                                <th class="table-heading" scope="col">24h Volume</th>
                                <th class="table-heading" scope="col">Rank</th>
                                <th class="table-heading" scope="col">Max Supply</th>
                                <th class="table-heading" scope="col">Circulating Supply</th>
                                <th class="table-heading" scope="col">Total Supply</th>
                                <th class="table-heading"></th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <?php foreach ($data as $crypto) : ?>
                                <tr class="table-row">
                                    <td class="table-data">
                                        <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                            <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                            <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                        </button>
                                    </td>
                                    <th class="table-data rank" scope="row"><?= $crypto['id'] ?></th>
                                    <td class="table-data"><?= $crypto['name'] ?></td>
                                    <td class="table-data"><?= number_format($crypto['quote']['USD']['price'], 2) ?></td>
                                    <td class="table-data"><?= number_format($crypto['quote']['USD']['market_cap'], 2) ?></td>
                                    <td class="table-data"><?= number_format($crypto['quote']['USD']['volume_24h'], 2) ?></td>
                                    <td class="table-data"><?= $crypto['cmc_rank'] ?></td>
                                    <td class="table-data"><?= number_format($crypto['max_supply'], 2) ?></td>
                                    <td class="table-data"><?= number_format($crypto['circulating_supply'], 2) ?></td>
                                    <td class="table-data"><?= number_format($crypto['total_supply'], 2) ?></td>
                                    <td class="table-data">
                                        <form method="get" action="<?php echo URLROOT; ?>watchlists/removeCrypto">
                                            <input type="hidden" name="user_id" value="2">
                                            <input type="hidden" name="crypto_id" value="<?= $crypto['id'] ?>">
                                            <button type="submit" class="btn btn-outline">Remove</button>
                                        </form>
                                        <!-- <button class="btn btn-outline">Remove</button> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </article>
</body>

</html>