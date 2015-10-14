<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("Content_2_ua.html");
    $indexpage->Display();
		$indexpage->delete;
?>