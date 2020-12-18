<?php 
class Validation {
    public function validator($data){
        $message = "";
        $message .= is_null($data['amount']) ? "amount shouldn't be null. " : (is_numeric($data['amount']) ? '' : 'amount field should be numeric. ');
        $message .= is_null($data['buyer']) ? "buyer should not be null. ": (strlen($data['buyer']) > 20 ? 'buyer field should not be more than 20 chars. ' : '');
        $message .= is_null($data['receipt_id']) ? 'receipt id should not be null. ' : '';
        $message .= is_null($data['items']) ? 'items should not be null. ' : '';
        $message .= is_null($data['buyer_email']) ? 'buyer email should not be null. ' : (filter_var($data['buyer_email'], FILTER_VALIDATE_EMAIL) ? '' : 'Invalid buyer email. ');
        $message .= is_null($data['note']) ? 'note should not be null. ' : (str_word_count($data['buyer_email']) > 30 ? 'note field should not be more than 30 words. ' : '');
        $message .= is_null($data['city']) ? "city should not be null. ": (strlen($data['city']) > 20 ? 'city field should not be more than 20 chars. ' : '');
        $message .= is_null($data['phone']) ? "phone shouldn't be null. " : (is_numeric($data['phone']) ? '' : 'phone field should be numeric. ');
        $message .= is_null($data['entry_by']) ? "entry by shouldn't be null. " : (is_numeric($data['entry_by']) ? '' : 'entry by field should be numeric. ');

        if($message == ""){
            return ['res_code' => 1, 'code'=> 422, 'message' => 'ok'];
        }else{
            return ['res_code' => 0, 'code'=> 200, 'message' => $message];
        }
    }
}