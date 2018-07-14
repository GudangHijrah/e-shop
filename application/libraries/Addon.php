<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addon {

	
	
    public function tanggal_indo($tgl)
    {
	//$tg="00";
	$tgl_explode=explode('-',$tgl);
		if($tgl_explode[1]=='00')$tg="00";
		if($tgl_explode[1]=='01')$tg="Januari";
		if($tgl_explode[1]=='02')$tg="Febuari";
		if($tgl_explode[1]=='03')$tg="Maret";
		if($tgl_explode[1]=='04')$tg="April";
		if($tgl_explode[1]=='05')$tg="Mei";
		if($tgl_explode[1]=='06')$tg="Juni";
		if($tgl_explode[1]=='07')$tg="Juli";
		if($tgl_explode[1]=='08')$tg="Agustus";
		if($tgl_explode[1]=='09')$tg="September";
		if($tgl_explode[1]=='10')$tg="Oktober";
		if($tgl_explode[1]=='11')$tg="November";
		if($tgl_explode[1]=='12')$tg="Desember";
	
		$bulandata=$tg;
		$haridata=$tgl_explode[2];
		$tgldata=$haridata." ".$bulandata." ".$tgl_explode[0];
		return $tgldata;
    }

      public function tanggal_indo_coma($tgl)
    {
	//$tg="00";
	$tgl_explode=explode('-',$tgl);
		if($tgl_explode[1]=='00')$tg="00";
		if($tgl_explode[1]=='01')$tg="Januari";
		if($tgl_explode[1]=='02')$tg="Febuari";
		if($tgl_explode[1]=='03')$tg="Maret";
		if($tgl_explode[1]=='04')$tg="April";
		if($tgl_explode[1]=='05')$tg="Mei";
		if($tgl_explode[1]=='06')$tg="Juni";
		if($tgl_explode[1]=='07')$tg="Juli";
		if($tgl_explode[1]=='08')$tg="Agustus";
		if($tgl_explode[1]=='09')$tg="September";
		if($tgl_explode[1]=='10')$tg="Oktober";
		if($tgl_explode[1]=='11')$tg="November";
		if($tgl_explode[1]=='12')$tg="Desember";
	
		$bulandata=$tg;
		$haridata=$tgl_explode[2];
		$tgldata=$haridata.",".$bulandata.",".$tgl_explode[0];
		return $tgldata;
    }


	public function securepost($post){
	return mysql_escape_string($post);
	
	}
	
	    public function tanggal_indo2($tgl)
    {
	if(!empty($tgl)){
	$tglawal=explode(" ",$tgl);
	
	$tgl_explode=explode("-",$tglawal[0]);
	   if($tgl_explode[1]=='')$tg="";
		if($tgl_explode[1]=='00')$tg="00";
		if($tgl_explode[1]=='01')$tg="Januari";
		if($tgl_explode[1]=='02')$tg="Febuari";
		if($tgl_explode[1]=='03')$tg="Maret";
		if($tgl_explode[1]=='04')$tg="April";
		if($tgl_explode[1]=='05')$tg="Mei";
		if($tgl_explode[1]=='06')$tg="Juni";
		if($tgl_explode[1]=='07')$tg="Juli";
		if($tgl_explode[1]=='08')$tg="Agustus";
		if($tgl_explode[1]=='09')$tg="September";
		if($tgl_explode[1]=='10')$tg="Oktober";
		if($tgl_explode[1]=='11')$tg="November";
		if($tgl_explode[1]=='12')$tg="Desember";
		
		$bulandata=$tg;
		$haridata=$tgl_explode[2];
		$tgldata=$haridata." ".$bulandata." ".$tgl_explode[0]. " ".$tglawal[1];
		return $tgldata;
		}else return $tgl;
    }

	
	public function uang_indo($uang){
	$uang="Rp.".number_format($uang,0,0,".");
	return $uang;
	}
	
	public function thumbs($dir,$img, $wt, $ht, $resize)
	{
	$file=$dir.$img;

	$th_file=$dir."thumbs/th_".$img;

	list($wi, $hi, $type, $attr) = @getimagesize($file);
	list($th_w, $th_h) = @getimagesize($th_file);
	
	if(!is_dir($dir."thumbs/"))	mkdir($dir."thumbs/");	
	
    	switch($type)
		{
			case 1: $im = @imagecreatefromgif($file);  $ext="@imagegif(\$new, \$th_file);"; break;
			case 2: $im = @imagecreatefromjpeg($file); $ext="@imagejpeg(\$new, \$th_file , 100);"; break;
			case 3: $im = @imagecreatefrompng($file); $ext="@imagepng(\$new, \$th_file);"; break;
		}
		
		if($wi<$hi)			$wt=($ht/$hi)*$wi;
		elseif ($wi>$hi)	$ht=($wt/$wi)*$hi;
		
		if($type!=1)
		{
			$new = imagecreatetruecolor($wt,$ht);
			imagecopyresampled($new , $im , 0 , 0 , 0 , 0 , $wt , $ht , $wi , $hi);
		}
		else
		{
			$new = imagecreate($wt,$ht);
			imagecopyresized($new , $im , 0 , 0 , 0 , 0, $wt , $ht , $wi , $hi);
		}
		
		eval($ext);
		@imagedestroy($im);
		@imagedestroy($new);
	}
	

	function encrypt($string) {
	   $output = false;

	   $key = '28999AJJJDKalllaskdakkTukangjualan';

   // initialization vector 
	   $iv = md5(md5($key));


       $output = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, $iv);
       $output = base64_encode($output);
   
   		return $output;
}
 
function decrypt($string) {
   		$output = false;
		$key = '28999AJJJDKalllaskdakkTukangjualan';
   		

   // initialization vector 
	   $iv = md5(md5($key));

       $output = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, $iv);
       $output = rtrim($output, "");
   
   	return $output;
}	
}