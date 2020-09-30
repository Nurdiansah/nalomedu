<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NALOMEDU</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/tailwind.output.css')}}" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
  <script src="{{asset('js/init-alpine.js')}}"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <style>
      #main::-webkit-scrollbar {
        width: 5px;
      }

      #main::-webkit-scrollbar-track {
        background: #ececec;
      }

      #main::-webkit-scrollbar-thumb {
        background: rgb(23, 101, 245);
      }
      aside::-webkit-scrollbar {
        width: 5px;
      }

      aside::-webkit-scrollbar-track {
        background: #ececec;
      }

      aside::-webkit-scrollbar-thumb {
        background: rgb(23, 101, 245);
      }
    </style>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
  <script src="{{asset('js/charts-lines.js')}}" defer></script>
  <script src="{{asset('js/charts-pie.js')}}" defer></script>
  </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @livewire('navigation-dropdown') --}}

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
                    <!-- Desktop sidebar -->
                    @include('layouts.sidebar')
                    <div class="flex flex-col flex-1 w-full">
                      @include('layouts.header')
                {{ $slot }}
            </div>
        </div>
            </main>
        {{-- </div> --}}

        @stack('modals')

        @livewireScripts
    </body>
</html>
