<?
        function Display_models_cars($title, $image, $table_file, $link_file, $reference_pdf, $unit)
        {
            
            $size_file;
            @ $fp = fopen("$link_file", "a");
                if(!$fp)
    			{
    				echo "<Your order could not be processed at this time.<br/>
    				Please try again later .";
    				exit();
    			}
                    
         		     $size_file=filesize("$link_file")/1000;
                                    			
           	fclose($fp);
            
            @ $fp = fopen("$table_file", "a");
                if(!$fp)
    			{
    				echo "<Your order could not be processed at this time.<br/>
    				Please try again later .";
    				exit();
    			}
                    
		      $table_ = file("$table_file");
              $order_of_numbers = count($table_);
                                    			
           	fclose($fp);
            
                                        
            echo "<div class=\"lines\">";
                echo "<h2>$title</h2>";
                echo "<img class=\"news_img\"  alt=\"$title\" src=\"$image\">";
                
                echo "<br/><br/>";
                    echo "<div class=\"table\">";
            			echo "<table border=0 >";
            			
            							for($i=0; $i<$order_of_numbers; $i++)
            								{
            									//разбиение каждой строки
            									$line = explode("\t", $table_[$i]);
            									//сохранение только количества заказанных товаров
            									
            									//вывод каждого заказа
            									echo "<tr>";
                                                    if($line[1]=="")
                                                        {
                                                          echo "<th align='center' colspan=\"1\"><strong>$line[0]</strong></th>";  
                                                        }  
                                                     else
                                                     {
                                                        echo "<td >$line[0]</td>";
                                                     }       
                                                echo "            
    														<td align=right>$line[1]</td>
    														<td align=right>$line[2]</td>
    														<td align=right>$line[3]</td>
    														<td align=right>$line[4]</td>
    														<td>$line[5]</td>
                                                        ";
      											echo "</tr>";	
            								}
                      echo "</div>"; 
                      echo "
                        <div class=\"files\">
                        <table width=\"100%\" >
                        <tbody>
                                    <tr>
                                <td class=\"files_icon\">
                                    <img height=\"34\" width=\"34\"  src=\"my_Website/pdf.png\">
                                </td>
                                <td class=\"files_link\"><a href=\"$link_file\">$reference_pdf</a></td>
                                    <td class=\"files_size\" >
                                    
                                    <font >$size_file $unit</font>   
                                </td>
                                </tr>
                            </tbody></table>
                        </div>
                        ";      
            echo "</div>";
            
            
        }
?>