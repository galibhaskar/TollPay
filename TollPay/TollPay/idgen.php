<?php
session_start();
/**
 * @param int $no_of_codes
 * @param array $exclude_codes_array
 * @param int $code_length
 * @return array 
 */
function generate_promotion_code($no_of_codes,$exclude_codes_array='',$code_length = 4)
{
    $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 
    $promotion_codes = array();
    for($j = 0 ; $j < $no_of_codes; $j++)
    {
        $code = ""; 
        for ($i = 0; $i < $code_length; $i++) 
        {
            $code .= $characters[mt_rand(0, strlen($characters)-1)];
        }
         
        if(!in_array($code,$promotion_codes))
        {
            if(is_array($exclude_codes_array))
            {
                if(!in_array($code,$exclude_codes_array))
                {
                    $promotion_codes[$j] = $code;
                }
                else
                {
                    $j--;       
                }   
            }   
            else
            {
                $promotion_codes[$j] = $code;
            }
        }
        else
        {
            $j--;   
        }
    }
    return $promotion_codes;    
}
$list=generate_promotion_code(1,'',10);
$_SESSION['teamid']=$list[0];
header('location:qr.php');
?>