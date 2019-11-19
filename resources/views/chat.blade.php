<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


        <style>

            .list-group{
                overflow-y: scroll;
                height: 300px;
            }
        </style>
    </head>
    <body>


    <div class="container">
        <div class="row " id="app">
            <div class="offset-4 col-4">
                <li class="list-group-item active">Chat App</li>
                <ul class="list-group " v-chat-scroll>

                    <message
                            v-for="value in chat.message"
                            :key="value.index"
                            color="success"

                    >

                        @{{ value }}
                    </message>
                </ul>
                <input type="text" class="form-control" v-model="message" @keyup.enter="send" placeholder="Type here...">
            </div>




        </div>
    </div>



    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
