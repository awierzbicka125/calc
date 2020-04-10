
<?php

require_once dirname(__FILE__).'/../conf.php';
require_once _ROOT_PATH.'/lib/Smarty.class.php';
function getParams(&$form){
$form['x'] = isset($_REQUEST['waga']) ? $_REQUEST['waga'] : null;
$form['y'] = isset($_REQUEST['wzrost']) ? $_REQUEST['wzrost'] : null;
}

function validate(&$form,&$infos,&$msgs){

	
    if (!(isset($form['x']) && isset($form['y']) )) {
        return false;
    }

    $infos [] = 'Przekazano parametry.';

	
	if ( $form['x'] == "") $msgs [] = 'Nie podano wagi';
	if ( $form['y'] == "") $msgs [] = 'Nie podano wzrostu';
	
	if ( count($msgs)==0 ) {
		
            if (!is_numeric($form['x'])) {
            $msgs [] = 'Pierwsza wartość nie jest liczbą';
            }
        if (!is_numeric($form['y'])) {
            $msgs [] = 'Druga wartość nie jest liczbą';
            }
        }
	
	if (count($msgs) > 0) {
        return false;
        } 
        else {
        return true;
        }
}





function process(&$form,&$infos,&$msgs,&$result,&$bmi){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

 
            $form['x'] = floatval($form['x']);
            $form['y'] = floatval($form['y']);
            $y_count_format= floatval($form['y']/100);
            $bmi = $form['x']/($y_count_format*$y_count_format);


              if($bmi > '18.5' && $bmi < '25') {  $result= "jest w normie."; 
              } elseif($bmi < '18.5') { $result= "wskazuje na niedowage.";
              } elseif($bmi >= '25' && $bmi < '30') { $result= "wskazuje na nadwage.";
              } elseif($bmi >= '30' && $bmi < '40') {$result= "wskazuje na otylość.";
              } elseif($bmi >= '40') { $result= "wskazuje na ekstremalna otylość.";
              } 

    
}

$form = null;
$infos = array();
$messages = array();
$result = null;
$bmi = null;
getParams($form);
if ( validate($form,$infos,$messages) ){
	process($form,$infos,$messages,$result,$bmi);
}
$smarty = new Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator BMI');

$smarty->assign('page_header','Projektowy kalkulator');
$smarty->assign('bmi',$bmi);
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);


$smarty->display(_ROOT_PATH.'/app1/BMIview.php');