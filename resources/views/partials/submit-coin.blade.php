<section class="listing-form">
    <div class="container">
        <div class="wrapper">
            <div class="form">

                <div class="listing-form">
                    <h1>Submit new coin to CoinSniper</h1>
                    <p class="text-center">
                        Please fill out this form carefully to add a new coin to <a href="/">CoinSniper</a>. After submission, your
                        coin will be visible on the <a href="/listings/new" target="_blank">New Listings</a> page.
                        Get 500 votes to be officially listed on <a href="/">CoinSniper</a>.</p>


                    <iframe width=100% height="700" frameBorder="0" scrolling="no" src="https://coinbrain.com/coins/0x14d158df59Cd8ba430F669473C0E50573E58310a/lite?theme=dark&padding=16"></iframe>


                    <form id="coins-form" action="/submit" method="POST">
                        <input type="hidden" name="_token" value="CW4NQEHlK5QC4XRm4YzKrYJrx5rWr4yebbJT3gdr">
                        <div class="step-1">
                            <div class="image-upload">
                                <input type="hidden" name="_token" value="CW4NQEHlK5QC4XRm4YzKrYJrx5rWr4yebbJT3gdr">
                                <input type="hidden" name="image_url" value="">
                                <div class="has-hidden-input">
                                    <input name="photo" type="file" class="is-hidden">
                                </div>
                                <div class="field">
                                    <label class="label">Logo Upload*</label>
                                </div>
                                <div class="has-image is-new" data-placeholder="https://coinsniper.net/assets/img/placeholder.jpg">
                                    <div class="logo-placeholder">
                                        <div class="has-text-centered">
                                            <svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 9C1.5 6.87827 2.34285 4.84344 3.84315 3.34315C5.34344 1.84285 7.37827 1 9.5 1H33.5C35.6217 1 37.6566 1.84285 39.1569 3.34315C40.6571 4.84344 41.5 6.87827 41.5 9V33C41.5 35.1217 40.6571 37.1566 39.1569 38.6569C37.6566 40.1571 35.6217 41 33.5 41H9.5C7.37827 41 5.34344 40.1571 3.84315 38.6569C2.34285 37.1566 1.5 35.1217 1.5 33V9Z" stroke="#787A8D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14.5 19C17.2614 19 19.5 16.7614 19.5 14C19.5 11.2386 17.2614 9 14.5 9C11.7386 9 9.5 11.2386 9.5 14C9.5 16.7614 11.7386 19 14.5 19Z" stroke="#787A8D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M26.552 22.2426L9.5 41.0006H33.766C35.8172 41.0006 37.7844 40.1858 39.2348 38.7354C40.6852 37.2849 41.5 35.3178 41.5 33.2666V33.0006C41.5 32.0686 41.15 31.7106 40.52 31.0206L32.46 22.2306C32.0844 21.8208 31.6274 21.4939 31.1183 21.2705C30.6093 21.0472 30.0592 20.9325 29.5034 20.9336C28.9475 20.9347 28.3979 21.0517 27.8897 21.2771C27.3816 21.5025 26.926 21.8313 26.552 22.2426V22.2426Z" stroke="#787A8D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Click To<br>Upload Image
                                        </div>
                                    </div>

                                    <img src="" alt="" class="empty is-hidden">
                                </div>

                                <div class="save is-hidden">Save</div>
                                <div class="remove is-hidden">Delete</div>

                                <p class="error" style="display: none"></p>
                                <p class="message" style="display: none"></p>
                            </div>

                            <div class="field">
                                <label class="label">Name*</label>
                                <div class="control">
                                    <input name="name" class="input " type="text" placeholder="Bitcoin" required="" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Symbol*</label>
                                <div class="control">
                                    <input name="symbol" class="input " type="text" placeholder="BTC" required="" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Network/Chain</label>
                                <div class="select full-width">
                                    <select name="network">
                                        <option value="bsc" selected="">Binance Smart Chain (BSC)</option>
                                        <option value="eth">Ethereum
                                            (ETH)</option>
                                        <option value="matic">
                                            Polygon (MATIC)</option>
                                        <option value="trx">Tron (TRX)
                                        </option>
                                        <option value="ftm">Fantom
                                            (FTM)</option>
                                        <option value="sol">Solana
                                            (SOL)</option>
                                        <option value="kcc">Kucoin
                                            Chain (KCC)</option>
                                        <option value="other">Other
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Project in presale phase?*</label>
                                <div class="control">
                                    <label class="radio">
                                        <input type="radio" name="presale" value="No" checked="">
                                        No
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="presale" value="Yes">
                                        Yes
                                    </label>
                                </div>
                            </div>

                            <div class="field is-hidden when-presale">
                                <a href="https://t.me/danielcoinsniper" target="_blank">
                                    <div class="message info">
                                        Planning your presale or fair launch?<br>Consider our official launchpad
                                        partner!<br><br>
                                        <button class="button is-success">Contact Us For More Information</button>
                                    </div>
                                </a>
                            </div>

                            <div class="field">
                                <label class="label contract-address-label ">
                                    Contract Address*
                                </label>
                                <label class="label contract-address-label is-hidden">
                                    Contract Address (optional for presales)
                                </label>
                                <div class="control">
                                    <input name="bsc_contract_address" class="input " type="text" placeholder="0xB8c77482e45F1F44dE1745F52C74426C631bDD52" required="" value="">
                                </div>

                                <p class="help presale is-hidden">Your contract address will be hidden until your presale is finished.</p>
                            </div>

                            <div class="field presale-link is-hidden">
                                <label class="label">Presale link (optional)</label>
                                <div class="control">
                                    <input name="presale_link" class="input " type="text" placeholder="https://dxsale.com/your-presale-link-here" value="" disabled="">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Description*</label>
                                <div class="control">
                                    <textarea name="description" maxlength="1048" class="textarea " placeholder="Describe your coin here. What is the goal, plans, why is this coin unique?" required=""></textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Launch Date*</label>
                                <div class="control">
                                    <div class="control">
                                        <div class="select">
                                            <select name="date_created_day" required="">
                                                <option value="">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>

                                        <div class="select">
                                            <select name="date_created_month" required="">
                                                <option value="">Month</option>
                                                <option value="1">January
                                                </option>
                                                <option value="2">February
                                                </option>
                                                <option value="3">March
                                                </option>
                                                <option value="4">April
                                                </option>
                                                <option value="5">May
                                                </option>
                                                <option value="6">June
                                                </option>
                                                <option value="7">July
                                                </option>
                                                <option value="8">August
                                                </option>
                                                <option value="9">September
                                                </option>
                                                <option value="10">October
                                                </option>
                                                <option value="11">November
                                                </option>
                                                <option value="12">December
                                                </option>
                                            </select>
                                        </div>

                                        <div class="select">
                                            <select name="date_created_year" required="">
                                                <option value="">Year</option>
                                                <option value="2022">2022
                                                </option>
                                                <option value="2021">2021
                                                </option>
                                                <option value="2020">2020
                                                </option>
                                                <option value="2019">2019
                                                </option>
                                                <option value="2018">2018
                                                </option>
                                                <option value="2017">2017
                                                </option>
                                                <option value="2016">2016
                                                </option>
                                                <option value="2015">2015
                                                </option>
                                                <option value="2014">2014
                                                </option>
                                                <option value="2013">2013
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step-2">
                            <div class="field">
                                <label class="label">Custom chart link (optional)</label>
                                <div class="control">
                                    <input name="custom_dex_link" class="input " type="text" placeholder="https://dex.guru/token/0x...." value="">
                                </div>
                                <p class="help">By default, Poocoin (BSC) and Dextools (ETH) is used. Enter custom chart
                                    link here if you want to use it.</p>
                            </div>

                            <div class="field">
                                <label class="label">Custom swap link (optional)</label>
                                <div class="control">
                                    <input name="custom_swap_link" class="input " type="text" placeholder="https://apeswap.finance/..." value="">
                                </div>
                                <p class="help">By default, PancakeSwap v2 (BSC) and UniSwap (ETH) is used. Enter custom
                                    swap link here if you want to use it, like Apeswap.</p>
                            </div>

                            <div class="field">
                                <label class="label">Website link*</label>
                                <div class="control">
                                    <input name="website_link" class="input " type="text" placeholder="https://coinsniper.net" required="" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Telegram link*</label>
                                <div class="control">
                                    <input name="telegram_link" class="input " type="text" placeholder="https://t.me/coinsniper" required="" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Twitter link</label>
                                <div class="control">
                                    <input name="twitter_link" class="input " type="text" placeholder="https://twitter.com/coinsniper" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Discord link</label>
                                <div class="control">
                                    <input name="discord_link" class="input " type="text" placeholder="https://discord.gg/coinsniper" value="">
                                </div>
                            </div>


                            <div class="text-center">
                                <a href="#" id="prev-step" class="button is-primary back">BACK</a>
                                <button type="submit" id="submit-coin" class="button is-primary">SUBMIT COIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
