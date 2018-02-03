@if(count($errors) > 0)
    <div class="row">
        <div class="alert col-md-4 col-md-offset-4 alert-danger">
            {{-- See video 9 if faced any problems for styling related issues in this block--}}
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="alert col-md-4 col-md-offset-4 alert-success">
            {{ Session::get('message') }}
        </div>
    </div>
@endif