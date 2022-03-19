<!DOCTYPE html>
<html>
<head>

       
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        
    

</head>
<style>
body {
    font-family: 'Prompt', sans-serif;
}



img {
        text-align: center;
    }

html { 
        background: url("picture/bg1.jpg") ; 
        background-size: 100% 100%;

}

.row:after {
                content: "";
                display: table;
                clear: both;
            }

            card {
        text-align: center;
        font-family: 'Prompt', sans-serif;
        font-size: 18px;
       /* background-color: white;*/
        padding: 40px;
        margin-top: 10px;
        margin-left: 100px;
        
    }

    .card2 {
        font-family: 'Prompt', sans-serif;
        text-align: center;
        /* background-color: #f1f1f1; */
        /* padding: 20px; */
        margin-top: 80px;
        margin-left: 10px;
        /* margin-right: auto; */
       
    }
    .center {
            text-align: center;
            border: none;
            }
        
        .btn-group .button {
            font-family: 'Prompt', sans-serif;
            /*border-radius: 5%;*/
            position: relative;
            background-color: #397d54 ; /* Green */
            border: 1px black;
            color: white;
            padding: 15px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            /*float: center;*/
            border-radius: 50px;
            width: 30%;
            transition: all 0.5s ease;
        }

        .btn-group .button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        .btn-group .button:hover {
            background-color: #ddd;
            color: black;
        }

        .btn-group2 .button {
            font-family: 'Prompt', sans-serif;
            /*border-radius: 5%;*/
            position: sticky ;
            background-color: #0974ba ; /* Green */
            border: 1px black;
            color: white;
            padding: 14px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            float: right;
        }

        .btn-group2 .button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        .btn-group2 .button:hover {
            /*background-color: #ddd;*/
            color: black;
        }


        input[type=text], select {
            font-family: 'Prompt', sans-serif;
            width: 30%;
            padding: 5px 10px;
            margin: 8px 0px;
            font-size: 16px;
            /*display: inline-block;*/
            border: 1px solid #ccc;
            border-radius: 50px;
            box-sizing: border-box;
            float: right;
        }
    


</style>

<body>
<div class="row">
        
        
        <div class="card2">
            <h1>ลงชื่อออก</h1>
            </div>
                <div class="card" align="center">
            
                <h3>คุณแน่ใจใช่ไหมว่าต้องการลงชื่อออก?</h3>
                    <br>
                    <form method="get" action="" >
                        <div class="btn-group">
                            <input type="hidden" name="controller" value="pages"/>
                            <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                            <button class="button" type="submit" name="action" value="home"> ใช่ </button>
                        </div>
                    </form>
                    <form method="get" action="" >
                        <div class="btn-group">
                        
                            <input type="hidden" name="controller" value="Aj"/> 
                            <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
                            <button class="button" type="submit" name="action" value="index"> ไม่ </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            
                        
</div>
</body>
</html>