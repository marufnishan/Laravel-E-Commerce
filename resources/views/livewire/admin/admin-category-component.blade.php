<div class="content">
    <style>
          .content {
            padding-top: 40px;
            padding-bottom: 40px;
        }
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }

        .sclist {
            list-style: none;
        }

        .sclist li {
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }

        .slink i {
            font-size: 16px;
            margin-left: 12px;
        }

    </style>
    <div class="container-fluid">
        <div class="row">
            {{-- Sidebar Start --}}
            <div class="col-md-2" style="background: #009688;">

                <x-sidebar />
            </div>

            <div class="col-md-10 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: linear-gradient(to right, #74ebd5, #acb6e5);">
                        <div class="row" >
                            <div class="col-md-6">
                                All Categories
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add New</a>
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
                                        <th>Category Name</th>
                                        <th>Slug</th>
                                        <th>Sub Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            <ul class="sclist">
                                                @foreach($category->subCategories as $scategory)
                                                <li>
                                                    <i class="fa fa-caret-right"></i>{{$scategory->name}} <a
                                                        href="{{route('admin.editcategory',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}"
                                                        class="slink"><i class="fa fa-edit"></i></a>
                                                    <a href="#"
                                                        onclick="confirm('Are you sure,You want to delete this subcategory ?') || event.stopImmediatePropagation()"
                                                        wire:click.prevent="deleteSubcategory({{$scategory->id}})"
                                                        class="slink"><i class="fa fa-times text-danger"></i></a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <a
                                                href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}"><i
                                                    class="fa fa-edit fa-2x"></i></a>
                                            <a href="#"
                                                onclick="confirm('Are you sure,You want to delete this category ?') || event.stopImmediatePropagation()"
                                                wire:click.prevent="deleteCategory({{$category->id}})"
                                                style="margin-left:10px;"><i
                                                    class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$categories->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
