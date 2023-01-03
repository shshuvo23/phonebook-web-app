@extends('user.master')

@section('body')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Contact List</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Bookmark</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->number}}</td>
                                <td>{{$contact->bookmark == 1 ? 'Bookmarked' : ''}}</td>
                                <td>
                                    <img src="{{asset($contact->image)}}" alt="" height="100" width="100"/>
                                </td>
                                <td>
                                    <a href="{{route('user.contact-edit', ['id' => $contact->id])}}" class="btn btn-outline-primary">
                                        <i class="fa fa-edit">edit</i>
                                    </a>
                                    <a href="{{route('user.contact-bookmark', ['id' => $contact->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-bookmark">mark</i>
                                    </a>
                                    <a href="" class="btn btn-outline-success">
                                        <i class="fa fa-trash">Delete</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

@endsection
