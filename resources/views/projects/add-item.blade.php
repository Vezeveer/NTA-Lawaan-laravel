//<!-- Add Entry Prompt Modal -->
                echo "
                <div class="modal fade" id="{$projectsTrimedNames[$i]}myModal" tabindex="-1" aria-labelledby="newAipEntry" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="newAipEntry">Add Entry</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="includes1/insert.php?year={$activeYear}">
                                        <input type="text" class="form-control" name="project" value="{$projects[$i]}" readonly>
                                        <hr>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">AIP</span>
                                            </div>
                                            <input type="text" class="form-control input_aipRefCode" name="aipRefCode" placeholder="AIP Reference Code" aria-label="aipRefCode" aria-describedby="basic-addon1" maxlength="50" required>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-info-circle"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="activityDesc" placeholder="Activity Description" aria-label="actDesc" aria-describedby="basic-addon1" maxlength="50" required>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-university"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="impOffice" placeholder="Implementing Office" aria-label="actDesc" aria-describedby="basic-addon1" maxlength="50" required>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">start</span>
                                            </div>
                                            <input type="date" class="form-control" name="startDate" aria-label="startDate" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">end</span>
                                            </div>
                                            <input type="date" class="form-control" name="endDate" aria-label="endDate" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-gem"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="expectedOutput" placeholder="Expected Output" aria-label="expectedOutput" aria-describedby="basic-addon1" maxlength="50" required>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">₱</span>
                                            </div>
                                            <input type="number" name="fundingServices" class="form-control" placeholder="Funding Services" aria-label="Amount (to the nearest peso)" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">₱</span>
                                            </div>
                                            <input type="number" name="personalServices" class="form-control" placeholder="Personal Services" aria-label="Amount (to the nearest peso)" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">₱</span>
                                            </div>
                                            <input type="number" name="maint" class="form-control" placeholder="Maintenance" aria-label="Amount (to the nearest peso)" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">₱</span>
                                            </div>
                                            <input type="number" name="capitalOutlay" class="form-control" placeholder="Capital Outlay" aria-label="Amount (to the nearest peso)" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">₱</span>
                                            </div>
                                            <input type="number" name="total" class="form-control" placeholder="Total" aria-label="Amount (to the nearest peso)" maxlength="10" oninput="this.value=this.value.slice(0,this.maxLength)" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                ";