
<div class="col-auto col-md-3 col-xl-3 px-sm-0 px-0 ">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white ">
      <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
        <li class="nav-item">
          <div class="card">
            <div class="card-body">
               <a href="/dashboard" class="nav-link align-middle px-0">
            <span class="ms-1 d-none d-sm-inline text-custom">Dashboard</span>
          </a>
            </div>
          </div>
        </li>
        <li>

          <div class="card">
            <div class="card-body">
               <a href="/products" class="nav-link align-middle px-0">
            <span class="ms-1 d-none d-sm-inline text-custom">Kelola Data Produk</span>
          </a>
            </div>
          </div>
         
        </li>
      </ul>
      <hr/>
      <div class="dropdown pb-4">
        <form action="/logout" method="POST">
          @csrf
          <div class="tombol">
          <button type="submit">
            <span class="d-none d-sm-inline mx-1">Logout</span>
          </button>
        </div>
        </form>
          
        </a>
      </div>
    </div>
  </div>