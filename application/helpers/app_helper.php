<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	
    function status_merchant_label($status)
    {
        switch($status){
            case 'pending':
                $label = 'Pending';
                break;
            case 'approve':
                $label = 'Verified';
                break;
            case 'block':
                $label = 'Unverified';
                break;
            default:    
                $label = 'Unknown Status ('.$status.')';
                break;
        }
        
        return $label;
    }
    
    function status_product_label($status)
    {
        switch($status){
            case 0:
                $label = 'Moderasi';
                break;
            case 1:
                $label = 'Verified';
                break;
            case 2:
                $label = 'Un Verified';
                break;
            default:    
                $label = '-';
                break;
        }
        
        return $label;
    }
    
    function status_payment_label($status)
    {
        switch(strtolower($status)){
            case 'done':
                $label = 'Paid';
                break;
            case 'paid':
                $label = 'Paid';
                break;
            case 'canceled':
                $label = 'Canceled';
                break;
            case 'expired':
                $label = 'Expired';
                break;
            default:    
                $label = 'Waiting for Payment';
                break;
        }
        
        return $label;
    }
    
    function status_delivery_label($status)
    {
        switch(strtolower($status)){
            case 'proses pengiriman':
                $label = 'Proses Pengiriman';
                break;
            case 'persiapan pengiriman':
                $label = 'Persiapan Pengiriman';
                break;
            case 'produk telah diterima':
                $label = 'Produk Telah Diterima';
                break;
            case 'proses retur':
                $label = 'Proses Retur';
                break;  
            case 'canceled':
                $label = 'Canceled';
                break;  
            default:    
                $label = '-';
                break;
        }
        
        return $label;
    }
    
	function send_mail($to,$from,$subject,$message)
	{
		$headers = "From: " . strip_tags($from) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($from) . "\r\n";		
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		mail($to, $subject, $message, $headers);
	}
	
	function random_password($length=8) {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < $length; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
    
    /*
        Author  : mdhb2
        Desc    : Get visitor country detail by IP
        @return : array of country details
    */
    function get_visitor_country()
    {
        $ipdb_key   = "b66b39d6f23f63d743304c00afee80254d2fe847240a21f2e598ac0f84f60ef2"; // api key from http://ipinfodb.com
        $ip         = $_SERVER['REMOTE_ADDR'];
        $result     = file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=$ipdb_key&ip=$ip");
        
        $result     = explode(';;',$result);
        $result     = explode(';',$result[1]);
        
        $return     = array('ip'        => $result[0],
                            'country_id'=> $result[1],
                            'country'   => $result[2],
                            'region'    => $result[3],
                            'city'      => $result[4],
                            'lat'       => $result[6],
                            'long'      => $result[7],
                            'timezone'  => $result[8]                            
                            );
        return $return;
    }
    
    
    /*
        Author  : mdhb2
        Desc    : Remove any contact from text (email,phone,BBM)
        @return : string Censored contact replaced with stars
    */
    function remove_contact($string)
    {
        // Remove email address
        $pattern = "/[^@\s]*@[^@\s]*\.[^@\s]*/";
        $replacement = "******";
        $result = preg_replace($pattern, $replacement, $string);
        
        // Remove phone/BBM
        $result = preg_replace('/\+?[0-9][0-9()-\s+]{2,20}[0-9]/', '******', $result);
        
        return $result;    
    }
    
    /*
        Author  : mdhb2
        Desc    : Format angka ke format indonesia (123456 => 123.456)
        @param $int number
        @return : string formated number
    */
    function format_uang($number,$decimal=0)
    {
       return number_format($number,$decimal,",",".");
    }
    