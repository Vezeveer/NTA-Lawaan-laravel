
<!--Add Docs PROMPT.modal -->
<div class="modal fade" id="AddDocs">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Documents</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <form name="user_create" enctype="multipart/form-data" method="post" <?php echo "action=\"/includes1/upload.php?year={$activeYear}\"" ?>>
                    <div class="form-group">
                        <input id="file-input" class="form-control-file" type="file" name="file" accept=".png,.gif,.jpg" required />
                    </div>
                    <fieldset class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Type</label>
                            </div>
                            <select name="docType" class="custom-select" id="inputGroupSelect01" required>
                                <option selected value="tl" selected>Transmittal Letter</option>
                                <option value="robdp">Resolution of Barangay Development Plan</option>
                                <option value="rataip">Resolution Approving the Annual Investment Plan</option>
                            </select>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="m-auto">
                            <button id="file-submit" type="submit" value="Upload" class="btn btn-secondary">Submit</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div id="file-result" class="m-auto">
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
