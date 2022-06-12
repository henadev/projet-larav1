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
                color: #545657;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            ::placeholder{
                color: #8e9ca3;
                font-size: 12px;
            }

            .full-height {
                height: 80vh;
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
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light my-0">
                <a class="navbar-brand" href="#">Starter</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav my-0">
                 <ul class="navbar-nav my-0">  
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a class="nav-link active" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach

               
                </ul> 
                  </div>
                </div>
              </nav>
        </header>
        <div class="flex-center position-ref full-height my-0">
            <div class="content my-0">

             @if(Session::has('success'))  
                <div class="alert alert-success text-bold" role="alert">
                    <h3>{{ Session::get('success') }}</h3>
                </div>
             @endif

                <div class="title m-b-md text-primary">
                    {{ __('messages.Add Your Offer') }}
                </div>


                {{-- <form method="POST" action="{{ url('offers\store') }}"> ou --}}
                    <form method="POST" action="{{ route('offers.store') }}" enctype="multipart/form-data">
                    @csrf  
                    {{-- OU --}}
                  {{--<input type="_token" value={{ csrf_token() }}> --}}
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('messages.Offer Name AR') }} :</label>

                        <div class="col-md-6">
                            <input id="name" type="text"  name="name_ar" placeholder="{{ __('messages.Offer Name AR') }}" >

                            @error('name_ar')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('messages.Offer Name EN') }} :</label>

                        <div class="col-md-6">
                            <input id="name" type="text"  name="name_en" placeholder="{{ __('messages.Offer Name EN') }}" >

                            @error('name_en')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('messages.Offer Price') }} :</label>

                        <div class="col-md-6">
                            <input id="price" type="text"  name="price" placeholder="{{ __('messages.Offer Price') }}" >

                            @error('price')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('messages.Offer Details AR') }} :</label>

                        <div class="col-md-6">
                            <input id="details" type="text"  name="details_ar" placeholder="{{ __('messages.Offer Details AR') }} ">

                            @error('details_ar')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('messages.Offer Details EN') }} :</label>

                        <div class="col-md-6">
                            <input id="details" type="text"  name="details_en" placeholder="{{ __('messages.Offer Details EN') }} ">

                            @error('details_en')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('messages.Image Offer') }} :</label>

                        <div class="col-md-6">
                            <input id="image" type="file"  name="image" >

                            @error('file')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row my-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                               {{ __('messages.Save Offer') }}
                            </button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </body>
</html>
