<x-app-layout>
    <div class="container p-5 my-5 border">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Success! </strong>New User Added Successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session('updatestatus'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Success! </strong>User Data Update Successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session('destroystatus'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Success! </strong>User Data has been Deleted!.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                         <h4>
                            Event List
                        <a href="{{ route('dashboard.user.create') }}" class="btn btn-outline-dark float-right"><i class="bi bi-plus"></i>New User</a>
                        </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no =1;
                                    @endphp
                                    @foreach ($users as $item => $user)
                                    <tr>
                                    <td>{{$no++}}</td>   
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a href="{{url('dashboard/user/edit/'.$user->id)}}" class="btn btn-outline-warning float-center">Edit</a> 
                                    </td>
                                    <td>
                                        <form action="{{url('dashboard/user/destroy/'.$user->id)}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method">
                                            <button class="btn btn-outline-danger" type="submit">Delete</button>
                                        </form>
                                    </td> 
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
