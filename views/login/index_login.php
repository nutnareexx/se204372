<!DOCTYPE html>
<html>

    <head>
        <title>Page ฝึกงานKU</title>
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    </head>

    <style>
        body{
            font-family: 'Prompt', sans-serif;
        }

        .card{
            background-color: #397d54;
            color: white;
        }

        input[type=text], select {
            font-family: 'Prompt', sans-serif;
            /* font-size: 18px; */
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
        }

        input[type=password], select {
            font-family: 'Prompt', sans-serif;
            /* font-size: 18px; */
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
        }
    </style>

    <body>
        <br>
        <image src="picture/ku4.png" style="width:20%">
        <div class="card">
            <h1>ระบบบริหารจัดการการฝึกงานออนไลน์</h1>
        </div>
        
        <h2>คณะวิศวกรรมศาสตร์ สาขาคอมพิวเตอร์</h2>

        <form method="get" action="">
            <label>Username : <input type="text" name="userid"></label>
            <br><br>
            <label>Password : <input type="password" name="password"></label>
            <br><br>
            <input type="hidden" name="controller" value="user"/>
            <button type="submit" name="action" value="login">Login</button>
        </form>


    </body>
</html>