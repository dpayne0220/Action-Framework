<br/>
<?php 
echo ($this->getBootstrap()->action=='index'?'Home':'<a href="index.php?a=demo.index">Home</a>');
?>
 | 
<?php 
echo ($this->getBootstrap()->action=='experience'?'Experience':'<a href="index.php?a=demo.experience">Experience</a>');
?>
 | 
<?php 
echo ($this->getBootstrap()->action=='data'?'Data':'<a href="index.php?a=demo.data">Data</a>');
?>
 | 
<?php 
echo ($this->getBootstrap()->action=='frontend'?'Front End':'<a href="index.php?a=demo.frontend">Front End</a>');
?>
<br/>
<br/>