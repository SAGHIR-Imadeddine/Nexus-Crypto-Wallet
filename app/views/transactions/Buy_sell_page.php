<?php require APPROOT . '/views/inc/header.php'  ?>
<?php require APPROOT . '/views/inc/nav.php'  ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js" integrity="sha512-6m6AtgVSg7JzStQBuIpqoVuGPVSAK5Sp/ti6ySu6AjRDa1pX8mIl1TwP9QmKXU+4Mhq/73SzOk6mbNvyj9MPzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- <div class="mt-[20vh] w-full max-w-sm flex flex-col mx-auto text-center">
    <div x-data="{ selected: true }" class="w-full rounded bg-white h-auto m-auto shadow flex flex-col p-8 pt-6 rounded-xl">

        <h1 class="text-indigo-600 font-bold">AlpineJS Animated Toggle</h1>
        <div class="relative w-full mt-4 rounded-md h-10 p-1 bg-gray-200">
            <div class="relative w-full h-full flex items-center">
                <div @click="selected=!selected" class="border-none w-full flex justify-center text-gray-400 cursor-pointer">
                    <button class="border-none">BUY</button>
                </div>
                <div @click="selected=!selected" :class="{ 'border-none': selected }" class="w-full flex justify-center text-gray-400 cursor-pointer">
                    <button class="border-none">VENTE</button>
                </div>
            </div>

            <span :class="{ 'left-1/2 -ml-1 text-gray-800': !selected, 'left-1 text-indigo-600 font-semibold': selected }" :class="{ 'border-none': selected }" x-text="selected ? 'BUY' : 'SELL'" class="bg-white shadow text-sm flex items-center justify-center w-1/2 rounded h-[1.88rem] transition-all duration-150 ease-linear top-[4px] absolute"></span>
        </div>

    </div>


    <div class="mt-3 text-sm text-gray-700">Like this component? Give it a like!</div>
</div> -->
<div class="mt-[20vh] flex items-center mx-auto w-52">
    <button id="buy-button" class="buy-button mx-auto mt-8 bg-blue-500 text-white font-bold py-2 px-4 rounded">
        BUY
    </button>

    <button id="sell-button" class="sell-button mx-auto mt-8 bg-blue-500 text-white font-bold py-2 px-4 rounded">
        SELL
    </button>
</div>


<div id="buy">
    <form action="<?php echo URLROOT; ?>/Transaction/add_transac" method="post">
        <h1 class=" block text-center uppercase tracking-wide text-white  font-bold mb-2">Cryptocurrency Converter Calculator</h1>
        <div class=" md:w-2/3 px-3 mx-auto mb-6 md:mb-0 flex items-center justify-around">

            <div class="w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="grid-state">
                    choose your coin
                </label>
                <div class="relative">
                    <select name="coin" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">

                        <?php foreach ($data as $crypto) : ?>

                            <option value="<?= $crypto['quote']['USD']['price'] . '/' . $crypto['name'] . '/' . $crypto['id']; ?>"><?= $crypto['name'] . '(' . $crypto['symbol'] . ')'; ?> </option>


                        <?php endforeach; ?>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>
            <svg class="m-8 w-fit h-28 w-28" xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path fill="#ffffff" d="M535 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l64 64c4.5 4.5 7 10.6 7 17s-2.5 12.5-7 17l-64 64c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l23-23L384 112c-13.3 0-24-10.7-24-24s10.7-24 24-24l174.1 0L535 41zM105 377l-23 23L256 400c13.3 0 24 10.7 24 24s-10.7 24-24 24L81.9 448l23 23c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L7 441c-4.5-4.5-7-10.6-7-17s2.5-12.5 7-17l64-64c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM96 64H337.9c-3.7 7.2-5.9 15.3-5.9 24c0 28.7 23.3 52 52 52l117.4 0c-4 17 .6 35.5 13.8 48.8c20.3 20.3 53.2 20.3 73.5 0L608 169.5V384c0 35.3-28.7 64-64 64H302.1c3.7-7.2 5.9-15.3 5.9-24c0-28.7-23.3-52-52-52l-117.4 0c4-17-.6-35.5-13.8-48.8c-20.3-20.3-53.2-20.3-73.5 0L32 342.5V128c0-35.3 28.7-64 64-64zm64 64H96v64c35.3 0 64-28.7 64-64zM544 320c-35.3 0-64 28.7-64 64h64V320zM320 352a96 96 0 1 0 0-192 96 96 0 1 0 0 192z" />
            </svg>
            <div class="w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="grid-state">
                    choose your coin
                </label>
                <div class="relative">
                    <span class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        USD

                    </span>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
        <h1 class=" block text-center uppercase tracking-wide text-white  font-bold mb-2">Enter the dollar amount</h1>

        <div class="w-[35vw] mx-auto flex items-center  ">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="amount" id="amount" type="number" placeholder="00.00">
            <svg class="ml-1" xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path fill="#ffffff" d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z" />
            </svg>

        </div>


        <div id="calculated-amount" class="text-center mt-4 text-white font-bold"></div>

        <button class="mx-auto mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            BUY
        </button>
        <input name="cryptoamount" class="hidden" id="crypto_amount">
        <input name="cryptoid" class="hidden " id="crypto_id">
    </form>
