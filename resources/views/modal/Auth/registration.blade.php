<!-- Modal -->
<form method="POST" action="{{ route('auth.login') }}">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false" >
    <div class="modal-dialog modal-dialog-centered">
        @csrf
            <div class="modal-content default-bg-modal">
                <div class="modal-header" style="border-bottom:none !important">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <div class="header-2 text-center">Sign In</div>

                    <div class="card-body">
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text icon-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                        <input id="email" placeholder="Email Address" aria-describedby="basic-addon1" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text icon-text" id="basic-addon2"><i class="fa-solid fa-key"></i></span>
                                        <input id="password" placeholder="Password" aria-describedby="basic-addon2" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
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
                <button type="submit" class="success-button">Sign In</button>
                </div>
            </div>
        
    </div>
</div>
</form>