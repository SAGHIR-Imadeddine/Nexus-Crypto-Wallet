-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 11:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexus`
--

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `symbol` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `max_supply` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coins`
--

INSERT INTO `coins` (`id`, `name`, `symbol`, `slug`, `max_supply`) VALUES
(1, 'Bitcoin', 'BTC', 'bitcoin', 21000000),
(2, 'Litecoin', 'LTC', 'litecoin', 84000000),
(52, 'XRP', 'XRP', 'xrp', 2147483647),
(74, 'Dogecoin', 'DOGE', 'dogecoin', NULL),
(328, 'Monero', 'XMR', 'monero', NULL),
(512, 'Stellar', 'XLM', 'stellar', 2147483647),
(825, 'Tether USDt', 'USDT', 'tether', NULL),
(1027, 'Ethereum', 'ETH', 'ethereum', NULL),
(1321, 'Ethereum Classic', 'ETC', 'ethereum-classic', 210700000),
(1376, 'Neo', 'NEO', 'neo', 100000000),
(1518, 'Maker', 'MKR', 'maker', 1005577),
(1831, 'Bitcoin Cash', 'BCH', 'bitcoin-cash', 21000000),
(1839, 'BNB', 'BNB', 'bnb', NULL),
(1958, 'TRON', 'TRX', 'tron', NULL),
(1966, 'Decentraland', 'MANA', 'decentraland', NULL),
(1975, 'Chainlink', 'LINK', 'chainlink', 1000000000),
(2010, 'Cardano', 'ADA', 'cardano', 2147483647),
(2011, 'Tezos', 'XTZ', 'tezos', NULL),
(2087, 'KuCoin Token', 'KCS', 'kucoin-token', 170118638),
(2280, 'Filecoin', 'FIL', 'filecoin', NULL),
(2416, 'Theta Network', 'THETA', 'theta-network', 1000000000),
(2563, 'TrueUSD', 'TUSD', 'trueusd', NULL),
(2586, 'Synthetix', 'SNX', 'synthetix', NULL),
(3077, 'VeChain', 'VET', 'vechain', NULL),
(3155, 'Quant', 'QNT', 'quant', 14881364),
(3408, 'USDC', 'USDC', 'usd-coin', NULL),
(3513, 'Fantom', 'FTM', 'fantom', 2147483647),
(3602, 'Bitcoin SV', 'BSV', 'bitcoin-sv', 21000000),
(3635, 'Cronos', 'CRO', 'cronos', 2147483647),
(3794, 'Cosmos', 'ATOM', 'cosmos', NULL),
(3890, 'Polygon', 'MATIC', 'polygon', 2147483647),
(3897, 'OKB', 'OKB', 'okb', NULL),
(3957, 'UNUS SED LEO', 'LEO', 'unus-sed-leo', NULL),
(4030, 'Algorand', 'ALGO', 'algorand', 2147483647),
(4157, 'THORChain', 'RUNE', 'thorchain', NULL),
(4195, 'FTX Token', 'FTT', 'ftx-token', 352170015),
(4256, 'Klaytn', 'KLAY', 'klaytn', NULL),
(4558, 'Flow', 'FLOW', 'flow', NULL),
(4642, 'Hedera', 'HBAR', 'hedera', 2147483647),
(4687, 'BUSD', 'BUSD', 'binance-usd', NULL),
(4846, 'Kava', 'KAVA', 'kava', NULL),
(4847, 'Stacks', 'STX', 'stacks', 1818000000),
(4943, 'Dai', 'DAI', 'multi-collateral-dai', NULL),
(5426, 'Solana', 'SOL', 'solana', NULL),
(5665, 'Helium', 'HNT', 'helium', 223000000),
(5690, 'Render', 'RNDR', 'render', 536870912),
(5805, 'Avalanche', 'AVAX', 'avalanche', 720000000),
(5994, 'Shiba Inu', 'SHIB', 'shiba-inu', NULL),
(6210, 'The Sandbox', 'SAND', 'the-sandbox', 2147483647),
(6535, 'NEAR Protocol', 'NEAR', 'near-protocol', NULL),
(6636, 'Polkadot', 'DOT', 'polkadot-new', NULL),
(6719, 'The Graph', 'GRT', 'the-graph', NULL),
(6783, 'Axie Infinity', 'AXS', 'axie-infinity', 270000000),
(6892, 'MultiversX', 'EGLD', 'multiversx-egld', 31415926),
(7083, 'Uniswap', 'UNI', 'uniswap', 1000000000),
(7226, 'Injective', 'INJ', 'injective', NULL),
(7278, 'Aave', 'AAVE', 'aave', 16000000),
(7548, 'WEMIX', 'WEMIX', 'wemix', NULL),
(8000, 'Lido DAO', 'LDO', 'lido-dao', 1000000000),
(8646, 'Mina', 'MINA', 'mina', NULL),
(8916, 'Internet Computer', 'ICP', 'internet-computer', NULL),
(10603, 'Immutable', 'IMX', 'immutable-x', 2000000000),
(11092, 'Bitget Token', 'BGB', 'bitget-token-new', 2000000000),
(11419, 'Toncoin', 'TON', 'toncoin', NULL),
(11840, 'Optimism', 'OP', 'optimism-ethereum', 2147483647),
(11841, 'Arbitrum', 'ARB', 'arbitrum', NULL),
(12220, 'Osmosis', 'OSMO', 'osmosis', 1000000000),
(12885, 'Astar', 'ASTR', 'astar', NULL),
(16086, 'BitTorrent (New)', 'BTT', 'bittorrent-new', NULL),
(20396, 'Kaspa', 'KAS', 'kaspa', 2147483647),
(20947, 'Sui', 'SUI', 'sui', 2147483647),
(21794, 'Aptos', 'APT', 'aptos', NULL),
(22861, 'Celestia', 'TIA', 'celestia', NULL),
(23149, 'Sei', 'SEI', 'sei', NULL),
(25028, 'ORDI', 'ORDI', 'ordi', 21000000),
(26081, 'First Digital USD', 'FDUSD', 'first-digital-usd', NULL),
(27075, 'Mantle', 'MNT', 'mantle', 2147483647),
(28298, 'Beam', 'BEAM', 'onbeam', NULL),
(28683, 'SATS', '1000SATS', 'sats', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `content`, `user_id`, `created_at`) VALUES
(5, 'You\'ve bought 6.59 of Bitcoin.', 1, '2024-01-05 16:11:41'),
(7, 'You\'ve sold 5.75 of Internet Computer.', 1, '2024-01-05 16:14:43'),
(8, 'You\'ve received 6.98 of Solana from Adam Smith.', 1, '2024-01-05 16:17:46'),
(9, 'You\'ve sent 1.82 of Internet Computer to James McBroom.', 1, '2024-01-05 16:21:46'),
(10, 'You\'ve bought 26 of 0.5324673933248/Cardano/2010', 1, '2024-01-05 17:18:19'),
(11, 'You\'ve sold  of ', 1, '2024-01-05 17:20:36'),
(12, 'You\'ve sold  of 2010', 1, '2024-01-05 17:20:59'),
(13, 'You\'ve sold 11 of 2010', 1, '2024-01-05 17:21:17'),
(14, 'You\'ve sold 5 of 2010', 1, '2024-01-05 17:22:11'),
(15, 'You\'ve bought 10 of Avalanche', 1, '2024-01-05 17:28:51'),
(16, 'You\'ve bought 56 of Polkadot', 1, '2024-01-05 22:23:51'),
(17, 'You\'ve bought 48 of Shiba Inu', 1, '2024-01-05 22:25:20'),
(18, 'You\'ve bought 12 of Shiba Inu', 1, '2024-01-05 22:26:31'),
(19, 'You\'ve bought 10 of WEMIX', 1, '2024-01-05 22:27:21'),
(20, 'You\'ve bought 25 of Kaspa', 1, '2024-01-05 22:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `crypto_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `sender` int(11) NOT NULL,
  `reciever` int(11) NOT NULL,
  `transaction_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `crypto_id`, `amount`, `created_at`, `sender`, `reciever`, `transaction_type`) VALUES
(21, 1, 1, '2024-01-05', 1, 0, 'sell'),
(22, 1, 0.00024948, '2024-01-05', 1, 0, 'buy'),
(23, 1, 2, '2024-01-05', 1, 1, 'send'),
(24, 1, 2, '2024-01-05', 1, 1, 'send'),
(25, 1, 0.00004572, '2024-01-05', 1, 0, 'buy'),
(26, 11419, 0.458348, '2024-01-05', 1, 0, 'buy'),
(27, 1, 0.000001, '2024-01-05', 1, 0, 'sell'),
(28, 1, 0.0001, '2024-01-05', 1, 0, 'sell'),
(29, 1, 0.00002279, '2024-01-05', 1, 0, 'buy'),
(30, 1, 0.000001, '2024-01-05', 1, 0, 'sell'),
(31, 1, 0, '2024-01-05', 1, 0, 'sell'),
(34, 1, 0.0001, '2024-01-05', 1, 0, 'sell'),
(35, 1, 0.0001, '2024-01-05', 1, 0, 'sell'),
(36, 52, 1, '2024-01-05', 1, 0, 'sell'),
(37, 52, 1, '2024-01-05', 1, 0, 'sell'),
(38, 52, 1, '2024-01-05', 1, 0, 'sell'),
(39, 11419, 0.470083, '2024-01-05', 1, 0, 'buy'),
(40, 11419, 0.470083, '2024-01-05', 1, 0, 'buy'),
(41, 11419, 0.1, '2024-01-05', 1, 0, 'sell'),
(42, 74, 304.929, '2024-01-05', 1, 0, 'buy'),
(43, 1958, 240.441, '2024-01-05', 1, 0, 'buy'),
(44, 74, 304.587, '2024-01-05', 1, 0, 'buy'),
(45, 6636, 3.38676, '2024-01-05', 1, 0, 'buy'),
(46, 2010, 48.8293, '2024-01-05', 1, 0, 'buy'),
(47, 2010, 11, '2024-01-05', 1, 0, 'sell'),
(48, 2010, 11, '2024-01-05', 1, 0, 'sell'),
(49, 2010, 11, '2024-01-05', 1, 0, 'sell'),
(50, 2010, 5, '2024-01-05', 1, 0, 'sell'),
(51, 5805, 0.278078, '2024-01-05', 1, 0, 'buy'),
(52, 6636, 7.63095, '2024-01-05', 1, 0, 'buy'),
(53, 5994, 4923320, '2024-01-05', 1, 0, 'buy'),
(54, 5994, 1230730, '2024-01-05', 1, 0, 'buy'),
(55, 7548, 3.81043, '2024-01-05', 1, 0, 'buy'),
(56, 20396, 230.984, '2024-01-05', 1, 0, 'buy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `birthdate`, `email`, `password`) VALUES
(1, 'Zineb', 'Machrouh', '2003-12-20', 'zineb.m@gmail.com', 'cGFzc3dvcmQxMjMK');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `user_id` int(11) DEFAULT NULL,
  `crypto_id` int(11) DEFAULT NULL,
  `qte` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`user_id`, `crypto_id`, `qte`) VALUES
(1, 1, -0.0002),
(1, 1321, 0.001),
(1, 12885, 2),
(1, 52, 1),
(1, 11419, 0.840166),
(1, 74, 304.929),
(1, 1958, 240.441),
(1, 6636, 11.0177),
(1, 2010, 10.8293),
(1, 5805, 0.278078),
(1, 5994, 6154060),
(1, 7548, 3.81043),
(1, 20396, 230.984);

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `user_id` int(11) NOT NULL,
  `crypto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`user_id`, `crypto_id`) VALUES
(1, 5426),
(1, 6535);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_crypto_id` (`crypto_id`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD KEY `fk_coin_watch` (`crypto_id`),
  ADD KEY `fk_user_watch` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `fk_crypto_id` FOREIGN KEY (`crypto_id`) REFERENCES `coins` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `fk_coin_watch` FOREIGN KEY (`crypto_id`) REFERENCES `coins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_watch` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