</div>
<div class="hidden" id="sell">
<form action="<?php echo URLROOT; ?>/Transaction/sell_transac" method="post">
    <h1 class=" block text-center uppercase tracking-wide text-white  font-bold mb-2">Coin amount</h1>
    <div class="w-[35vw] mx-auto flex items-center  ">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="coin_amount" type="number" placeholder="00.00">


    </div>
    <div class=" md:w-2/3 px-3 mx-auto mb-6 md:mb-0 flex items-center justify-around">

        <div class="w-full">
            <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="grid-state">
                choose your coin
            </label>
            <form action="">
                <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="coins">

                        <?php foreach ($data as $crypto) : ?>

                            <option value="<?= $crypto['quote']['USD']['price'] . '/' . $crypto['name'] . '/' . $crypto['id']; ?>"><?= $crypto['name'] . '(' . $crypto['symbol'] . ')'; ?> </option>


                        <?php endforeach; ?>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
        </div>
        <svg class="m-8 w-fit h-28 w-28" xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path fill="#ffffff" d="M535 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l64 64c4.5 4.5 7 10.6 7 17s-2.5 12.5-7 17l-64 64c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l23-23L384 112c-13.3 0-24-10.7-24-24s10.7-24 24-24l174.1 0L535 41zM105 377l-23 23L256 400c13.3 0 24 10.7 24 24s-10.7 24-24 24L81.9 448l23 23c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L7 441c-4.5-4.5-7-10.6-7-17s2.5-12.5 7-17l64-64c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM96 64H337.9c-3.7 7.2-5.9 15.3-5.9 24c0 28.7 23.3 52 52 52l117.4 0c-4 17 .6 35.5 13.8 48.8c20.3 20.3 53.2 20.3 73.5 0L608 169.5V384c0 35.3-28.7 64-64 64H302.1c3.7-7.2 5.9-15.3 5.9-24c0-28.7-23.3-52-52-52l-117.4 0c4-17-.6-35.5-13.8-48.8c-20.3-20.3-53.2-20.3-73.5 0L32 342.5V128c0-35.3 28.7-64 64-64zm64 64H96v64c35.3 0 64-28.7 64-64zM544 320c-35.3 0-64 28.7-64 64h64V320zM320 352a96 96 0 1 0 0-192 96 96 0 1 0 0 192z" />
        </svg>
        <div class="w-full h-full">
            <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="grid-state">
                choose your coin
            </label>
            <div class="relative h-full">
                <input class=" block  appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="amout_dollar" readonly>
                        </input>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z" />
                    </svg>
                </div>
            </div>
        </div>

    </div>
    <h1 class=" block text-center uppercase tracking-wide text-white  font-bold mb-2">Enter the dollar amount</h1>


    <button class="mx-auto mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        SELL
    </button>
    <input name="cryptoamount" class="hidden" id="crypto_amount">
        <input name="cryptoid" class="hidden " id="crypto_id2">
    </form>
</div>





<!-- 


 <div class="container  mt-20">
  <h1 id="from-basis"></h1>
     <ul id="from-menu">
         <li class="from-currency">BTC</li>
         <li class="from-currency">BCH</li>
         <li class="from-currency">EOS</li>
         <li class="from-currency">ETH</li>
         <li class="from-currency">DASH</li>
         <li class="from-currency">LTC</li>
         <li class="from-currency">XRP</li>
         <li class="from-currency">ZEC</li>
         <li class="from-currency">ETC</li>
     </ul>
</div>




<div class="container">
    <h1 id="to-currency-price"></h1>
    <ul id="to-menu">
        <li class="to-currency">USD</li>
    </ul>
