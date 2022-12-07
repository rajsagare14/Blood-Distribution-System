<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hospstock.css">
    <title>Update Stocks</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th>A+</th>
            <th>B+</th>
            <th>A-</th>
            <th>B-</th>
            <th>o+</th>
            <th>o-</th>
            <th>AB+</th>
            <th>AB+</th>
        </tr>
        <tr>
            <th>whole Blood</th>
            <td><input name="wbap" type="number" class="myNumber"></td>
            <td><input name="wban" type="number" class="myNumber"></td>
            <td><input name="wbbp" type="number" class="myNumber"></td>
            <td><input name="wbbn" type="number" class="myNumber"></td>
            <td><input name="wbabp" type="number" class="myNumber"></td>
            <td><input name="wbabn" type="number" class="myNumber"></td>
            <td><input name="wbop" type="number" class="myNumber"></td>
            <td><input name="wbon" type="number" class="myNumber"></td>
        </tr>
        <tr>
            <th>Plasma</th>
            <td><input name="pmap" type="number" class="myNumber"></td>
            <td><input name="pman" type="number" class="myNumber"></td>
            <td><input name="pmbp" type="number" class="myNumber"></td>
            <td><input name="pmbn" type="number" class="myNumber"></td>
            <td><input name="pmabp" type="number" class="myNumber"></td>
            <td><input name="pmabn" type="number" class="myNumber"></td>
            <td><input name="pmop" type="number" class="myNumber"></td>
            <td><input name="pmon" type="number" class="myNumber"></td>
        </tr>
        <tr>
            <th>Platelets</th>
            <td><input name="plap" type="number" class="myNumber"></td>
            <td><input name="plan" type="number" class="myNumber"></td>
            <td><input name="plbp" type="number" class="myNumber"></td>
            <td><input name="plbn" type="number" class="myNumber"></td>
            <td><input name="plabp" type="number" class="myNumber"></td>
            <td><input name="plabn" type="number" class="myNumber"></td>
            <td><input name="plop" type="number" class="myNumber"></td>
            <td><input name="plon" type="number" class="myNumber"></td>
        </tr>
	</form>
</table>
<form action="./../Actions/updatestocks.php" method="post">
	<button>Update Stocks</button>
</form>
<form action="../Actions/orderblood.php" method="post">
		<!-- to get the stocks updated -->
<script>
function myFunction() {
  document.getElementsByClassName("myNumber").stepUp(5);
}

</script>
</body>
</html>