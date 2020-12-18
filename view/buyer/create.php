<?php require_once "view/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">Amount</label> 
        <span id="amount-info" class="info"></span><br /> 
        <input type="text" name="amount" id="amount" class="demoInputBox">
    </div>

     <div>
        <label style="padding-top: 20px;">Buyer Name</label> 
        <span id="buyer-info" class="info"></span><br /> 
        <input type="text" name="buyer" id="buyer" class="demoInputBox">
    </div>

    <div>
        <label style="padding-top: 20px;">Receipt ID</label> 
        <span id="receipt-info" class="info"></span><br /> 
        <input type="text" name="receipt_id" id="receipt" class="demoInputBox">
    </div>

    <div>
        <label style="padding-top: 20px;">Items</label> 
        <span id="items-info" class="info"></span><br /> 
        <input type="text" name="items" id="items" class="demoInputBox">
    </div>

    <div>
        <label style="padding-top: 20px;">Buyer Email</label> 
        <span id="buyer-email-info" class="info"></span><br /> 
        <input type="text" name="buyer_email" id="buyer-email" class="demoInputBox">
    </div>

    <div>
        <label style="padding-top: 20px;">Buyer IP</label> 
        <span id="buyer-ip-info" class="info"></span><br /> 
        <input type="text" name="buyer_ip" id="buyer-ip" class="demoInputBox">
    </div>

    <div>
        <label style="padding-top: 20px;">Note</label> 
        <span id="note-info" class="info"></span><br /> 
        <input type="text" name="note" id="note" class="demoInputBox">
    </div>

    <div>
        <label style="padding-top: 20px;">City</label> 
        <span id="city-info" class="info"></span><br /> 
        <input type="text" name="city" id="city" class="demoInputBox">
    </div>

    <div>
        <label style="padding-top: 20px;">Phone</label> 
        <span id="phone-info" class="info"></span><br /> 
        <input type="text" name="phone" id="phone" class="demoInputBox">
    </div>

    <div>
        <label style="padding-top: 20px;">Entry At</label> 
        <span id="entry-at-info" class="info"></span><br /> 
        <input type="text" name="entry_at" id="entry-at" class="demoInputBox">
    </div>

    <div>
        <label style="padding-top: 20px;">Entry By</label> 
        <span id="entry-by-info" class="info"></span><br /> 
        <input type="text" name="entry_by" id="entry-by" class="demoInputBox">
    </div>
    
    <div>
        <input type="submit" name="add" id="btnSubmit" value="Add" />
    </div>
    </div>
</form>
</body>
</html>