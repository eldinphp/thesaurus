<?php
class Palindrome
{
    public static function isPalindrome($word){
		

        if(strtolower(implode(array_reverse(str_split($word)))) == strtolower($word)){
            //I have used strtolower so it's not case sensitive
            return "true";
			//it is a palindrome
        }else{
			
			return "false";
			//it is not a palindrome
		}

    }
}
$word = "madam";
if (Palindrome::isPalindrome($word)){
	
	echo "Yes, the word " . $word . " is a palindrome.";
	
}else{
	
	echo "No, the word " . $word . " is NOT a palindrome.";
	
}


?>