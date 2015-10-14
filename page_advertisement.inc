<?	
    
            
            
						//var $content=array ({""}, {""}, {""}, {""} ,{""});
           
            function count_content()
                {
                    
                    return count($this->image_);
                }
            
            function Display2()
                {		
									 $image     =array( "http://www.mil.in.ua/images/banners/knopka.gif",
                                    "ImagesAdvertisement/4032611_0.jpg", 
                                    "ImagesAdvertisement/4037198_0.jpg", 
                                    "ImagesAdvertisement/opel-frontera-23-turbo-diesel.jpg");
             $href_      =array("http://www.mil.in.ua/",
                                    "http://avtobazar.infocar.ua/car/poltavskaya-oblast/kremenchug/zaz/tavria-1102/hatchback-1994-578028.html", 
                                    "http://avtobazar.infocar.ua/car/dnepropetrovskaya-oblast/dnepropetrovsk/zaz/slavuta-1103/liftback-2004-578512.html",
                                    "http://avtobazar.infocar.ua/car/dnepropetrovskaya-oblast/dnepropetrovsk/zaz/slavuta-1103/liftback-2004-578512.html");
             $hiper_link_=array("", "ЗАЗ 1102 Таврия 1994", "ЗАЗ 1103 Славута 2004", "Opel Frontera 2.3 turbo diesel 1994");
             $title_     =array("", "ЗАЗ 1102 Таврия 1994", "ЗАЗ 1103 Славута 2004", "Opel Frontera 2.3 turbo diesel 1994");
             $alt_       =array("Український мілітарний портал", "ЗАЗ 1102 Таврия 1994", "ЗАЗ 1103 Славута 2004", "Opel Frontera 2.3 turbo diesel 1994");
                    
                    echo"<div id=\"right1\">";
                        echo "<div class=\"content_R\">";
												
                           for($i=0; $i<4; $i++) 
                            {
															echo" <a href='$href_[0]'
																			 title='$title_[$i]'>
															 <img class='car2' 
																								src='$image[$i]' 
																								alt='$alt_[$i]'>
																						 <br/>
															 <font>$hiper_link_[$i]</font>
															 
																				</a>
																				
																			<p/>";  
                            }
                        echo "</div>";
                    echo "</div>";
                } 
                       
           
?>