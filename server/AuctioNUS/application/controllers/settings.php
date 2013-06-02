<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function getSettings($userID, $LAPI_key)
	{
        header('Content-Type: application/json');
        $status = "Success";
        $settings = array('$email_id' => "foo@bar",
                          '$phone_no' => "98765432",
                          '$phone_no_visibliblity' => 0,
                          '$transaction_complete_push' => 1,
                          '$bid_updated_email' => 0,
                          '$bid_updated_push' => 1,
                          '$outbid_email' => 0,
                          '$outbid_push' => 1,
                          '$new_bid_email' => 1,
                          '$new_bid_push' => 0);
        $data = array('settings'=>$settings);
         $response = array('status'=>$status, 'data' => $data);
        echo json_encode($response);
	}
    
    public function saveSettings($matric_no, $LAPI_key, $email_id, $phone_no,
                                 $phone_no_visibliblity, $transaction_complete_push,
                                 $bid_updated_email, $bid_updated_push,
                                 $outbid_email, $outbid_push,
                                 $new_bid_email, $new_bid_push)
    {
        header('Content-Type: application/json');
        $status = "Success";
        $response = array('status'=>$status);
        echo json_encode($response);
    }
}