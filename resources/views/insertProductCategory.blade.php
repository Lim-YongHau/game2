@extends('layouts.app')
@section('content')
<div style="text-align:center"> 
    <form class="subform"  method="post" action="{{ route('addProductCategory.store') }} " enctype="multipart/form-data">
    {{ csrf_field() }} <!-- very important if you didn't insert CSRF, it not allow submit the data-->
    <p>
        <label for="ID" class="label">Product Category ID</label>
        <input type="text" name="ID" id="ID">
    </p>
    <p>
        <label for="name" class="label">Product Category Name</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <input type="submit" name="insert" value="Insert">
    </p>
    </form>
</div>
@endsection