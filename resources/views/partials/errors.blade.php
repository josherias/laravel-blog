@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <span class="">{{ $error }}</span>
    @endforeach
</div>
@endif