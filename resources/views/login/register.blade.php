@extends('login.master')

@section('title',"Registrasi")
    
@section('content') 

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                             <a class="text-center" href=""> <h4>IVORmart</h4></a>
                             
                                <form action="{{ route('login.register.store') }}" class="mt-5 mb-5 login-input" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Nick Name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Full Name" name="nama_lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control"  placeholder="Tanggal Lahir" name="tanggal_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="{{ route('login.login') }}" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

@endsection





