<div class="content">
    <style>
        .content {
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .sidebar {
            height: 80vh;
        }

        @media screen and (max-height: 700px) {
            .sidebar {
            height: 80vh !important;
        }
        }

    </style>
    <div class="container-fluid" style="background: #FFFFFF; height: 80vh;">
        <div class="row ">
            <div id="main">
                <div class="col-md-12" style="margin: 0; padding:0; background:black "><button class="openbtn"
                        onclick="openNav()">☰ DASHBOARD</button></div>
                <x-sidebar />
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);color: rgb(15, 1, 1);font-size:24px;">
                        Contact Message
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr style="background:#009688;color: white;">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Comment</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->comment}}</td>
                                        <td>{{$contact->created_at}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$contacts->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
