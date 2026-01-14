<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Cunnet Admin</title>
    @include('admin.partials.styles')
</head>

<body class="boxed-size bg-white">
    @include('admin.partials.preloader')

    <div class="container">
        <div class="main-content d-flex flex-column p-0">
            <div class="m-auto m-1230">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="{{ asset('assets-admin/images/login.jpg') }}" class="rounded-3" alt="login">
                    </div>
                    <div class="col-lg-6">
                        <div class="mw-480 ms-lg-auto">
                            <h3 class="fs-28 mb-2">Welcome back!</h3>
                            <p class="fw-medium fs-16 mb-4">Enter your details to access admin panel</p>

                            @if ($errors->any())
                                <div class="alert alert-danger py-2">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li><small>{{ $error }}</small></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ url('/admin/login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Email Address</label>
                                    <input type="email" name="email" class="form-control h-55"
                                        placeholder="admin@cunnet.com" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="label text-secondary">Password</label>
                                    <input type="password" name="password" class="form-control h-55"
                                        placeholder="Type password" required>
                                </div>
                                <div class="form-group mb-4">
                                    <button type="submit" class="btn btn-primary fw-medium py-2 px-3 w-100">
                                        <div class="d-flex align-items-center justify-content-center py-1">
                                            <i class="material-symbols-outlined text-white fs-20 me-2">login</i>
                                            <span>Login</span>
                                        </div>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.scripts')
</body>

</html>
