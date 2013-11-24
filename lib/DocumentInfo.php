<?php
include('EuropassElement.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DocumentInfo
 *
 * @author paulo
 */
class DocumentInfo extends EuropassElement{
    protected $elements = array(
        'DocumentType' => array('value'=>'', 'show'=>true),
        'CreationDate' => array('value'=>'', 'show'=>true),
        'LastUpdateDate' => array('value'=>'', 'show'=>true),
        'XSDVersion' => array('value'=>'', 'show'=>true),
        'Generator' => array('value'=>'', 'show'=>true),
        'Comment' => array('value'=>'', 'show'=>false)
    );
}