<!DOCTYPE html>
<html lang="en">
<head>
	<title>PROFIL</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #959494;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/005/005/788/small/user-icon-in-trendy-flat-style-isolated-on-grey-background-user-symbol-for-your-web-site-design-logo-app-ui-illustration-eps10-free-vector.jpg" 
            alt="Avatar Logo" style="width:40px; margin-left: 50px;" class="rounded-pill"> 
          </a>

          <ul class="navbar-nav">

            <li class="nav-item" style="padding-right: 30px;">
               <a class="nav-link" href="#" style="color: black;"><b>Home</b></a>
             </li>
             <li class="nav-item" style="padding-right: 30px;">
                <a class="nav-link" href="#" style="color: black;"><b>Proyek</b></a>
              </li>
              <li class="nav-item" style="padding-right: 30px;">
                <a class="nav-link" href="#" style="color: black;"><b>Pengaduan</b></a>
              </li>
              <li class="nav-item" style="padding-right: 30px;">
                <a class="nav-link" href="#" style="color: black;"><b>Laporan</b></a>
              </li>
             <li class="nav-item" style="padding-right: 40px; padding-top: 5px;">
               <button href="" class="btn-sm text-black" style="background-color: #d2d2d2; width: 85px; border-color: #d2d2d2;"><b>Masuk</b></button>
             </li>
         </ul>
        </div>
    </nav>
    <div class="container" style="padding-top: 70px;">
        <h2>PROFIL</h2>
        <div class="row" style="padding-top: 70px;">
            <div class="col-4">
                <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                <div class="row" style="margin-left: 100px; margin-top: 40px;">
                    <div class="col-2">
                        <img src="Image/pencil.png" width="30px" href=""></a>
                    </div>
                    <div class="col">
                        <img src="Image/delete.png" width="30px" href="">
                    </div>
                </div>
            </div>
            
       
            <div class="col-8">
                <div class="row gx-3 mb-3">
                    <!-- Form Group (first name)-->
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputFirstName"><b>First name</b></label>
                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                    </div>
                    <!-- Form Group (last name)-->
                    <div class="col-md-6">
                        <label class="small mb-1" for="inputLastName"><b>Last name</b></label>
                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                    </div>
                    <!-- Form (email)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="inputEmailAddress"><b>Email address</b></label>
                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                    </div>
                    <!-- Form (password)-->
                    <div class="mb-3">
						<label for="password" class="form-label"><b>Password</b></label>
						<input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" >
					</div>
                    <!-- Form (konfrm password)-->
					<div class="mb-3">
						<label for="konfirmasi_password" class="form-label "><b>Konfirmasi Password</b></label>
						<input type="password" class="form-control " id="konfirmasi_password" placeholder="Konfirmasi Password" name="konfirmasi_password" >
					</div>
                    <div class="d-grid  d-md-block">
                        <button class="btn btn-primary" type="button" style="width: 425px;">Simpan Perubahan</button>
                        <button class="btn btn-danger" type="button" style="width: 425px;">Cancel</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
 
 </div>
</body>
</html>