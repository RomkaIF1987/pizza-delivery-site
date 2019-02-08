@csrf
<br>
<br>
<p class="margin"><h2>Personal data</h2></p>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name"
               placeholder="Name" value="{{old('name') ?? $user->name}}" required autofocus>
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->get('name')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-md-4">
        <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="Email" name="email"
               placeholder="Email" value="{{old('email') ?? $user->email}}" required>
        @if($errors->has('email'))
            <div class="invalid-feedback">
                {{$errors->get('email')[0]}}
            </div>
        @endif
    </div>
</div>
@guest
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-md-4">
            <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="password"
                   name="password" placeholder="Password">
            @if($errors->has('password'))
                <div class="invalid-feedback">
                    {{$errors->get('password')[0]}}
                </div>
            @endif
        </div>
    </div>
@endguest
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Phone</label>
    <div class="col-md-4">
        <input type="text" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" id="phone" name="phone"
               placeholder="Phone" value="{{old('phone') ?? $user->phone}}" required>
        @if($errors->has('phone'))
            <div class="invalid-feedback">
                {{$errors->get('phone')[0]}}
            </div>
        @endif
    </div>
</div>
<p><h3>Address</h3></p>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">City</label>
    <div class="col-md-4">
        <input type="text" class="form-control {{$errors->has('city') ? 'is-invalid' : ''}}" id="city" name="city"
               placeholder="City" value="{{old('city') ?? $user->city}}">
        @if($errors->has('city'))
            <div class="invalid-feedback">
                {{$errors->get('city')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Street</label>
    <div class="col-md-4">
        <input type="text" class="form-control {{$errors->has('street') ? 'is-invalid' : ''}}" id="street" name="street"
               placeholder="Street" value="{{old('street') ?? $user->street}}">
        @if($errors->has('street'))
            <div class="invalid-feedback">
                {{$errors->get('street')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">House</label>
    <div class="col-md-4">
        <input type="text" class="form-control {{$errors->has('house') ? 'is-invalid' : ''}}" id="house" name="house"
               placeholder="House" value="{{old('house') ?? $user->house}}">
        @if($errors->has('street'))
            <div class="invalid-feedback">
                {{$errors->get('street')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Room</label>
    <div class="col-md-4">
        <input type="number" class="form-control {{$errors->has('room') ? 'is-invalid' : ''}}" id="room" name="room"
               placeholder="Room" value="{{old('room') ?? $user->room}}">
        @if($errors->has('room'))
            <div class="invalid-feedback">
                {{$errors->get('room')[0]}}
            </div>
        @endif
    </div>
</div>
