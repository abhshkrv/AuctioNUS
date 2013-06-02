<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transactions extends CI_Controller {


	public function listTransactions()
	{
        header('Content-Type: application/json');
        $status = "success";
        $testTransaction1 = array('transactionID'=>1, 
                                'title'=>"Mastering Physics", 
                                'author'=>"Searns and Zemansky",
                                'publisher' => "McGraw-Hill",
                                'isbn' => "ISBN 978-0-300-14424-6",
                                'price' => "50$",
                                'closing_date' => "2013/06/26 07:15:00",
                                'imageUrl' => 'http://4.bp.blogspot.com/-YjGyMTdrfWo/USeqcyyg1uI/AAAAAAAAAJE/YT_GMYeGI6I/s1600/University-Physics-with-Modern-Physics-Young-Hugh-D-9780321696861.jpg',
                                'transaction_type' => "Auction");
        $testTransaction2 = array('transactionID'=>2, 
                                'title'=>"Mastering Chemistry", 
                                'author'=>"Jim and Bob",
                                'publisher' => "Henmans-Hill",
                                'isbn' => "ISBN 978-2-342-51472-6",
                                'price' => "80$",
                                'closing_date' => "2013/07/16 17:35:00",
                                'imageUrl' => 'http://4.bp.blogspot.com/-YjGyMTdrfWo/USeqcyyg1uI/AAAAAAAAAJE/YT_GMYeGI6I/s1600/University-Physics-with-Modern-Physics-Young-Hugh-D-9780321696861.jpg',
                                'transaction_type' => "Deal");
        $testTransaction3 = array('transactionID'=>3, 
                                'title'=>"Mastering Math", 
                                'author'=>"TRS",
                                'publisher' => "X and Y Publishers",
                                'isbn' => "ISBN 918-0-303-14524-3",
                                'price' => "24$",
                                'closing_date' => "2013/07/16 23:15:00",
                                'imageUrl' => 'http://4.bp.blogspot.com/-YjGyMTdrfWo/USeqcyyg1uI/AAAAAAAAAJE/YT_GMYeGI6I/s1600/University-Physics-with-Modern-Physics-Young-Hugh-D-9780321696861.jpg',
                                'transaction_type' => "Auction");
        $testTransaction4 = array('transactionID'=>34, 
                                'title'=>"Mastering Physics", 
                                'author'=>"Searns and Zemansky",
                                'publisher' => "McGraw-Hill",
                                'isbn' => "ISBN 978-0-300-14424-6",
                                'price' => "50$",
                                'closing_date' => "2013/06/26 07:15:00",
                                'imageUrl' => 'http://4.bp.blogspot.com/-YjGyMTdrfWo/USeqcyyg1uI/AAAAAAAAAJE/YT_GMYeGI6I/s1600/University-Physics-with-Modern-Physics-Young-Hugh-D-9780321696861.jpg',
                                'transaction_type' => "Auction");
        $testTransaction5 = array('transactionID'=>55, 
                                'title'=>"Mastering Chemistry", 
                                'author'=>"Jim and Bob",
                                'publisher' => "Henmans-Hill",
                                'isbn' => "ISBN 978-2-342-51472-6",
                                'price' => "80$",
                                'closing_date' => "2013/07/16 17:35:00",
                                'imageUrl' => 'http://4.bp.blogspot.com/-YjGyMTdrfWo/USeqcyyg1uI/AAAAAAAAAJE/YT_GMYeGI6I/s1600/University-Physics-with-Modern-Physics-Young-Hugh-D-9780321696861.jpg',
                                'transaction_type' => "Auction");
        $testTransaction6 = array('transactionID'=>73, 
                                'title'=>"Mastering Math", 
                                'author'=>"TRS",
                                'publisher' => "X and Y Publishers",
                                'isbn' => "ISBN 918-0-303-14524-3",
                                'price' => "24$",
                                'closing_date' => "2013/07/16 23:15:00",
                                'imageUrl' => 'http://4.bp.blogspot.com/-YjGyMTdrfWo/USeqcyyg1uI/AAAAAAAAAJE/YT_GMYeGI6I/s1600/University-Physics-with-Modern-Physics-Young-Hugh-D-9780321696861.jpg',
                                'transaction_type' => "Deal");
                                
        $transactions = array($testTransaction1, $testTransaction2, $testTransaction3, 
                            $testTransaction4, $testTransaction5, $testTransaction6);
        $data = array('transactions'=>$transactions);
        $response = array('status'=>$status, 'data' => $data);
		echo json_encode($response);
	}
    
    public function getTransaction($transaction_id)
    {
        $status = "Success";
        $testTransaction1 = array('transactionID'=>$transaction_id, 
                                'title'=>"Mastering Physics", 
                                'author'=>"Searns and Zemansky",
                                'publisher' => "McGraw-Hill",
                                'isbn' => "ISBN 978-0-300-14424-6",
                                'price' => "70$",
                                'closing_date' => "2013/06/26 07:15:00",
                                'imageUrl' => 'http://4.bp.blogspot.com/-YjGyMTdrfWo/USeqcyyg1uI/AAAAAAAAAJE/YT_GMYeGI6I/s1600/University-Physics-with-Modern-Physics-Young-Hugh-D-9780321696861.jpg',
                                'transaction_type' => "Auction");
        $data = array('transaction'=>$testTransaction1);
        $response = array('status'=>$status, 'data' => $data);
        echo json_encode($response);
    }
    
    public function sell($matric_number,$LAPI, $title, $author,
                        $publisher, $isbn, $price, $closing_date, 
                        $image, $transaction_type)
    {
        $status = "Success";
        $response = array('status'=>$status);
        echo json_encode($response);
    }
}
