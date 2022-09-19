<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./external/all.min.css">
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel = "icon"  href = "./images/logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>PRALINECO</title>
</head>
<body>
    <div class="Admin_panal">
        <div class="container">
            <div class="row">
                <form id="Form_admin" method='POST' enctype='multipart/form-data'>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text_custom">User Name</label>
                        <input require  type="text" class="form-control" name="admin_name" id="admin_name" placeholder="User Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text_custom">User Password</label>
                        <input require type="text" class="form-control" name="admin_pass" id="admin_pass" placeholder="Password">
                    </div>
                    <div class="col-auto">
                        <input type="submit" id="admin_sub" value="Open" name="admin_sub" class="btn btn-primary mb-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="setting" class="d-flex justify-content-center align-items-center">
        <div class="div_side"></div>
        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="bi bi-gear"></i>
        </a>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasLabel">Setting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <form action="operation.php" id="added"  method='POST' enctype='multipart/form-data'>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text_custom">Upload Image</label>
                <input type="file" required class="form-control" name="img_upload" id="upload_file">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text_custom">Weight</label>
                <input type="number" required class="form-control" name="Weight" id="new_weight">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text_custom">name</label>
                <input type="text" required class="form-control" name="name" id="new_name">
            </div>
            <div class="d-flex flex-row mb-3">
                <div class="d-flex flex-column me-4">
                    <div class="form-check">
                        <input class="form-check-input" value="creams" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            creams
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="category_2" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            category_2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="category_3" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            category_3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="category_4" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            category_4
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <div class="form-check">
                        <input class="form-check-input" value="category_5" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            category_5
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="category_6" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            category_6
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="souses" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            souses
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="category_8" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            category_8
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <input  type="submit" id="send" name="submit" class="btn btn-primary mb-3">
            </div>
          </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
        <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
      <script>
        let name_admin=document.getElementById('admin_name');
        let password_admin=document.getElementById('admin_pass');
        document.getElementById('Form_admin').onsubmit=(e)=>{
            e.preventDefault();
        }
        document.getElementById('admin_sub').onclick=()=>{
            if(name_admin.value=="Ahmad Chaar" && password_admin.value=="Hala&1440"){
                document.getElementById('setting').style.opacity="1";
                // position: 'center',
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'log in succesfully',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
            else{
                name_admin.value="";
                password_admin.value="";
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'User name or Password is wrong',
                })
            }
        }
      </script>
</body>
</html>