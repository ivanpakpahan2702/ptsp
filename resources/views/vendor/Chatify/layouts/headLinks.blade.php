<title>{{ config('chatify.name') }}</title>

{{-- Meta tags --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="id" content="{{ $id }}">

<meta name="messenger-color" content="{{ $messengerColor }}">
<meta name="messenger-theme" content="{{ $dark_mode }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="{{ url('') . '/' . config('chatify.routes.prefix') }}" data-user="{{ Auth::user()->id }}">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="/assets/images/logos/icons8-law-96.png" />

{{-- scripts --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ URL::asset('assets/chatify/js/chatify/font.awesome.min.js') }}"></script>
<script src="{{ URL::asset('assets/chatify/js/chatify/autosize.js') }}"></script>
{{-- <script src="{{ URL::asset('js/app.js') }}"></script> --}}
<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>

{{-- styles --}}
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css' />
<link href="{{ URL::asset('assets/chatify/css/chatify/style.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/chatify/css/chatify/' . $dark_mode . '.mode.css') }}" rel="stylesheet" />
{{-- <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" /> --}}

{{-- Bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
  rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">

{{-- Setting messenger primary color to css --}}
<style>
  :root {
    --primary-color: {{ $messengerColor }};
  }
</style>

<style>
  * {
    font-family: 'Poppins', sans-serif !important;
  }
</style>
<style>
  #loading {
    position: fixed;
    display: block;
    width: 100%;
    height: 100%;
    text-align: center;
    background-color: whitesmoke;
    z-index: 9999999999;
  }

  #loading .spinner-grow {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 99999999999;
  }

  #loading .visually-hidden {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 99999999999;
  }

  .myscrollbar {
    ::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(13deg, #f9d4ff 14%, #c7ceff 64%);
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(13deg, #c7ceff 14%, #f9d4ff 64%);
    }

    ::-webkit-scrollbar-track {
      background: #ffffff;
      border-radius: 10px;
      box-shadow: inset 7px 10px 12px #f0f0f0;
    }
  }

  body::-webkit-scrollbar {
    width: 5px;
    height: 5px;
  }

  body::-webkit-scrollbar-thumb {
    background: linear-gradient(13deg, #f9d4ff 14%, #c7ceff 64%);
    border-radius: 10px;
  }

  body::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(13deg, #c7ceff 14%, #f9d4ff 64%);
  }

  body::-webkit-scrollbar-track {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: inset 7px 10px 12px #f0f0f0;
  }
</style>
