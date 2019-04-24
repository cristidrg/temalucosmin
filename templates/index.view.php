<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/13.1.4/nouislider.min.css">
    <link rel="stylesheet" href="../css/_reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../deps/tingle.min.css">
    <script
        src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI="
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/13.1.4/nouislider.min.js"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../deps/tingle.min.js"></script>
</head>

<body>
    <div class="welcome">
        <div class="page-shell">
            <nav class="welcome__navigation">
                <p class="welcome__logo font-heading-1">Car<span class="green">Book</span></p>
                <ul class="welcome__links font-heading-3">
                    <?php if (empty($_SESSION['user'])): ?>
                        <li id="login">Login</li>
                        <li id="register" class="welcome__register">Register</li>
                    <?php else: ?>
                    <li>Rent your car</li>
                    <li> 
                        <form method='post' action="">
                            <input type="submit" value="Logout" name="logout">
                        </form>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="welcome__content">
                <div class="welcome__copy">
                        <h1 class="welcome__header font-heading-2">Unbeatable Price. <span class="green">Rent-A-Car</span> <br /> & Expert Service.</h1>
                        <h2 class="welcome__sub-header"><span class="green">250</span> users are searching right now!</h2>            
                </div>
                <div class="welcome__form">
                    <p class="font-heading-2 font-weight-700">Search cars</p>
                    <div>
                    <div class="welcome__form-name">
                        <img class="welcome__form-car-icon" src="https://image.flaticon.com/icons/svg/335/335049.svg">
                        <input class="welcome__form-input" placeholder="Car name..." type="text" required=""/>
                    </div>

                    <div class="welcome__form-type">
                        <img class="welcome__form-car-icon" src="https://image.flaticon.com/icons/svg/60/60473.svg">
                        <input class="welcome__form-input" placeholder="Car type..." type="text" required=""/>
                    </div>

                    <div class="welcome__form-brand">
                        <img class="welcome__form-car-icon" src="https://image.flaticon.com/icons/svg/805/805939.svg">
                        <input class="welcome__form-input" placeholder="Car brand..." type="text" required=""/>
                    </div>

                    <div class="welcome__form-price">
                        <p>Price:</p>
                        <div id="welcome__form-price-input"></div>
                    </div>

                    <div class="welcome__form-submit">
                        <a class="welcome__form-submit-button" href="#">Filter results</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="welcome__map-stats">12 Cars found around you!</div>
        </div>
    </div>
    <div id="map"></div>

    <div class="page-shell">
        <p class="carlist__title font-heading-2">Showing 32 results</p>
        <div class="carlist">
            <div class="carlist-entry">
                <img class="carlist-entry__image" src="https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/9AUSHI6DTjC1n9r63JBQdQ.1440x700.jpg">
                <p class="carlist-entry__price">300€ / day</p>
                <div class="carlist-entry__details">
                    <div>
                        <p class="carlist-entry__title font-heading-3">Audi A5 <span class="font-heading-4">2007</span></p>
                        <ul class="carlist-entry__features">
                            <li>Luxury</li>
                            <li>Audi</li>
                            <li>Black</li>
                        </ul>
                    </div>
                    <div class="carlist-entry__book">Book now!</div>
                </div>     
            </div>
            <div class="carlist-entry">
                <img class="carlist-entry__image" src="https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/9AUSHI6DTjC1n9r63JBQdQ.1440x700.jpg">
                <p class="carlist-entry__price">300€ / day</p>
                <div class="carlist-entry__details">
                    <div>
                        <p class="carlist-entry__title font-heading-3">Audi A5 <span class="font-heading-4">2007</span></p>
                        <ul class="carlist-entry__features">
                            <li>Luxury</li>
                            <li>Audi</li>
                            <li>Black</li>
                        </ul>
                    </div>
                    <div class="carlist-entry__book">Book now!</div>
                </div>     
            </div>
            <div class="carlist-entry">
                <img class="carlist-entry__image" src="https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/9AUSHI6DTjC1n9r63JBQdQ.1440x700.jpg">
                <p class="carlist-entry__price">300€ / day</p>
                <div class="carlist-entry__details">
                    <div>
                        <p class="carlist-entry__title font-heading-3">Audi A5 <span class="font-heading-4">2007</span></p>
                        <ul class="carlist-entry__features">
                            <li>Luxury</li>
                            <li>Audi</li>
                            <li>Black</li>
                        </ul>
                    </div>
                    <div class="carlist-entry__book">Book now!</div>
                </div>     
            </div>
            <div class="carlist-entry">
                <img class="carlist-entry__image" src="https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/9AUSHI6DTjC1n9r63JBQdQ.1440x700.jpg">
                <p class="carlist-entry__price">300€ / day</p>
                <div class="carlist-entry__details">
                    <div>
                        <p class="carlist-entry__title font-heading-3">Audi A5 <span class="font-heading-4">2007</span></p>
                        <ul class="carlist-entry__features">
                            <li>Luxury</li>
                            <li>Audi</li>
                            <li>Black</li>
                        </ul>
                    </div>
                    <div class="carlist-entry__book">Book now!</div>
                </div>     
            </div>
            <div class="carlist-entry">
                    <img class="carlist-entry__image" src="https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/9AUSHI6DTjC1n9r63JBQdQ.1440x700.jpg">
                    <p class="carlist-entry__price">300€ / day</p>
                    <div class="carlist-entry__details">
                        <div>
                            <p class="carlist-entry__title font-heading-3">Audi A5 <span class="font-heading-4">2007</span></p>
                            <ul class="carlist-entry__features">
                                <li>Luxury</li>
                                <li>Audi</li>
                                <li>Black</li>
                            </ul>
                        </div>
                        <div class="carlist-entry__book">Book now!</div>
                    </div>     
                </div>
                <div class="carlist-entry">
                    <img class="carlist-entry__image" src="https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/9AUSHI6DTjC1n9r63JBQdQ.1440x700.jpg">
                    <p class="carlist-entry__price">300€ / day</p>
                    <div class="carlist-entry__details">
                        <div>
                            <p class="carlist-entry__title font-heading-3">Audi A5 <span class="font-heading-4">2007</span></p>
                            <ul class="carlist-entry__features">
                                <li>Luxury</li>
                                <li>Audi</li>
                                <li>Black</li>
                            </ul>
                        </div>
                        <div class="carlist-entry__book">Book now!</div>
                    </div>     
                </div>
                <div class="carlist-entry">
                    <img class="carlist-entry__image" src="https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/9AUSHI6DTjC1n9r63JBQdQ.1440x700.jpg">
                    <p class="carlist-entry__price">300€ / day</p>
                    <div class="carlist-entry__details">
                        <div>
                            <p class="carlist-entry__title font-heading-3">Audi A5 <span class="font-heading-4">2007</span></p>
                            <ul class="carlist-entry__features">
                                <li>Luxury</li>
                                <li>Audi</li>
                                <li>Black</li>
                            </ul>
                        </div>
                        <div class="carlist-entry__book">Book now!</div>
                    </div>     
                </div>
                <div class="carlist-entry">
                    <img class="carlist-entry__image" src="https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/9AUSHI6DTjC1n9r63JBQdQ.1440x700.jpg">
                    <p class="carlist-entry__price">300€ / day</p>
                    <div class="carlist-entry__details">
                        <div>
                            <p class="carlist-entry__title font-heading-3">Audi A5 <span class="font-heading-4">2007</span></p>
                            <ul class="carlist-entry__features">
                                <li>Luxury</li>
                                <li>Audi</li>
                                <li>Black</li>
                            </ul>
                        </div>
                        <div class="carlist-entry__book">Book now!</div>
                    </div>     
                </div>
        </div>
    </div>
    
    <footer class="footer">
        <a href="https://www.freepik.com/free-photos-vectors/background">Background vector created by freepik - www.freepik.com</a>
        <a href="https://www.vecteezy.com/">Illustration credit: Vecteezy.com</a>
    </footer>   
