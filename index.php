<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form action="topdf.php" method="post">
        <div class="container h-100 w-100">
            <div class="header">
                <div class="card">
                    <table class="mx-auto">
                        <tr>
                            <td><h4>Customer name:</h4></td>
                            <td><input class="form-group py-2 mt-1" type="name" name="cname" required></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card">
                <table class="mx-auto my-4">

                        <tr>
                            <td>Product name:</td>
                            <td><input class="form-group" type="name" name="pname" required><br></td>
                        </tr>
                        <tr>
                            <td>Weight(gm):</td>
                            <td><input class="form-group" type="number" step="0.0001" name="weight" required><br></td>
                        </tr>
                        <tr>
                            <td>Rate:</td>
                            <td><input class="form-group" type="number" name="rate" required><br></td>
                        </tr>
                        <tr>
                            <td>Jarti:</td>
                            <td><input class="form-group" type="number" max="100" name="jarti" required><br></td>
                        </tr>
                        <tr>
                            <td>Wage:</td>
                            <td><input class="form-group" type="number" name="wage" required><br></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td class="text-center"> <a id="anchor" href="index.html" class="nav-link" onclick="addMore(event)">+Add More</a></td>
                        </tr>

                </table>
                <div id="customerForm">
                            
                </div>
            </div>
            <div class="header">
                <div class="card">
                    <table class="mx-auto">
                        <tr>
                            <td><input class="btn btn-primary m-2 py-2 px-3" type="submit" value="Submit"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </form>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

