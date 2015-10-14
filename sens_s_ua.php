<?
    include("mark_page.inc");
    $indexpage=new Mark_page();
    $indexpage->SetContent("sens_s_ua_php.php");
    $indexpage->Display();
		$indexpage->delete;
?>