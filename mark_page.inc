<?
    //require("models_car.inc");
    class Mark_page
        {
            var $content;
            var $title = "ZAZ";
            var $status;
           
            function SetContent($newcontent)
                {
                    $this->content = $newcontent;
                }
            function SetTitle($newtitle)
                {
                    $this->title = $newtitle;
                }
            function SetStatus($newStatus)
                {
                    $this->status = $newStatus;
                }
            function Display_models_cars($title, $image, $table_file, $link_file)
                {
                    $size_file;
                    @ $fp = fopen("$link_file", "a");
                 		 $size_file=filesize("$link_file")/1000;
                                            			
                   	fclose($fp);
                                                
                    echo "<div class=\"lines\">";
                        echo "<h2>Технічні характеристики ЗАЗ$title</h2>";
                        echo "<img class=\"news_img\"  alt=\"$title\" src=\"$image\">";
                        
                        echo "<br/><br/>";
                        echo "
                            <div class=\"files\">
                            <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                            <tbody>
                                        <tr>
                                    <td class=\"files_icon\">
                                        <img height=\"34\" width=\"34\"  src=\"my_Website/pdf.png\">
                                    </td>
                                    <td class=\"files_link\"><a href=\"$link_file\">Технічні характеристики та комплектації</a></td>
                                        <td class=\"files_size\">
                                        $size_file Кб   
                                    </td>
                                    </tr>
                                </tbody></table>
                            </div>
                            ";
                    echo "</div>";
                }    
            function Display()
                {
										echo"<!DOCETYPE HTML>";
                   echo "<html>\n<head>\n";
										$this->DisplayTitle();
										$this->DisplayStyles();
                   
										echo "</head>\n<body>\n";
										require("analyticstracking.php");
											echo "<div id=\"main\">";
												$this->DisplayHeader();
													echo "<div id=\"middle\">";
														$this->DisplayMenuLeft();
                                                            echo "<div id=\"content\" class=\"boxShadow\">";
                                                                if($this->status=="models_cars")
                                                                    {
                                                                       $this->Display_models_cars("Forza хетчбек", "my_Website/74_main.jpg", "", "file_download/ZAZ_Forza.pdf"); 
                                                                    }
                                                                    else    {require("$this->content");}
                                                                
                                                                $this->DisplayFooter();
                                                            echo "</div>";    
                                                        
                                                        $this->DisplayMenuRight();
													echo "</div>";
														
														
											echo "</div>";
                  echo "</body>\n</html>\n"; 
                } 
                function DisplayTitle()
                    {
                         echo "<title>$this->title</title>";
                    }
                function DisplayKeywords()
                    {
                         echo "<meta name=\"keywords\"  content=\"$this->keywords\">";
                    }
                function DisplayStyles()
                    {                        
				        require("style_.inc");
                    }
                function DisplayHeader() 
                    {
                      require("head.php");  
                    } 
                function DisplayMenuLeft() 
                    {
                       require("menu_left.php");
                       DisplayNewCars();  
                    } 
                function DisplayMenuRight() 
                    {
                       require("menu_right.php");
                       DisplayAdvertisement();   
                    }
            
            function DisplayFooter ()
                {
                    require("footer.php");                
                }
                        
         }
?>