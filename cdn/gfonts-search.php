<?php
print "<h2>Showing results for $search</h2>";

$dirName="/gfonts/";
$dp=opendir($dirName);
chdir($dirName);

 while ($currentFile !== false) {

$currentFile = readDir($dp);
$theFiles[] = $currentFile;
}

$BookFiles= preg_grep("/css$|js$/", $theFiles);

$output="";
foreach ($gfontfiles as $currentFile) {

$output .= <<< Here
<ul>
<li><a href=/gfonts/$currentFile>$currentFile</a></li>
</ul>
Here;
}


