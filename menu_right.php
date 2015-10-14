<?      
    function DisplayAdvertisement()
        {
			 $image     =array( "ImagesAdvertisement/knopka.gif",
                                    "ImagesAdvertisement/4032611_0.jpg", 
                                    "ImagesAdvertisement/4037198_0.jpg", 
                                    "ImagesAdvertisement/opel-frontera-23-turbo-diesel.jpg",
                                    "ImagesAdvertisement/skoda-octavia-1.t.jpg",
                                    "ImagesAdvertisement/audi-100-1.t.jpg",
                                    "ImagesAdvertisement/bmw-520-1.t.jpg",
                                    "ImagesAdvertisement/volkswagen-golf-3-1.t.jpg",
                                    "ImagesAdvertisement/land-rover-range-rover-2.t.jpg");
             $href_      =array("http://www.mil.in.ua/",
                                    "http://avtobazar.infocar.ua/car/poltavskaya-oblast/kremenchug/zaz/tavria-1102/hatchback-1994-578028.html", 
                                    "http://avtobazar.infocar.ua/car/dnepropetrovskaya-oblast/dnepropetrovsk/zaz/slavuta-1103/liftback-2004-578512.html",
                                    "http://avtobazar.infocar.ua/car/dnepropetrovskaya-oblast/dnepropetrovsk/zaz/slavuta-1103/liftback-2004-578512.html",
                                    "http://www.ss.ua/msg/uk/transport/cars/skoda/octavia/eghkp.html",
                                    "http://www.ss.ua/msg/uk/transport/cars/audi/100/ambod.html",
                                    "http://www.ss.ua/msg/uk/transport/cars/bmw/520/ainff.html",
                                    "http://www.ss.ua/msg/uk/transport/cars/volkswagen/golf-3/efolp.html",
                                    "http://www.ss.ua/msg/uk/transport/cars/land-rover/range-rover/aghjg.html");
             $hiper_link_=array("", 
                                "ЗАЗ 1102 Таврия 1994", 
                                "ЗАЗ 1103 Славута 2004", 
                                "Opel Frontera 2.3 turbo diesel 1994",
                                "Skoda Octavia 2007 1.9D",
                                "Audi 100 1985 2.0",
                                "BMW 520 1994 2.0",
                                "Volkswagen Golf 3 1997 1.9D",
                                "Land Rover 05 2006 4.2");
             $title_     =array("Український мілітарний портал", 
                                "ЗАЗ 1102 Таврия 1994", 
                                "ЗАЗ 1103 Славута 2004", 
                                "Opel Frontera 2.3 turbo diesel 1994",
                                "Skoda Octavia 2007 1.9D",
                                "Audi 100 1985 2.0",
                                "BMW 520 1994 2.0",
                                "Volkswagen Golf 3 1997 1.9D",
                                "Land Rover 05 2006 4.2");
             $alt_       =array("Український мілітарний портал", 
                                "ЗАЗ 1102 Таврия 1994", 
                                "ЗАЗ 1103 Славута 2004", 
                                "Opel Frontera 2.3 turbo diesel 1994",
                                "Skoda Octavia 2007 1.9D",
                                "Audi 100 1985 2.0",
                                "BMW 520 1994 2.0",
                                "Volkswagen Golf 3 1997 1.9D",
                                "Land Rover 05 2006 4.2");
                        $numbrs_=array("1", "2", "3", "4", "5", "6", "7", "8" );        
                        shuffle($numbrs_);
                    
                    echo"<div id=\"right1\">";
                        echo "<div class=\"content_R\">";
													//$count_cont=count($image);
                                                    $count_cont=5;
								$first_charity=0;
                           for($i=0; $i<$count_cont; $i++) 
                            {
                                if($first_charity==0)
                                    {
                                      $k=0;
                                      $first_charity=1;  
                                    }
                                else{$k=$numbrs_[$i];}
				                echo" <a href='$href_[$k]'
												 title='$title_[$k]'>
												 <img class='car2' 
													src='$image[$k]' 
													alt='$alt_[$k]'>
												 <br/>
												 <font>$hiper_link_[$k]</font>
				                    </a>
														<p/>";  
                            }
                        echo "</div>";
                    echo "</div>";
        } 
?>