@include('users.partials.form')
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Role</label>
    <div class="col-md-4">
        <select type="text" class="form-control {{$errors->has('role') ? 'is-invalid' : ''}}" id="role" name="role">
            <option>buyer</option>
            <option>manager</option>
            <option>courier</option>
        </select>
        @if($errors->has('role'))
            <div class="invalid-feedback">
                {{$errors->get('role')[0]}}
            </div>
        @endif
    </div>
</div>