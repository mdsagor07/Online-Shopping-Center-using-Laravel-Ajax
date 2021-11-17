<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Customer Details</title>

         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         <!-- Styles -->
         <style>
             
             /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
         </style>
 
         <style>
             body {
                 font-family: 'Nunito', sans-serif;
             }
           
            .buttons-excel {
                    background-color: blue;
                    color: white;
                    }


             
         </style>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 
 
         <!-- button jquery-->
         <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
         <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
 
         
       <!-- end button-->
 
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        
 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
 
    </head>
    <body class="antialiased">
       

        <div container>

            
                        <!-- nav manu-->

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
              
  
            <div card>
                <div class="card-body ">
                
                    <button type="button"  style="float:right;" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Customer
                        
                    </button>
                    <button> <a class="btn btn-primary " href="{{route('products.index')}}"> Products  page</a></button> 
                   
                      
                <table class="table table-bordered table-striped" id="users-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                            
                            
                        </tr>
                    </thead>


               
                </table>

            </div>



            <!-- add Modal -->
<!-- Button trigger modal -->
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div>
            <form action="{{route('store.user')}}"method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Customer Name:</label>
                    <input type="text" class="form-control" name="name" id="email">
                  </div>
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control"  name="email" id="email">
                </div>

                
                <div class="form-group">
                  <label for="pwd">Phone:</label>
                  <input type="text" class="form-control" name="phone" id="pwd">
                </div>

                
               
                <button type="submit" class="btn btn-success mt-2"  style="float: right;">Add Customer</button>

              </form>
          </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        </div>
      </div>
    </div>
  </div>


  <!-- edit Modal -->
 
  <!-- Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <span id="up_form_result"></span>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
          <button type="button" class="close" id="closeModel" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form id="update_form" method="POST" autocomplete="off">
                @csrf
            <div class="modal-body">

                    <div class="form-group">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" id="name_id" name="name" placeholder="Enter country name">

                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" id="email_id" name="email" placeholder="Enter capital city">

                    </div>
                    <div class="form-group">
                        <label for="">Phone:</label>
                        <input type="text" class="form-control" id="phone_id" name="phone" placeholder="Enter capital city">

                    </div>
                    <input type="hidden" id="hidden_id" name="hidden_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="close_button" data-dismiss="modal">Close</button>
                <button type="submit" id="submit_id" class="btn btn-primary" id="action_button" >Update </button>
            </div>
            </form>
          
        </div>
      </div>
    </div>
  </div>






        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        
        <!-- export button-->

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      
        <!-- export button-->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

        <script type="text/javascript" >
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        // ajax: '{!! route('anyuser') !!}',

        ajax: '{!! route('users') !!}',

        dom: 'lpifBrt',
        buttons: [
                       'csv', 'excel', 'pdf', 'print'
                       

                  ],
        
        
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phone', name: 'phone' },
            { data: 'action', name: 'action', orderable: false, searchable: false} ,
       
            
        ]


    });
    //delete

    $('body').on('click', '.delete', function (e) {
     
    var user_id = $(this).data("id");
   confirm("Are you sure you want to delete this item?")
    
   if(user_id){
    $.ajax({
         type: "DELETE",
         url: "{{ url('/users/delete') }}"+'/'+user_id,
         success: function (data) {
             table.draw();
         },
         error: function (data) {
             console.log('Error:', data);
         }
     });
   }
    
 });
//edit modal 
        $(document).on('click','#editbtn',function (e) {
          e.preventDefault();

        var id=$(this).data('id');
        var target="{{url('/users/edit')}}/"+id;

        //
        $("#close_button").click(function(){
            $("#editModal").modal('hide');
        });
        $("#closeModel").click(function(){
            $("#editModal").modal('hide');
        });

        $.ajax({
                   url: target,
                   dataType: "json",
                   success: function (html) {
                    $('#name_id').val(html.data.name);
                       $('#email_id').val(html.data.email);
                       $('#phone_id').val(html.data.phone);
                       $('#hidden_id').val(html.data.id);
                       $('#editModal').modal('show');
                      

                   }
               })
       


                });
// Update

$('#update_form').on('submit',function(e){
               e.preventDefault();
               var form=this;
               
               $.ajax({
                   url: "{{url('/users/update')}}",
                   method:"POST",
                   data:new FormData(form),
                   processData:false,
                   dataType:'json',
                   contentType:false,
                   success: function (data) {

                       console.log(data)
            
                           $("#editModal").modal('hide');
                           $('#users-table').DataTable().ajax.reload();
             
                   }


               })

           });


});





        </script>

    </body>
</html>