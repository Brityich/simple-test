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
            <h3>Add a post</h3>
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
            <form method="POST" action="{{ route('addPost') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select class="form-control" name="category" id="category">
                        @foreach($category as $item)
                            <option>{{ $item->name }}</option>
                        @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        
        <div id="see_all" class="tabcontent">
                <!-- Example DataTables Card-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($data as $datum)
                            <tr>
                                <td>{{ $creator->where('id', $datum->id_author)->first()->name }}</td>
                                <td>{{ $category->where('id', $datum->id_category)->first()->name }}</td>
                                <td>{{ $datum->title }}</td>
                                <td>{{ $datum->description }}</td>
                                <td>{{ $datum->created_at }}</td>
                                <td>{{ $datum->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin-editpost', ['id' => $datum->id]) }}" class="fa fa-fw fa-edit"></a>
                                    <a href="{{ route('admin-deletepost', ['id' => $datum->id]) }}" class="fa fa-fw fa-times"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
