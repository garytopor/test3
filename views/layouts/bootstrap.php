<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\MainAsset;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper">
<header id="header">
    <div class="container">
        <div class="header-content">
            <strong class="logo"><a href="#">Moro</a></strong>
            <div class="header-info">
                <div class="row-holder">
                    <div class="row">
                        <a href="#" class="link">FMS landing </a>
                        <a href="#" class="link">Freight managment</a>
                        <ul class="language-list">
                            <li class="active"><a href="#">english</a></li>
                            <li><a href="#">简体中文</a></li>
                            <li><a href="#">русский</a></li>
                        </ul>
                    </div>
                    <nav id="nav">
                        <div class="desctop">
                            <div class="popup-container">
                                <button class="btn open-popup">count delivery</button>

                            </div>
                            <ul class="default-list">
                                <li><a href="#">about company </a></li>
                                <li><a href="#">our services</a></li>
                                <li><a href="#">clients and partners</a></li>
                                <li><a href="#">contacts</a></li>
                                <li class="search">
                                    <a href="#">search</a>

                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <a class="mob-btn" href="#"><span></span></a>
        <div class="mobile-content">
            <div class="mobile-nav-container">
                <nav id="nav" class="mobile">
                    <div class="back"><a href="#"> < back</a></div>
                    <ul>
                        <li class="has-drop">
                            <a href="about.html">about company</a>
                            <div class="drop">
                                <ul>
                                    <li><a href="about.html">company history and possibilities</a></li>
                                    <li><a href="about.html">managment</a></li>
                                    <li><a href="about.html">current jobs</a></li>
                                    <li><a href="about.html">responsibility and security</a></li>
                                    <li><a href="about.html">company news</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="building.html">our services</a>
                        </li>
                        <li>
                            <a href="solutions.html">clients and partners</a>
                        </li>
                        <li class="has-drop">
                            <a href="catalog-group-begin.html">contacts</a>
                        </li>
                    </ul>
                </nav>
                <div class="info-holder">
                    <div class="tel-holder">
                        <span>contact us:</span>
                        <a href="tel:+74959025806" class="tel">0574-87259554 </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-popup">
            <a href="#" class="close-popup">Close</a>
            <form action="" class="main-form">
                <fieldset>
                    <div class="row"><input class="input" type="text" placeholder="company name"></div>
                    <div class="row"><input class="input" type="text" placeholder="contact name"></div>
                    <div class="row"><input class="input" type="text" placeholder="e-mail"></div>
                    <div class="row"><input class="input" type="text" placeholder="phone number"></div>
                    <div class="row"><input class="input" type="text" placeholder="destination from"></div>
                    <div class="row"><input class="input" type="text" placeholder="destination to"></div>
                    <div class="row"><input class="input" type="text" placeholder="cargo type"></div>
                    <div class="row"><input class="input" type="text" placeholder="cargo quantity, weight and size"></div>
                    <div class="row btn-holder"><input type="submit" class="btn" value="send request"></div>
                </fieldset>
            </form>
        </div>
    </div>
    <form action="#" class="popup-form">
        <fieldset>
            <div class="input-holder">
                <input type="text" placeholder="Managment">
            </div>
            <input type="submit" value="search">
        </fieldset>
    </form>
</header>
<section class="intro-section">
    <div class="container">
        <div class="text-holder">
            <div class="title-holder"><h1>Best shipping rates for your business from logistic leader</h1></div>
            <a href="#" class="btn">Learn more about us</a>
        </div>
    </div>
</section>
<div class="container title-routs">
    <h2>Our routes</h2>
</div>
<section class="top-section">
    <div class="container">
        <div class="visual-holder">
            <div class="content-holder">
                <h3>Cargo shipping from China to:</h3>
                <ul class="routs-list">
                    <li>
                        <strong>Middle East area:</strong>
                        <span>Jebel Ali, Dammam, Riyadh, Doha, Kuwait</span>
                    </li>
                    <li>
                        <strong>Europe area:</strong>
                        <span>Mideterian and Baltic sea: St. Petersburg, Kotka, Klaipeda, Riga, Tallin </span>
                    </li>
                    <li>
                        <strong>Central Asia area:</strong>
                        <span>Baku, Erevan, Tbilisi</span>
                    </li>
                    <li>
                        <strong>Black Sea area:</strong>
                        <span>Novorossiysk, Poti, Odessa</span>
                    </li>
                </ul>
                <div class="btn-holder"><a href="#" class="btn">learn more</a></div>
            </div>
            <div class="visual">
                <img src="/web/images/main-bg.jpg" alt="image description">
            </div>
        </div>
    </div>
