<section class="listing-form update-form">
    <div class="container">
        <div class="wrapper">
            <div class="form">
                <div class="body">
                    <div class="listing-form">
                        <h1>Update Coin Information</h1>
                        <p>
                            To update coin information like the logo, contract address or social links, please fill out
                            the
                            form below.
                        </p>
                        <p class="text-white">
                            Your request will be processed within 24 hours. You will be notified by email.
                        </p>

                        <form id="update-form" action="/update-form" method="POST">
                            <input type="hidden" name="_token" value="FkSUbj0WpdmzgBjTj7N1Y95lgefIUSWQ9nXWkjF1">

                            <div class="has-content">
                                <input type="hidden" name="listing_id" value="34732">
                                <p class="text-white">Please select the CoinSniper listing you want to update.</p>
                                <div class="field has-search update-search">
                                    <div class="control has-icons-left">
                                        <input class="input" type="text"
                                               placeholder="Search for your coinsniper project...">
                                        <span class="icon is-small is-left"><i class="fas fa-search"></i></span>
                                    </div>

                                    <div class="results is-hidden"><a href="/coin/34732" class="result">
                                            <img
                                                src="https://storage.googleapis.com/coinsniper-assets/images/oQRjzf65cbdSpM4MVFpU8UBAafUUwmLW4peb78CO.png"
                                                loading="lazy" alt="">
                                            <span class="titles">
        <h1>Beep Staking</h1>
        <h2>$BEEP</h2>
    </span>
                                        </a></div>

                                    <div class="asset">
                                        <img
                                            src="https://storage.googleapis.com/coinsniper-assets/images/oQRjzf65cbdSpM4MVFpU8UBAafUUwmLW4peb78CO.png"
                                            alt="">
                                        <div class="titles">
                                            <h2>Beep Staking</h2>
                                            <h3>$BEEP</h3>
                                        </div>
                                        <svg id="remove" width="22" height="21" viewBox="0 0 22 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="19.8828" width="2.10851" height="27.4106" rx="1.05425"
                                                  transform="rotate(45 19.8828 0)" fill="white"></rect>
                                            <rect x="21.373" y="19.3828" width="2.10851" height="27.4106" rx="1.05425"
                                                  transform="rotate(135 21.373 19.3828)" fill="white"></rect>
                                        </svg>
                                    </div>
                                </div>
                            </div>



                            <div class="columns" data-field="image_url" style="display: block;">
                                <div class="column is-4">
                                    <div class="image-upload has-text-centered">
                                        <input type="hidden" name="_token"
                                               value="FkSUbj0WpdmzgBjTj7N1Y95lgefIUSWQ9nXWkjF1">
                                        <input type="hidden" name="image_url" value="">
                                        <div class="has-hidden-input">
                                            <input name="photo" type="file" class="is-hidden">
                                        </div>
                                        <div class="field has-text-centered">
                                            <label class="label">Logo Upload*</label>
                                        </div>
                                        <div class="has-image is-new"
                                             data-placeholder="https://coinsniper.net/assets/img/placeholder.jpg">
                                            <img src="https://coinsniper.net/assets/img/placeholder.jpg" alt="">
                                        </div>

                                        <p class="error"></p>
                                        <p class="message"></p>
                                    </div>

                                </div>
                            </div>
                            <div data-field="network" style="display: block;">
                                <div class="field">
                                    <label class="label">Network/Chain*</label>
                                    <div class="select is-fullwidth">
                                        <select name="network">
                                            <option value="bsc" selected="">Binance Smart Chain (BSC)</option>
                                            <option value="eth">Ethereum
                                                (ETH)
                                            </option>
                                            <option value="matic">
                                                Polygon
                                                (MATIC)
                                            </option>
                                            <option value="trx">Tron (TRX)
                                            </option>
                                            <option value="ftm">Fantom
                                                (FTM)
                                            </option>
                                            <option value="sol">Solana
                                                (SOL)
                                            </option>
                                            <option value="kcc">Kucoin
                                                Chain
                                                (KCC)
                                            </option>
                                            <option value="other">Other
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="field" data-field="presale" style="display: block;">
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

                            <div class="field" data-field="presale_link" style="display: block;">
                                <label class="label">Presale link</label>
                                <div class="control">
                                    <input name="presale_link" class="input " type="text"
                                           placeholder="https://dxsale.com/your-presale-link-here" value="">
                                </div>

                            </div>

                            <div class="field" data-field="bsc_contract_address" style="display: block;">
                                <label class="label">Contract Address*</label>
                                <div class="control">
                                    <input name="bsc_contract_address" class="input " type="text"
                                           placeholder="0xB8c77482e45F1F44dE1745F52C74426C631bDD52" required=""
                                           value="">
                                </div>


                            </div>

                            <div class="field" data-field="description" style="display: block;">
                                <label class="label">Description*</label>
                                <div class="control">
                                    <textarea name="description" maxlength="1048" class="textarea "
                                              placeholder="Describe your coin here. What is the goal, plans, why is this coin unique?"
                                              required=""></textarea>
                                </div>

                            </div>

                            <div class="field" data-field="custom_dex_link" style="display: block;">
                                <label class="label">Custom Chart Link*</label>
                                <div class="control">
                                    <input name="custom_dex_link" class="input " type="text"
                                           placeholder="https://dex.guru/..." required="" value="">
                                </div>


                            </div>

                            <div class="field" data-field="custom_swap_link" style="display: block;">
                                <label class="label">Custom Swap Link*</label>
                                <div class="control">
                                    <input name="custom_swap_link" class="input " type="text"
                                           placeholder="https://apeswap.finance/..." required="" value="">
                                </div>


                            </div>

                            <div class="field" data-field="website_link" style="display: block;">
                                <label class="label">Website link*</label>
                                <div class="control">
                                    <input name="website_link" class="input " type="text"
                                           placeholder="https://coinsniper.net" required="" value="">
                                </div>


                            </div>

                            <div class="field" data-field="launch_date">
                                <label class="label">Launch Date*</label>
                                <div class="control">
                                    <div class="control">
                                        <div class="select">
                                            <select name="date_created_day" required="" disabled="">
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
                                            <select name="date_created_month" required="" disabled="">
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
                                            <select name="date_created_year" required="" disabled="">
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

                                <p><a href="#" class="hide-field">Remove this field</a></p>
                            </div>

                            <div class="field" data-field="telegram_link" style="display: block;">
                                <label class="label">Telegram link*</label>
                                <div class="control">
                                    <input name="telegram_link" class="input " type="text"
                                           placeholder="https://t.me/coinsniper" required="" value="">
                                </div>


                            </div>

                            <div class="field" data-field="twitter_link" style="display: block;">
                                <label class="label">Twitter link</label>
                                <div class="control">
                                    <input name="twitter_link" class="input " type="text"
                                           placeholder="https://twitter.com/coinsniper" value="">
                                </div>


                            </div>

                            <div class="field" data-field="discord_link" style="display: block;">
                                <label class="label">Discord link</label>
                                <div class="control">
                                    <input name="discord_link" class="input " type="text"
                                           placeholder="https://discord.gg/coinsniper" value="">
                                </div>


                            </div>

                            <div class="submit">

                                <div class="text-center">
                                    <button type="submit" id="submit-form" class="button is-primary">SUBMIT UPDATE
                                        REQUEST
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
