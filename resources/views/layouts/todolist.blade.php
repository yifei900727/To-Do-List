<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/app.css')}}">
    <title>To Do List</title>

</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">
                            <h1 class="text-center my-3 pb-3">To Do List</h1>

                            <main >
                                @if (session()->has('notuice'))
                                <div class="bg-info bg-gradient">
                                    {{session()->get('notuice')}}
                                </div>
                                @endif
                                @yield('main')
                            </main>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script type="text" src="{{asset('build/assets/app.js')}}"></script>

</body>

</html>
