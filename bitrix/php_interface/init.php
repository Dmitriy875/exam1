<?

class MeineFunktionen {
	static function showContactInfo() {
		$time = time() + ( 5 * 60 * 60 );
		$date = date("H:i:s", $time);
		if( $date >= 9 && $date < 18 ) 
			print "<a href='tel:84952128506' class='phone'>8 (495) 212-85-06</a>";
			else print "<a href='mailto:store@store.ru' class='phone'>store@store.ru</a>";
	}
}

 
?>