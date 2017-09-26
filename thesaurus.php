<?php
class Thesaurus
{
    public $thesaurus;
	
		
    function Thesaurus($thesaurus)
    {
       $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word)
    {
		//checks if word (for example "big") exists as a key in the array
		if (array_key_exists($word, $this->thesaurus)){
     
		$output = "{\"word\":\"{$word}\",\"synonyms\":[";

			for($i=0; $i<(count($this->thesaurus[$word])-1); $i++){
				
			
				$output .= "\"" . ($this->thesaurus[$word][$i]) . "\", ";
				//adds array values (not keys) to the output
			}
			
			$output .= "\"" . $this->thesaurus[$word][(count($this->thesaurus[$word]))-1]  . "\"";
			
			//the last value is added this way because of comma (,)
			//we dont need comma after the last synonym
			
			$output .= "]}";
			return $output;
    }else{
		
		return $output = "{\"word\":\"{$word}\",\"synonyms\":[]}";
		//if there's no synonyms in the array (no key found in the array)
		//it returns this output
	}
	}
}

$thesaurus = new Thesaurus(
    array 
        (
            "buy" => array("purchase"),
            "big" => array("great", "large")
        )); 

		
		
echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");

?>