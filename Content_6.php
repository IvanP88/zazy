<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("Content_6_ua.html");
    $indexpage->Display();
		$indexpage->delete;
?>