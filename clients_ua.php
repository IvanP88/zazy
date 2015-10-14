<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("clients_ua.html");
    $indexpage->Display(); 
	$indexpage->delete;	
?>