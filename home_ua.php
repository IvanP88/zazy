<?
            function DispleyHome()
                {
                    $href= array("Content_7.php",
                                    "Content_8.php",
                                    "Content_9.php",
                                    "Content_1.php",
                                    "Content_2.php",
                                    "Content_3.php",
                                    "Content_4.php",
                                    "Content_5.php",
                                    "Content_6.php"
                                    );
                    $alt=  array("Фантастичні 15% знижки",
                                    "Вигода на автомобілі ЗАЗ",
                                    "Pick-up заробляє для Вас",
                                    "Святкуй день свого міста разом із ЗАЗ!",
                                    "клуб «Lanos Clan»",
                                    "Реальний ЗАЗпродаж",
                                    "Pick-up із новими опціями",
                                    "Доступний сервіс",
                                    "Розпродаж ЗАЗ"
                                    );
                    $src=  array("Images_Content/zaz_spring2015_web_y_1.jpg",
                                    "Images_Content/10000web_big1.jpg",
                                    "Images_Content/86_tn.jpg",
                                    "my_Website/83_tn(1).png",
                                    "my_Website/79_tn.jpg",
                                    "my_Website/77_tn.jpg",
                                    "my_Website/74_tn.jpg",
                                    "my_Website/72_tn.jpg",
                                    "my_Website/67_tn.jpg"
                                    );
                    $text= array("Фантастичні 15% знижки на автомобілі ZAZ",
                                    "Вигода на автомобілі ЗАЗ складає до 10 000* грн.!",
                                    "ЗАЗ Lanos Pick-up заробляє для Вас. Вигода при купівлі - 5 850* грн.",
                                    "Святкуй день свого міста разом із ЗАЗ!",
                                    "Lanos об'єднує серця! За доброю традицією автолюбителі Lanos в черговий раз зібралис...",
                                    "Реальний ЗАЗпродаж розпочато. Знижка на автомобілі ЗАЗ 10 000*  грн!",
                                    "ЗАЗ Lanos Pick-up у продажу із новими опціями",
                                    "Доступний сервіс для постгарантійних автомобілів ЗАЗ",
                                    "«Чув? Бачив?» Розпродаж ЗАЗ із вигодою!*"
                                    );
                    $text_link=array("З 21 квітня 2015 на весь модельний ряд ZAZ ціни знижені на 15%,  до 41910* грн...",
                                    "У вересні 2014 р. придбати автомобіль ЗАЗ все так само вигідно!..",
                                    "Комерційний автомобіль ЗАЗ Lanos Pick-up з вигодою до 5 850 грн...",
                                    "У рамках святкування Дня міста впродовж квітня-жовтня 2014 року у містах України про...",
                                    "Lanos об'єднує серця! За доброю традицією автолюбителі Lanos в черговий раз зібралис...",
                                    "Першого літнього місяця придбати автомобіль ЗАЗ стає реально вигідніше – на 10...",
                                    "Модифікації автомобілю ЗАЗ&nbsp;      Lanos      &nbsp;      Pick      -      up   ...",
                                    "Із 7 квітня по 31 грудня 2014 року в мережі сервісних станцій Корпорації УкрАВТО діє...",
                                    "Офіційний дистриб’ютор автомобілів ЗАЗ в Україні – Філія «АвтоЗАЗ-..."
                                    ); 
                            
                    $count_cont = count($href);
                    echo "<div class=\"lines\">
                            <font size=6>&nbsp;&nbsp;Акції</font>";
                        echo "<div class=\"lines_in\">";
                            for($i=0; $i<$count_cont; $i++)
                                {
                                echo "<div class=\"lines_item_hots\">";
                                    echo "<a href=\"$href[$i]\"><img class=\"lines_item_image\" alt=\"$alt[$i]\" src=\"$src[$i]\"></a>";
                                    echo "<div class=\"lines_item_in\">";
                                        echo "<div class=\"lines_item_h\">$text[$i]</div>";
                                        echo "<div class=\"lines_item_link\"><a href=\"$href[$i]\">$text_link[$i]</a></div>";
                                    echo "</div>";
                                echo "</div>";
                                }
                        echo "</div>";    
                    echo "</div>";
                } 
                DispleyHome();
?>