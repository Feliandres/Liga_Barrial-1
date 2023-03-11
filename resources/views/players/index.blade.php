<!DOCTYPE html>
<html lang="es" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('storage\favicon.svg')}}" type="image/svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('storage\icon.png')}}">
    <title>Bellavista | Registro Jugador</title>
</head>
{{--? class='bg-[url({{asset("/storage/form-background.jpg")}})] bg-no-repeat bg-center bg-cover relative min-h-screen --}}
<body style="font-family: 'Mochiy Pop One', sans-serif; background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png');">
    <main class="h-screen">
        @if(Auth::check() && Auth::user()->roles_id == 1)
            <a href="{{ route('admin.index') }}" class="btn btn-primary ml-5 mt-5 bg-green-500 hover:bg-green-400 border-none rounded-md">
                Panel Administrativo
            </a>
                @if (Session::has('message'))
                    <div class="mx-96 px-48 pt-3">
                        <div class="p-4 mb-4 mt-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
                            <span class="font-bold text-1xl">{{ Session::get('message') }} </span> 
                        </div>
                    </div>
                @endif
            <div class="flex justify-end px-10">
                <a href="{{ route('player.create') }}" class="btn btn-primary transition ease-in-out delay-150 bg-secondary hover:-translate-y-1 hover:scale-110 hover:bg-indigo-200 duration-100 my-10 h-20 border-none rounded-md">
                    <img src=" {{ url('/storage/add_player.png') }}"/>
                </a>
            </div>
        @endif
        @if(Auth::check() && Auth::user()->roles_id != 1)
        <a href="{{ route('posts.index') }}" class="btn btn-primary ml-5 mt-5 bg-green-500 hover:bg-green-400 border-none rounded-md">
            Volver Al Inicio
        </a>
        @endif

        @guest
        <a href="{{ route('posts.index') }}" class="btn btn-primary ml-5 mt-5 bg-green-500 hover:bg-green-400 border-none rounded-md">
            Volver Al Inicio
        </a>
        @endguest
        <h1 class="font-bold text-3xl text-center text-gray-500 py-5">Jugadores</h1>
        @if (count($players) > 0)
            @foreach ($players as $email_player => $user_name_player)
                <div class="p-12 mx-12">      
                    <div class="card h-96 card-side glass hover:backdrop-saturate-50 hover:bg-white/30 hover:text-neutral-700 shadow-xl w-full">        
                        <figure><img class="w-64 h-64 pl-4 rounded-lg " src="22"  alt="image" /></figure>        
                        <div class="card-body py-4 w-1/2 px-8">            
                            <h2 class="card-title italic text-2xl hover:text-stone-900">{{ $user_name_player}}</h2>            
                            <p class="hover:text-stone-900 italic text-xl">{{ $email_player }}</p>            
                        </div>            
                    </div>    
                </div>
            @endforeach            
        @else
            <h3 class="font-bold text-3xl text-center text-red-500 py-20">No existen Jugadores Aún 🛑</h3>
        @endif
    </main>
</body>
</html>