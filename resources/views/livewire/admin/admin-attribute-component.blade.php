<div class="content">
    <style>
          .content {
            padding-top: 40px;
            padding-bottom: 40px;
        }
      nav svg{
         height: 20px;
       }
      nav .hidden{
         display: block !important;
       }
       .sclist{
           list-style: none;
       }
       .sclist li{
           line-height: 33px;
           border-bottom: 1px solid #ccc;
       }
       .slink i{
           font-size: 16px;
           margin-left: 12px;
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
    <div class="container-fluid" style="background: #FFFFFF;height: 80vh;">
        <div class="row ">
            <div id="main">
                <div class="col-md-12" style="margin: 0; padding:0; background:black "><button class="openbtn"
                        onclick="openNav()">☰ DASHBOARD</button></div>
                <x-sidebar />
            <div class="panel panel-default">
                <div class="panel-heading"  style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                    <div class="row">
                        <div class="col-md-6" style="padding-top: 10px ;">
                            All Attributes
                        </div>
                        <div class="col-md-6" style="padding-top: 10px ;">
                            <a href="{{route('admin.add_attribute')}}" class="btn btn-success pull-right">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                <div class="table-responsive">
                    @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr style="background:#009688;color: white;">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pattributes as $pattribute)
                                <tr>
                                    <td>{{$pattribute->id}}</td>
                                    <td>{{$pattribute->name}}</td>
                                    <td>{{$pattribute->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.edit_attribute',['attribute_id'=>$pattribute->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                        <a href="#" onclick="confirm('Are you sure,You want to delete this attribute ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteAttribute({{$pattribute->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$pattributes->links()}}
                </div>
    </div>
            </div>
        </div>
    </div>
    </div>
</div>
