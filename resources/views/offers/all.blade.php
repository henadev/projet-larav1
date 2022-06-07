<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All Offers</title>

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
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> {{ __('messages.Offer Name') }}    </th>
                            <th> {{ __('messages.Offer Price') }}   </th>
                            <th> {{ __('messages.Offer Details') }} </th>
                            <th>             Action                 </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($offers as $offer )
                            
                            <tr>
                                <td>{{ $offer -> id }}</td>
                                <td>{{ $offer -> name }}</td>
                                <td>{{ $offer -> price }}</td>
                                <td>{{ $offer -> details }}</td>
                                <td>       <a type="button" class="btn btn-primary" href="{{ url('offers/edit/'.$offer -> id) }}"> Edit</a>                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>      
                
            </div>
        </div>
    </body>
</html>
