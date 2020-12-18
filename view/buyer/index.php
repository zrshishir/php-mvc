<?php require_once "view/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=buyer-add"><img src="view/image/icon-add.png" />Add buyer</a>
    </div>
    <div>
        <table cellpadding="10" cellspacing="1">
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
                    <th><strong>Entry Date</strong></th>
                    <th><strong>Entry by</strong></th>
                    <th><strong>Action</strong></th>

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