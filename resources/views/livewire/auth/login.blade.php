<div>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">LOGIN</div>
                    <div class="card-body">
                        <form wire:submit.prevent="loginUser">
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" wire:model.defer="email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata sandi</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model.defer="password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember" wire:model.defer="remember">
                                  Remember me
                                </label>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-danger">Masuk</button>
                            </div>
                            <a href="{{ route('password.request') }}" class="d-block">Lupa password?</a>
                            <a href="{{ route('register') }}">Belum registrasi?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

