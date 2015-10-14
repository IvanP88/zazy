<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("credit_ua.html");
    $indexpage->Display();  
		$indexpage->delete;
?>