<?php
if (!defined('MODX_BASE_PATH')) {
    die('HACK???');
}
include_once(MODX_BASE_PATH . 'assets/lib/APIHelpers.class.php');

/**
 * htmlspecialchars extender for DocLister
 *
 * @category extender
 * @license GNU General Public License (GPL), http://www.gnu.org/copyleft/gpl.html
 * @author Agel_Nash <Agel_Nash@xaker.ru>
 */

class e_DL_Extender extends extDocLister
{
    protected function run()
    {
        $out = $this->getCFGDef('data', array());
        if (($eFields = $this->DocLister->getCFGDef('e', '')) != '') {
            if(is_scalar($eFields)){
                $eFields = explode(",", $eFields);
            }
            if(is_array($eFields)){
            	foreach($field as $eFields){
            		$val = APIHelpers::getkey($data, $field, '');
                    $out['e.'.$field] = APIHelpers::e($val);
                }
            }
        }
        return $out;
    }
}