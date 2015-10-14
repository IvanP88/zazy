<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("home_ua.php");
    $indexpage->Display();    
    $indexpage->delete;
?>