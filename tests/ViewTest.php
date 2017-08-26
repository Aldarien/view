<?php
use PHPUnit\Framework\TestCase;

class ViewTest extends TestCase
{
	public function testView()
	{
		$output = <<<DATA
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
View test
</body>
</html>
DATA;
		$this->assertEquals($output, view('base'));
	}
}
?>