<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product Page</title>

<!--css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">


</head>
<body>
 
    <div class="Container">
     
        <!-- NAVBAR-->
        <nav class="navbar navbar-expand-lg py-2 navbar-dark  bg-dark shadow-lg p-3 mb-2">
            <div class="container">
            <a href="#" class="navbar-brand">
                <!-- Logo Image -->
                <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->
                <span class="text-uppercase font-weight-bold">Company</span>
            </a>
        
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item "><a href="#" class="nav-link">Home </a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </div>
            </div>
        </nav>
        

 <!-- end nav menu-->

           
            <div>
              <a class="btn btn-primary " href="{{route('users')}}"> Customer </a>
               
                <table class="table">
                    <thead class="table table-striped">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Id</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>description</td>
                        <td>
                            <a class="btn btn-primary "  href="#"> Edit </a>
                           <a class="btn btn-danger " href="#"  onclick="return confirm('Are you sure you want to delete this item')"> Delete </a>
                        </td>
                      </tr>
                      
                      
                    </tbody>
                  </table>
                  
            </div>


            <!--Add Product modal-->
            <!-- Button trigger modal -->

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  

        
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  
</body>
</html>