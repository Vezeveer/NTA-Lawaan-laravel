<!-- Update Project Name Modal -->
                <div class="modal fade" id="{$projectsTrimedNames[$i]}UpdateProjectNameModal" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="newAipEntry">Update Project Name</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="includes1/update_project_name.php?year={$activeYear}&project={$projects[$i]}">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <input type="text" name="project" class="form-control input_proj" placeholder="Name" aria-label="Project Name" aria-describedby="basic-addon1" pattern="\S(.*\S)?" title="Make sure there are no spaces in front of text and at the end." maxlength="50" required>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- <div id="message" class="form-group row">
                                        <h5>Password must contain the following:</h3>
                                            <p id="letter" class="invalid1">A <b>lowercase</b> letter</p>
                                            <p id="capital" class="invalid1">A <b>capital (uppercase)</b> letter</p>
                                            <p id="number" class="invalid1">A <b>number</b></p>
                                            <p id="length" class="invalid1">Minimum <b>8 characters</b></p>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>