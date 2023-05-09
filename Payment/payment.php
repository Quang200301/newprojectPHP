<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        <?php include "./payment.css"; ?> 
    </style>

    <div class="container">
    <div class="header"><h1>MAKEIT<span>MENT</span></h1></div>
    <div class="conten">
        <div class="leftconten">
            <div class="Gross-total">
                <h3>Gross product:935829852958295</h3>
                <h3>Total price:238502935823592</h3>
            </div>
            <div class="Gross">
                <table class="table" border="1">
                        <tr class="thead">
                            <th>IMG</th>
                            <th>PRICE</th>
                            <th>AMOUNT</th>
                            <th>TOTAL PRICE</th>
                        </tr>
                        <tr class="item">
                            <td class="img"><img src="./img/t-shirt 3.png" ></td>
                            <td> 3000$ </td>
                            <td> 2 </td>
                            <td> 6000$ </td>
                        </tr>
                </table>
            </div>
        </div>
        <div class="rightconten">
            <h3>SHIPPING ADDRESS</h3>
                <form action="">
                    <label for="" class="name">Full name</label><br>
                    <input type="text" name="name"><br>
                    <label for=""class="name">Phone number</label><br>
                    <input type="text" name="name"><br>
                    <label for=""class="name">Address</label><br>
                    <input type="text" name="name"><br>
                    <label for=""class="name">Provincwe</label><br>
                    <input type="text" name="name"><br>
                    <button type="submit" id="sub"name=sub>Buy</button>
                </form>
        </div>
    </div>
    </div>
</body>
</html>