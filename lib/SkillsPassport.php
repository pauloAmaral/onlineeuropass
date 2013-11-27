<?php
include('EuropassFatherElement.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SkillsPassport
 *
 * @author paulo
 */
class SkillsPassport extends EuropassElement implements EuropassFatherElement{
   
    
    public function __construct($locale='en'){
        $this->locale = $locale;
        $this->elements = array(
            'SkillsPassport' => array('value' => '', 'show'=>true, 'attributes' => array(
                'xmlns' => array('value'=>'http://europass.cedefop.europa.eu/Europass', 'show'=>true),
                'xmlns:xsi' => array('value'=>'http://www.w3.org/2001/XMLSchema-instance', 'show'=>true),
                'xsi:schemaLocation' => array('value'=>'http://europass.cedefop.europa.eu/xml/EuropassSchema_V3.0.1.xsd', 'show'=>true),
                'locale' => array('value'=>$this->locale, 'show'=>true)
                )
        ));
    }

    public function renderBottomElementXML() {
        if(!isset($this->elements)){
            return '';
        }
        
        $attrs = reset($this->elements);
        $element = key($this->elements);
        
        if(!isset($attrs['show'])){
            return '';
        }
        return '</'.$element.'>'; 
        
        
    }

    public function renderTopElementXML() {
        $topXML = '';
        
        if(!isset($this->elements)){
            return $topXML;
        }
        
//        foreach($this->elements as $element=>$attrs){
//            if(!isset($attrs['show'])) continue;
//            $topXML.='<'.$element.' ';
//            if(isset($attrs['attributes'])){
//                foreach($attrs['attributes'] as $key=>$value){
//                    $topXML.=$key.'="'.$value.'" ';
//                }
//            }
//            $topXML.='>';
//        }
        
        $attrs = reset($this->elements);
        $element = key($this->elements);
        if(!isset($attrs['show'])){
            return $topXML;
        }
        
        $topXML.='<'.$element.' ';
        if(isset($attrs['attributes'])){
            foreach($attrs['attributes'] as $key=>$attributesProperties){
                if(!isset($attributesProperties['show']) || !$attributesProperties['show']){
                    continue;
                }
                $topXML.=$key.'="'.$attributesProperties['value'].'" ';
            }
        }
        $topXML.='>';
        
        return $topXML;
    }

}
