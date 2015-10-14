<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("Content_1_ua.html");
    $indexpage->Display();
	$indexpage->delete();	
?>