<div class="page-title">
    <h2>Create CV</h2>
</div>
<div class="section-content">
    <div class="col-xl-12">
        <div class="block-title">
            <h3>Too lazy to create your <span>Curriculum Vitae?</span></h3>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="controls two-columns">
                <div class="fields clearfix">
                    <div class="left-column">
                        <div class="form-group form-group-with-icon">
                            <input id="name" type="text" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror" required autocomplete="name"
                                autofocus>
                            <label>Full Name</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-group-with-icon">
                            <input id="email" type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                required autocomplete="email">
                            <label>Email Address</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-group-with-icon">
                            <input id="title" type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                                required>
                            <label>Title</label>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-group-with-icon">
                            <input id="phone" type="number" name="phone"
                                class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                                required>
                            <label>Phone Number</label>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-group-with-icon">
                            <input id="password" type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" required
                                autocomplete="new-password">
                            <label>Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-group-with-icon">
                            <input id="password-confirm" type="password" name="password_confirmation"
                                class="form-control" required autocomplete="new-password">
                            <label>Password Confirm</label>
                            @error('password_confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label style="color: #04b4e0; font-size: 13px;">
                            Date Of Birth
                        </label>
                        <div class="form-group form-group-with-icon">
                            <input id="dateofbirth" type="date" name="dateofbirth"
                                class="form-control @error('dateofbirth') is-invalid @enderror"
                                value="{{ old('dateofbirth') }}" required placeholder="Date of Birth">
                            @error('dateofbirth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="form-group form-group-with-icon">
                            <textarea id="address" name="address" rows="7"
                                class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}"
                                required></textarea>
                            <label>Address</label>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group form-group-with-icon">
                            <textarea id="about" name="about" rows="7"
                                class="form-control @error('about') is-invalid @enderror" value="{{ old('about') }}"
                                required></textarea>
                            <label>About Me</label>
                            @error('about')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="button btn-send">Generate CV</button>
            </div>
        </form>
    </div>
</div>
