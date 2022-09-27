<div>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">REGISTER</div>
                    <div class="card-body">
                        <form wire:submit.prevent="registerUser">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="contoh: Muhammad Rizky" wire:model.defer="name">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" wire:model.defer="email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- tambahan 1 --}}
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomer HP</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="0812xxxxxxxx" wire:model.defer="no_hp">
                                @error('no_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- tambahan 2 --}}
                            <div class="mb-3">
                                <label for="tggl_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tggl_lahir') is-invalid @enderror" id="tggl_lahir" wire:model.defer="tggl_lahir">
                                @error('tggl_lahir')
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
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Ualngi kata sandi</label>
                                <input type="password" class="form-control" id="password_confirmation" wire:model.defer="password_confirmation">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-danger">Daftar</button>
                            </div>
                            <a href="{{ route('login') }}">Sudah registrasi?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

