<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-light">
    <div class="container">
        <h1 class="header-title display-2 text-center text-white bg-success mt-4 mb-0 py-4 font-weight-bold font-italic">Mahalaxmi Jwellers</h1>
    </div>
    <form id="form" method="post">
        <div class="container h-100 w-100">
            <div class="header">
                <div class="card bg-secondary pb-2">
                    <table class="mx-auto pb-2">
                        <tr>
                            <td><h4>Customer name:</h4></td>
                            <td><input class="form-group py-2 mt-1" type="name" name="cname" required></td>
                        </tr>
                        <tr>
                            <td><h4>Address:</h4></td>
                            <td><input class="form-group py-2 mt-1" type="name" name="address" required></td>
                        </tr>
                        <tr>
                            <td><h4>Phone:</h4></td>
                            <td><input class="form-group py-2 mt-1" type="name" name="phone" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <button id="billType" class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">
                                        Select Bill Type<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a id="guaranteeBill" href="#" onclick="guarantee(event)">Guarantee Bill</a></li>
                                        <li><a id="cashBill" href="#" onclick="cash(event)">Cash Bill</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="card bg-secondary">
                <table class="mx-auto my-4">
                    <div id="customerForm" class="mx-auto">
                        <tr>
                            <td class="d-flex align-self-center">Product name:</td>
                            <td><input id="formElement1" class="form-elements form-group" type="name" name="pname[0]" required="required"><br></td>
                        </tr>
                        <tr>
                            <td class="d-flex align-self-center">Weight(gm):</td>
                            <td><input id="formElement2" class="form-elements form-group" type="number" step="0.0001" name="weight[0]" required><br></td>
                        </tr>
                        <tr>
                            <td class="d-flex align-self-center">Jarti:</td>
                            <td><input id="formElement4" class="form-elements form-group" type="number" name="jarti[0]" required><br></td>
                        </tr>
                        <tr>
                            <td class="d-flex align-self-center">Rate:</td>
                            <td><input id="formElement3" class="form-elements form-group" type="number" name="rate" required><br></td>
                        </tr>


                        <tr>
                            <td class="d-flex align-self-center">Wage:</td>
                            <td><input id="formElement5" class="form-elements form-group" type="number" name="wage[0]" required><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Percentage:<input type="radio" name="jyalaType[0]" value="1" checked>   Value:<input type="radio" name="jyalaType[0]" value="2"><br></td>
                        </tr>
                        
                    </div>
                        <tr>
                            <td></td>
                            <td class="text-center"> <a id="anchor" href="index.html" class="nav-link text-light" onclick="addMore(event)">+Add More</a></td>
                        </tr>
                </table>
            </div>

            <div class="header">
                <div class="card bg-secondary">
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

