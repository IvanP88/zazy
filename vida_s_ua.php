<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("vida_s_ua_php.php");
    $indexpage->Display();
		$indexpage->delete;
?>