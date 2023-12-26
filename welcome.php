

        <!-- <section>
            <div class="navbar"> 
                 <div class="navbar-wrapper">
                    <div class="logo-wrapper">
                        <img src="logo2.jpeg" alt="Araba.com Logo" >
                    </div>
                    <div class="menu-container">
                        <ul  class="menu-list">
                            <li class="menu-list-item"> <a href="arabaAl.html">Araba Al</a></li>
                            <li class="menu-list-item"><a href="arabaAl.html">Araba Sat</a></li>
                            <li class="menu-list-item"> 
                            <div>
                                <select class="hizmetlerimiz-combobox">
                                    <option value="0">Hizmetlerimiz</option>
                                    <option value="1">Arabam Ne Kadar</option>
                                    <option value="2">Trafik Sigortası ve Kasko</option>
                                    <option value="3">Kasko Değeri</option>
                                    <option value="4">Araba.com Blog</option>
                                </select>
                                </div>
                            </li> 
                        </ul>
                    </div>
                    <div class="profile-container">
                        <a href="#">
                        <p>Giriş Yap  <i class="bi bi-person-circle"></i></p>      
                    </a>
                    </div>
                </div>
            </div>
        </section> -->


<!DOCTYPE html>
<html>

<head>
    <title>Türkiye'nin Araba Pazarı | ssssss.com</title>
    <meta charset="UTF-8" />
    <meta name = "keywords" content="araba,satın al,Türkiye'nin araba pazarı"/>
    <meta name="descripton" content="Araba satışı"/>
    <meta name="author" content="Team 7"/>

    <link rel="stylesheet" href="styleNavbar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="welcome.css" />
</head>

