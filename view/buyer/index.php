<?php require_once "view/header.php"; ?>
    <div style="text-align: left; margin: 20px 0px 10px; padding-left: 120px;">
        <?php 
            if(isset($_GET['search'])){
               echo '<a id="btnAddAction" href="index.php">back</a>';
            }
        ?>
    </div>
    <div style="padding-left: 120px;">
        <form action="" method="get">
            <div>
                <label style="padding-top: 20px; margin-left: 20px;">User ID</label> 
                <span id="entry_by-info" class="info"></span> 
                <input type="text" name="entry_by" id="entry_by" class="demoInputBox">

                <label style="padding-top: 20px;padding-left:20px;">From</label> 
                <span id="from_date-info" class="info"></span>
                <input type="date" name="from_date" id="from_date" class="demoInputBox">
                
                <label style="padding-top: 20px; margin-left: 20px;">To</label> 
                <span id="to_date-info" class="info"></span> 
                <input type="date" name="to_date" id="to_date" class="demoInputBox">

                <input type="submit" name="search" id="btnSearch" value="Search" />
            </div>
            <div style="margin-left: 20px;" id="validity-message">
                <?php
                    if(isset($validity['resp_code'])){
                        echo $validity['message'] . "<br/>";
                    }
                ?>
            </div>
        </form>
    </div>
    <div style="text-align: right; margin: 20px 0px 10px; padding-right: 300px;">
        <a id="btnAddAction" href="index.php?action=buyer-add">Generate Receipt</a>
    </div>
    <div style="padding-left: 120px;">
        <table border="1" cellpadding="10" cellspacing="1">
            <thead>
                <tr>
                    <th><strong>Serial No</strong></th>
                    <th><strong>Amount</strong></th>
                    <th><strong>Buyer</strong></th>
                    <th><strong>Receipt</strong></th>
                    <th><strong>Items</strong></th>
                    <th><strong>Buyer Email</strong></th>
                    <th><strong>Buyer Ip</strong></th>
                    <th><strong>Note</strong></th>
                    <th><strong>City</strong></th>
                    <th><strong>Phone</strong></th>
                    <th><strong>Hash Key</strong></th>
                    <th><strong>Entry Date</strong></th>
                    <th><strong>Entry by</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $result[$k]["amount"]; ?></td>
                        <td><?php echo $result[$k]["buyer"]; ?></td>
                        <td><?php echo $result[$k]["receipt_id"]; ?></td>
                        <td><?php echo $result[$k]["items"]; ?></td>
                        <td><?php echo $result[$k]["buyer_email"]; ?></td>
                        <td><?php echo $result[$k]["buyer_ip"]; ?></td>
                        <td><?php echo $result[$k]["note"]; ?></td>
                        <td><?php echo $result[$k]["city"]; ?></td>
                        <td><?php echo $result[$k]["phone"]; ?></td>
                        <td><?php echo $result[$k]["hash_key"]; ?></td>
                        <td><?php echo $result[$k]["entry_at"]; ?></td>
                        <td><?php echo $result[$k]["entry_by"]; ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
            <tbody>
        </table>
    </div>
</body>
</html>