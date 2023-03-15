<!doctype html>
<html lang="en">
  <head>
  	<title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/assets/css/register.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(/assets/images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Register</h3>
								</div>
							</div>

				<form action="/proses_register" method="POST" class="signin-form"> 
                @csrf
                <div class="kiri">
                <div class="container text-center">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group mt-3">
                                  <label class="form-control-placeholder" for="name">Username</label>
                                  <input type="text" class="form-control" name="name" id="name" required>
                                  @error('name')
                                      <small class="text-danger">{{ $masseage }}</small>
                                  @enderror
                                </div>
                             </div>
                                <div class="col-6">
                                     <div class="form-group mt-3">
                                  <label class="form-control-placeholder" for="email">Email</label>
                                  <input type="text" class="form-control" name="email" id="email" required>
                                  
                                  @error('email')
                                  <small class="text-danger">{{ $masseage }}</small>
                              @enderror
                                </div>
                              </div>    
                            </div>
                        </div>
                      </div>
                               
                        <div class="kanan">
                        <div class="container text-center">
                          <div class="row">
                            <div class="col-6">
                              <div class="form-group ">  
                                  <label class="form-control-placeholder" for="password">Password</label>
                                  <input id="password" type="password" name="password" id="password" class="form-control" required>
                                
                                  @error('password')
                                  <small class="text-danger">{{ $masseage }}</small>
                                   @enderror
                                </div>
                               </div>
                                 <div class="col-6">
                                      <div class="form-group"> 
                                   <label class="form-control-placeholder" for="password">Konfirmasi</label>
                                   <input id="password-field" type="password" name="password_confirmation" id="password" class="form-control" required>
                                  @error('name')
                                  <small class="text-danger">{{ $masseage }}</small>
                                   @enderror
                                </div>
                              </div>
                           </div>
                        </div> 
                       
                                <div class="tombol">
                                  <button type="submit" class="button">Register</button>
                                  <p class="text-center">I am already member! <a data-toggle="tab" href="/login">Login</a></p>
                                </div>
                              </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/popper.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	</body>
</html>

