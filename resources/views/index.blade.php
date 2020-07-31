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
                margin-top: 5rem;
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
        </style>
    </head>
    <body>
        <a href={{route('get.create')}}><button>Add Post Item</button></a>
        <div class="flex-center position-ref ">
            <div class="content">
                <table>
                    <tr>
                      <th>EDIT</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Description 2</th>
                      <th>Url</th>
                      <th>Category</th>
                      <th>Type</th>
                      <th>Survey</th>
                      <th>Year</th>
                      <th>Pic</th>
                      <th>PDF path</th>
                      <th>Date publish</th>
                      <th>Status</th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                        <td>
                            <a href="/edit/{{$post->id}}">
                                <button>EDIT</button>
                            </a>
                        </td>   
                        <td>{{$post->post_title}}</td>
                        <td>{{$post->post_description}}</td>
                        <td>{{$post->post_description2}}</td>
                        <td>{{$post->post_url}}</td>
                        <td>{{$post->post_cat}}</td>
                        <td>{{$post->post_type}}</td>
                        <td>{{$post->post_survey}}</td>
                        <td>{{$post->post_year}}</td>
                        <td>{{$post->pic_file}}</td>
                        <td>{{$post->pdf_path}}</td>
                        <td>{{$post->date_pub}}</td>
                        <td>{{$post->status}}</td>                       
                      </tr>
                    @endforeach
                    
                  </table>
            </div>
        </div>
    </body>
</html>
