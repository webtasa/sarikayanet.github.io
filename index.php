<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/baslogo-removebg-preview.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>SARIKAYANET | Nefes Aldığın Her Yerde</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="index.php" class="nav__logo"><img src="assets/img/logo2.png" style="max-width: 50%; margin-top:5px;"></i>
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.html" class="nav__link active-link">Anasayfa</a>
                        </li>
                        <li class="nav__item">
                            <a href="hakkimizda.html" class="nav__link">Hakkımızda</a>
                        </li>
                        <li class="nav__item">
                            <a href="tarifelerimiz.html" class="nav__link">Tarifeler</a>
                        </li>
                        <li class="nav__item">
                            <a href="iletisim.html" class="nav__link">İletişim</a>
                        </li>
                        <a href="giris_yap.php" class="button button--flex" style="height: 35px; width: 90px;">Giriş
                        </a>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="assets/img/banner-removebg-preview.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            SARIKAYANET İLE SİZDE YÜKSEK <br>  HIZDA İNTERNETİN TADINI ÇIKARIN...
                        </h1>
                        <p class="home__description">
                            Sarıkayanet bugüne kadar gördüklerinizden farklı, bambaşka bir internet deneyimi sizleri bekliyor. Ayrıntılı Bilgi İçin
                        </p>
                        <a href="iletisim.html" class="button button--flex">
                            Bilgi İçin <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Bizi Takip Et</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="assets/img/zyro-image (3).png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            SARIKAYANET'İ<br> NEDEN SEÇMELİSİNİZ..!
                        </h2>

                        <p class="about__description">
                            Sarıkayanet bugüne kadar gördüklerinizden farklı, bambaşka bir internet deneyimi sizleri bekliyor.
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                             Size Uygun Esnek Tarifeler
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                Gerçek Sınırsız İnternet
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                7/24 Müşteri Desteği
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                İstediğiniz Zaman Sorunsuz İptal Desteği
                            </p>
                        </div>

                        <a href="tarifelerimiz.html" class="button--link button--flex">
                            Ayrıntılı Bilgi İçin <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== STEPS ====================-->
            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Sarıkayanet'e Nasıl <br> Abone Olunur?
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Başvuruyu Yapın Biz Sizi Arayalım.</h3>
                            <p class="steps__card-description">
                                Web sitemizden istediğiniz paket üzerinden başvurunuzu yapın. Ardından sizden istenilen bilgileri eksiksiz bir şekilde doldurunuz. Başvurunuz onaylandığı zaman biz sizi arayalım. 
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Gerekli Kontrolleri Yapalım.</h3>
                            <p class="steps__card-description">
                                Alt yapı opöröterü binanıza gelip alt yapı ve binanıza gelen kabloların kontrollerini sağlıyor. Konut durumunuz onaylandıktan sonra hattınız hazır hale getiriliyor.
                            </p>
                        </div>
                        

                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Kuruluma Gelelim.</h3>
                            <p class="steps__card-description">
                                Ekiblerimiz modeminize kadar bütün bağlantıları yapar. Sizler için hazırlanan belgeleri imzalatıp işlemleri tamamlıyor. Daha sonra da kesintisiz internetin tadını çıkarın.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    SIKLIKLA TERCİH  <br> EDİLEN TARİFELER
                </h2>

                <p class="product__description">
                    Müşterilerimizin En Çok Tercih Ettiği Tarifeler
                </p>

                <section class="card container grid">
                    <div class="card__container grid">
                        <!--==================== CARD 1 ====================-->
                        <article class="card__content grid">
                            <div class="card__pricing">
                                <div class="card__pricing-number">
                                    <span class="card__pricing-symbol">$</span>120
                                </div>
                                <span class="card__pricing-month">/Aylık</span>
                            </div>
            
                            <header class="card__header">
                                <div class="card__header-circle grid">
                                    <img src="assets/img/tarifeicon.png" alt="" class="card__header-img">
                                </div>
                                
                                <span class="card__header-subtitle">İlk 6 Ay %50 İndirim</span>
                                <h1 class="card__header-title">Kampanyalı Tarifeler</h1>
                            </header>
                            
                            <ul class="card__list grid">
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">16 Mbps</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">Modem aylık ₺20 faturaya ek ilave</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">Her şey dahil sabit fiyat</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">LİMİTSİZ & AKN YOK</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">7/24 DESTEK</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">2 YIL TAAHHÜT</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">ADSL</p>
                                </li>
                            </ul>
            
                            <a href="iletisim.html"><button class="card__button" style="width: 100%;">Bilgi Al</button></a>
                        </article>
            
                        <!--==================== CARD 2 ====================-->
                        <article class="card__content grid">
                            <div class="card__pricing">
                                <div class="card__pricing-number">
                                    <span class="card__pricing-symbol">$</span>135
                                </div>
                                <span class="card__pricing-month">/Aylık</span>
                            </div>
            
                            <header class="card__header">
                                <div class="card__header-circle grid">
                                    <img src="assets/img/tarifeicon.png" alt="" class="card__header-img">
                                </div>
            
                                <span class="card__header-subtitle">24 Mbps</span>
                                <h1 class="card__header-title">Taahhütsüz Tarifeler</h1>
                            </header>
                            
                            <ul class="card__list grid">
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">16 Mbps</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">Modem aylık ₺20 faturaya ek ilave</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">Her şey dahil sabit fiyat</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">LİMİTSİZ & AKN YOK</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">7/24 DESTEK</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">2 YIL TAAHHÜT</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">ADSL</p>
                                </li>
                            </ul>
            
            
                            <a href="iletisim.html"><button class="card__button" style="width: 100%;">Bilgi Al</button></a>
                        </article>
            
                        <!--==================== CARD 3 ====================-->
                        <article class="card__content grid">
                            <div class="card__pricing">
                                <div class="card__pricing-number">
                                    <span class="card__pricing-symbol">$</span>145
                                </div>
                                <span class="card__pricing-month">/Aylık</span>
                            </div>
            
                            <header class="card__header">
                                <div class="card__header-circle grid">
                                    <img src="assets/img/tarifeicon.png" alt="" class="card__header-img">
                                </div>
            
                                <span class="card__header-subtitle">35 Mbps</span>
                                <h1 class="card__header-title">Fiber Tarifeler</h1>
                            </header>
                            
                            <ul class="card__list grid">
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">16 Mbps</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">Modem aylık ₺20 faturaya ek ilave</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">Her şey dahil sabit fiyat</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">LİMİTSİZ & AKN YOK</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">7/24 DESTEK</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">2 YIL TAAHHÜT</p>
                                </li>
                                <li class="card__list-item">
                                    <i class="uil uil-check card__list-icon"></i>
                                    <p class="card__list-description">ADSL</p>
                                </li>
                            </ul>
            
            
                            <a href="iletisim.html"><button class="card__button" style="width: 100%;">Bilgi Al</button></a>
                        </article>
                    </div>
                </section>
            </section>

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Sık Sorulan Sorular <br> (SSS)
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Sarıkayanet'e Nasıl Abone Olurum?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Sarıkayanet İnteret'e abone olmak artık çok kolay! Web Sitemizden Online başvuru yaparak veya 0850 480 80 87 nolu Sarıkayanet Müşteri
                                    Hizmetlerini arayarak abone olabilirsiniz. Şimdi Hemen Başvuru Formu linkine tıklayarak Sarıkayanet'in yep yeni avantajlarından yararlanabilirsiniz.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    İnternet Kullanmak İçin Sabit Telefona İhtiyacım Mı Var?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    İster ADSL ister FİBER altyapıya sahip olun, internet kullanmak için telefon hattına ihtiyacınız yoktur. Sarıkayanet'e İnternetinizi telefonsuz kullabilirsiniz. Hizmet
                                almakta olduğunuz aktif bir sabit hattınız bulunması durumunda aynı hat üzerinden internet hizmeti verilecektir.                            </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Aboneliğim Aktif Hale Geldi İnterneti Kullanmak İçin Ne Yapmalıyım?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Aboneliğiniz aktif hale geldiğinde İnternet hizmetimizi kullanabilmeniz için iletişim numaranıza SMS ile gönderilen Kullanıcı Adı / Şifre bilgilerinizle modem kurulumunuzu 
                                    gerçekleştirerek internet hizmetinizi kullanmaya başlayabilirsiniz.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                   İnternete Bağlanamıyorum, Neden Olabilir?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    İnternet bağlantınızda sorun varsa lütfen şu kontrolleri yapınız: Modem ışıklarınızı kontrol ediniz. Power, DSL ve Internet ışıklarının hepsinin sabit olarak yeşil renkte yanması gerekmektedir. Eğer hiç bir ışık yanmıyorsa, cihazın elektriğe bağlı olup olmadığını ve açık olduğunu kontrol ediniz. Power ışığı yanıyor fakat DSL ışığı hiç yanmıyor veya yanıp sönüyorsa, kabloların ve splitter'ın doğru şekilde takılıp takılmadığını kontrol ediniz. DSL ışığı sabit yanıyor fakat İnternet ışığı kırmızı yanıyorsa, cihazı bir-kez kapatıp açarak 2-3 dakika bekleyiniz. İnternet ışığınız yeşil yanıyor ancak bilgisayarınızda web sayfası açamıyorsanız, bilgisayarınızın modeme öncelikli olarak kablo ile bağlı olduğundan emin olunuz. Kablo bağlantınızı yaptıktan sonra, kablosuz ayarlarınızı yaparak, bilgisayarınızı ve diğer cihazlarınızı (tablet, laptop, cep telefonu vb) kablosuz olarak modeme bağlayıp internete çıkabilirsiniz. Eğer bağlantı probleminiz devam ediyorsa size SMS olarak iletilen kullanıcı adı ve şifrenizin, modeminizin arayüzüne doğru girildiğinden emin olunuz. Modeminizin kullanım kılavuzu bu konuda size yardımcı olacaktır. Bu adımları yaptığınız halde sorun devam ediyorsa, konu ile ilgili BeeSpeed Müşteri Hizmetlerinden (0850 480 8087) destek alabilirsiniz.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Hız Değişikliği Yapmak İstiyorum, Ne Yapabilirim?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Hız değişikliği yapmak için 0850 480 80 87 no'lu Sarıkayanet Müşteri Hizmetlerinden destek alabilirsiniz.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Aboneliğimi İptal Ettirmek İçin Ne Yapmalıyım?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    BeeSpeed Müşteri Hizmetlerini (0850 480 80 87) dilediğiniz zaman arayarak iptal süreci ile ilgili detaylı bilgileri alabilir veya iptal talebinizi Abone/Hizmet numaranızı, iletişim bilgilerinizi ve imzanızı içerecek şekilde hazırladığınız iptal talep dilekçesini bize göndererek yapabilirsiniz. Dilekçeniz 24 saat içerisinde işleme alınacak ve 7 gün içerisinde iptal işleminiz tamamlanacaktır. Dilekçeniz işleme alındığında ve iptal işleminiz tamamlandığında iletişim numaranızdan SMS ile bilgilendirileceksiniz. Taahhütlü paketlerde kampanyaya dahil olan abonelerin izleyen dönem içerisinde kampanyadan çıkması, hatlarını iptal ettirmesi, hatlarını devretmesi, ilk 6 ay içerisinde dondurması, hatlarını başka operatörlere taşımaları durumunda kampanyadan yararlanma haklarını kaybedeceklerdir. Bu durumlarda abonenin bir sonraki faturasına cayma bedeli yansıtılacaktır. Cayma bedeli 75TL (KDV Dahil) olan aktivasyon ücreti ve varsa sabit fiyat garantisi kapsamında yapılan indirimlerin toplamıdır.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Verilen Bilgilerden<br> Herhangi Biri İle <br> Bize Ulaşabilirsiniz..!
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Anında Destek İçin Bizi Arayınız..!</h3>
                                <span class="contact__description">
                                    <i class="ri-phone-line contact__icon"></i>
                                    0850 480 80 87
                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Bize E-Posta İle Yazın...</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                    müsterihizmetleri@sarikayanet.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">E-Posta</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Ad Soyad</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Konu</label>
                            </div>
                        </div>

                        <button href="#" class="button button--flex">
                            Mesaj Gönder
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="index.html" class="footer__logo"><img src="assets/img/logo2.png" style="max-width: 50%; margin-top:5px;"></i>
                    </a>

                    <h3 class="footer__title">
                        Güncellemelerden Hemen Haberdar Olmak İçin <br> Abone Olunuz!
                    </h3>

                    <div class="footer__subscribe">

                        <input type="email" placeholder="E-Posta Giriniz" class="footer__input">

                        <button class="button button--flex footer__button">
                            Gönder
                            
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Adresimiz</h3>

                    <ul class="footer__data">
                        <li class="footer__information">15 Mayıs Mahallesi</li>
                        <li class="footer__information">559 Sokak Çatal İş Merkezi</li>
                        <li class="footer__information">Pamukkale / Denizli</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Bizimle İletişime Geçin</h3>

                    <ul class="footer__data">
                        <li class="footer__information">0850 480 80 87</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Online Fatura Ödeme
                    </h3>

                    <div class="footer__cards">
                        <a href="https://www.visa.com.tr/"><img src="assets/img/card1.png" alt="" class="footer__card"></a>
                        <a href="https://www.mastercard.com.tr/tr-tr.html"><img src="assets/img/card2.png" alt="" class="footer__card"></a>
                        <a href="https://www.paypal.com/tr/home"><img src="assets/img/card3.png" alt="" class="footer__card"></a>
                        <a href="https://www.discover.com/"><img src="assets/img/card4.png" alt="" class="footer__card"></a>
                    </div>
                </div>
            </div>

            <p class="footer__copy">@2022 SARIKAYANET | Gökçe Aydın Staj Dosyayı Projesi</p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
