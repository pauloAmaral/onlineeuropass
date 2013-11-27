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
    private $elements = array();
    
    public function __construct($locale='en') {
        $this->locale = $locale;
    }
    
    public function getLocale(){
        return $this->locale;
    }
    
    public function getElement($elementName){
        if( isset($this->elements[$elementName]) ){
            $this->elements[$elementName];
        }else{
            throw new EuropassElementNotFoundException('EuropassElement '.$elementName.' not found!');
        }
    }
    
    public function setElement($elementName, $elementInstance){
        $this->elements[$elementName] = $elementInstance;
    }
    
    public function renderXML($xmlfile){
        $xml = '';
        $topXML = '';
        $bottomXML = '';
        
        // load xmlfile and fill the elements
        
        // then return the parsed elements
        foreach($this->elements as $instance){
            if($instance instanceof EuropassFatherElement){
                $topXML = $instance->renderTopElementXML();
                $bottomXML = $instance->renderBottomElementXML();
                continue;
            }
            $xml.= $instance->renderXML();
        }
        
        
        
        return $topXML.$xml.$bottomXML;
        
    }
}
?>
