<script>
  function formSignIn(){
      $.ajax({
          url: '<?= base_url('formSignIn'); ?>', // URL of the route
          type: 'GET',
          success: function(msg) {
              // Update the HTML with the view returned by the server
              $('#modal1').html(msg);
          },
          error: function(xhr) {
              console.error('Error loading view:', xhr);
          }
      });
  }
</script>

<div class="container text-center">
  <div class="card mt-4">
    <div class="card-header">
      Silahkan Login
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
              <form action="<?php echo base_url('login/proses_login'); ?>" method="post">		
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Username">
                </div>
                <div class="form-group mb-2">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="form-group mb-2 mt-1">
                  <!-- <button type="submit" class="btn btn-primary">Sign Up</button> -->
                  <!-- <a href="" >Sign Up</a> -->
                  <a class=""  data-bs-toggle="modal" onclick="formSignIn()" data-bs-target="#exampleModal">Sign Up</a>
                </div>
              </form>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="modal1">
        
    </div>
</div>