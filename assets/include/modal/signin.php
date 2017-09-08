<!-- Sign in modal for job seeker -->
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="signinLabel">

    <div id="signin-modal" class="modal-dialog" role="document">

        <div class="modal-content con">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                <img class="img img-responsive center"src="" alt="E-Stores" />

                <h4 class="modal-title text-center" id="signinLabel"><b>Log in</b></h4>

            </div>

            <div class="modal-body">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-offset-2 col-md-8">

                            <p style="font-size:12px;" id="signin-error" class="text-center"></p>
                            <p style="font-size:14px;" class="text-center"></p>

                            <form id="signin-form" class="" action="script.php" method="post" novalidate="" name="siginform">

                                <div class="form-group">
                                    <label for=""><b>Email</b></label>
                                    <input class="form-control" type="text" name="email" id="email" ng-model="user.email" ng-required="true">
                                    <p style="font-size:12px;color:red;" class="text-center" ng-show="siginform.email.$invalid && siginform.email.$touched">Please enter your email to sign in</p>
                                </div>

                                <div class="form-group">
                                  <label for=""><b>Password</b></label>
                                  <input class="form-control" type="password" name="password" id="password" ng-model="user.password" ng-required="true">
                                  <p style="font-size:12px;color:red;" class="text-center" ng-show="siginform.password.$invalid && siginform.password.$touched">Password field cannot be blank</p>
                                </div>

                                <button class="btn btn-primary btn-block" id="sign_in_button" type="submit" name="signin" ng-model="user.password">Log in</button>

                        </div>

                    </div>

                </div>

            </div>

            <div id="seeker-modal" class="modal-footer text-center">

                 <div class="container-container text-center">
                     <a class="text-center" id="forgot-password" href="recovery.php?recover=username">Forgot Username?</a> <span id="or">or</span> <a class="text-center" id="forgot-password" href="recovery.php?recover=password">Forgot Password?</a>
                 </div>

            </div>

              </form>

        </div>

    </div>

</div>
