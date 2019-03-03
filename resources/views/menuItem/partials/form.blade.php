@csrf
<br>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name"
               placeholder="Name" value="{{old('name') ?? $menuItem->name}}" required autofocus>
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->get('name')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Description</label>
    <div class="col-md-4">
        <textarea type="text" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" id="description"
                  name="description"
                  placeholder="Description" required>{{old('description') ?? $menuItem->description}}</textarea>
        @if($errors->has('description'))
            <div class="invalid-feedback">
                {{$errors->get('description')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Price</label>
    <div class="col-md-4">
        <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" id="price" name="price"
               placeholder="price" value="{{old('size') ?? $menuItem->price}}" required autofocus>
        @if($errors->has('price'))
            <div class="invalid-feedback">
                {{$errors->get('price')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Menu item type</label>
    <div class="col-md-4">
        <select type="text" class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}" id="type" name="type">
            <option style="background-color: grey">pizza</option>
            <option style="background-color: grey">drinks</option>
            <option style="background-color: grey">burgers</option>
            <option style="background-color: grey">pasta</option>
        </select>
        @if($errors->has('type'))
            <div class="invalid-feedback">
                {{$errors->get('type')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file {{$errors->has('image') ? 'is-invalid' : ''}}" id="image"
           name="image">
    @if($errors->has('image'))
        <div class="invalid-feedback">
            {{$errors->get('image')[0]}}
        </div>
    @endif
</div>
