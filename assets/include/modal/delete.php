
<div class="modal fade" id="delete<?=$each_stores['id']?>" tabindex="-1" role="dialog" aria-labelledby="signinLabel">

    <div id="login-modal" class="modal-dialog" role="document">

        <div class="modal-content con">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                <img class="img img-responsive center"src="" alt="E-Stores" />

                <h4 class="modal-title text-center" id="signinLabel"><b>CONFIRM ACTION</b></h4>

            </div>

            <div class="modal-body">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-offset-2 col-md-8">

                            <h5 class="modal-delete-h5 text-center">Are you sure you want to delete <?=$each_stores['name']?>?</h5>

                            <div class="col-md-12">
                                <div class="col-md-5">
                                    <h6><a id="delete-action" href="../delete.php?id=<?=$each_stores['id']?>&token=<?=$_SESSION['delete_token'];?>"><button class="delete-action btn btn-info btn-block" type="submit" name="delete-action-yes"><i class="fa fa-check" aria-hidden="true"></i> Yes</button></a></h6>
                                </div>
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-5">
                                    <h6><a id="delete-action" href=""><button class="delete-action btn btn-info btn-block" type="submit" name="back"><i class="fa fa-times" aria-hidden="true"></i> No</button></a></h6>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>



        </div>

    </div>

</div>
