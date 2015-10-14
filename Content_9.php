<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("Content_9_ua.html");
    $indexpage->Display();  
	$indexpage->delete;	
?>