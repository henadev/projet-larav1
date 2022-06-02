<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        {{-- link Bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

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

            .full-height {
                height: 100vh;
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
                font-size: 77px;
                font-weight: bold;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">

             @if(Session::has('success'))  
                <div class="alert alert-success text-bold" role="alert">
                    <h3>{{ Session::get('success') }}</h3>
                </div>
             @endif

                <div class="title m-b-md text-primary">
                    Add Offer
                </div>


                {{-- <form method="POST" action="{{ url('offers\store') }}"> ou --}}
                    <form method="POST" action="{{ route('offers.store') }}">
                    @csrf  
                    {{-- OU --}}
                  {{--<input type="_token" value={{ csrf_token() }}> --}}
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Offer Name :</label>

                        <div class="col-md-6">
                            <input id="name" type="text"  name="name" >

                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">Offer Price :</label>

                        <div class="col-md-6">
                            <input id="price" type="text"  name="price" >

                            @error('price')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="details" class="col-md-4 col-form-label text-md-right">Offer Details :</label>

                        <div class="col-md-6">
                            <input id="details" type="text"  name="details" >

                            @error('details')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row my-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                               Save Offer
                            </button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </body>
</html>
