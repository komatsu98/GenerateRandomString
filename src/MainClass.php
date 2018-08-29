<?php namespace komatsu98\RandomString;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class MainClass{

   /**  @var string $m_SampleProperty define here what this variable is for, do this for every instance variable */
   private $m_SampleProperty = '';
 
  /**
  * Sample method 
  *
  * Always create a corresponding docblock for each method, describing what it is for,
  * this helps the phpdocumentator to properly generator the documentation
  *
  * @param string $param1 A string containing the parameter, do this for each parameter to the function, make sure to make it descriptive
  *
  * @return string
  */
   public function generateString($length, $has_lower, $has_upper, $has_number, $has_special_character){
       $lower = 'abcdefghijklmnopqrstuvwxyz';
       $upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $number = '0123456789';
       $special = '~!@#$%^&*()_+-';
       $characters = '';
       if ($has_lower) {
           $characters .= $lower;
       }
       if ($has_upper) {
           $characters .= $upper;
       }
       if ($has_number) {
           $characters .= $number;
       }
       if ($has_special_character) {
           $characters .= $special;
       }
       if (!$characters) {
          $characters = $number . $lower . $upper . $special;
       }
       $charactersLength = strlen($characters);
       $randomString = '';
       for ($i = 0; $i < $length; $i++) {
           $randomString .= $characters[rand(0, $charactersLength - 1)];
       }
       return $randomString;
   }
}