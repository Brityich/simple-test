@extends('layouts.admin')

@section('admin-tools')
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <form method="POST" action="{{ route('saveFooterSettings') }}">
            @csrf
            <h4>Footer information</h4>
            <div class="form-group">
                <label for="contact_email">E-mail:</label>
                <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ $data['contact_email'] }}">
            </div>
            <div class="form-group">
                <label for="contact_name">Name to be contacted:</label>
                <input type="text" class="form-control" name="contact_name" id="contact_name" value="{{ $data['contact_name'] }}">
            </div>
            <div class="form-group">
                <label for="contact_phone">Phone:</label>
                <input type="tel" class="form-control" id="contact_phone" name="contact_phone" value="{{ $data['contact_phone'] }}">
            </div>
            <div class="form-group">
                <label for="contact_address">Address:</label>
                <input type="text" class="form-control" id="contact_address" name="contact_address" value="{{ $data['contact_address'] }}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
