<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teatime;

use XmlCreator;

class TeatimeController extends Controller
{
    public function getTeatimeData(Request $request){

    	$catalog=$request->input('catalog');

    	$pageIndex=$request->input('pageIndex');

    	$xml="";

    	if($catalog>0){

    		$teatimes=Teatime::getMyTeatimeList($catalog,$pageIndex);

    		$teatimeCount=$teatimes->count();

    		$xml="<teascript>";
    		$xml.="<teatimeCount>{$teatimeCount}</teatimeCount>";
    		$xml.="<pageSize>20</pageSize>";
    		$xml.="<teatimeList>";

    		foreach($teatimes as $teatime){
    			$xml.=XmlCreator::xmlEncode('teatime',$teatime);
    		}

    		$xml.="</teatimeList>";
    		$xml.="</teascript>";

    	}else{

    		$teatimes=Teatime::getTeatimeList($catalog,$pageIndex);

    		$teatimeCount=$teatimes->count();

    		$xml="<teascript>";
    		$xml.="<teatimeCount>{$teatimeCount}</teatimeCount>";
    		$xml.="<pageSize>20</pageSize>";
    		$xml.="<teatimeList>";

    		foreach($teatimes as $teatime){
    			$xml.=XmlCreator::xmlEncode('teatime',$teatime);
    		}

    		$xml.="</teatimeList>";
    		$xml.="</teascript>";

    	}

    	return $xml;
    }

}
