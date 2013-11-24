<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OnlineEuropass
 *
 * @author paulo
 */
class OnlineEuropass {
    private $locale;
    
    function __construct($locale) {
        $this->locale = $locale;
    }
    
    public function getLocale(){
        return $this->locale;
    }
    
    
}
?>
