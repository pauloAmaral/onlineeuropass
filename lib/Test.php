<?php
include('DocumentInfo.php');
include('SkillsPassport.php');
include('OnlineEuropass.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$documentInfo = new DocumentInfo();
//
//$documentInfo->renderXML();

//$skillsPassport = new SkillsPassport();
//echo $skillsPassport->renderTopElementXML();
//echo $skillsPassport->renderBottomElementXML();

$cv = new OnlineEuropass();
$skillsPassport = new SkillsPassport();
$documentInfo = new DocumentInfo();
$cv->setElement('SkillsPassport', $skillsPassport);
$cv->setElement('DocumentInfo', $documentInfo);
echo $cv->renderXML('stuff');