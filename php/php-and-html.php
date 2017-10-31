<?php
echo "<h1>Methods of returning data from arrays</h1>";
$employee1 = array('first name'=>"Michael",'last name'=>"Thompson",'payroll'=>"51687",'salary'=>"26000");
$employee2 = array('first name'=>"Michael2",'last name'=>"Thompson2",'payroll'=>"51687",'salary'=>"26000");
$employee3 = array('first name'=>"Michael3",'last name'=>"Thompson3",'payroll'=>"51687",'salary'=>"26000");
echo "<h3>Details of employee 1 (Manual Method)</h3>";

for ($i=0; $i < 3; $i++) {
	$x="employee".($i+1); 
	echo "<h3>Details of ".$x."</h3><br>";
	foreach ($$x as $key => $value) {
		echo '<span style="margin-left:40px;">'.$key.": ".$value."</span><br>";
	}
}

?>