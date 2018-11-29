<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 25%;
            padding: 10px;
            height: 300px; /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>

<h2>NECKLACES</h2>

<div class="row">
    <div class="column" style="background-color:#aaa;">
        <h2>NECKLACE1</h2>
        <p>Price $50</p>
        <img src="n1.jpg"/>
    </div>
    <div class="column" style="background-color:#bbb;">
        <h2>SET2</h2>
        <p>Price $70</p>
        <img src="n2.jpg"/>
    </div>
</div>
<div class="row">
    <div class="column" style="background-color:#ccc;">
        <h2>SET3</h2>
        <p>Price $60</p>
        <img src="n3.jpg"/>
    </div>
    <div class="column" style="background-color:#ddd;">
        <h2>SET4</h2>
        <p>Price $80</p>
        <img src="n5.jpg"/>
    </div>
</div>

</body>
</html>
