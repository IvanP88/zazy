<?

    function news_all()
        {
                   echo"<div id=\"content_text\">";
                		$news_content = array("news_5_ua.html", "news_4_ua.html", "news_3_ua.html", 
                                                "news_2_ua.html", "news_1_ua.html");
                        echo"<h2>Новини</h2>";
                		foreach($news_content as $ind)
                            {
                                require($ind);
                                echo"<hr width=\"100%\"/>"; 
                            }
        	       echo"</div>"; 
        }
	news_all();
?>