</body>

<script>
var range = document.getElementById('welcome__form-price-input');

noUiSlider.create(range, {
    range: {
        'min': 0,
        'max': 2000
    },
    step: 100,
    start: [0, 2000],
    margin: 100,
    connect: true,
    orientation: 'horizontal',
    behaviour: 'tap-drag',
    tooltips: true,
    format: {
        to: function (value) {
            return value + ' €';
        },
        from: function (value) {
            return value.replace('€', '');

        }
    }
});

function initMap() {
  var mapStyles = [{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"},{"color":"#e3f3f3"}]},{"featureType":"all","elementType":"labels","stylers":[{"color":"#22a2ae"},{"visibility":"on"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b2f0cd"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#eff5cc"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#eff5cc"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#b2f0cd"}]}];
  
  var map = new google.maps.Map(
    document.getElementById('map'), {
        zoom: 15,
        minZoom: 13,
        styles: mapStyles,
        mapTypeControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false,
        draggable: false,
    });

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            map.setCenter(initialLocation);
        });
    }
}
</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1h6CsIIQJYIWHhWdwZLYSW0qCByzlTAs&callback=initMap">
</script>


<script>
var loginModal = new tingle.modal({
    closeMethods: ['overlay', 'button', 'escape'],
    closeLabel: "Close",
    cssClass: ['login-modal']
});

loginModal.setContent(`
    <p class="login__header font-heading-2">Login</p>
    <form class="form-login" method="post" id="login-form">
        <div class="login__form-user">
            <img class="login__form-user-icon" src="https://image.flaticon.com/icons/svg/149/149452.svg">
            <input class="login__form-user-input" name="user" placeholder="user name" type="text" required=""/>
        </div>
        <div class="login__form-password">
            <img class="login__form-password-icon" src="https://image.flaticon.com/icons/svg/481/481195.svg">
            <input class="login__form-password-input" name="pass" type="password" placeholder="password" type="text" required=""/>
        </div>
        <button type="submit" class="login__form-submit" name="login-submit" id="login_button">Continue</button>
    </form>
`);

document.querySelector('#login').addEventListener('click', function() {
    loginModal.open()
});

</script>

<script>
var registerModal = new tingle.modal({
    closeMethods: ['overlay', 'button', 'escape'],
    closeLabel: "Close",
    cssClass: ['login-modal'],
});

registerModal.setContent(`
    <p class="login__header font-heading-2">Register</p>
    <form method="post" id="register-form">
        <div class="login__form-user">
            <img class="login__form-user-icon" src="https://image.flaticon.com/icons/svg/149/149452.svg">
            <input class="login__form-user-input register-input-name" name="user" placeholder="user name" type="text" required=""/>
        </div>
        <div class="login__form-password">
            <img class="login__form-password-icon" src="https://image.flaticon.com/icons/svg/481/481195.svg">
            <input class="login__form-password-input register-input-password" name="pass" type="password" placeholder="password" type="text" required=""/>
        </div>
        <button type="submit" class="login__form-submit" name="register-submit" id="register_button">Register</button>
    </form>
`);

document.querySelector('#register').addEventListener('click', function() {
    registerModal.open()
});
</script>
</html>