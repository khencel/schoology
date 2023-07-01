<!-- Modal -->
{{-- <form method="POST" action="{{ url('auth/login-user') }}"> --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false" >
    <div class="modal-dialog modal-dialog-centered">
        
        @csrf
            <div class="modal-content default-bg-modal" style="background: #ffffffad !important">
                <div class="modal-header" style="border-bottom:none !important">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <div class="header-1 text-center">Sign In</div>

                    <div class="card-body">
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text icon-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                        <input id="email" placeholder="Email Address" aria-describedby="basic-addon1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="text-danger" role="alert">
                                        <strong id="errorMessageEmail"></strong>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text icon-text" id="basic-addon2"><i class="fa-solid fa-key"></i></span>
                                        <input id="password" placeholder="Password" aria-describedby="basic-addon2" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="text-danger" role="alert">
                                        <strong id="errorMessagePass"></strong>
                                    </span>
                                </div>
                            </div>

                            <div class="text-center">
                                <span class="text-danger" role="alert">
                                    <strong id="errorMessageCred"></strong>
                                </span>
                            </div>
    
                            {{-- <div class="row mb-3 justify-content-center">
                                <div class="col-md-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                
                            </div> --}}

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-10 text-end">
                                    {{-- <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button> --}}
    
                                    @if (Route::has('password.request'))
                                        <a class="font-text" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
    
                            
                        
                    </div>
                </div>
                
                <div class="modal-footer" style="border-top:none !important">
                <button type="button" class="danger-button" data-bs-dismiss="modal">Close</button>
                <button type="button" class="success-button" onclick="login()">Sign In</button>
                </div>
            </div>
        
    </div>
</div>

<script src="{{ asset('js/User/Auth.js') }}"></script>
{{-- </form> --}}