<body>
    <section>
        <picture class="greeting-image">
            <source
                srcset="greet.jpeg"
                ><img src="greet.jpeg" alt="photo">
        </picture>
        <header class="container header">
            <a href="/"><img class="araba-logo" src="logo2.jpeg" alt="Araba.com Logo" /></a>
            <div class="header-right-column">
                <a href="arabaAl.php" class="header-action">Araba Al</a><a href="/hemen-araba-sat"
                    class="header-action">Araba Sat</a><a href="/hemen-araba-sat-kurumsal" class="header-action">Filonu
                    Sat</a><a href="https://blog.araba.com" class="header-action">Blog</a><a href="login.php"
                    class="header-action" style="display: flex">Giriş Yap</a>
            </div>
        </header>
    </section>
    <div class="main-container">
        <h1 class="main-container-header">Türkiye'nin Araba Pazarı</h1>
        <div class="checkbox-container">
            <input type="checkbox" id="checkBox1" name="checkBox1" value="Araba Al">
            <label for="checkBox1" class="checkboxL">Araba Al</label>
            <input type="checkbox" id="checkBox2" name="checkBox2" value="Araba Sat">
            <label for="checkBox2" class="checkboxL">Araba Sat</label>
        </div>
        <div class="combobox-container">
            <!-- <label for="city" class="combobox-label">Şehir Seç:</label> -->
            <select name="city" id="city" class="combobox">
                <option value="Sec">Şehir Seç</option>
                <option value="Ankara">Ankara</option>
                <option value="Bursa">Bursa</option>
                <option value="Eskisehir">Eskişsssehir</option>
                <option value="Istanbul">İstanbul</option>
                <option value="Mugla">Muğla</option>
            </select>
            <button type="button" class="buttonC">Fiyat Teklifi Al</button>
        </div>
    <div class = "popular-content-container">
        <h2 style="text-align: center; margin-top: 150px;">Populer İçeriklerimiz</h2>
        <div class="container">
            <div class="popular-content">
                <div class="wrap-content">
                    <div class="wrap-content-item1">
                        <div class="wrap-content-itemX">
                            <div class="wrap-content-image" style="width: 100%; display: block;">
                                <img width="250px" height="200px" src="yakit.jpg" style="object-fit: cover; display: block;">
                            </div>
                            <div class="wrap-content-info">
                                <p style="color:brown;font-size: 13px;">Genel</p>
                                <p style="padding-top: 10px;">Yakıt Konusunda Avantajlı En Az Yakan Arabalar</p>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-content-item2">
                        <div class="wrap-content-itemX">
                            <div class="wrap-content-image" style="width: 100%;">
                                <img width="250px" height="200px" src="almanya.webp">
                            </div>
                            <div class="wrap-content-info">
                                <p style="color:brown;font-size: 13px;">Genel</p>
                                <p style="padding-top: 10px;">Almanya Menşeli Araba Markaları ve Fiyatları</p>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-content-item3">
                        <div class="wrap-content-itemX">
                            <div class="wrap-content-image" style="width: 100%;">
                                <img width="250px" height="200px" src="suv.jpg">
                            </div>
                            <div class="wrap-content-info">
                                <p style="color:brown;font-size: 13px;">Genel</p>
                                <p style="padding-top: 10px;">En Az Yakan SUV Araçlar</p>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-content-item4">
                        <div class="wrap-content-itemX">
                            <div class="wrap-content-image" style="width: 100%;">
                                <img width="250px" height="200px" src="aile.jpg">
                            </div>
                            <div class="wrap-content-info">
                                <p style="color:brown;font-size: 13px;">gggggggg</p>
                                <p style="padding-top: 10px;">YAlınabilecek En İyi ve İdeal Aile Arabaları</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        



        <!-- <form action="" class="buy-sell-car-form" id="buy-sell-car-form">
            <div class="radio-group buy-sell-car-radio"><input type="hidden" name="radio-group-value"
                    id="radio-group-value" value="sell-car-form">
                
                    <div class="radio-button" id="sell-car"></div>
                    <label for="sell-car">Araba Sat</label>
                

            </div>
            <div class="form-group">
                <style>
                    .loadingio-spinner-rolling-igzruaidrd.form-loader {
                        width: 14px;
                        height: 47.5px;
                        display: flex;
                        box-sizing: inherit;
                        margin-top: 20px;
                        display: none;
                    }

                    .loadingio-spinner-rolling-igzruaidrd.form-loader.active {
                        display: flex;
                    }

                    .form-loader .ldio-7uem5pjkiw6 {
                        width: 14px;
                        height: 14px;
                        display: flex;
                    }
                </style>
                <div class="loadingio-spinner-rolling-igzruaidrd form-loader">
                    <div class="ldio-7uem5pjkiw6">
                        <div></div>
                    </div>
                </div>
                <div class="form city-selection sell-car-form active" id="sell-car-form">
                    <div class="select-wrapper"><select name="city" id="sellNowCities">
                            <option value="">Şehir Seç</option>
                            <option value="1" >Adana</option>                      
                            <option value="2" >Ankara</option>
                            <option value="3" >Antalya</option>                           
                            <option value="4" >Aydın</option>                                                 
                            <option value="5" >Bursa</option>
                            <option value="6" >Çanakkale</option>
                            <option value="7" >Diyarbakır</option>
                            <option value="8" >Eskişehir</option>
                            <option value="9" >İstanbul</option>
                            <option value="10">İzmir</option>
                            <option value="11">Konya</option>
                            <option value="12">Kütahya</option>
                            <option value="13">Malatya</option>
                            <option value="14">Sivas</option>
                            <option value="15">Trabzon</option>
                            <option value="16">Van</option>
                            
                        </select>
                        
                    </div>
                    <button type="submit">Fiyat Teklifi Al</button>
                </div>
                <label for="buy-car">Araba Al</label>
                <div class="form buy-car-form" id="buy-car-form">
                    <div class="select-wrapper"><select name="brand" id="brand">
                            <option value="">Marka Seç</option>
                            <option value="1" data-value="alfa-romeo">Alfa Romeo</option>
                            <option value="2" data-value="audi">Audi</option>
                            <option value="3" data-value="bmw">BMW</option>
                            <option value="4" data-value="honda">Honda</option>
                            <option value="5" data-value="hyundai">Hyundai</option>
                            <option value="6" data-value="jeep">Jeep</option>
                            <option value="7" data-value="kia">Kia</option>
                            <option value="8" data-value="land-rover">Land Rover</option>
                            <option value="9" data-value="mercedes">Mercedes</option>
                            <option value="10" data-value="mini">Mini</option>
                            <option value="11" data-value="nissan">Nissan</option>
                            <option value="12" data-value="opel">Opel</option>
                            <option value="13" data-value="peugeot">Peugeot</option>
                            <option value="14" data-value="renault">Renault</option>
                            <option value="15" data-value="toyota">Toyota</option>
                            <option value="16" data-value="volkswagen">Volkswagen</option>
                            <option value="17" data-value="volvo">Volvo</option>
                        </div>
                    <div class="select-wrapper"><select name="model" id="model" disabled="disabled">
                            
                        </select>
                    
                    </div><button type="submit">Araba Bul</button>
                </div>
            </div>
        </form> -->
    </div>

</body>

</html>