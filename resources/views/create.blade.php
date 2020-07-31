<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PUF POST ITEMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
            button {
                background-color: black;
                color: white;
            }

            input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }

            input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=submit]:hover {
            background-color: #45a049;
            }

            div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            }
            textarea {
            width: 800px;
            height: 150px;
            }
            label {
                font-size: 40px;
            }
        </style>
    </head>
    <body>
        <a href="/"><h1>Home</h1></a>
        <div class="flex-center position-ref ">
            <div class="content">
                  <form method="post" action="{{route('get.store')}}">
                    @csrf
                    <label for="post_title">Title</label><br>
                    <input type="text" id="post_title" name="post_title"><br>

                    <label for="post_description">Description</label><br>
                    <textarea type="text" id="post_description" name="post_description"></textarea><br>

                    <label for="post_description2">Description 2</label><br>
                    <textarea type="text" id="post_description2" name="post_description2" ></textarea><br>

                    <label for="post_url">Url</label><br>
                    <input type="text" id="post_url" name="post_url"><br>

                    <label for="post_cat">Category</label><br>
                    <input type="text" id="post_cat" name="post_cat"><br>

                    <label for="post_type">Type</label><br>
                    <input type="text" id="post_type" name="post_type"><br>

                    <label for="post_survey">Survey</label><br>
                    <input type="text" id="post_survey" name="post_survey"><br>

                    <label for="post_year">Year</label><br>
                    <input type="text" id="post_year" name="post_year"><br>

                    <label for="pic_file">Pic</label><br>
                    <input type="text" id="pic_file" name="pic_file"><br>

                    <label for="pdf_path">PDF Path</label><br>
                    <input type="text" id="pdf_path" name="pdf_path"><br>

                    <label for="date_pub">Date Publish</label><br>
                    <input type="text" id="date_pub" name="date_pub"><br>

                    <label for="status">Status</label><br>
                    <input type="text" id="status" name="status"><br><br>

                    <input type="submit" value="Save">
                  </form> 
                  
            </div>
        </div>
    </body>
</html>
