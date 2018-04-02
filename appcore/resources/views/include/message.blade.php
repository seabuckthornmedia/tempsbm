{{-- @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif --}}

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
@endif    

@if(session('important'))
    <div class="alert alert-danger alert-dismissible">
        {{session('important')}}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
@endif


