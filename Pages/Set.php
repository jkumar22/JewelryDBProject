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

<h2>SETS</h2>

<div class="row">
    <div class="column" style="background-color:#aaa;">
        <h2>SET1</h2>
        <p>Price $50</p>
        <img src="s5.jpg"/>
    </div>
    <div class="column" style="background-color:#bbb;">
        <h2>SET2</h2>
        <p>Price $75</p>
        <img src="s3.jpg"/>
    </div>
</div>
<div class="row">
    <div class="column" style="background-color:#ccc;">
        <h2>SET3</h2>
        <p>Price $100</p>
        <img src="s1.jpg"/>
    </div>
    <div class="column" style="background-color:#ddd;">
        <h2>SET4</h2>
        <p>Price $80</p>
        <img src="s2.jpg"/>
    </div>
</div>

</body>
</html>

