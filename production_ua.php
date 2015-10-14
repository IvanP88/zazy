<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("production_ua.html");
    $indexpage->Display();
		$indexpage->delete;
?>