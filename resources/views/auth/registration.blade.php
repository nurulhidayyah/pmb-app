@extends('layouts.main')

@section('container')
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="/registration">
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-user @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Full name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback pl-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email"
                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Email Address" value="{{ old('name') }}">
                                @error('email')
                                    <div class="invalid-feedback pl-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="number"
                                    class="form-control form-control-user @error('nik') is-invalid @enderror" id="nik"
                                    name="nik" placeholder="NIK" value="{{ old('name') }}">
                                @error('nik')
                                    <div class="invalid-feedback pl-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-user  @error('alamat') is-invalid @enderror"
                                    id="alamat" name="alamat" placeholder="Full Address" value="{{ old('name') }}">
                                @error('alamat')
                                    <div class="invalid-feedback pl-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <fieldset class="form-group pl-3">
                                <div class="row">
                                    <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input  @error('jk') is-invalid @enderror"
                                                type="radio" name="jk" id="laki-laki" value="Laki-laki" {{ old('jk') == 'Lak' }}>
                                            <label class="form-check-label" for="laki-laki">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input  @error('alamat') is-invalid @enderror"
                                                type="radio" name="jk" id="perempuan" value="Perempuan">
                                            <label class="form-check-label" for="perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    @error('jk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-user @error('religion') is-invalid @enderror"
                                    id="religion" name="religion" placeholder="Religion" value="">
                                @error('religion')
                                    <div class="invalid-feedback pl-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text"
                                        class="form-control form-control-user @error('tp_lahir') is-invalid @enderror"
                                        d="tp_lahir" name="tp_lahir" placeholder="Place of birth" value="">
                                    @error('tp_lahir')
                                        <div class="invalid-feedback pl-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="date"
                                        class="form-control form-control-user @error('tg_lahir') is-invalid @enderror"
                                        id="tg_lahir" name="tg_lahir" placeholder="Date of birth" value="">
                                    @error('tg_lahir')
                                        <div class="invalid-feedback pl-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="number"
                                    class="form-control form-control-user @error('no_hp') is-invalid @enderror"
                                    id="no_hp" name="no_hp" placeholder="No Handphone" value="">
                                @error('no_hp')
                                    <div class="invalid-feedback pl-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <select name="th_lulus" id="th_lulus"
                                        class="form-control @error('th_lulus') is-invalid @enderror">
                                        <option value="">Graduation year</option>
                                        <?php
                                        $tahun_lalu = '2015';
                                        $mulai = date('Y');
                                        for ($i = $tahun_lalu; $i <= $mulai; $i++) {
                                            echo '<option class="form-control-user" value="' . $i . '">' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                    @error('th_lulus')
                                        <div class="invalid-feedback pl-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password"
                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                        id="password1" name="password" placeholder="Password">
                                    @error('password')
                                        <div class="invalid-feedback pl-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="password"
                                        class="form-control form-control-user @error('password_confirmation') is-invalid @enderror"
                                        id="password_confirmation" name="password_confirmation"
                                        placeholder="Repeat Password">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback pl-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="/forgotpassword">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
