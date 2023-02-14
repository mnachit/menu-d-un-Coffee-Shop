<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin | Dashboard</title>
    <!-- ================== BEGIN core-css ================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/default/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="{{asset('style.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- ================== END core-css ================== -->
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading ms-2 py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=""></i>Coffee NACHIT
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold" href="#modal-task_profil" data-bs-toggle="modal"><i class="fa fa-plus me-2"></i>Add Coffee</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                    data-bs-toggle="modal" data-bs-target="#modal-profile"><i class="fas fa-user me-2"></i>Profile</a>
                    <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa fa-home me-2" aria-hidden="true"></i>Home</a>
                <a class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-danger" href="{{ route('logout') }}"><i class="fas fa-power-off me-2 text-danger"></i>Logout</a>
            </div>
        </div>
        <!-- Page Content -->
        <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                id="controlPanel" onclick="wrapside()"></i>
            <h2 class="fs-2 m-0">Dashboard</h2>
        </div>
    </nav>
            <!-- Welcome user Message -->
    <h1 class="display-5 mb-3 ms-4">Admin</h1>
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="p-1 bg-white d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">3</h3>
                        <p class="fs-5">Total Coffee</p>
                    </div>
                    <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    <!-- <i class="bi bi-cup-hot-fill">tghj</i> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="p-1 bg-white d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">7</h3>
                        <p class="fs-5">Total Users</p>
                    </div>
                    <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="p-1 bg-white d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">5</h3>
                        <p class="fs-5">Total Quantity</p>
                    </div>
                    <i class="fas fa-cubes fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <h3 class="fs-4 mb-3">Available Books</h3>
            <form method="POST">
                <div class="input-group d-flex">
                    <div class="form-outline">
                        <input type="search" name="searchBook" placeholder="Search" class="form-control" />
                    </div>
                    <button type="submit" name="search" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
            <div class="col table-responsive mt-2">
                <table class="table table-bordered bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col"># Id</th>
                            <th scope="col">picture</th>
                            <th scope="col">Title</th>
                            <th scope="col">Prix</th>
                            <th scope="col">description</th>
                            <th scope="col">Start_date</th>
                            <th scope="col">end_date</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                            <tbody id="book-table">
                                @foreach ($data as $info)
                                    <tr>
                                        <td>1</td>
                                        <td><img src="{{asset("images/$info->pic_image")}}" width= '60' height='60' class="rounded-circle img img-responsive" alt=""></td>
                                        <td>{{$info->title}}</td>
                                        <td>{{$info->prix}}</td>
                                        <td>{{$info->description}}</td>
                                        <td>{{$info->Start_date}}</td>
                                        <td>{{$info->end_date}}</td>
                                        <td>
                                            <button class="rounded updateBtn" data-bs-toggle="modal" data-bs-target="#modal-edit" 
                                            
                                            style="background-color: rgb(140, 147, 169);">
                                              <i id="{{$info->id}}" class="bi bi-pencil-square" style="color:rgb(255, 255, 255));"></i>
                                            </button>
                                          </td>                                          
                                        <td><button class="rounded deleteBtn" onclick="aficherid({{$info->id}})" data-bs-toggle="modal" data-bs-target="#delet" style="background-color: rgb(255, 0, 0);"><i class="bi bi-pencil-square" style="color: rgb(0, 0, 0);" id="{{$info->id}}" name="id_delet"></i></button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- TASK MODAL -->
        <div class="modal fade" id="modal-task_profil">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="index1" method="POST" id="form-task44" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Add sCofee</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <div class="modal-body">
                                <!-- This Input Allows Storing Task Index  -->
                                <!-- Product image-->
                                <div class="d-flex justify-content-center">
                                    <img class="card-img-top rounded-circle w-50 h-50" src="" alt="..."/>
                                    <input type="file" name="images">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nome coffee</label>
                                    <input type="text" name="title" class="form-control" id="task-title_profil1" value='' required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Prix</label>
                                    <input type="number" name="prix" class="form-control" id="task-title_profil5" value='' required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="task-title_profil4">description</label>
                                    <textarea name="description" class="form-control" id="task-title_profil4" value='' style="height: 3cm;" required>
                                    </textarea>Edit
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Start date</label>
                                    <input type="datetime-local" name="dated" class="form-control" id="task-title_profil7" value='' required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">end date</label>
                                    <input type="datetime-local" name="datef" class="form-control" id="task-title_profil8" value='' required/>
                                </div>
						</div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="save_" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
        <!-- FIN ADD MODAL -->

        <!-- EDIT MODAL -->
        <div class="modal fade" id="modal-edit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{url('update-coffee')}}" method="POST" id="form-task44" name="form_artists" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title">Edit</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <input type="" id="id1" name="id_edit">
                        <input type="file" name="image_pro">
                        <div class="modal-body">
                                <!-- This Input Allows Storing Task Index  -->
                                <!-- Product image-->
                                <div class="d-flex justify-content-center">
                                    <img class="card-img-top rounded-circle w-50 h-50" src="" alt="..." id="img"/>
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nome coffee</label>
                                    <input type="text" name="title1" class="form-control" id="title1" value='' required/>
                                </div>
                                task-idd4                  <label class="form-label">Prix</label>
                                    <input type="number" name="prix1" class="form-control" id="prix1" value='' required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="task-title_profil4">description</label>
                                    <textarea name="description1" class="form-control" id="description1" value='' style="height: 3cm;" required>
                                    </textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Start date</label>
                                    <input type="datetime-local" name="dated1" class="form-control" id="dated1" value='' required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">end date</label>
                                    <input type="datetime-local" name="datef1" class="form-control" id="datef1" value='' required/>
                                </div>
						</div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" name="save_edit" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
        <!-- FIN EDIT MODAL -->

        {{-- deb delet --}}
        <div class="modal fade mt-5" id="delet">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('delete')}}" method="get" id="form-task">
                        <!-- Modal -->
                        <div class="modal-header">
                            <input type="hidden" id="task-idd4" name="idd4">
                            <h5 class="modal-title text-danger">Delet Music</h5>
                            <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                        </div>
                        <input type="hidden" id="task-id1" name="idd1">
                        <div style="margin-left:4cm; margin-top:0.5cm; margin-bottom:0.5cm">
                            <a href="#" class="btn btn-white" data-bs-dismiss="modal">Caargncel</a>
                            <button type="submit" name="saveedit" class="btn btn-primary task-action-btn" id="task-save-btn">confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- fin delet --}}
</body>
<!-- ================== BEGIN core-js ================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="{{asset('scripts.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- ================== END core-js ================== -->

<script>
    
    const updateBtns = document.querySelectorAll('.updateBtn')
    updateBtns.forEach(btn => btn.addEventListener('click', (e) => name(e.target.id) ))
    
    function name(id) {
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "/update-modal/" + id, true);
        xhr.send();

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200)
            {
                let data = JSON.parse(xhr.responseText);
                document.getElementById('id1').value = data.id;
                document.getElementById('img').src = 'images/'+data.pic_image;
                document.getElementById('title1').value = data.title;
                document.getElementById('prix1').value = data.prix;
                document.getElementById('description1').value = data.description;
                document.getElementById('dated1').value = data.Start_date;
                document.getElementById('datef1').value = data.end_date;
            }
        };
    };

    function aficherid(id)
    {
        document.getElementById('task-idd4').value= id;
    }

</script>

</html>