<?
    function DisplayNewCars()
    {        
        $href1 = array("vida_s_ua.php", 
                        "forza_s_ua.php", 
                        "sens_s_ua.php", 
                        "lanos_s_ua.php", 
                        "lanos_pic_ua.php"
                        );
        $alt1 = array("ЗАЗ VIDA", 
                        "ЗАЗ Forza", 
                        "ЗАЗ sens", 
                        "ЗАЗ Lanos", 
                        "ЗАЗ Lanos-пікап"
                        );
        $src1 = array("my_Website/75_tn.png", 
                        "my_Website/79_tn.png", 
                        "my_Website/81_tn.png", 
                        "my_Website/85_tn.png", 
                        "my_Website/88_tn.png"
                        );
        $href2 = array("vida_h_ua.php", 
                        "forza_h_ua.php", 
                        "sens_h_ua.php", 
                        "lanos_h_ua.php",                         
                        "");
        $alt2 = array("ЗАЗ VIDA", 
                        "ЗАЗ Forza", 
                        "ЗАЗ sens", 
                        "ЗАЗ Lanos",                         
                        "");
        $src2 = array("my_Website/vida_h_png.png", 
                        "my_Website/80_tn.png", 
                        "my_Website/sens_h.png", 
                        "my_Website/86_tn.png",                         
                        "");
        
        $models= array("Vida", "Forza", "Sens", "Lanos", "Lanos-pickap");
        
        $number=count($models);
        
        echo"<div id=\"left1\">";
       // <!-- Begin ******************* Ліве Меню ********************************** -->
        
            echo "<div class=\"left_menu\">";
                echo "<div id=\"left_menu_posit\">";
                    for($i=0; $i<$number; $i++)
                        {
                            echo"
                            <div class=\"models_item_image\">
                                 <a href=\"$href1[$i]\"  >
								    <img class=\"model_image\"  width=\"95\" alt=\"$alt1[$i]\" src=\"$src1[$i]\">
							     </a>
                                 ";
                                 if($href2[$i]!="")
                                    {
                                       echo" 
                                         <a href=\"$href2[$i]\"  >
        								    <img class=\"model_image2\"  width=\"95\"  alt=\"$alt2[$i]\" src=\"$src2[$i]\">
        							     </a> 
                                         ";  
                                    }
                                    else{echo "</br></br></br></br>";}
    							     
                            echo "    
                            </div>
                            <div align=center> 
								<font color=blue>$models[$i]</font></br></br>
	                        </div>
                                    ";
                            
                        }
                echo "</div>";
            echo "</div>";
        echo"</div>";
    }
?>