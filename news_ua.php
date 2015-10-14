<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("news_all_ua.php");
    $indexpage->Display(); 
    $indexpage->delete;   
?>