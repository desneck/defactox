<?php 

include "connect.php";
session_start();
$query = "select * from arabalar";
$data = mysqli_query($con,$query);
$cars = mysqli_fetch_all($data,MYSQLI_ASSOC);
$rows = mysqli_affected_rows($con);
if($rows == 0){
    echo "cekme islemi basarisiz !";
}
//else{
//     echo "cekme islemi basarili !";
//     echo $rows;
// }

?>

<html>
    <head>
        <title>Türkiye'nin Araba Pazarı | Araba.com</title>
        <meta charset="UTF-8"/>
        <meta name = "keywords" content="araba,satın al,Türkiye'nin araba pazarı"/>
        <meta name="descripton" content="Araba satışı"/>
        <meta name="author" content="Team 7"/>
        <link rel="stylesheet" href="styleArabaAl.css">
        <link rel="stylesheet" href="styleNavbar.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        
        
    
        
    </head>
    <body>
        <section>
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
                        
                        
                            <?php 
                            if(isset($_SESSION["logged_in"])){
                                if($_SESSION["logged_in"] == true){?>
                                    <a href="logout.php"><p><?php echo $_SESSION['username'];?>  için</p>ÇIKIŞ YAP</a>
                                <?php }
                            }else{?>
                            <a href="login.php">
                            <p>Giriş Yap  <i class="bi bi-person-circle"></i></p>
                            </a>
                            <?php    
                            }
                            ?>
                            
                        
                            
                       
                       
                        
                    
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="mini-navbar">
                <ul class = "mini-navbar-list1">
                    <li class = "mini-navbar-item"><a href="#">Araba.com >></a> </li>
                    <li class = "mini-navbar-item"><a href="#">Otomobil</a></li>
                </ul>
                <ul class="mini-navbar-list2">
                    <li class = "mini-navbar-item"><a href="#">Favori İlanlarım >></a></li>
                    <li class = "mini-navbar-item"><a href="#">Favori aramalarım</a></li>
                </ul>
            </div>
        </section>

        <div class="container">
        <section>
            <div class="grid-container-menu">
                <div class="grid-column">
                    <div class="grid1" style="border-bottom: 1px solid #f1f1f1">
                        <div class="grid1-item">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Promosyon</p>
                                <div class="grid1-checkbox"> 
                                    <input type="checkbox" id="is_promotion" name="isPromotion" value="1">
                                    <label for="is_promotion">Yalnızca İndirimli Arabalar</label>
                                </div>
                        </div>
                    </div>
                    <div class="grid2" style="border-bottom: 1px solid #f1f1f1">
                        <div class="grid2-item">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Marka-Model</p>
                            <p style="padding-left: 10px;"><a href="#">Otomobil ></a></p>    
                            <div> 
                                <ul class="grid2-list">
                                    <li><a href="#">Alfa Romeo</a></li>
                                    <li><a href="#">Audi</a></li>
                                    <li><a href="#">BMW</a></li>
                                    <li><a href="#">Chevrolet</a></li>
                                    <li><a href="#">Citroen</a></li>
                                    <li><a href="#">Dacia</a></li>
                                    <li><a href="#">Flat</a></li>
                                    <li><a href="#">Ford</a></li>
                                    <li><a href="#">Ford-Otosan</a></li>   
                                    <li><a href="#">Honda</a></li>
                                    <li><a href="#">Hyundai</a></li>
                                    <li><a href="#">Jeep</a></li>
                                    <li><a href="#">Kia</a></li>
                                    <li><a href="#">Land Rover</a></li>
                                    <li><a href="#">Mercedes</a></li>
                                    <li><a href="#">Mini</a></li>
                                    <li><a href="#">Nissan</a></li>
                                    <li><a href="#">Opel</a></li>
                                    <li><a href="#">Peugeot</a></li>
                                    <li><a href="#">Renault</a></li>
                                    <li><a href="#">Seat</a></li>
                                    <li><a href="#">Skoda</a></li>
                                    <li><a href="#">Suziki</a></li>
                                    <li><a href="#">Toyota</a></li>
                                    <li><a href="#">Volkswagen</a></li>
                                    <li><a href="#">Volvo</a></li>
                                </ul>    
                            </div>
                        </div>
                    </div>
                    <div class="grid3" style="border-bottom: 1px solid #f1f1f1">
                        <div class="grid3-item" style="margin-bottom: 20px;">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Fiyat (TL)</p>   
                            <div style="display:flex;"> 
                                <input type="text" id="fiyat-min" name="fiyat-min" placeholder="Min" class="grid3-min">
                                <p style="padding-right: 10px;padding-left: 10px;"> - </p>
                                <input type="text" id="fiyat-max" name="fiyat-max" placeholder="Max" class="grid3-max">
                            </div>
                        </div>
                    </div>
                    <div class="grid4" style="border-bottom: 1px solid #f1f1f1; background-color: #FCF3CF;">
                        <div class="grid4-item" style="margin-bottom: 20px;">
                            <span style="display: flex;">
                                <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold; ">Ödeme Gücüne Göre Ara</p>   
                                <div class="grid3-tooltip" style="padding-top: 10px; padding-left: 30px;">
                                    <i class="bi bi-info-circle"></i>
                                </div>
                                <!-- <span class="grid3-tooltip-text">
                                    <p>Ödeyebileceğiniz peşinatı ve aylık maksimum 
                                        taksit ödeme tutarını girerek bütçenize uygun arabaları listeleyin.</p>
                                </span> -->
                            </span> 
                            
                            <p style="font-size: 14px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Peşinat</p>  
                            <input type="text" name="maxPesinat" placeholder="Maximum Peşinat" style="padding-left: 10px;">
                            <p style="font-size: 14px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Taksit Tutarı</p>  
                            <input type="text" name="maxTaksitTutari" placeholder="Aylık Maksimum Taksit Tutarı" style="padding-left: 10px;">
                        </div>
                    </div>
                    <div class="grid5" style="border-bottom: 1px solid #f1f1f1">
                        <div class="grid5-item" style="margin-bottom: 20px;">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Model Yılı</p>   
                            <div style="display:flex;"> 
                                <input type="text" id="modelYili-min" name="modelYili-min" placeholder="Min" class="grid3-min">
                                <p style="padding-right: 10px;padding-left: 10px;"> - </p>
                                <input type="text" id="modelYili-max" name="modelYili-max" placeholder="Max" class="grid3-max">
                            </div>
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Km</p> 
                            <div style="display:flex;"> 
                                <input type="text" id="km-min" name="km-min" placeholder="Min" class="grid3-min">
                                <p style="padding-right: 10px;padding-left: 10px;"> - </p>
                                <input type="text" id="km-max" name="km-max" placeholder="Max" class="grid3-max">
                            </div>
                        </div>
                    </div>
                    <div class="grid6" style="border-bottom: 1px solid #f1f1f1">
                        <div class="grid6-item" style="margin-bottom: 20px;">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Hasar Durumu</p>  
                            <div class="grid6-checkbox1">
                                <input type="checkbox" id="checkbox1-grid6" name="checkbox1-grid6" value="1">
                                <label for="checkbox1-grid6">Hasar Kaydı yok</label> 
                            </div>
                            <div class="grid6-checkbox2">
                                <input type="checkbox" id="checkbox2-grid6" name="checkbox2-grid6" value="1">
                                <label for="checkbox2-grid6">Boyalı Değişen Parça Yok</label>
                            </div>
                        </div>
                    </div>
                    <div class="grid7" style="border-bottom: 1px solid #f1f1f1">
                        <div class="grid7-item" style="margin-bottom: 20px;">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Vites Tipi</p>  
                            <div class="grid7-checkbox1">
                                <input type="checkbox" id="checkbox1-grid7" name="checkbox1-grid7" value="1">
                                <label for="checkbox1-grid7">Düz Vites</label>
                            <br>
                            </div>
                            <div class="grid7-checkbox2">
                                <input type="checkbox" id="checkbox2-grid7" name="checkbox2-grid7" value="1">
                                <label for="checkbox2-grid7">Otomatik Vites</label>
                            <br>
                            </div>
                            <div class="grid7-checkbox3">
                                <input type="checkbox" id="checkbox3-grid7" name="checkbox3-grid7" value="1">
                                <label for="checkbox3-grid7">Yarı Otomatik Vites</label>
                            </div>
                        </div>
                    </div>
                    <div class="grid8" style="border-bottom: 1px solid #f1f1f1">
                        <div class="grid8-item" style="margin-bottom: 20px;">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Vites Tipi</p>  
                            <div class="grid8-checkbox1">
                                <input type="checkbox" id="checkbox1-grid8" name="checkbox1-grid8" value="1">
                                <label for="checkbox1-grid6">Benzin</label>
                            <br>
                            </div>
                            <div class="grid8-checkbox2">
                                <input type="checkbox" id="checkbox2-grid8" name="checkbox2-grid8" value="1">
                                <label for="checkbox2-grid8">Benzin/LPG</label>
                            <br>
                            </div>
                            <div class="grid8-checkbox3">
                                <input type="checkbox" id="checkbox3-grid8" name="checkbox3-grid8" value="1">
                                <label for="checkbox3-grid8">Dizel</label>
                                <br>
                            </div>
                            <div class="grid8-checkbox4">
                                <input type="checkbox" id="checkbox4-grid8" name="checkbox4-grid8" value="1">
                                <label for="checkbox4-grid8">Elektriks</label>
                                <br>
                            </div>
                            <div class="grid8-checkbox5">
                                <input type="checkbox" id="checkbox5-grid8" name="checkbox5-grid8" value="1">
                                <label for="checkbox5-grid8">Hibrit</label>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="grid9" style="border-bottom: 1px solid #f1f1f1">
                        <div class="grid9-item" style="margin-bottom: 20px;">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Bulunduğu Mağaza</p>  
                            <div class="grid9-checkbox1">
                                <input type="checkbox" id="checkbox1-grid9" name="checkbox1-grid9" value="1">
                                <label for="checkbox1-grid9">İstanbul AVM</label>
                            <br>
                            </div>
                            <div class="grid9-checkbox2">
                                <input type="checkbox" id="checkbox2-grid9" name="checkbox2-grid9" value="1">
                                <label for="checkbox2-grid9">Maltepe Park AVM</label>
                            <br>
                            </div>
                            <div class="grid9-checkbox3">
                                <input type="checkbox" id="checkbox3-grid9" name="checkbox3-grid9" value="1">
                                <label for="checkbox3-grid9">Metrocity AVM</label>
                            </div>
                        </div>
                    </div>
                    <div class="grid10" style="border-bottom: 1px solid #f1f1f1">
                        <div class="dropdown-item1">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Kasa Tipi</p>  
                        </div>
                        <!-- <div class="dropdown-item1-content">
                            <input type="checkbox" id="kasaTipi_1" name="kasaTipi_1" value="Convertible">
                            <label for="kasaTipi_1">Convertible</label>
                        </div> -->
                       
                    </div>
                    <div class="grid11" style="border-bottom: 1px solid #f1f1f1">
                        <div class="dropdown-item2">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Motor Gücü</p>  
                        </div>
                    </div>
                    <div class="grid12" style="border-bottom: 1px solid #f1f1f1">
                        <div class="dropdown-item3">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Motor Hacmi</p>  
                        </div>
                    </div>
                    <div class="grid13" style="border-bottom: 1px solid #f1f1f1">
                        <div class="dropdown-item4">
                            <p style="font-size: 16px; color:#000; margin-bottom: 10px; padding-left: 10px; font-weight: bold ;">Renk</p>  
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <section>
            <div class="right-container">
                <div class="top-header">
                    <h1 style="padding-left: 10px;"><strong>Satılık 2. El Araba Fiyatları</strong></h1>
                </div>
                <div class="right-container-bottom">
                    <div class="right-container-bottom-button">
                        <a href="#" style="cursor: pointer;background-color: #425262; border: 1px solid #425262; color: #fff; padding: 5px;">Tüm Araçlar</a>
                    </div>
                    <div class="right-container-bottom-comboBox">
                        <select name="list-cars" id="list-cars" class="a">
                        <option value="ilan-tarihi">İlan tarihi</option>
                        <option value="model-yılı">Model yılı</option>
                        <option value="km">Km</option>
                        <option value="fiyat">Fiyat</option>
                        </select>
                    </div>
                </div>
                <div class="cars-container">
                    <div class="cars-list">
                        <?php 
                        for($i = 0;$i<$rows;$i++){
                            $car = $cars[$i];
                            $carThumb = explode(",",$car["resim_urls"])[0]; 
                            ?>
                        <div class="cars-list-item">
                            <a href="detay.php?id=<?php echo $car['id']?>" title="2013 Renault Symbol 1.2 Joy - 13908 KM" class="cars-list-container-link">
                                <button class="cars-favorite">
                                    <span class="icon main-icon-heart-outlined"></span>
                                </button>
                                <div class="cars-image-container">
                                    <img alt="<?php echo $car["title"]; ?>" src="images/<?php echo $carThumb; ?>" width="300"></img>
                                </div>
                                <div class="cars-list-detail">
                                    <div class="category-title">
                                        <p class="title"><?php echo $car["title"]; ?></p>
                                        <p class="brand-detail"><?php echo $car["yil"]; ?> Model</p>
                                    </div>
                                    <div class="category-info">
                                        <span><?php echo $car["km"]; ?> Km -  <?php echo $car["yakit"]; ?>-  <?php echo $car["vites"]; ?> Vites</span>
                                    </div>
                                    <div class="category-price">
                                        <p ><?php echo $car["fiyat"]; ?>TL</p>
                                    </div>
                                    <!-- <hr style="width:auto;text-align:left;margin-left:0;height:0.7px;"> -->
                                    <div style="border-bottom: 1px solid #e0e4e7; margin-top: 20px; margin-bottom: 20px;"></div>
                                    <div style="margin-top:5px; color:#000;">
                                        <div class="category-credit">
                                            <div class="category-credit-left" style="display: inline-block;">
                                                <span style="line-height: 25px;">
                                                    <p style="padding: 0px; margin: 0px;"><b>149.984 TL</b>Peşin</p>
                                                    <p style="padding: 0px; margin: 0px;"><b>3.166 TL</b>Taksit</p>
                                                </span>
                                            </div>
                                            <div class="category-credit-right">
                                                <button class="category-credit-button">
                                                    Krediye<br>Başvur
                                                </button>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php }
                        
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

        
        

    </body>
</html>