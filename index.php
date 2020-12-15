<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <meta name="description" content="フリーランスエンジニアのポートフォリオサイトです" />
        <title>ポートフォリオサイト</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXKKFSZ0EN"></script>
        <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XXKKFSZ0EN');
</script>
</head>

<body >
    <div class="scroll-up-btn">
        <a href="#home"><i class="fas fa-angle-up"></i></a>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#product">Product</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- ホームセクション -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Harada Nina</div>
                <div class="text-3">And I'm a<br class="br-sp"/><span class="typing"></span></div><br>
                <a href="#product">Here me</a>
            </div>
        </div>
    </section>
    
    <!-- プロダクトセクション -->
    <section class="product" id="product">
        <div class="max-width">
            <h2 class="title">Products</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <a href="https://shiitahair.com/"><img src="images/shiitahair.png" alt=""></a>
                        <div class="text">HP制作/美容室</div>
                        <p>メニュー/ホーム/コンセプト/ヘアスタイル/スタッフ紹介/アクセス/Web予約</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href="https://baked-cheesecake.website/"><img src="images/cheesecake.png" alt=""></a>
                        <div class="text">HP制作/コーポレートサイト</div>
                        <p>メニュー/web制作/LINE/動画作成/料金/お問い合わせ</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href="https://www.cheese-cake.tokyo/"><img src="images/laravel.png" alt=""></a>
                        <div class="text">ブログ/Laravel</div>
                        <p>機能/ブログ投稿/ブログ詳細/ブログ更新/ブログ削除/画像投稿/画像削除</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href="app/mini_bbs/index.php"><img src="images/tubuyaita.png" alt=""></a>
                        <div class="text">Twitter風アプリ/PHP</div>
                        <p>機能<br>/ログイン/ログアウト/投稿/削除/返信</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <a href="app/calc/calc.html"><img src="images/dentaku.png" alt=""></a>
                        <div class="text">電卓/Javascript</div>
                        <p>機能<br>四則演算/コメント</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href="app/index.php"><img src="images/portfolio2.png" alt=""></a>
                        <div class="text">旧ポートフォリオサイト</div>
                        <p>メニュー<br>/自己紹介/成果物/お問い合わせ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- サービスセクション -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My servies</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>クライアント様から依頼されたWEBサイトのデザインからコーディングまで行います。</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps developer</div>
                        <p>クライアント様から依頼されたWEBアプリの開発を設計から行います。</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-search"></i>
                        <div class="text">Analytics</div>
                        <p>WEBサイトを検索にヒットするSEO対策からアクセス解析まで行います。</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- アバウトセクション -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.PNG" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm NINA and I'm a <br class="br-sp"/><span class="typing-2"></span></div>
                    <p>1989年生まれ。熊本県出身の31歳。神奈川県藤沢市在住。<br>
                    現在は3歳と1歳の子を育てながらフリーランスでWEB制作を行っております。<br>
                    スキルとして「HTML」「CSS」「PHP」「JavaScript」「Laravel」「jQuery」「MySQL」「Sass」「Bootstrap」があります。
                    Githubにソースコードのせています。趣味は「筋トレ」「健康的な食事」「散歩」「鬼滅の刃」です。よろしくお願いいたします。
                </p>
                <div class="git">
                        <a href="https://github.com/cheesecake2020"><i class="fab fa-github fa-5x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- コンタクトセクション -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <h3>お問い合わせはこちらから<br class="br-sp"/>おねがいします。</h3>
                <a href="mailto:cheesecake.baked.2013@gmail.com?subject=お問い合わせ"><i class="far fa-envelope"></i></a>
            <p>cheesecake.baked.2013@gmail.com</p>
            </div>
        </div>
    </section>
    <footer><p>Copyright © cheesecake 2020</p></footer>
    <script src="script.js"></script>
</body>

</html>