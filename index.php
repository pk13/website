<?php
    $currentpage = 'index';
    require_once('header.php');
    //mysql_select_db($database_sql, $sql);
?>

<h1>Welcome</h1>
<!-- <img src="images/welcome.jpg" width="100%"> -->

<div class="displaytext">
    This website is currently under construction, however will be finished shortly,... it is fully functional but please forgive any aesthetic mishaps!
</div>
       
<div class="amplifytradingbox grid_8">
    <img src="images/pdf_icon.png" width="32" height="32" alt="Download Amplify Trading" />
    <a href="downloadlatest.php">Download the latest Amplify Trading report </a><?php if(!isset($_SESSION['username'])) { ?>(you must be logged in to do so) <?php } ?>
    | <a href="amplifytrading.php">View all reports</a>
</div>
<div class="clear"></div>

<div id="eventsbox" class="grid_5">
    <h4>Upcoming Events</h4>
    <ul>
        <?php 
        $currentdate = gmdate("Y-m-d");
        mysql_select_db($database_sql, $sql);
        $max = 5;
        $query_Recordset1 = "SELECT * FROM events WHERE `date` >= '$currentdate' ORDER BY `date` LIMIT 0,".$max;
        $Recordset1 = mysql_query($query_Recordset1, $sql) or die(mysql_error());
        $totalRows_Recordset1 = mysql_num_rows($Recordset1);
        if($totalRows_Recordset1 > 0) {
            $i = 0;
            while($row_Recordset1 = mysql_fetch_array($Recordset1)) {
                $i++;
        ?>
            <a href="eventinformation.php?ID=<?php echo $row_Recordset1['ID']; ?>">
                <li class="clearfix <?php if($i == $max) echo 'last'; ?>">
                    <div class="date">
                        <span class="day"><?php echo date("d",strtotime($row_Recordset1['date'])); ?></span> 
                        <span class="month"><?php echo date("M",strtotime($row_Recordset1['date'])); ?></span>
                    </div>
                    <div class="title"><?php echo urldecode($row_Recordset1['title']); ?></div>
                </li>
            </a>
            <?php } ?>
        <?php } else { ?>
            <p><em>No upcoming events.</em></p>
        <?php } ?>
    </ul>
</div>

<?php require_once('footer.php');  ?>
