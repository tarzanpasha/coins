

<div class="grwwe is-hidden" data-xx="ZNtSVlfnovSqmk1pbF2vmBBV6RPiH0UCLsyTLM0T"></div>
<div class="usercheck is-hidden" data-loggedin="0"></div>

<script src="/assets/js/jquery-3.6.0.min.js"></script>
<script src="/assets/js/app.js?time=1656172602"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"
        integrity="sha512-Meww2sXqNHxI1+5Dyh/9KAtvI9RZSA4c1K2k5iL02oiPO/RH3Q30L3M1albtqMg50u4gRTYdV4EXOQqXEI336A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/keen-slider@latest/keen-slider.js"></script>
<script src="/assets/js/croppie.js"></script>

<script>
    $(document).ready(function () {

        $('[name=presale]').change(function(){
            $('p.presale, .when-presale').toggleClass('is-hidden')
            $('.contract-address-label').toggleClass('is-hidden')
            $('.presale-link').toggleClass('is-hidden')
            $('[name=presale_link]').attr('disabled', $('[name=presale_link]').is(':disabled') ? false : true)
            $('[name=bsc_contract_address]').attr('required', $('[name=bsc_contract_address]').is(':required') ? false : true)
        })

        // Image upload
        $('.image-upload .has-image:not(.cropping)').click(function () {
            $('.image-upload .has-image').removeClass('is-new')
            if (!$('.image-upload .has-image').hasClass('cropping'))
                $('[name=photo]').click()
        })

        let error = $('.image-upload p.error')
        let message = $('.image-upload p.message')
        $('.has-hidden-input').on('change', '[name=photo]', function () {
            $(error).html('').hide()
            $(message).html('').hide()

            let file = this.files[0]
            console.log(file)
            if (file.size > 300000) {
                $(error).html('File size cannot exceed 300kb').show()
                return;
            }

            if(file.type != "image/png" && file.type != "image/jpg" && file.type != "image/jpeg") {
                $(error).html('File must be .png or .jpg').show()
                return;
            }

            var url = URL.createObjectURL(file);
            var img = new Image;

            img.onload = function() {
                if(img.width > 200 || img.height > 200) {
                    $(error).html('File must be max 200x200 pixels').show()
                    return;
                }
                if(img.width != img.height) {
                    $(error).html('Image must be square (e.g. 150x150 pixels)').show()
                    return;
                }

                var formData = new FormData();
                formData.append('_token', $('.image-upload [name=_token]').val())
                formData.append('file', file)

                $.ajax({
                    url: '/submit/upload',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false
                }).done(function (response) {
                    console.log("Success: Files sent!", response);

                    $('[name=image_url]').val(response)
                    $('.image-upload .save').addClass('is-hidden')
                    $('.image-upload .has-image img.empty').attr('src', response).removeClass('is-hidden')
                    $('.image-upload .has-hidden-input').html('<input name="photo" type="file" class="is-hidden" />')

                }).fail(function () {
                    console.log("An error occurred, the files couldn't be sent!");
                });
            }

            img.src = url;
        })

        $('.image-upload .remove').click(function () {
            $(this).addClass('is-hidden')
            $('.image-upload img').attr('src', $('.image-upload .has-image').data('placeholder'))
            $('.image-upload [name=photo_url]').val(null)
        })
    })
</script>


<script>
    $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);

        $('.sortable').off().on('click', function(e) {
            e.preventDefault();

            let table = $(this).parents('table').attr('attr-table')
            if(table === 'promoted')
                return

            let dir = 'desc';

            if (urlParams.get('sortDir') === 'desc') {
                dir = 'asc';
            } else {
                dir = 'desc';
            }

            urlParams.set('sortBy', $(this).attr('attr-name'));
            urlParams.set('sortDir', dir);
            urlParams.set('sortTable', table);

            window.location.hash = 'all-coins';
            window.location.search = urlParams;
        })
    });
