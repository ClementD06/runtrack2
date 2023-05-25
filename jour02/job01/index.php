<?php
for ($i = 1; $i <= 1337; $i++) {
    if ($i == 42) {
        echo "<option value='".$i."' style='font-weight: bold; text-decoration: underline;'>".$i."</option>";
    } else {
        echo "<option value='".$i."'>".$i."</option>";
    }
}
?>