</section>
<section class="slider-section">
    <div class="container">
        <h2>Our services</h2>
        <div class="slider-holder">
            <div class="service-slider">
                <div>
                    <div class="img-holder"><img src="/web/images/sr1.jpg" alt="image description"></div>
                    <strong>Cargo shipping</strong>
                    <span>Moro China company provides international sea container transportations of cargoes. Due to its low cost and convenience, they are quite popular, in addition, one of the primary advantages of container transport is a high level of security.</span>
                    <a href="#" class="btn">Learn more</a>
                </div>
                <div>
                    <div class="img-holder"><img src="/web/images/sr2.jpg" alt="image description"></div>
                    <strong>Air transportation</strong>
                    <span>Мого China company provides International sea container transportations of cargoes. Due to its low cost and convenience, they are quite popular, in addition, one of the primary advantages of container transport is a high level of security.</span>
                    <a href="#" class="btn">Learn more</a>
                </div>
                <div>
                    <div class="img-holder"><img src="/web/images/sr3.jpg" alt="image description"></div>
                    <strong>Trucking service</strong>
                    <span>Мого China company provides international sea container transportations of cargoes. Due to its low cost and convenience, they are quite popular, in addition, one of the primary advantages of container transport is a high level of security.</span>
                    <a href="#" class="btn">Learn more</a>
                </div>
                <div>
                    <div class="img-holder"><img src="/web/images/sr1.jpg" alt="image description"></div>
                    <strong>Cargo shipping</strong>
                    <span>Moro China company provides international sea container transportations of cargoes. Due to its low cost and convenience, they are quite popular, in addition, one of the primary advantages of container transport is a high level of security.</span>
                    <a href="#" class="btn">Learn more</a>
                </div>
                <div>
                    <div class="img-holder"><img src="/web/images/sr2.jpg" alt="image description"></div>
                    <strong>Air transportation</strong>
                    <span>Мого China company provides International sea container transportations of cargoes. Due to its low cost and convenience, they are quite popular, in addition, one of the primary advantages of container transport is a high level of security.</span>
                    <a href="#" class="btn">Learn more</a>
                </div>
                <div>
                    <div class="img-holder"><img src="/web/images/sr3.jpg" alt="image description"></div>
                    <strong>Trucking service</strong>
                    <span>Мого China company provides international sea container transportations of cargoes. Due to its low cost and convenience, they are quite popular, in addition, one of the primary advantages of container transport is a high level of security.</span>
                    <a href="#" class="btn">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news-section">
    <div class="container">
        <h2>Company news</h2>
        <ul class="news-list">
            <li>
                <div class="img-holder"><img src="/web/images/img8.jpg" alt="image description"></div>
                <span class="date">12.10.2016</span>
                <strong>The EU Commission closes <br> competition case without finding infringement</strong>
            </li>
            <li class="small">
                <div class="img-holder"><img src="/web/images/img9.jpg" alt="image description"></div>
                <span class="date">12.10.2016</span>
                <strong>RUSAL and Maersk Line announce long-term cooperation</strong>
                <p>Moro China company provides international sea container transportations of cargoes. Due to Its low cost and convenience ...</p>
                <a href="#" class="link">read more</a>
            </li>
            <li class="small">
                <div class="img-holder"><img src="/web/images/img10.jpg" alt="image description"></div>
                <span class="date">12.10.2016</span>
                <strong>RUSAL and Maersk Line announce long-term cooperation</strong>
                <p>Moro China company provides international sea container transportations of cargoes. Due to Its low cost and convenience ...</p>
                <a href="#" class="link">read more</a>
            </li>
        </ul>
    </div>
</section>
<section class="partners-section">
    <div class="container">
        <h2>Partners</h2>
        <ul class="partners-list">
            <li><a href="#"><img src="/web/images/pr1.jpg" alt="image description"></a></li>
            <li><a href="#"><img src="/web/images/pr2.jpg" alt="image description"></a></li>
            <li><a href="#"><img src="/web/images/pr3.jpg" alt="image description"></a></li>
            <li><a href="#"><img src="/web/images/pr4.jpg" alt="image description"></a></li>
            <li><a href="#"><img src="/web/images/pr5.jpg" alt="image description"></a></li>
        </ul>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <a href="#" class="copy">© 2016, Moro <br> All rights reserved </a>
            <ul class="footer-list">
                <li>
                    <a href="#"><strong>About company</strong></a>
                </li>
                <li>
                    <a href="#"><strong>Our services</strong></a>
                </li>
                <li>
                    <a href="#"><strong>Clients and partners</strong></a>
                </li>
                <li>
                    <a href="#"><strong>Contacts</strong></a>
                </li>
                <li>
                    <a href="#">&nbsp;</a>
                </li>
                <li>
                    <a href="#">FMS landing</a>
                </li>
                <li>
                    <a href="#">Freight managment</a>
                </li>
            </ul>
            <ul class="contacts-list">
                <li>
                    Tel: <a href="tel:057487259554" class="phone">0574-87259554 </a>
                </li>
                <li>
                    <span class="mail">E-mail: <a href="#">lin@moro.hk</a></span>
                </li>
                <li>&nbsp;</li>
                <li>
                    Rainbow Road, Jiangdong District, Ningbo City on the 11th, Carnival World Trade Room 1101 A Block, China.
                </li>
                <li>
                    <a href="#">all braches on a map</a>
                </li>
            </ul>
            <div class="form-holder">
                <form action="" class="footer-form">
                    <fieldset>
                        <h3>If you have any question to us,<br> let us contact with you:</h3>
                        <div class="row">
                            <input type="text" class="input" placeholder="Your name">
                        </div>
                        <div class="row">
                            <input type="text" class="input" placeholder="E-mail">
                        </div>
                        <div class="row">
                            <input type="text" class="input" placeholder="Company name">
                        </div>
                        <div class="btn-holder">
                            <input type="submit" class="btn" value="contact with me">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>
</div>

<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
