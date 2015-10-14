<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("Content_7_ua.html");
    $indexpage->Display(); 
		$indexpage->delete;
?>