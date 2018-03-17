@extends('layouts.admin')

@section('admin-tools')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Tab links -->
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'add_new')" id="defaultOpen">Add new</button>
            <button class="tablinks" onclick="openCity(event, 'see_all')">See list</button>
        </div>
    
        <!-- Tab content -->
        <div id="add_new" class="tabcontent">
            <h3>Add new category</h3>
            <!--content-->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('addCategory') }}">
                @csrf
                <div class="form-group">
                    <label for="category-name">Name of new category:</label>
                    <input type="text" class="form-control" id="category-name" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        
        <div id="see_all" class="tabcontent">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name of a category</th>
                    <th>Number of posts</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                      <th>Name of a category</th>
                      <th>Number of posts</th>
                      <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                    @foreach($data as $datum)
                        <tr>
                            <td>{{ $datum->name }}</td>
                            <td>{{ $datum->posts()->count() }}</td>
                            <td>
                                <a href="{{ route('admin-editcategory', ['id' => $datum->id]) }}" class="fa fa-fw fa-edit"></a>
                                <a onclick="event.preventDefault();
                                                     document.getElementById('delcategory-form').submit();"
                                   class="fa fa-fw fa-times"></a>
                                <form id="delcategory-form" action="{{ route('admin-deletecategory') }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="id" id="id" value="{{ $datum->id }}">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>

        </div>
    </div>
@endsection
