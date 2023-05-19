<x-driver-layout>
    <x-slot name="header">
       <div class="mb-10 lg:mb-0">
              <h2 class="text-3xl font-bold">
                Here is your travel plan
                <br />
                <span class="text-red-600">You can't Start after START-TIME</span>
              </h2>
            </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
                        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
                        {{-- <link rel="stylesheet" href="css/main.css"> --}}
                        <link rel="stylesheet" href="/webjars/bootstrap/5.1.3/css/bootstrap.min.css">
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
                            rel="stylesheet"
                            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                            crossorigin="anonymous">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="/webjars/bootstrap/5.1.3/js/bootstrap.min.js"></script>

                        <script src="http://code.jquery.com/jquery-latest.js"></script>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <title>CleverVision</title>

                    <body>
                        <script>

                        </script>
<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center lg:text-left">
      <div class="flex flex-wrap justify-center">
        {{-- <div class="grow-0 shrink-0 basis-auto w-full lg:w-10/12 px-3"> --}}
          <div class="grid lg:grid-cols-2 gap-x-6 items-center">
            <div class="mb-10 lg:mb-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Start time</th>
                            <th scope="col">Arrival time</th>
                            <th scope="col">Destination</th>
                            <th scope="col">On road</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voyages as $voyage)
                            <tr>


                                <td>{{ $voyage->heure_depart }}</td>
                                <td>{{ $voyage->heure_arrive }}</td>
                                <td>{{ $voyage->destination }}</td>
                                @if ($voyage->en_route == 1)
                                <td>on road</td>
                                <td>{{ $voyage->bus_postion }}</td>
                                @else
                                <td>off road</td>
                                <td>
                                    <form  action="{{ route('driver.voyages.update',$voyage->id )}}" method="POST" enctype="multipart/form-data"class="mb-10 lg:mb-0" >
                                      @csrf
                                    @method('PUT')
                                   <button type="submit"
                                        class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        >Start

                                    </button>
                                 </form>
                                </td>
                                @endif

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <div class=" ">
              <div class="md:flex flex-row">
                <x-map  />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->

  </div>
  <!-- Container for demo purpose -->
                    </html>
                </div>
            </div>
        </div>
    </div>
</x-driver-layout>