</div>  -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    /******************* */
    // const uri = 'https://api.pro.coinbase.com/currencies';

    // fetch(uri)
    //   .then(response => response.json())
    //   .then(data => {
    //     const cryptoAbbreviations = data
    //       .filter(currency => currency.details.type === 'crypto')
    //       .map(currency => currency.id);

    //     console.log(cryptoAbbreviations);

    //     // Add your logic to update the list with abbreviations as needed
    //     // For example, you can replace the console.log with code to update your HTML list
    //   })
    //   .catch(error => console.error('Error fetching data:', error));


    // uri = 'https://api.pro.coinbase.com/currencies'
    // response = requests.get(uri).json()

    // for i in range(len(response)):
    //     if response[i]['details']['type'] == 'crypto':
    //         print(response[i]['id'])


    /************************ */
    $(document).ready(function() {

        $("#sell").hide();

        // Click event for the "BUY" button
        $("#buy-button").click(function() {
            $(this).addClass('active');
            $('#sell-button').removeClass('active');
            $("#buy").show();
            $("#sell").hide();
        });

        // Click event for the "SELL" button
        $("#sell-button").click(function() {
            $(this).addClass('active');
            $('#buy-button').removeClass('active');
            $("#buy").hide();
            $("#sell").show();
        });

        var selectElement = document.getElementById('grid-state');


        $("#amount").on('input', function() {
            // Get the user's input
            var userAmount = parseFloat($(this).val());

            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var cryptoRate = selectedOption.value;
            console.log(cryptoRate);
            var value = cryptoRate.split('/')
            console.log(value);
            // Get the selected cryptocurrency rate (replace 'YOUR_RATE' with the actual rate)

            console.log(value[0]);
            // Calculate the equivalent amount of cryptocurrency
            var cryptoAmount = userAmount / value[0];

            // Display the calculated amount in the div
            $("#calculated-amount").text(`You can buy ${cryptoAmount.toFixed(8)} of the selected cryptocurrency`);
            $("#crypto_amount").val(cryptoAmount.toFixed(8));
            $("#crypto_id").val(value[2]);
            console.log($("#crypto_id").val());
            console.log($("#crypto_amount").val());

        });

    });
    
    $("#coin_amount").on('input', function() {
        var selectedcoin = $('#coins').find(":selected").val();
        var coin_amount = parseFloat($(this).val());
        var value = selectedcoin.split('/')
        var amout_dollar = coin_amount * value[0];
        $("#amout_dollar").val(amout_dollar);
        $("#crypto_id2").val(value[2]);
    })
    /*************************** */
    var outside = document.getElementById("body-container");
    var toPrice = document.getElementById("to-currency-price");
    var fromBasis = document.getElementById("from-basis");
    var toMenu = document.getElementById("to-menu");
    var fromMenu = document.getElementById("from-menu");
    var toSelect = document.getElementsByClassName("to-currency");
    var fromSelect = document.getElementsByClassName("from-currency");

    var toCurrency = "USD";
    var fromCurrency = "BTC";

    var retrievePrice = function() {
        var XHR = new XMLHttpRequest();

        XHR.onreadystatechange = function() {
            if (XHR.readyState == 4 && XHR.status == 200) {
                var val = JSON.parse(XHR.responseText)[fromCurrency][toCurrency];

                var price = val.toLocaleString('en');

                toPrice.textContent = price + " " + toCurrency;
                fromBasis.textContent = fromCurrency;

            }
        }

        XHR.open("GET", "https://min-api.cryptocompare.com/data/pricemulti?fsyms=" + fromCurrency + "&tsyms=" + toCurrency);
        XHR.send();
    }

    for (var i = 0; i < toSelect.length; i++) {
        toSelect[i].addEventListener("click", function() {
            toMenu.classList.remove("expand");
            toCurrency = this.textContent;
            retrievePrice();
        });
    }

    for (var i = 0; i < fromSelect.length; i++) {
        fromSelect[i].addEventListener("click", function() {
            fromMenu.classList.remove("expand");
            fromCurrency = this.textContent;
            retrievePrice();
        });
    }

    toPrice.addEventListener("click", function() {
        if (toMenu.classList.contains("expand")) {
            toMenu.classList.remove("expand");
        } else {
            toMenu.classList.add("expand");
        }
    });

    fromBasis.addEventListener("click", function() {
        if (fromMenu.classList.contains("expand")) {
            fromMenu.classList.remove("expand");
        } else {
            fromMenu.classList.add("expand");
        }
    });

    //Execute
    setInterval(function() {
        retrievePrice();
    }, 10000);

    retrievePrice();
</script>


<?php require APPROOT . '/views/inc/footer.php'  ?>