</script>
<script>
    $(document).ready(function () {
        if(window.location.hash.indexOf('search') >= 0) {
            $(window).scrollTop($('.coins-filters').offset().top - 80)
        }
        if(window.location.hash.indexOf('all-coins') >= 0) {
            $('.btn.filters').addClass('is-active')
            $('div.filters').addClass('is-active')

            $(window).scrollTop($('.coins-filters').offset().top - 80)
        }
        $('.icons .search').on('click', function() {
            $(this).toggleClass('is-active');
            $('.icons .btn.filters').removeClass('is-active');

            $('.coins-filters .container > .search').toggleClass('is-active');
            $('.coins-filters .container > .filters').removeClass('is-active');
        })

        $('.icons .filters').off().on('click', function() {
            $(this).toggleClass('is-active');

            $('.icons .btn.search').removeClass('is-active');

            $('.coins-filters .container > .filters').toggleClass('is-active');
            $('.coins-filters .container > .search').removeClass('is-active');
        })
    });
</script>
<script>
    $(document).ready(function () {
        $('.filter-dropdown .dropdown').off().on('click', function (e) {

            $('.filter-dropdown .dropdown').not(this).removeClass('is-active');
            $(this).toggleClass('is-active')
        })
    });
</script>
<script>
    $(document).ready(function () {
        $('.filter-dropdown .dropdown').off().on('click', function (e) {

            $('.filter-dropdown .dropdown').not(this).removeClass('is-active');
            $(this).toggleClass('is-active')
        })
    });
</script>
<script>
    $(document).ready(function () {
        $('.filter-dropdown .dropdown').off().on('click', function (e) {

            $('.filter-dropdown .dropdown').not(this).removeClass('is-active');
            $(this).toggleClass('is-active')
        })
    });
</script>

<script>
    $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);

        $('.sortable').off().on('click', function(e) {
            e.preventDefault();

            let table = $(this).parents('table').attr('attr-table')
            if(table === 'promoted')
                return

            let dir = 'desc';

            if (urlParams.get('sortDir') === 'desc') {
                dir = 'asc';
            } else {
                dir = 'desc';
            }

            urlParams.set('sortBy', $(this).attr('attr-name'));
            urlParams.set('sortDir', dir);
            urlParams.set('sortTable', table);

            window.location.hash = 'all-coins';
            window.location.search = urlParams;
        })
    });
</script>
<script>
    $(document).ready(function () {
        $('.mobile-navigation .current').click(function() {
            $('.mobile-navigation').toggleClass('is-active');
        })
    });
</script>



<script>
    $(document).ready(function(){
        if (getCookie('premium-banner-111') == '') {
            setTimeout(function () {
                $('.premium-banner').addClass('is-open')
            }, 1000)

            $('.premium-banner .close').click(function (e) {
                e.preventDefault()
                $('.premium-banner').removeClass('is-open')
                setCookie('premium-banner-111', 1, 4)
            })
        }
    })
</script>

<div class="modal disclaimer-modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Disclaimer</p>
        </header>
        <section class="modal-card-body">
            <p class="text-center">
                CoinSniper gives user the opportunity to post information about crypto projects.Please note that CoinSniper does not verify the user generated content on this website. CoinSniper does not provide any financial advice, act as financial services provider or broker, or in any other way aid in the formation of any transactions in cryptocurrency or otherwise.
                <br><br>
                Also note that, the cryptocurrency listed on this website could potentially be scams, i.e. designed to induce you to invest financial resources that may be lost forever and not be recoverable once investments are made. You are responsible to Do Your Own Research (DYOR) regarding any information listed on this website.
            </p>
            <br>

            <article class="message is-danger">
                <div class="message-header">
                    <p>WARNING: Scam Telegram Channels</p>
                </div>
                <div class="message-body">
                    The ONLY real Telegram channel for CoinSniper / ScamSniper is
                    <a target="_blank" href="https://t.me/coinsnipernet">@coinsnipernet</a>.
                    <br><br>Any other channel using the CoinSniper / ScamSniper logo and brand name are a SCAM!
                </div>
            </article>
        </section>
        <footer class="modal-card-foot">
            <button class="button is-primary close full-width">Okay, I understand</button>
        </footer>
    </div>
</div>

<script>
    $(document).ready(function () {
        if (typeof Cookies.get('scamsniper-disclaimer') == 'undefined') {
            $('.disclaimer-modal').toggleClass('is-active')

            $('.disclaimer-modal .close').click(function () {
                console.log('derp')
                $('.disclaimer-modal').removeClass('is-active')
                Cookies.set('scamsniper-disclaimer', 1, {expires: 3})
            })
        }
    })
</script>
