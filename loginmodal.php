<!-- Registration pagilum login modal und... changes avideyum kodukanam -->

<div class="modal fade show" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-login mt-5" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-primary text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class=" bx bx-sm bx-x-circle" aria-hidden="true"></i></button>
                        <h4 class="card-title">LOG IN</h4> 
                    </div>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <form autocomplete="off" action="php/phplogin.php" method="POST">
                      <div>
                        <i class="bx bx-phone"></i>
                        <input type="tel" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" maxlength="10" required="">
                      </div>
                      <div>
                        <i class="bx bx-lock"></i>
                        <input type="password" name="password" placeholder="password" required="" minlength="8">
                      </div>
                      <br>
                        <input type="submit" value="Submit"> 
                      </form>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>

