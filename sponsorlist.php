<div class="sponsorbox grid_12">
    <h4>Platinum Sponsors</h4>
    <ul class="clearfix">
        <?php $pcount = 0; do { $pcount++; ?>
            <li><a href="sponsordetail.php?ID=<?php echo $row_platinumsponsors['ID']; ?>"><img src="sponsorlogos/<?php echo $row_platinumsponsors['logo']; ?>thumb" width="100" alt="" /></a></li><?php if($pcount == 2) { $pcount = 0; } ?>
        <?php } while ($row_platinumsponsors = mysql_fetch_assoc($platinumsponsors)); ?>
    </ul>
</div>
<div class="sponsorbox grid_12">
    <h4>Gold Sponsors</h4>
    <ul class="clearfix">
        <?php do { ?>
            <li><a href="sponsordetail.php?ID=<?php echo $row_goldsponsors['ID']; ?>"><img src="sponsorlogos/<?php echo $row_goldsponsors['logo']; ?>thumb" width="100" alt="" /></a></li>
        <?php } while ($row_goldsponsors = mysql_fetch_assoc($goldsponsors)); ?>
    </ul>
</div>
<div class="sponsorbox grid_12">
    <h4>Silver Sponsors</h4>
    <ul class="clearfix">
        <?php
            mysql_select_db($database_sql, $sql);
            $query_silversponsors = "SELECT * FROM sponsors WHERE type = 'silver' ORDER BY name ASC";
            $silversponsors = mysql_query($query_silversponsors, $sql) or die(mysql_error());
            $row_silversponsors = mysql_fetch_assoc($silversponsors);
            $totalRows_silversponsors = mysql_num_rows($silversponsors);
            do { ?>
                <li><a href="sponsordetail.php?ID=<?php echo $row_silversponsors['ID']; ?>"><img src="sponsorlogos/<?php echo $row_silversponsors['logo']; ?>thumb" width="100" alt="" /></a></li>
        <?php } while ($row_silversponsors = mysql_fetch_assoc($silversponsors)); ?>
    </ul>
</div>
<div class="sponsorbox grid_12">
    <h4>Partners</h4>
    <ul class="clearfix">
        <?php do { ?>
                <li><a href="sponsordetail.php?ID=<?php echo $row_learningsponsors['ID']; ?>"><img src="sponsorlogos/<?php echo $row_learningsponsors['logo']; ?>thumb" width="100" alt="" /></a></li>
        <?php } while ($row_learningsponsors = mysql_fetch_assoc($learningsponsors)); ?>
    </ul>
</div>
