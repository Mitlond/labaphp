<?php
$result=mysql_query("UPDATE first_table SET name='$name',last_name='$last_name' WHERE id=$'id'");
if($result = ='true')
{
echo"Данные успешно обновлены.";
}
else
{
echo"Данные не обновлены!";
	
?>
<?php
namespace RedefinedConstants {

    // redefining global namespace constants has no effect
    define('NULL', 'I am not global NULL!');
    define('TRUE', 'I am not global TRUE!');
    define('FALSE', 'I am not global FALSE!');

    // redefining local namespace constants will work
    define('RedefinedConstants\NULL', 'I am not NULL!', \TRUE);
    define('RedefinedConstants\FALSE', 'I am not FALSE!', \TRUE);
    define('RedefinedConstants\TRUE', 'I am not TRUE!', \TRUE);

    var_dump(
        NULL, \NULL, null, \null, Null, \Null,
        FALSE, \FALSE, false, \false, False, \False,
        TRUE, \TRUE, true, \true, True, \True
    );

} 
?> 