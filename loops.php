<?php
 # LOOPS - Execute code set numbers of times

/*
 For
 While
 Do..While
 Foreach
 */

# For Loop
# @params - init, condition, inc
/*
for($i = 0; $i <= 10; $i++){
    echo 'Number '.$i;
    echo '<br>';
}
*/

#While Loop
# @params - condition

/*$i = 0;

while($i < 10) {
    echo $i;
    echo '<br>';
    $i++;
}*/

/*$i = 0;
do{
    echo $i;
    echo '<br>';
    $i++;
}
while($i < 10);*/

# Foreach Loop - For arrays
$people = array('Brad', 'Hose', 'Wiliam');

foreach($people as $person) {
    echo $person;
    echo '<br>';
}