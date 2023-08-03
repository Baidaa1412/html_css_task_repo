
<?php
function neg($age) {
    if ($age< 0) {
        return "negative ";
    }
    return "positive";
}


echo neg(2)."<br>" ;

echo neg(-2);

?>