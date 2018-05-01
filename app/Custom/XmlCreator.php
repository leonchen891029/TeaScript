<?

class XmlCreator{

	public static function xmlEncode($dataName,$data){

		$xml="<{$dataName}>";

		foreach($data as $key=>$value){

			$xml.="<{$key}>";

			//如果$value值还是一个php数组的话，递归这个函数
			$xml.=is_array($value)?self::xmlEncode($value):$value;

			$xml.="</{$key}>";

		}

		$xml.="</{$dataName}>"

		return $xml;

	}

}