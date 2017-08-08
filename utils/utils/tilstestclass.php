<?php
	
class UtilsTest extends Test
{
	function test_phone(){
	
		$this->assertEquals(array('+7(843)','5991237'), d()->utils_splitphone("+7(843)5991237")); 
		$this->assertEquals(array('','+79655991237'), d()->utils_splitphone("+79655991237")); 
		$this->assertEquals(array('+7(843)','5991237'), d()->utils_splitphone("+7(843) 5991237")); 
		$this->assertEquals(array('',''), d()->utils_splitphone("")); 
	}

}
 