
        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

       
        
        function validate() {
            var valid = true;   
            $(".demoInputBox").css('background-color','');
            $(".info").html('');
            var amount = $("#amount").val();
            if(!amount) {
                $("#amount-info").html("(required)");
                $("#amount-info").css('color','#FF0000');
                $("#amount").css('background-color','#FFFFDF');
                valid = false;
            }
            if(! $.isNumeric(amount)){
                $("#amount-info").html("(please input a valid number)");
                $("#amount-info").css('color','#FF0000');
                $("#amount").css('background-color','#FFFFDF');
                valid = false;
            }
            if(!amount && ! $.isNumeric(amount)){
                $("#amount-info").html("(required and please input a valid number)");
                $("#amount-info").css('color','#FF0000');
                $("#amount").css('background-color','#FFFFDF');
                valid = false;
            }
            var buyer = $("#buyer").val();
            if(!buyer) {
                $("#buyer-info").html("(required)");
                $("#buyer-info").css('color','#FF0000');
                $("#buyer").css('background-color','#FFFFDF');
                valid = false;
            }
            if(buyer.length > 20){
                $("#buyer-info").html("(Buyer should be at most 20 chars.)");
                $("#buyer-info").css('color','#FF0000');
                $("#buyer").css('background-color','#FFFFDF');
                valid = false;
            }

            var receipt = $("#receipt").val();
            if(!receipt) {
                $("#receipt-info").html("(required)");
                $("#receipt-info").css('color','#FF0000');
                $("#receipt").css('background-color','#FFFFDF');
                valid = false;
            }

            var buyer_email = $("#buyer-email").val();
            
            if(!isEmail(buyer_email)) {
                $("#buyer-email-info").html("(please provide a valid email)");
                $("#buyer-email-info").css('color','#FF0000');
                $("#buyer-email").css('background-color','#FFFFDF');
                valid = false;
            }

            var note = $("#note").val();
            if(!note) {
                $("#note-info").html("(required)");
                $("#note-info").css('color','#FF0000');
                $("#note").css('background-color','#FFFFDF');
                valid = false;
            }
            if(note.length > 30){
                $("#note-info").html("(please keep your note within 30 chars.)");
                $("#note-info").css('color','#FF0000');
                $("#note").css('background-color','#FFFFDF');
                valid = false;
            }

            var items = $("#items").val();
            if(!items) {
                $("#items-info").html("(required)");
                $("#items-info").css('color','#FF0000');
                $("#items").css('background-color','#FFFFDF');
                valid = false;
            }

            var city = $("#city").val();
            if(!city) {
                $("#city-info").html("(required)");
                $("#city-info").css('color','#FF0000');
                $("#city").css('background-color','#FFFFDF');
                valid = false;
            }

            var phone = $("#phone").val();
            if(!phone) {
                $("#phone-info").html("(required)");
                $("#phone-info").css('color','#FF0000');
                $("#phone").css('background-color','#FFFFDF');
                valid = false;
            }
            if(! $.isNumeric(phone)){
                $("#phone-info").html("(Phone no should be just no)");
                $("#phone-info").css('color','#FF0000');
                $("#phone").css('background-color','#FFFFDF');
                valid = false;
            }

            if(phone.indexOf(0) != 0 || phone.length != 11){
                $("#phone-info").html("(phone no should be 11 digit and first digit should be 0)");
                $("#phone-info").css('color','#FF0000');
                $("#phone").css('background-color','#FFFFDF');
                valid = false;
            }

            var entry_by = $("#entry-by").val();
            if(! $.isNumeric(entry_by)){
                $("#entry-by-info").html("(please input a valid number)");
                $("#entry-by-info").css('color','#FF0000');
                $("#entry-by").css('background-color','#FFFFDF');
                valid = false;
            }
            return valid;
        }

        $("#receiptForm").on('submit', function(e){
            e.preventDefault();
            var valid = validate();
            if(valid){
                $.ajax({
                    type: 'post',
                    url: 'api.php',
                    data: $('#receiptForm').serialize(),
                    success: function (response) {
                      if(response.resp_code){
                          $("#validity-message").html(response.message);
                          $("#validity-message").css('color', '#FF0000');
                      }else{
                          $("#validity-message").html(response.message);
                          $("#validity-message").css('color', '#008000');
                          $('#receiptForm').trigger("reset");
                      }
                    }
                  }); 
            }       
            
        });
        $("#resetButton").on('click', function(){
            $("#receiptForm").trigger('reset');
        });

    