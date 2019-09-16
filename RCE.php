function getNextToken($e, &$i, &$state) {
$state = IN_NOWHERE;
$end = ­1;
$start = ­1;
while ( $i < strlen($e) && $end == ­1 ) {
switch( $e[$i] ) {
(...)
case "'":
$state = IN_STRING;
$buf = "";
while ( ++$i && $i < strlen($e) && $e[$i] != '"' ) {
if ( $e[$i] == "\")
$i++;
$buf .= $e[$i];
}
$i++;
return eval('return "'.str_replace('"','"',$buf).'";');
break;